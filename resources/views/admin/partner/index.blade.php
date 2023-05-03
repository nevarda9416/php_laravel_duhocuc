@extends('layouts.admin.default')
@section('content')
    <div id="posts_partner_index">
        <div class="row">
            @include('components.alert')
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tạo mới đối tác</h2>
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
