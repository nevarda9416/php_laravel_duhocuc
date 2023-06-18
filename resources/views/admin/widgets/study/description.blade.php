@extends('layouts.admin.default')
@section('content')
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Trang chủ&nbsp;&nbsp;>&nbsp;&nbsp;DU HỌC ÚC</h2>
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
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/widgets/' . $page . '/' . $position) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="key" value="{{'widget.' . $page . '.' . $position}}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="page" value="{{ $page }}">
                        <input type="hidden" name="position" value="{{ $position }}">
                        <input type="hidden" name="type" value="static">
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12">Nội dung <span
                                        class="required">*</span></label>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <textarea class="form-control editor_basic" name="{{$position}}" id="{{$position}}" required="required" rows="5">{{$widget->content??''}}</textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-11 col-sm-11 col-xs-12 col-md-offset-1">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
