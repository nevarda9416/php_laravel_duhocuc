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
                <h2>{{__(ucfirst($action))}} banner <strong>{{$banner->name}}</strong></h2>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vị trí</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <select class="form-control" name="position">
                                <option value="homepage"{{$banner->position=='homepage'?' selected':''}}>Trang chủ</option>
                                <option value="about"{{$banner->position=='about'?' selected':''}}>Về chúng tôi</option>
                                <option value="activity"{{$banner->position=='activity'?' selected':''}}>Hoạt động</option>
                                <option value="activity_detail"{{$banner->position=='activity_detail'?' selected':''}}>Hoạt động chi tiết</option>
                                <option value="solution"{{$banner->position=='solution'?' selected':''}}>Giải pháp</option>
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
