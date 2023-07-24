<?php
switch ($action) {
    case 'show':
        $attribute = 'disabled';
        break;
    default:
        $attribute = '';
        break;
}
?>
@extends('layouts.admin.default')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3><a href="{{ url('cms/posts') }}" title="Quay về danh sách các bài viết">&larr; Quay về danh sách các bài viết danh mục</a></h3>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    @include('components.alert')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ ucfirst($action) }} bài viết dạng {{ $post->title }}</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/posts/update/'. $post->id) }}" method="post" id="postForm" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề <span
                                    class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" class="form-control" name="title" required="required" value="{{ $post->title }}" {{ $attribute }}>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Slug <span
                                    class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" class="form-control" name="slug" required="required" value="{{ $post->slug }}" {{ $attribute }}>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tóm tắt</label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <textarea id="excerpt" class="form-control" name="excerpt" rows="3" {{ $attribute }}>{{ $post->excerpt }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nội dung <span
                                    class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <textarea id="content" class="editor form-control" name="content" {{ $attribute }}>
                                {{ $post->content }}
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Danh mục</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <select class="form-control" name="category_id" {{ $attribute }}>
                                <option value="0"></option>
                                @foreach ($categories as $category)
                                    @if ($category->id == $categoryPost)
                                        <option value="{{ $category->id }}" selected>
                                            @if ($category->parent_id > 0) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @if (in_array($category->parent_id, \App\Core\Models\Category::CATEGORY_ID_LIST_SCHOOL))
                                                    |----
                                                @else
                                                    |--
                                                @endif
                                            @endif
                                            {{ $category->name }}
                                        </option>
                                    @else
                                        <option value="{{ $category->id }}">
                                            @if ($category->parent_id > 0) &nbsp;&nbsp;
                                                @if (in_array($category->parent_id, \App\Core\Models\Category::CATEGORY_ID_LIST_SCHOOL))
                                                    |----
                                                @else
                                                    |--
                                                @endif
                                            @endif
                                            {{ $category->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Quốc gia</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <select class="form-control" name="country">
                                <option value="0"></option>
                                @if (!empty($countries->toArray()))
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}"{{ $country->id == $post->country ?  ' selected' : '' }} {{ $attribute }}>{{ $country->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tên người viết <span
                                    class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" class="form-control" name="author_name" required="required" value="{{ $post->author_name }}" {{ $attribute }}>
                            <input type="hidden" name="user_id" value="{{(auth()->user()) ? auth()->user()->id : 0}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Ảnh đại diện ({{ config()->get('constants.LABEL_SIZE_THUMBNAIL') }})</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <input type="file" class="form-control" name="thumbnail_url">
                            <div id="thumbnail_preview" class="mt-4"></div>
                        </div>
                    </div>
                    @if (!empty($post->thumbnail_url))
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <p>Ảnh đại diện hiện tại (bên dưới)</p>
                                <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $post->thumbnail_url }}" width="100%"/></p>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tags (keywords bài viết)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?php $list_tags = ''; ?>
                            @foreach($tagPost as $tagName)
                                <?php $list_tags .= $tagName . ','; ?>
                            @endforeach
                            <input id="tags" type="text" class="tags form-control" value="{{ $list_tags }}" {{ $attribute }} name="tags"/>
                            <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <i>Sự kiện du học</i>
                    </div>
                    <div class="row calendar-exibit">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Ngày diễn ra</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class='input-group date myDatepicker'>
                                <input type='text' class="form-control" name="date" data-date-format="{{ config()->get('constants.DATA_DATE_FORMAT') }}" value="{{ date(config()->get('constants.DATE_MYSQL_FORMAT'), $post->date) }}" {{ $attribute }}/>
                                <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Thời gian</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" class="form-control" name="time" value="{{ $post->time }}" {{ $attribute }}>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Địa điểm</label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" class="form-control" name="place" value="{{ $post->place }}" {{ $attribute }}>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề (SEO) <span
                                    class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" class="form-control" name="meta_title" required="required" value="{{ $post->meta_title }}" {{ $attribute }}>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Từ khóa (SEO) <span
                                    class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <textarea class="form-control" name="meta_keyword" rows="3" required="required" {{ $attribute }}>{{ $post->meta_keyword }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả (SEO) <span
                                class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <textarea class="form-control" name="meta_description" rows="3" required="required" {{ $attribute }}>{{ $post->meta_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Trạng thái bài viết</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="radio">
                                <input type="radio" value="draft" name="status" {{ $post->status == 'draft' ?  'checked' : '' }} {{ $attribute }} class="flat"> Bài nháp
                            </div>
                            <div class="radio">
                                <input type="radio" value="publish" name="status" {{ $post->status == 'publish' ?  'checked' : '' }} {{ $attribute }} class="flat"> Cho đăng
                            </div>
                        </div>
                    </div>
                    <div class="row calendar-exibit">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Thời gian đăng</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class='input-group date myDatepicker'>
                                <input type='text' class="form-control" name="published_at" data-date-format="{{ config()->get('constants.DATA_DATE_FORMAT') }}" value="{{ date(config()->get('constants.DATE_MYSQL_FORMAT'), $post->published_at) }}" {{ $attribute }}/>
                                <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    @if ($action !== 'show')
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-2">
                                <a href="{{ config()->get('constants.FRONTEND_URL') . $post->share_url }}" target="_blank" class="btn btn-light">Xem lại bài</a>
                                <button class="btn btn-primary" type="submit">Lưu bài</button>
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@include('components.thumbnail_preview')
@include('components.save_posts')
@include('components.tags')
@endsection
