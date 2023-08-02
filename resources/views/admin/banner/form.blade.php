@extends('layouts.admin.default')
@section('content')
@if($action!='create')
    <div class="page-title">
        <div class="title_left">
            <h3><a href="{{ url('cms/banners') }}" title="Tạo banner">&larr; Tạo banner</a></h3>
        </div>
    </div>
@endif
<div class="clearfix"></div>
<div class="row">
    @include('components.alert')
    <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ ucfirst($action) }} banner <strong>{{$banner->name}}</strong></h2>
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
                <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/banners/update/'.$banner->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="type" value="dynamic">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề banner <span
                                    class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="title" required="required" value="{{$banner->title??''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên file banner</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="name" value="{{$banner->name??''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh banner @if($action!='edit') <span
                                    class="required">*</span> @endif</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="file" @if($action!='edit') required="required" @endif>
                            @if(isset($banner->file))
                                <div id="thumbnail_preview" class="mt-4">
                                    <img src="{{config()->get('constants.STATIC_IMAGES').$banner->file}}" style="width:20%">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Url banner</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="url" value="{{$banner->url??''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vị trí</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <select class="form-control" name="position">
                                <option value="top"{{$banner->position=='top'?' selected':''}}>Top</option>
                                <option value="left"{{$banner->position=='left'?' selected':''}}>Left</option>
                                <option value="middle"{{$banner->position=='middle'?' selected':''}}>Middle</option>
                                <option value="right"{{$banner->position=='right'?' selected':''}}>Right</option>
                                <option value="bottom"{{$banner->position=='bottom'?' selected':''}}>Bottom</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Trang</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <select class="form-control" name="page">
                                <option value="homepage"{{$banner->position=='homepage'?' selected':''}}>Trang chủ</option>
                                <option value="about"{{$banner->position=='about'?' selected':''}}>Giới thiệu</option>
                                <option value="study_abroad"{{$banner->position=='study_abroad'?' selected':''}}>Du học các nước</option>
                                <option value="course"{{$banner->position=='course'?' selected':''}}>Khóa học ngôn ngữ</option>
                                <option value="school"{{$banner->position=='school'?' selected':''}}>Trường học</option>
                                <option value="scholarship"{{$banner->position=='scholarship'?' selected':''}}>Học bổng</option>
                                <option value="seminar"{{$banner->position=='seminar'?' selected':''}}>Hội thảo</option>
                                <option value="contact"{{$banner->position=='contact'?' selected':''}}>Liên hệ</option>
                                <option value="consultation"{{$banner->position=='consultation'?' selected':''}}>Góc tư vấn</option>
                                <option value="partner"{{$banner->position=='partner'?' selected':''}}>Đối tác</option>
                                <option value="recruitment"{{$banner->position=='recruitment'?' selected':''}}>Tuyển dụng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường dẫn trang</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="route" value="{{$banner->route??''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thiết bị</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <select class="form-control" name="device_type">
                                <option value="desktop"{{$banner->device_type=='desktop'?' selected':''}}>Máy tính</option>
                                <option value="mobile"{{$banner->device_type=='mobile'?' selected':''}}>Điện thoại</option>
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
