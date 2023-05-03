<?php

namespace App\Http\Controllers;

use App\Core\Connection\ElasticsearchServer;
use App\Core\Controllers\Controller;
use App\Core\Enums\CommonEnum;
use App\Core\Enums\ElasticsearchEnum;
use App\Core\Models\Answer;
use App\Core\Models\Question;
use Illuminate\Http\Request;
use App\Core\Repositories\Redis\QuestionRedis;
use App\Core\Repositories\Redis\AnswerRedis;
use App\Core\Repositories\Elasticsearch\AnswerElasticsearch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Helpers\Activity;
use App\Core\Utilities\GenerateUtility;

class AnswerController extends Controller
{
    /**
     * AnswerController constructor.
     */
    public function __construct()
    {

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
            $this->validate($request, [
                'answer' => 'required',
                'author_name' => 'required'
            ]);
            $answer = $request->get('answer');
            $slug = sanitize($answer);
            $answer = new Answer([
                'answer' => $answer,
                'slug' => $slug,
                'question_id' => $request->get('question_id'),
                'user_id' => $request->get('user_id'),
                'author_name' => $request->get('author_name'),
                'status' => $request->get('status'),
                'published_at' => strtotime(str_replace('/' , '-', $request->get('published_at'))),
                'created_by' => $request->get('user_id'),
                'is_published' => $request->get('status') == 'publish' ? 1 : 0,
                'published_by' => $request->get('status') == 'publish' ? $request->get('user_id') : NULL
            ]);
            // Tạo slug và check trùng slug (answer)
            // Not ok thì redirect với thông báo answer đã tồn tại
            if (Answer::where('slug', '=', $slug)->exists()) {
                return back()->with('error', 'Câu trả lời đã tồn tại');
            } else {
                // Ok thì save mới
                $answer->save();

                // Lưu lại trạng thái câu hỏi là đã có câu trả lời
                DB::table('questions')->where('id', $request->get('question_id'))->update([
                    'has_answer' => 1
                ]);

                // Xử lý lưu lại thông tin câu trả lời đã sửa vào cache (redis) if status = publish
                $data = array(
                    'id' => $answer->id,
                    'answer' => $request->get('answer'),
                    'slug' => $slug,
                    'question_id' => $request->get('question_id'),
                    'author_name' => $request->get('author_name'),
                    'status' => $request->get('status'),
                    'published_at' => strtotime(str_replace('/' , '-', $request->get('published_at')))
                );
                if ($request->get('status') == 'publish') {
                    AnswerRedis::setKey($answer->id, $data);
                    AnswerRedis::setListAnswersByQuestionId($request->get('question_id'), $data);
                    $this->setQuestionHasAnswer($request->get('question_id'), 1);
                }
                // End xử lý lưu cache (redis)

                // Xử lý index thông tin câu trả lời đã sửa lên elasticsearch if status = publish && category_id = CommonEnum::CATEGORY_ID_HOIDAPCHUYENGIA
                $question = Question::find($request->get('question_id'));
                if ($request->get('status') == 'publish' && $question->category_id == CommonEnum::CATEGORY_ID_HOIDAPCHUYENGIA) {
                    $data['answer_khongdau'] = GenerateUtility::format_text_khong_dau($data['answer']);
                    AnswerElasticsearch::postIndex($answer->id, $data);
                }
                // End xử lý index thông tin (elasticsearch)
                Activity::addLog('Tạo mới câu trả lời', 'Tài khoản ' . get_user_email() . ' tạo mới câu trả lời ' . $request->get('answer') . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                return back()->with('message', 'Tạo mới câu trả lời thành công');
            }
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'answer' => 'required',
                'author_name' => 'required'
            ]);
            $answer = Answer::find($id);
            $a = $request->get('answer');
            $slug = sanitize($a);
            $answer->answer = $a;
            $answer->slug = $slug;
            $answer->question_id = $request->get('question_id');
            $answer->user_id = $request->get('user_id');
            $answer->author_name = $request->get('author_name');
            $answer->status = $request->get('status');
            $answer->published_at = strtotime(str_replace('/' , '-', $request->get('published_at')));
            $answer->updated_at = date('Y-m-d H:i:s');
            $answer->updated_by = $request->get('user_id');
            $answer->is_published = $request->get('status') == 'publish' ? 1 : 0;
            $answer->published_by = $request->get('status') == 'publish' ? $request->get('user_id') : NULL;
            $answer->save();

            // Đồng bộ lại trạng thái những câu hỏi đã có câu trả lời (do trước đó chưa define cột has_answer)
            DB::table('questions')->where('id', $request->get('question_id'))->update([
                'has_answer' => 1
            ]);

            // Xử lý lưu lại thông tin câu trả lời đã sửa vào cache (redis) if status = publish
            $data = array(
                'id' => $id,
                'answer' => $a,
                'slug' => $slug,
                'question_id' => $request->get('question_id'),
                'author_name' => $request->get('author_name'),
                'status' => $request->get('status'),
                'published_at' => strtotime(str_replace('/' , '-', $request->get('published_at')))
            );
            if ($request->get('status') == 'publish') {
                AnswerRedis::setKey($id, $data);
                AnswerRedis::setListAnswersByQuestionId($request->get('question_id'), $data);
                $this->setQuestionHasAnswer($request->get('question_id'), 1);
            } else { // Delete redis data if status != publish
                AnswerRedis::deleteKey($answer->id, $answer->question_id);
                // Cập nhật lại câu hỏi đó has_answer = 0
                $this->setQuestionHasAnswer($answer->question_id, 0);
            }
            // End xử lý lưu cache (redis)

            // Xử lý index thông tin câu trả lời đã sửa lên elasticsearch if status = publish && category_id = CommonEnum::CATEGORY_ID_HOIDAPCHUYENGIA
            $question = Question::find($request->get('question_id'));
            if ($request->get('status') == 'publish' && $question->category_id == CommonEnum::CATEGORY_ID_HOIDAPCHUYENGIA) {
                $data['answer_khongdau'] = GenerateUtility::format_text_khong_dau($data['answer']);
                AnswerElasticsearch::postIndex($id, $data);
            }
            // End xử lý index thông tin (elasticsearch)
            Activity::addLog('Sửa câu trả lời', 'Tài khoản ' . get_user_email() . ' sửa câu trả lời ' . $request->get('answer') . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            return back()->with('message', 'Sửa câu trả lời thành công');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $answer = Answer::find($id);
            Activity::addLog('Xóa câu trả lời', 'Tài khoản ' . get_user_email() . ' xóa câu trả lời ' . $answer->answer . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
            $answer->delete(); // Xóa vĩnh viễn
            // Xóa câu trả lời của câu hỏi đó trong redis
            AnswerRedis::deleteKey($answer->id, $answer->question_id);
            // Cập nhật lại câu hỏi đó has_answer = 0
            $this->setQuestionHasAnswer($answer->question_id, 0);
            return redirect('/frequently-questions/edit/' . $answer->question_id)->with('message', 'Xóa câu trả lời thành công');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Index all answers data
     */
    public function indexAllAnswersToElasticsearch()
    {
        $client = ElasticsearchServer::getConnection();
        $listAnswers = DB::table('answers')->select('id', 'answer', 'slug', 'question_id', 'author_name', 'status', 'published_at')->get();
        if (!empty((array)$listAnswers)) {
            // Delete all before index all
            try {
                $client->indices()->delete(['index' => ElasticsearchEnum::GET_ANSWER_INDEX]);
            } catch (\Exception $exception) {
                Log::warning($exception->getMessage());
            }
            // Index all
            foreach ($listAnswers as $answer) {
                // Chỉ những câu trả lời cho phép đăng mới cần index
                if ($answer->status == 'publish') {
                    $data = array(
                        'id' => $answer->id,
                        'answer' => $answer->answer,
                        'slug' => $answer->slug,
                        'question_id' => $answer->question_id,
                        'author_name' => $answer->author_name,
                        'status' => $answer->status,
                        'published_at' => $answer->published_at
                    );
                    $data['answer_khongdau'] = GenerateUtility::format_text_khong_dau($data['answer']);
                    // Xử lý index thông tin câu hỏi lên elasticsearch
                    AnswerElasticsearch::postIndex($answer->id, $data);
                    // End xử lý index thông tin (elasticsearch)
                }
            }
            echo 'Done index all answers to elasticsearch.';
        }
    }

    /**
     * @param $questionId
     */
    public static function setQuestionHasAnswer($questionId, $has_answer)
    {
        // Xử lý lưu lại thông tin câu hỏi đã sửa vào cache (redis): TH câu hỏi này đã có câu trả lời has_answer = 1
        $questionRedis = QuestionRedis::getKey($questionId);
        if (!empty($questionRedis)) {
            $questionRedis['has_answer'] = $has_answer;
            QuestionRedis::setKey($questionId, $questionRedis);
        }
        // End xử lý lưu cache (redis)
    }
}
