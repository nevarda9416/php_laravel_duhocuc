@extends('layouts.admin.default')
@section('content')
@if($action!='create')
    <div class="page-title">
        <div class="title_left">
            <h3><a href="{{ url('cms/founders') }}" title="Tạo mới người quản lý">&larr; Tạo mới người quản lý</a></h3>
        </div>
    </div>
@endif
<div class="clearfix"></div>
<div class="row">
    @include('components.alert')
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Sửa người quản lý <strong>{{$author->name}}</strong></h2>
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
                <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/founders/update/'.$author->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="type" value="dynamic">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngôn ngữ website <span
                                    class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="language" required>
                                <option value="">-- Chọn --</option>
                                <option value="vi"{{ $author->language == 'vi' ? ' selected' : '' }}>Tiếng Việt</option>
                                <option value="en"{{ $author->language == 'en' ? ' selected' : '' }}>Tiếng Anh</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên người quản lý <span
                                    class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="name" required="required" value="{{ $author->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh người quản lý @if($action!=='edit')<span
                                    class="required">*</span>@endif</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="thumbnail_url" @if($action!=='edit') required="required" @endif>
                            <div id="thumbnail_preview" class="mt-4"></div>
                        </div>
                    </div>
                    @if ($author->avatar)
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $author->avatar }}" style="width:auto;max-width:100%"/></p>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Chức vụ <span
                                    class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="position" required="required" value="{{ $author->position }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Đội ngũ</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <select class="form-control" name="team">
                                <option></option>
                                <option value="leader"{{ $author->team === 'leader' ? ' selected' : '' }}>Ban lãnh đạo</option>
                                <option value="teacher"{{ $author->team === 'teacher' ? ' selected' : '' }}>Giáo viên</option>
                                <option value="staff"{{ $author->team === 'staff' ? ' selected' : '' }}>Nhân viên</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Châm ngôn</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" name="dictum">{{ $author->dictum }}</textarea>
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
    @include('admin.author.list')
</div>
@endsection
