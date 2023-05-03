<?php
switch ($action__Q) {
    case 'show':
        $attribute__Q = 'disabled';
        break;
    default:
        $attribute__Q = '';
        break;
}
switch ($action__A) {
    case 'show':
        $attribute__A = 'disabled';
        break;
    default:
        $attribute__A = '';
        break;
}
if (empty($answer['answer'])) {
    $answer = new stdClass();
    $answer->id = '';
    $answer->answer = '';
    $answer->author_name = '';
    $answer->status = '';
    $answer->published_at = '';
}
if ($page__route == 'frequently-questions')
    $answer__url = 'frequently-answers';
?>
@extends('layouts.default')
@section('content')
    <div id="faqs_form">
        <div class="page-title">
            <div class="title_left">
                <h3><a href='{{ url("/$page__route") }}' title="{{ $page__list__title }}">&larr; {{ $page__list__title }}</a></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            @include('components.alert')
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ $page__title }}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form class="form-horizontal form-label-left input_mask" action='{{ url("$page__route/update/$question->id") }}' method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung câu hỏi <span
                                            class="required">*</span></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea type="text" class="form-control" name="question" rows="3" required="required" {{ $attribute__Q }}>{{ $question->question }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh mục</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <select class="form-control" name="category_id" id="category_id" {{ $attribute__Q }}>
                                        <option value="0" selected>Không</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"{{ $question->category_id==$category->id ? ' selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên người hỏi <span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control" name="author_name" required="required" value="{{ $question->author_name }}" {{ $attribute__Q }}>
                                    <input type="hidden" name="user_id" value="{{ $question->user_id }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh câu hỏi (không bắt buộc)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="file" class="form-control" name="thumbnail_url">
                                    <div id="thumbnail_preview" class="mt-4"></div>
                                </div>
                            </div>
                            @if (!empty($question->thumbnail_url))
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <p>Ảnh câu hỏi hiện tại (bên dưới)</p>
                                        <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $question->thumbnail_url }}" style="width:auto;max-width:100%"/></p>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái đăng</label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio"{{ $question->status=='pending' ? ' checked' : '' }} value="pending" name="status" {{ $attribute__Q }}> Chờ đăng
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio"{{ $question->status=='publish' ? ' checked' : '' }} value="publish" name="status" {{ $attribute__Q }}> Cho phép đăng
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row calendar-exibit">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian đăng</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class='input-group date myDatepicker'>
                                        <input type='text' class="form-control" name="published_at" data-date-format="{{ config()->get('constants.DATA_DATE_FORMAT') }}" value="{{ $question->published_at != null ? date(config()->get('constants.DATE_MYSQL_FORMAT'), $question->published_at) : null }}" {{ $attribute__Q }}/>
                                        <span class="input-group-addon">
                                           <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php if ($action__Q != 'show') : ?>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Lưu</button>
                                    <a class="btn btn-link" href='{{ url("/$page__route") }}'>Hủy</a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Trả lời câu hỏi</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form class="form-horizontal form-label-left input_mask" action="{{ $action__A == 'add' ? url($answer__url.'/store') : url($answer__url.'/update/' . $answer->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="question_id" value="{{ $question->id }}">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung câu trả lời <span
                                            class="required">*</span></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea type="text" class="form-control" name="answer" id="content" required="required" {{ $attribute__A }}>{{ $answer->answer }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên người trả lời <span
                                            class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control" name="author_name" required="required" {{ $attribute__A }} value="{{ $answer->author_name }}">
                                    <input type="hidden" name="user_id" value="{{ isset($answer->user_id) ? $answer->user_id : get_user_code() }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái câu trả lời</label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio"{{ $answer->status=='pending' ? ' checked' : '' }} value="pending" name="status" {{ $attribute__A }}> Chờ đăng
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio"{{ $answer->status=='publish' || $action__A == 'add' ? ' checked' : '' }} value="publish" name="status" {{ $attribute__A }}> Cho phép đăng
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row calendar-exibit">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian đăng</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class='input-group date myDatepicker'>
                                        <input type='text' class="form-control" name="published_at" data-date-format="{{ config()->get('constants.DATA_DATE_FORMAT') }}" value="{{ $answer->published_at != null ? date(config()->get('constants.DATE_MYSQL_FORMAT'), $answer->published_at) : null }}" {{ $attribute__A }}/>
                                        <span class="input-group-addon">
                                           <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @if ($action__A != 'undefined' && $action__A != 'show')
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Lưu</button>
                                        @if ($action__A == 'add')
                                            <button class="btn btn-primary" type="reset">Nhập lại</button>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title">
            <div class="title_left">
                <h3>Danh sách câu trả lời</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <a href="{{ url('frequently-questions/edit/'.$question->id) }}" title="Tạo mới câu trả lời" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Tạo mới câu trả lời</a>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nội dung câu trả lời</th>
                                <th>Trạng thái đăng</th>
                                <th>Người trả lời</th>
                                <th>Ngày trả lời</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($answers as $answer)
                                <tr>
                                    <td><?php echo html_entity_decode($answer->answer); ?></td>
                                    <td>
                                        <?php switch($answer->status) {
                                        case 'pending': ?>
                                        <span class="label label-warning">Chờ đăng</span>
                                        <?php break;
                                        case 'publish': ?>
                                        <span class="label label-success">Đã đăng</span>
                                        <?php break;
                                        } ?>
                                    </td>
                                    <td>{{ $answer->author_name }}</td>
                                    <td>{{ $question->created_at }}</td>
                                    <td>
                                        <a href='{{ url("$page__route/$action__Q/$question->id/answer/show/$answer->id") }}' class="btn btn-xs">
                                            <i class="fa fa-eye"></i> Show
                                        </a>
                                        <a href='{{ url("$page__route/$action__Q/$question->id/answer/edit/$answer->id") }}' class="btn btn-xs">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href='{{ url("$answer__url/delete/$answer->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa câu trả lời này chứ?')">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.tags')
    @include('components.thumbnail_preview')
@endsection
