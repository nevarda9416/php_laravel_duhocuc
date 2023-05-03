@extends('layouts.admin.default')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3><a href="{{ url('cms/destinations') }}" title="Quay về danh sách điểm du lịch">&larr; Quay về danh sách điểm du lịch</a></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thêm mới điểm du lịch</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/destinations/update/'. $destination->id) }}" method="post" id="postForm" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tên điểm du lịch <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control" name="name" required="required" value="{{ $destination->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Điểm đến</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <select class="form-control" name="location_id">
                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}"{{ $location->id == $destination->location_id ? ' selected' : '' }}>
                                            {{ $location->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Nội dung <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea id="content" class="editor form-control" name="content">{{ $destination->content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Album ảnh</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea id="album" class="editor_basic form-control" name="album">{{ $destination->album }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Ảnh đại diện</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <input type="file" class="form-control" name="thumbnail_url">
                                <div id="thumbnail_preview" class="mt-4"></div>
                            </div>
                        </div>
                        @if (!empty($destination->thumbnail_url))
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <p>Ảnh đại diện hiện tại (bên dưới)</p>
                                    <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $destination->thumbnail_url }}" width="100%"/></p>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Ảnh top banner {{(config()->get('constants.LABEL_SIZE_TOP_BACKGROUND'))}}</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="file" class="form-control" name="top_background_url">
                                <div id="top_background_preview" class="mt-4"></div>
                            </div>
                        </div>
                        @if (!empty($destination->top_background_url))
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                                <div class="col-md-10 col-sm-10 col-xs-12">
                                    <p>Ảnh đại diện hiện tại (bên dưới)</p>
                                    <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $destination->top_background_url }}" width="100%"/></p>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Top tìm kiếm</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="radio">
                                    <input type="checkbox" value="1" name="top_search" class="flat"{{ $destination->top_search == 1 ?  ' checked' : '' }}>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Điểm du lịch hot</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="radio">
                                    <input type="checkbox" value="1" name="hot_location" class="flat"{{ $destination->hot_location == 1 ?  ' checked' : '' }}>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Điểm du lịch yêu thích</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="radio">
                                    <input type="checkbox" value="1" name="popular_location" class="flat"{{ $destination->popular_location == 1 ?  ' checked' : '' }}>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Cho phép review</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="radio">
                                    <input type="checkbox" value="1" name="is_reviewed" class="flat"{{ $destination->is_reviewed == 1 ?  ' checked' : '' }}>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" class="form-control" name="meta_title" required="required" value="{{ $destination->meta_title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Từ khóa (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea class="form-control" name="meta_keyword" rows="3" required="required">{{ $destination->meta_keyword }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea class="form-control" name="meta_description" rows="3" required="required">{{ $destination->meta_description }}</textarea>
                            </div>
                        </div>
                        <div class="ln_solid">
                            <input type="hidden" name="user_id" value="{{(auth()->user()) ? auth()->user()->id : 0}}">
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="submit">Lưu bài</button>
                                <button class="btn btn-light" type="reset">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('components.thumbnail_preview')
    @include('components.save_posts')
    @include('components.tags')
@endsection
