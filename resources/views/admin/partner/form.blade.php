@extends('layouts.admin.default')
@section('content')
    <div id="posts_partner_form">
        <div class="page-title">
            <div class="title_left">
                <a href="{{ url('cms/partners') }}" title="Tạo mới đối tác" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Tạo mới đối tác</a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            @include('components.alert')
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ isset($action) && $action == 'show'?'Hiển thị đối tác: ':'Sửa đối tác: ' }}<span style="color: #0ab21b;">{{ isset($partner->name)?$partner->name:'' }}</span></h2>
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
                        @include('admin.partner.temp')
                    </div>
                </div>
            </div>
            @include('admin.partner.list')
        </div>
    </div>
@endsection
