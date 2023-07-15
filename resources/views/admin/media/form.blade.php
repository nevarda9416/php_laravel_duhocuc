@extends('layouts.admin.default')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Thư viện ảnh và video</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @include('components.alert')
        <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Sửa ảnh hoặc video</h2>
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
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/medias/update/' . $media->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề ảnh / video <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="title" required="required" value="{{ $media->title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">File upload từ máy <span
                                        class="required">(* nếu là video thì là ảnh đại diện *)</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="file">
                                <div id="file_preview" class="mt-4"></div>
                            </div>
                        </div>
                        @if (!empty($media->file))
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $media->file }}" width="100%"/></p>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">File từ URL</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="url" value="{{ $media->url }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh mục</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" name="category_id">
                                    <option value="0"></option>
                                    @foreach ($categories as $category)
                                        @if ($category->id == $media->category_id)
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chất lượng ảnh / video</label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="number" class="form-control" name="quality" min="0" value="{{ $media->quality }}">
                            </div>
                        </div>
                        <hr/>
                        Dành cho ảnh
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chiều rộng</label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="number" class="form-control" name="width" min="0" value="{{ $media->width }}">
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">px</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chiều cao</label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="number" class="form-control" name="height" min="0" value="{{ $media->height }}">
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">px</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại ảnh</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" name="type">
                                    <option></option>
                                    <option value="thumbnail"{{ $media->type === 'thumbnail' ? ' selected' : '' }}>Ảnh đại diện (bài viết)</option>
                                    <option value="image"{{ $media->type === 'image' ? ' selected' : '' }}>Ảnh trong bài viết</option>
                                    <option value="background"{{ $media->type === 'background' ? ' selected' : '' }}>Ảnh nền (background)</option>
                                    <option value="avatar"{{ $media->type === 'avatar' ? ' selected' : '' }}>Ảnh tác giả</option>
                                </select>
                            </div>
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Text thay thế ảnh / video</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="alt" value="{{ $media->alt }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chú thích - caption</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="caption" value="{{ $media->caption }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="description" rows="3">{{ $media->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bản quyền ảnh / video thuộc về</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="copyright" value="{{ $media->copyright }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tác giả bức ảnh / video</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="uploaded_by" value="{{ $media->uploaded_by }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề (SEO)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="meta_title" value="{{ $media->meta_title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ khóa (SEO)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_keyword" rows="3">{{ $media->meta_keyword }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả (SEO)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_description" rows="3">{{ $media->meta_description }}</textarea>
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
        @include('admin.media.list')
    </div>
@endsection
