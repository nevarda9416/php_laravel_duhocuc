@extends('layouts.admin.default')
@section('content')
<div class="clearfix"></div>
<div class="row">
    @include('components.alert')
    <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tạo mới banner</h2>
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
                <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/banners/store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề banner <span
                                class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="title" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên file banner</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh banner @if($action!='edit') <span
                                    class="required">*</span> @endif</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="file" @if($action!='edit') required="required" @endif>
                            <div id="thumbnail_preview" class="mt-4"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Url banner</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="url">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vị trí</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <select class="form-control" name="position">
                                <option value="top" selected>Top</option>
                                <option value="left">Left</option>
                                <option value="middle">Middle</option>
                                <option value="right">Right</option>
                                <option value="bottom">Bottom</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Trang</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <select class="form-control" name="page">
                                <option value="homepage" selected>Trang chủ</option>
                                <option value="about">Giới thiệu</option>
                                <option value="study_abroad">Du học các nước</option>
                                <option value="course">Khóa học ngôn ngữ</option>
                                <option value="school">Trường học</option>
                                <option value="scholarship">Học bổng</option>
                                <option value="seminar">Hội thảo</option>
                                <option value="contact">Liên hệ</option>
                                <option value="consultation">Góc tư vấn</option>
                                <option value="partner">Đối tác</option>
                                <option value="recruitment">Tuyển dụng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường dẫn trang</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="route">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thiết bị</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <select class="form-control" name="device_type">
                                <option value="desktop" selected>Máy tính</option>
                                <option value="mobile">Điện thoại</option>
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.banner.list')
</div>
@endsection
