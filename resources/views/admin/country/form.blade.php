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
            <a href="{{ url('cms/countries') }}" title="Tạo mới quốc gia" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Tạo mới quốc gia</a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @include('components.alert')
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ ucfirst($action) }} quốc gia {{ $country->name }}</h2>
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
                    <form class="form-horizontal form-label-left input_mask" action="{{ url("cms/countries/update/$country->id") }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên quốc gia <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="name" required value="{{ $country->name }}" {{ $attribute }}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Quốc kỳ đại diện</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="thumbnail_url">
                                <div id="thumbnail_preview" class="mt-4"></div>
                            </div>
                        </div>
                        @if ($country->thumbnail_url)
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <p>Quốc kỳ đại diện hiện tại (bên dưới)</p>
                                    <p><img src="{{ Config::get('constants.STATIC_IMAGES') . $country->thumbnail_url }}" style="width:auto;max-width:100%"/></p>
                                </div>
                            </div>
                        @endif
                        @if ($action != 'show')
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Lưu</button>
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        @include('admin.country.list')
    </div>
@endsection
