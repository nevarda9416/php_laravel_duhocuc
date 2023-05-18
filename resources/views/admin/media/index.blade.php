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
                    <h2>Thêm ảnh hoặc video</h2>
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
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/media/store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề ảnh / video <span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="title" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">File upload từ máy <span
                                    class="required">(* nếu là video thì là ảnh đại diện *)</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="file" required="required">
                                <div id="file_preview" class="mt-4"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">File từ URL</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="url">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chất lượng ảnh / video</label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="number" class="form-control" name="quality" min="0" value="0"/>
                            </div>
                        </div>
                        <hr/>
                        Dành cho ảnh
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chiều rộng</label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="number" class="form-control" name="width" min="0" value="0"/>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">px</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chiều cao</label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="number" class="form-control" name="height" min="0" value="0"/>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">px</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại ảnh</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" name="type">
                                    <option></option>
                                    <option value="thumbnail">Ảnh đại diện (bài viết)</option>
                                    <option value="image">Ảnh trong bài viết</option>
                                    <option value="background">Ảnh nền (background)</option>
                                    <option value="avatar">Ảnh tác giả</option>
                                </select>
                            </div>
                        </div>
                        <hr/>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Text thay thế ảnh / video</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="alt">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chú thích - caption</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="caption">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bản quyền ảnh / video thuộc về</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="copyright">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tác giả bức ảnh / video</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="uploaded_by">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề (SEO)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="meta_title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ khóa (SEO)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_keyword" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả (SEO)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_description" rows="3"></textarea>
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
        @include('admin.media.list')
    </div>
@endsection
