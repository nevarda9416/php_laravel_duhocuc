@extends('layouts.default')
@section('content')
<?php
$queryString = app('request')->getQueryString();
if ($queryString != '')
    $queryString = '?' . $queryString;
?>
<div class="page-title">
    <div class="title_left">
        <a href="{{ url('/comment' . $queryString) }}" title="Tạo mới bình luận" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Tạo mới bình luận</a>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    @include('components.alert')
    <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Sửa bình luận</h2>
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
                <form class="form-horizontal form-label-left input_mask" action="{{ url('comment/update/' . $comment->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên người bình luận <span
                                class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="author_name" required="required" value="{{$comment->author_name}}">
                            <input type="hidden" name="user_id" value="{{$comment->user_id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ người bình luận</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="author_address" value="{{$comment->author_address}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh người bình luận ({{ config()->get('constants.LABEL_SIZE_COMMENT_AVATAR') }} không bắt buộc)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="author_avatar">
                            <div id="avatar_preview" class="mt-4"></div>
                        </div>
                    </div>
                    @if (!empty($comment->author_avatar))
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <p>Ảnh đại diện hiện tại (bên dưới)</p>
                                <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $comment->author_avatar }}" style="width:auto;max-width:100%"/></p>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung bình luận <span
                                class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="content" required="required" rows="8">{{$comment->content}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái bình luận</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="radio">
                                <input type="radio" value="pending" name="status" class="flat"{{$comment->status=='pending'?' checked="checked"':''}}> Chờ đăng
                            </div>
                            <div class="radio">
                                <input type="radio" value="publish" name="status" class="flat"{{$comment->status=='publish'?' checked="checked"':''}}> Cho phép đăng
                            </div>
                        </div>
                    </div>
                    <div class="row calendar-exibit">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian đăng</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class='input-group date myDatepicker'>
                                <input type='text' class="form-control" name="published_at" data-date-format="{{ config()->get('constants.DATA_DATE_FORMAT') }}" value="{{ date(config()->get('constants.DATE_MYSQL_FORMAT'), $comment->published_at) }}"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Lưu</button>
                            <button class="btn btn-primary" type="reset">Nhập lại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('comment.list')
</div>
@include('components.thumbnail_preview')
<style>
    .starrating > input {
        display: none;
    }

    /* Remove radio buttons */
    .starrating > label:before {
        content: "\f005"; /* Star */
        margin: 2px;
        font-size: 20px;
        font-family: FontAwesome;
        display: inline-block;
    }

    .starrating > label {
        color: #222222; /* Start color when not clicked */
    }

    .starrating > input:checked ~ label {
        color: #ffca08;
    }

    /* Set yellow color when star checked */
    .starrating > input:hover ~ label {
        color: #ffca08;
    }

    /* Set yellow color when star hover */
</style>
@endsection
