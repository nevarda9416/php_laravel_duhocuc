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
            <a href="{{ url('cms/categories') }}" title="Tạo mới danh mục" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Tạo mới danh mục</a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @include('components.alert')
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ ucfirst($action) }} danh mục {{ $category->name }}</h2>
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
                    <form class="form-horizontal form-label-left input_mask" action="{{ url("cms/categories/update/$category->id") }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên danh mục <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="name" required="required" value="{{ $category->name }}" {{ $attribute }}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh mục cha</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <select class="form-control" name="parent_id" {{ $attribute }}>
                                    <option value="0">Không</option>
                                    @if ($action != 'show')
                                        @foreach($parentCategories as $key=>$value)
                                            @if ($category->parent_id == $value->id)
                                                <option value="{{ $categoryParent->id }}" selected>
                                                    @if ($categoryParent->parent_id > 0)
                                                    |--
                                                    @endif{{ $categoryParent->name }}
                                                </option>
                                            @else
                                                <option value="{{ $value->id }}">
                                                    @if ($value->parent_id > 0) &nbsp;&nbsp;&nbsp;&nbsp;
                                                    |--
                                                    @endif{{ $value->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    @else
                                        @if ($category->parent_id != 0)
                                            <option value="{{ $categoryParent->id }}" selected>{{ $categoryParent->name }}</option>
                                        @endif
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-validation-threshold="10" rows="5" {{ $attribute }}>{{ $category->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại danh mục</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" name="category_type" {{ $attribute }}>
                                    <option></option>
                                    <option value="course"{{ $category->category_type == 'course' ? ' selected' : '' }}>Khóa học ngôn ngữ</option>
                                    <option value="school"{{ $category->category_type == 'school' ? ' selected' : '' }}>Trường học các nước</option>
                                    <option value="major"{{ $category->category_type == 'major' ? ' selected' : '' }}>Ngành học các nước</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Quốc gia</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" name="country_id" {{ $attribute }}>
                                    <option value="0"></option>
                                    @if (!empty($countries->toArray()))
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}"{{$country->id===$category->country_id?' selected':''}}>{{ $country->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hiển thị trong CMS</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="checkbox">
                                    <input type="checkbox" class="flat" name="is_actived" value="1" {{ $category->is_actived == 1 ?  'checked' : '' }} {{ $attribute }}>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh đại diện</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="thumbnail_url">
                                <div id="thumbnail_preview" class="mt-4"></div>
                            </div>
                        </div>
                        @if ($category->thumbnail_url)
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <p>Ảnh đại diện hiện tại (bên dưới)</p>
                                    <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $category->thumbnail_url }}" style="width:auto;max-width:100%"/></p>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="meta_title" required="required" value="{{ $category->meta_title }}" {{ $attribute }}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ khóa (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_keyword" rows="3" required="required" {{ $attribute }}>{{ $category->meta_keyword }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_description" rows="3" required="required" {{ $attribute }}>{{ $category->meta_description }}</textarea>
                            </div>
                        </div>
                        @if ($action != 'show')
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Lưu</button>
                                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        @include('admin.category.list')
    </div>
@endsection
