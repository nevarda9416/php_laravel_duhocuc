<?php

namespace App\Http\Controllers\Admin;

use App\Core\Business\QuestionBusiness;
use App\Core\Business\UploadFileBusiness;
use App\Core\Connection\ElasticsearchServer;
use App\Core\Controllers\Controller;
use App\Core\Enums\CommonEnum;
use App\Core\Enums\ElasticsearchEnum;
use App\Core\Enums\ImageSizeEnum;
use App\Core\Repositories\Elasticsearch\QuestionElasticsearch;
use App\Core\Models\Category;
use App\Core\Models\Question;
use App\Core\Models\Answer;
use App\Core\Models\Tags;
use App\Helpers\Activity;
use Illuminate\Http\Request;
use App\Core\Repositories\Redis\QuestionRedis;
use App\Core\Repositories\Redis\AnswerRedis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Core\Utilities\GenerateUtility;
use Ixudra\Curl\Facades\Curl;
use App\Http\Controllers\PostsController;

class QuestionController extends Controller
{
    public $limit;

    /**
     * QuestionController constructor.
     */
    public function __construct()
    {
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page__title = 'Danh sách câu hỏi';
        $page__route = 'frequently-questions';
        $questions = Question::orderBy('id', 'DESC')->paginate($this->limit);
        $categories = Category::where('has_questions', 1)->get();

        $arr_val = array(
            "que"=>"",
            "cat"=>"0",
            "dis"=>"",
            "aut"=>"",
            "sta"=>""
        );
        $diseases = array();
        $cate_diseases = array();

        return view('admin.questions.index', compact('page__title', 'page__route', 'questions', 'categories', 'diseases', 'cate_diseases','arr_val'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page__title = 'Thêm mới câu hỏi';
        $page__list__title = 'Quay về danh sách câu hỏi';
        $page__route = 'frequently-questions';
        $categories = Category::where([['has_questions', 1], ['is_actived', 1]])->get();
        return view('admin.questions.create', compact('page__title', 'page__list__title', 'page__route', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // set check the data input
            $this->validate($request, [
                'question' => 'required',
                'author_name' => 'required'
            ]);

            // get the data from the form
            $q = $request->get('question');
            $slug = sanitize($q);
            $thumbnail_url = $request->thumbnail_url;
            $original_name = '';
            if ($thumbnail_url) {
                $original_name = $thumbnail_url->getClientOriginalName();
                //Upload File to external server
                UploadFileBusiness::uploadFileToFolder($thumbnail_url);
            }
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');
            $question = new Question([
                'question' => $q,
                'slug' => $slug,
                'category_id' => $request->get('category_id'),
                'user_id' => $request->get('user_id'),
                'author_name' => $request->get('author_name'),
                'status' => $request->get('status'),
                'thumbnail_url' => ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : '', // Chức năng edit lại ảnh đại diện cần xem lại cơ chế thay đổi
                'published_at' => $request->get('published_at') != null ? strtotime($request->get('published_at')) : null,
                'tags' => $request->get('tags') != '[]' ? $request->get('tags') : null, // 1) Cơ chế tag: Lưu ở field tags ở bảng questions nhằm phục vụ cho việc get nhanh dữ liệu các tag từ 1 câu hỏi
                'created_by' => $request->get('user_id'),
                'is_published' => $request->get('status') == 'publish' ? 1 : 0,
                'published_by' => $request->get('status') == 'publish' ? $request->get('user_id') : NULL,
            ]);

            // check the data
            if (Question::where('slug', '=', $slug)->exists()) {
                return back()->with('error', 'Câu hỏi "' . $request->get('question') . '" đã tồn tại');
            } else {
                if ($question->save()) {
                    // 2) Cơ chế tag: Lưu thêm ở bảng question_has_tags nhằm phục vụ cho việc get all câu hỏi từ 1 tag
                    if ($request->get('tags') != null) {
                        //
                    }
                    Activity::addLog('Tạo mới câu hỏi', 'Tài khoản ' . get_user_email() . ' tạo mới câu hỏi ' . $request->get('question') . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                    return redirect('cms/frequently-questions/edit/' . $question->id)->with('message', 'Tạo mới câu hỏi "' . $request->get('question') . '" thành công');
                }
            }
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($question_id, $action__A = 'add', $answer_id = 0)
    {
        $action__Q = 'show';
        $page__title = 'Xem câu hỏi';
        $page__list__title = 'Quay về danh sách câu hỏi';
        $page__route = 'frequently-questions';
        $question = Question::find($question_id);
        $answer = Answer::find($answer_id);
        $answers = Answer::where('question_id', $question_id)->orderBy('updated_at', 'DESC')->get();
        $categoryParent = Question::find($question->category_id);
        $categories = Category::where('has_questions', 1)->get();

        $diseases = DB::table('diseases')
            ->join('category_has_diseases', 'diseases.id', '=', 'category_has_diseases.disease_id')
            ->join('categories', 'categories.id', '=', 'category_has_diseases.category_id')
            ->select('diseases.*')
            ->where('categories.id', '=', $question->category_id)
            ->get();

        $cate_diseases = DB::table('diseases')
            ->join('question_has_diseases', 'diseases.id', '=', 'question_has_diseases.disease_id')
            ->where('question_has_diseases.question_id', '=', $question_id)
            ->pluck('question_has_diseases.disease_id')
            ->all();

        $tagQuestion = DB::table('tags')
            ->join('question_has_tags', 'tags.id', '=', 'question_has_tags.tag_id')
            ->where('question_has_tags.question_id', '=', $question_id)
            ->pluck('tags.name')
            ->all();

        $urlProduct = config()->get('constants.API_FC_PRODUCT') . config()->get('constants.PRODUCT_GET_META_DATA');
        $response = Curl::to($urlProduct)->get();
        $response = json_decode($response,  true);
        $products = $response['data']['Product'];
        $questionProducts = array();
        $questionHasProducts = GenerateUtility::objectToArray(DB::table('questions_has_products')
            ->select('product_id')
            ->where('question_id', $question_id)
            ->get());
        foreach ($questionHasProducts as $qp) {
            array_push($questionProducts, $qp['product_id']);
        }
        return view('admin.questions.form', compact('action__Q', 'action__A', 'page__title', 'page__list__title', 'page__route', 'question', 'answer', 'answers', 'categoryParent', 'categories', 'diseases', 'cate_diseases', 'tagQuestion', 'products', 'questionProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($question_id, $action__A = 'add', $answer_id = 0)
    {
        $action__Q = 'edit';
        $page__title = 'Sửa câu hỏi';
        $page__list__title = 'Quay về danh sách câu hỏi';
        $page__route = 'frequently-questions';

        $question = Question::find($question_id);

        $answer = Answer::find($answer_id);

        $answers = Answer::where('question_id', $question_id)->orderBy('updated_at', 'DESC')->get();

        $categoryParent = Question::find($question->category_id);

        $categories = Category::where('has_questions', 1)->get();

        return view('admin.questions.form', compact('action__Q', 'action__A', 'page__title', 'page__list__title', 'page__route', 'question', 'answer', 'answers', 'categoryParent', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'question' => 'required',
                'author_name' => 'required'
            ]);
            $question = Question::find($id);

            if ($request->get('category_id') != $question->category_id) {
                // TH câu hỏi chuyển cate, xóa id câu hỏi ở list cate cũ trên redis, tạo id câu hỏi ở list cate mới trên redis
                QuestionRedis::deleteKey($question->id, $question->category_id);
            }
            $thumbnail_url = $request->thumbnail_url;
            if ($thumbnail_url) {
                //Upload File to external server
                $result = UploadFileBusiness::compress($thumbnail_url, ImageSizeEnum::WIDTH_SIZE_THUMBNAIL, ImageSizeEnum::HEIGHT_SIZE_THUMBNAIL, config()->get('constants.FOLDER_TMP_UPLOAD') . $thumbnail_url->getClientOriginalName(), 1, true);
            }
            $q = $request->get('question');
            $slug = sanitize($q);
            $question->question = $q;
            $question->slug = $slug;
            $question->category_id = $request->get('category_id');
            $question->user_id = $request->get('user_id');
            $question->author_name = $request->get('author_name');
            $question->status = $request->get('status');
            $question->thumbnail_url = ($thumbnail_url) ? $result : $question->thumbnail_url;
            $question->published_at = $request->get('published_at') != null ? strtotime($request->get('published_at')) : null;
            $question->tags = $request->get('tags') != '[]' ? $request->get('tags') : $question->tags; // 1) Cơ chế tag: Lưu ở field tags ở bảng questions nhằm phục vụ cho việc get nhanh dữ liệu các tag từ 1 câu hỏi
            $question->updated_at = date('Y-m-d H:i:s');
            $question->updated_by = $request->get('user_id');
            $question->is_published = $request->get('status') == 'publish' ? 1 : 0;
            $question->published_by = $request->get('status') == 'publish' ? $request->get('user_id') : NULL;
            $question->save();
            // 2) Cơ chế tag: Lưu thêm ở bảng question_has_tags nhằm phục vụ cho việc get all câu hỏi từ 1 tag
            if ($request->get('tags') != '[]') {
                // Xử lý tags cơ chế cũ
                /*DB::table('question_has_tags')->where([
                    ['question_id', '=', $id]
                ])->delete();
                $list_tags = json_decode($request->get('tags'), true);
                foreach ($list_tags as $tag) {
                    DB::table('question_has_tags')->insert([
                        'question_id' => $id,
                        'tag_id' => $tag['tagID'],
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]);
                }*/
                // Xử lý tags cơ chế mới tương tự như trong PostsController

            }
            // End xử lý index thông tin (elasticsearch)
            Activity::addLog('Sửa câu hỏi', 'Tài khoản ' . get_user_email() . ' sửa câu hỏi ' . $request->get('question') . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            return back()->with('message', 'Sửa câu hỏi "' . $request->get('question') . '" thành công');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $str_id)
    {
        try {
            $number_items_del = 0;
            $str_deleted = "";
            if($str_id != ''){
                $arr_id = explode("-",$str_id);
                if(count($arr_id) > 0){
                    for ($i = 0 ; $i < count($arr_id) ; $i++){
                        if(trim($arr_id[$i]) != "") {
                            $question = Question::find($arr_id[$i]);
                            Activity::addLog('Xóa câu hỏi', 'Tài khoản ' . get_user_email() . ' xóa câu hỏi ' . $question->question . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                            $answer = Answer::where('question_id', $arr_id[$i])->first();
                            // Xóa câu hỏi đó trong redis
                            QuestionRedis::deleteKey($question->id, $question->category_id);
                            // Xóa câu trả lời của câu hỏi đó trong redis
                            if (isset($answer)) {
                                AnswerRedis::deleteKey($answer->id, $question->id);
                                $answer->delete(); // Xóa vĩnh viễn
                            }
                            $question->delete(); // Xóa vĩnh viễn
                           /* if($i == 0){
                                $str_deleted .= $question->question;
                            }else{
                                $str_deleted .= ", ".$question->question;
                            }*/
                           // Xóa câu hỏi thì cũng xóa luôn các tag của câu hỏi đó
                            DB::table('question_has_tags')->where([
                                ['question_id', '=', $arr_id[$i]]
                            ])->delete();
                            // Xóa câu hỏi thì cũng xóa luôn các chủ đề (disease) của câu hỏi đó
                            DB::table('question_has_diseases')->where([
                                ['question_id', '=', $arr_id[$i]]
                            ])->delete();
                            $number_items_del++;
                        }
                    }
                }
            }
            return back()->with('message', 'Có '.$number_items_del.' câu hỏi đã được xóa');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyHighlight($id)
    {
        try {
            $question = Question::find($id);
            Activity::addLog('Xóa câu hỏi nổi bật', 'Tài khoản ' . get_user_email() . ' xóa câu hỏi nổi bật ' . $question->question . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            $question->delete();
            $answer = Answer::where('question_id', $id)->first();
            $answer->delete();
            // Xóa câu hỏi thì cũng xóa luôn các tag của câu hỏi đó
            DB::table('question_has_tags')->where([
                ['question_id', '=', $id]
            ])->delete();
            // Xóa câu hỏi thì cũng xóa luôn các chủ đề (disease) của câu hỏi đó
            DB::table('question_has_diseases')->where([
                ['question_id', '=', $id]
            ])->delete();
            // Xóa câu hỏi đó trong redis
            QuestionRedis::deleteKey($question->id, $question->category_id);
            // Xóa câu trả lời của câu hỏi đó trong redis
            AnswerRedis::deleteKey($answer->id, $question->id);
            return back()->with('message', 'Câu hỏi ' . $question->question . ' đã được xóa');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Create by: tiemtt
     */
    public function category_change(Request $request)
    {
        $category_id = trim($request->get('category_id'));
        $diseases = DB::table('diseases')
            ->join('category_has_diseases', 'diseases.id', '=', 'category_has_diseases.disease_id')
            ->join('categories', 'categories.id', '=', 'category_has_diseases.category_id')
            ->select('diseases.*')
            ->where('categories.id', '=', $category_id)
            ->get();

        $html_done = $this->list_cate_diseases($diseases);
        return response()->json([
            'data' => $html_done
        ]);
    }

    /**
     * Create by: tiemtt
     * @param $diseases
     * @return string
     */
    public function list_cate_diseases($diseases){
        $massage = "";
        $seq = 0;
        if($diseases != null && count($diseases) > 0) {
            $massage .= "<div class='form-group'>
                                <label class='control-label col-md-3 col-sm-3 col-xs-12'>Chủ đề (nhóm bệnh)</label>
                                <div class='col-md-9 col-sm-9 col-xs-12'><div class='row'>";
                                foreach ($diseases as &$val) {
                                    $seq++;
                                    if ($val->id != ""){
                                        $massage .= "<div class='col-md-3 col-sm-3 col-xs-12'><div class='checkbox'><label><input type='checkbox' name='diseases[]' value='".$val->id."' class='cbkdiseases' >&nbsp;".$val->name."</label></div></div>";
                                    }
                                }
                        $massage .="</div></div>
                         </div>";
        }
        return $massage;
    }

    /**
     * @param Request $request
     * @param $strurl
     */
    public function search_page(Request $request){
        $page__title = 'Danh sách câu hỏi';
        $page__route = 'frequently-questions';

        $que = trim($request->get('que'));
        $cat = trim($request->get('cat'));
        $dis = trim($request->get('dis'));
        $aut = trim($request->get('aut'));
        $sta = trim($request->get('sta'));
        $arr_val = array(
            "que"=>$que,
            "cat"=>$cat,
            "dis"=>$dis,
            "aut"=>$aut,
            "sta"=>$sta
        );

        $categories = Category::where('has_questions', 1)->get();

        $diseases = DB::table('diseases')
            ->join('category_has_diseases', 'diseases.id', '=', 'category_has_diseases.disease_id')
            ->join('categories', 'categories.id', '=', 'category_has_diseases.category_id')
            ->select('diseases.*')
            ->where('categories.id', '=', $arr_val["cat"])
            ->get();

        $cate_diseases = DB::table('diseases')
            ->join('question_has_diseases', 'diseases.id', '=', 'question_has_diseases.disease_id');
            if($arr_val["dis"] != "") {
                $arr_diseases = explode("-", $arr_val["dis"]);
                if (count($arr_diseases) > 0){
                    $cate_diseases = $cate_diseases->whereIn('question_has_diseases.disease_id',$arr_diseases);
                }
            }
            $cate_diseases = $cate_diseases->pluck('question_has_diseases.disease_id')->all();


        $questions = $this->get_data($arr_val);
        return view('admin.questions.index', compact('page__title', 'page__route', 'questions', 'categories', 'diseases', 'cate_diseases','arr_val'));
    }

    /**
     * Created by: tiemtt
     * @param Request $request
     */
    public function search(Request $request)
    {
        $html_done = "";
        $categories = Category::where('has_questions', 1)->get();

        $request_url =  $_SERVER['REQUEST_URI'];
        $arr_request_url = ($request_url != null && $request_url != "")?explode("frequently-questions", $request_url):null;
        $root_request_url = $arr_request_url != null?$arr_request_url[0]:"";

        $question = trim($request->get('question'));
        $category_id = trim($request->get('category_id'));
        $diseases = trim($request->get('diseases'));
        $author_name = trim($request->get('author_name'));
        $status = trim($request->get('status'));
        $arr_val = array(
            "que"=>$question,
            "cat"=>$category_id,
            "dis"=>$diseases,
            "aut"=>$author_name,
            "sta"=>$status
        );
        $data = $this->get_data($arr_val);
        $html_done = $this->get_html($root_request_url, $data, $categories, $arr_val);
        return response()->json([
            'data' => $html_done
        ]);
    }

    /**
     * Created by: tiemtt
     * @param $arr_val
     * @return string
     */
    public function get_data($arr_val){
        $data = DB::table('questions')
            ->leftJoin('question_has_diseases', 'questions.id', '=', 'question_has_diseases.question_id')
            ->select('questions.*')
            ->distinct('questions.id');
        if (trim($arr_val["que"]) != "") {
            $data = $data->where('questions.question', 'LIKE', '%' . $arr_val["que"] . '%');
        }
        if ($arr_val["cat"] != 0) {
            $data = $data->where('questions.category_id','=', $arr_val["cat"]);
        }
        if($arr_val["dis"] != "") {
            $arr_diseases = explode("-", $arr_val["dis"]);
            if (count($arr_diseases) > 0){
                $data = $data->whereIn('question_has_diseases.disease_id',$arr_diseases);
            }
        }
        if($arr_val["aut"] != "") {
            $data = $data->where('questions.author_name', 'LIKE', '%' . $arr_val["aut"] . '%');
        }
        if ($arr_val["sta"] != "") {
            $data = $data->where('questions.status','=', $arr_val["sta"]);
        }
        $data = $data->orderBy('questions.id', 'DESC')->paginate($this->limit);
        return $data;
    }

    /**
     * @param $root_request_url
     * @param $question
     * @param $arr_val
     * @return string
     */
    public function get_html($root_request_url, $data, $categories, $arr_val){
        $strurl ="";
        if(count($arr_val) > 0){
            $strurl = "?que=".$arr_val["que"]."&cat=".$arr_val["cat"]."&dis=".$arr_val["dis"]."&aut=".$arr_val["aut"]."&sta=".$arr_val["sta"];
        }
        $massage = "<table class='table'>
                        <thead>
                        <tr>    
                            <th style='padding-bottom: 2px;'>
                                <input type='checkbox' name='cbkquestionall' id='cbkquestionall' value=''>
                                <a class='btn btn-xs' id='a_cbkquestionall'>
                                    Xóa câu hỏi
                                </a>
                            </th>                       
                            <th>Tiêu đề câu hỏi</th>
                            <th>Trạng thái đăng</th>
                            <th>Người tạo</th>
                            <th>Danh mục câu hỏi</th>
                            <th>Ngày tạo</th>
                            <th>Thao tác</th>                           
                        </tr>
                        </thead>
                        <tbody>";
                        $i = 1;
                        foreach ($data as &$val) {
                            $massage .= "<tr>";
                                $massage .= "<td>";
                                    $massage .= "<input type='checkbox' name='cbkquestion".$i."' id='cbkquestion".$i."' value='".$val->id."'>";
                                    //$massage .= "<input type='hidden' name='h_q".$i."' id='h_q".$i."' value='".$txtkey."'>";
                                $massage .= "</td>";
                                $massage .= "<td>";
                                    $massage .= "<a href='".$root_request_url."frequently-questions/edit/".$val->id.$strurl."' id='a_question_name".$i."' class='btn btn-xs'>";
                                    $massage .= shorten_string($val->question, 20);
                                    $massage .= "</a>";
                                $massage .= "</td>";
                                $massage .= "<td>";
                                    if($val->status == 'pending'){
                                        $massage .= "<span class='label label-warning'>Chờ đăng</span>";
                                    }else{
                                        $massage .= "<span class='label label-success'>Đã đăng</span>";
                                    }
                                $massage .= "</td>";
                                $massage .= "<td>".$val->author_name."</td>";
                                $massage .= "<td>";
                                foreach($categories as $category){
                                    if ($category->id == $val->category_id){
                                        $massage .= $category->name;
                                    }
                                }
                                $massage .= "</td>";
                                $massage .= "<td>";
                                    $massage .= $val->created_at;
                                $massage .= "</td>";
                                $massage .= "<td>";
                                    $massage .= "<a href='".$root_request_url."frequently-questions/show/".$val->id.$strurl."' class='btn btn-xs'>";
                                    $massage .= "<i class='fa fa-eye'></i> Show";
                                    $massage .= "</a>";
                                    $massage .= "<a href='".$root_request_url."frequently-questions/edit/".$val->id.$strurl."' class='btn btn-xs'>";
                                    $massage .= "<i class='fa fa-edit'></i> Edit";
                                    $massage .= "</a>";
                                $massage .= "</td>";
                            $massage .= "</tr>";
                            $i++;
                        }
            $massage .= "</tbody></table>";
        $massage .= $data->appends($arr_val)->links();
        $massage .= "<input type='hidden' name='h_max_item_onpage' id='h_max_item_onpage' value='".$i."'>";
        return $massage;
    }
    /*************************************************************/
   public function add_tags(Request $request){
       $tags = DB::table('tags')->select('id as tagID', 'name as tagName')->get();
        return response()->json([
            'data' => $tags
        ]);
    }
    /*************************************************************/

    /**
     * @param string $category_id
     * @return mixed
     */
    public function highlight($category_id = '')
    {
        if ($category_id == '') {
            $questions = Question::where([
                ['status', '=', 'publish'],
                ['is_highlight', '!=', 1]
            ])->orderBy('id', 'DESC')->paginate($this->limit);
            $highlightQuestions = DB::table('highlights')
                ->join('questions', 'highlights.question_id', '=', 'questions.id')->where([
                    'questions.is_highlight' => 1
                ])->orderBy('order')->get();
        } else {
            $questions = Question::where([
                ['status', '=', 'publish'],
                ['category_id', '=', $category_id],
                ['is_highlight', '!=', 1]
            ])->orderBy('id', 'DESC')->paginate($this->limit);
            $highlightQuestions = DB::table('highlights')
                ->join('questions', 'highlights.question_id', '=', 'questions.id')->where([
                    'highlights.category_id' => $category_id,
                    'questions.is_highlight' => 1
                ])->orderBy('order')->get();
        }
        $categories = Category::whereIn('category_type', ['hoi-dap'])->get();
        return view('admin.questions.highlight', compact('questions', 'highlightQuestions', 'categories'));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function addHighlight(Request $request)
    {
        $questionId = $request->get('questionId');
        $categoryId = $request->get('categoryId');
        $highlight_post = DB::table('highlights')->where([
            ['question_id', '=', $questionId],
            ['category_id', '=', $categoryId]
        ]);
        if (!$highlight_post->exists()) {
            DB::table('highlights')->insert([
                'question_id' => $questionId,
                'category_id' => $categoryId,
                'order' => $questionId,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            Question::where('id', $questionId)->update([
                'is_highlight' => 1
            ]);
        }
        Activity::addLog('Thêm câu hỏi nổi bật', 'Tài khoản ' . get_user_email() . ' thêm câu hỏi nổi bật ID = ' . $questionId . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
        return json_encode(array('error' => 0, 'message' => 'Thao tác thành công bài viết: ' . $questionId . ' - danh mục: ' . $categoryId));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function removeHighlight(Request $request)
    {
        $questionId = $request->get('questionId');
        $categoryId = $request->get('categoryId');
        $highlight_post = DB::table('highlights')->where([
            ['question_id', '=', $questionId],
            ['category_id', '=', $categoryId]
        ]);
        if ($highlight_post->exists()) {
            $highlight_post->delete();
            Question::where('id', $questionId)->update([
                'is_highlight' => 0
            ]);
        }
        Activity::addLog('Xóa câu hỏi nổi bật', 'Tài khoản ' . get_user_email() . ' xóa câu hỏi nổi bật ID = ' . $questionId . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
        return json_encode(array('error' => 0, 'message' => 'Thao tác thành công'));
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function orderHighlight(Request $request)
    {
        $questionId = $request->get('questionId');
        $order = $request->get('order');
        DB::table('highlights')->where('question_id', $questionId
        )->update([
            'order' => $order
        ]);
        Activity::addLog('Sắp xếp câu hỏi nổi bật', 'Tài khoản ' . get_user_email() . ' sắp xếp câu hỏi nổi bật ID = ' . $questionId . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
        return json_encode(array('error' => 0, 'message' => 'Thao tác thành công'));
    }

    /**
     * Index all questions data
     */
    public function indexAllQuestionsToElasticsearch()
    {
        $client = ElasticsearchServer::getConnection();
        //$listQuestions = DB::table('questions')->select('id', 'question', 'slug', 'category_id', 'user_id', 'author_name', 'status', 'published_at', 'tags', 'disease_id')->get();
        $sql = "SELECT `questions`.`id`, `questions`.`question`, `questions`.`slug`, `questions`.`category_id`, `questions`.`user_id`, `questions`.`author_name`, `questions`.`status`, `questions`.`published_at`, `questions`.`tags`
            , GROUP_CONCAT(DISTINCT(`question_has_diseases`.`disease_id`)) as disease_id
            , GROUP_CONCAT(DISTINCT(`questions_has_products`.`product_id`)) as product_id
			FROM `questions`
			LEFT JOIN `question_has_diseases` ON `question_has_diseases`.`question_id` = `questions`.`id`
			LEFT JOIN `questions_has_products` ON `questions_has_products`.`question_id` = `questions`.`id`
			WHERE `questions`.`status` = 'publish'
			GROUP BY `questions`.`id`
			ORDER BY `questions`.`id` DESC
		";
        $listQuestions = DB::select($sql);
        if (!empty((array)$listQuestions)) {
            // Delete all before index all
            try {
                $client->indices()->delete(['index' => ElasticsearchEnum::GET_QUESTION_INDEX]);
            } catch (\Exception $exception) {
                Log::warning($exception->getMessage());
            }
            // Index all
            foreach ($listQuestions as $question) {
                // Chỉ những câu hỏi cho phép đăng mới cần index
                //if ($question->status == 'publish') {
                    $question = GenerateUtility::arrayToObject($question);
                    $list_diseases = [];
                    foreach (explode(',', $question->disease_id) as $disease_id) {
                        array_push($list_diseases, $disease_id);
                    }
                    $list_products = [];
                    foreach (explode(',', $question->product_id) as $product) {
                        array_push($list_products, $product);
                    }
                    $data = array(
                        'id' => $question->id,
                        'question' => $question->question,
                        'slug' => $question->slug,
                        'category_id' => $question->category_id,
                        'user_id' => $question->user_id,
                        'author_name' => $question->author_name,
                        'status' => $question->status,
                        'published_at' => $question->published_at,
                        'tags' => $question->tags,
                        'disease_id' => $list_diseases,
                        'product_id' => $list_products
                    );
                    $data['question_khongdau'] = GenerateUtility::format_text_khong_dau($data['question']);
                    $data['tags_khongdau'] = GenerateUtility::format_text_khong_dau($data['tags']);
                    // Xử lý index thông tin câu hỏi lên elasticsearch
                    QuestionElasticsearch::postIndex($question->id, $data);
                    // End xử lý index thông tin (elasticsearch)
                //}
            }
            echo 'Done index all questions to elasticsearch.';
        }
    }

    /**
     * Cache all questions to redis
     */
    public function cacheAllQuestionsToRedis()
    {
        $listCategories = array(CommonEnum::CATEGORY_ID_HOIDAPCHUYENGIA);
        QuestionBusiness::setListQuestionsByAllCategory($listCategories);
        QuestionBusiness::setQuestionDetail($listCategories);
        echo 'Done cache all questions to redis.';
    }
}
