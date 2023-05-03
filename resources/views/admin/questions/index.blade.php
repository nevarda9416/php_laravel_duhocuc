<?php

$queryString = app('request')->getQueryString();
if ($queryString != '')
    $queryString = '?' . $queryString;
?>
@extends('layouts.default')
@section('content')
    <div id="faqs_search_and_list">
        <div class="page-title">
            <div class="title_left">
                <h3>{{ $page__title }}</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            @include('components.alert')
            <!-- Begin: search -->
                <div class="col-md-12 col-sm-12 col-xs-12" id="search_form">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-search"></i> Tìm Kiếm</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="display: none;">
                            <form class="form-horizontal form-label-left input_mask" action="{{ url('frequently-questions/store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung câu hỏi</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea type="text" class="form-control" name="question" id="question" rows="3" required="required">{{str_replace("-"," ",$arr_val["que"])}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh mục</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <select class="form-control" name="category_id" id="category_id">
                                            <option value="0" selected>Không</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{$category->id == $arr_val["cat"]?"selected":""}}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div id="lst_diseases">
                                    @if($diseases != null && count($diseases) > 0)
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chủ đề (nhóm bệnh)</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                @foreach($diseases as $disease)
                                                    @if($disease->id != "" && $disease->id != 0)
                                                        <input type="checkbox" name="diseases[]" value="{{ $disease->id }}"<?php echo in_array($disease->id, $cate_diseases) ? ' checked' : ''; ?>>&nbsp;{{ $disease->name }}<br>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên người viết</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" class="form-control" name="author_name" id="author_name" value="{{$arr_val["aut"]}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái đăng</label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <select class="form-control" name="status" id="status">
                                            <option value="" selected>Tất cả</option>
                                            <option value="pending" {{$arr_val["sta"]=="pending"?"selected":""}}>Chờ đăng</option>
                                            <option value="publish" {{$arr_val["sta"]=="publish"?"selected":""}}>Đã đăng</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- End: search -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="{{ url('frequently-questions/create') }}" title="Tạo mới câu hỏi" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Tạo mới câu hỏi</a>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" id="lst_question">
                            <?php $questions->setPath('/frequently-questions'); ?>
                            {{ (isset($arr_val) && $arr_val != "")?$questions->appends($arr_val)->links():$questions->links() }}
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-bottom: 2px;">
                                            <input type='checkbox' name='cbkquestionall' id='cbkquestionall' value=''>
                                            <a class="btn btn-xs" id="a_cbkquestionall">
                                                Xóa câu hỏi
                                            </a>
                                        </th>
                                        <th>Nội dung câu hỏi</th>
                                        <th>Câu hỏi có câu trả lời</th>
                                        <th>Trạng thái đăng</th>
                                        <th>Người tạo</th>
                                        <th>Danh mục câu hỏi</th>
                                        <th>Ngày tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach($questions as $question)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>
                                            <input type='checkbox' name='cbkquestion{{$i}}' id='cbkquestion{{$i}}' value='{{$question->id}}'>
                                        </td>
                                        <td>
                                            <a href='{{  url("$page__route/edit/$question->id$queryString") }}' id="a_question_name{{$i}}" class="btn btn-xs">
                                                {{ shorten_string($question->question, 20) }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($question->has_answer == 1)
                                                <span class="label label-success">Có</span>
                                            @else
                                                <span class="label label-warning">Không</span>
                                            @endif
                                        </td>
                                        <td>
                                            <?php switch($question->status) {
                                                case 'pending': ?>
                                                    <span class="label label-warning">Chờ đăng</span>
                                                <?php break;
                                                case 'publish': ?>
                                                    <span class="label label-success">Đã đăng</span>
                                                <?php break;
                                            } ?>
                                        </td>
                                        <td>{{ $question->author_name }}</td>
                                        <td>
                                            @foreach($categories as $category)
                                                @if ($category->id == $question->category_id)
                                                    {{ $category->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $question->created_at }}</td>
                                        <td>
                                            <a href='{{ url("$page__route/show/$question->id$queryString") }}' class="btn btn-xs">
                                                <i class="fa fa-eye"></i> Show
                                            </a>
                                            <a href='{{ url("$page__route/edit/$question->id$queryString") }}' class="btn btn-xs">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <?php $questions->setPath('/frequently-questions'); ?>
                            {{ (isset($arr_val) && $arr_val != "")?$questions->appends($arr_val)->links():$questions->links() }}
                            <input type='hidden' name='h_max_item_onpage' id='h_max_item_onpage' value='{{$i}}'>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
