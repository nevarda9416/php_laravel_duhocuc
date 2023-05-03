@extends('layouts.default')
@section('content')
@if($action!='create')
    <div class="page-title">
        <div class="title_left">
            <h3><a href="{{ url('/founder') }}" title="Tạo banner">&larr; Tạo tác giả</a></h3>
        </div>
    </div>
@endif
<div class="clearfix"></div>
<div class="row">
    @include('components.alert')
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{__(ucfirst($action))}} tác giả <strong>{{$author->name}}</strong></h2>
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
                <form class="form-horizontal form-label-left input_mask" action="{{ url('founder/update/'.$author->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="type" value="dynamic">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên tác giả <span
                                    class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="name" required="required" value="{{$author->name??''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh tác giả @if($action!='edit') <span
                                    class="required">*</span> @endif</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="avatar" @if($action!='edit') required="required" @endif>
                            @if(isset($author->avatar))
                                <div id="thumbnail_preview" class="mt-4">
                                    <img src="{{config()->get('constants.STATIC_IMAGES').$author->avatar}}" style="width:20%">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiểu sử hoạt động</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control editor_basic" name="content" id="content">{{$author->content}}</textarea>
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
    @include('author.list')
</div>
@endsection
