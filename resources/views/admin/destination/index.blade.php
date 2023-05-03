@extends('layouts.admin.default')
@section('content')
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4 form-group">
                            <a href="{{ url('cms/destinations/create') }}" class="btn btn-app">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                <span class="glyphicon-class">Thêm mới điểm du lịch</span> (text + ảnh + video)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="x_panel" style="display:none">
                <div class="x_title">
                    <h2>Tìm kiếm</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-horizontal form-label-left" action="{{ url('/posts/search') }}" method="GET">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Tiêu đề <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="title" name="title" class="form-control col-md-7 col-xs-12" required="required" value="{{ $dataSearch['title'] ?? '' }}" placeholder="">
                            </div>
                            <input type="hidden" name="category_id" value="{{ $dataSearch['category_id'] ?? '' }}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Tác giả
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="author" name="author" class="form-control col-md-7 col-xs-12" value="{{ $dataSearch['author'] ?? '' }}" placeholder="">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="reset">Nhập lại</button>
                                <button type="submit" class="btn btn-success">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @if (!isset($isElasticsearchData))
                                <?php $destinations->setPath('destinations'); ?>
                                {{ $destinations->links() }}
                            @endif
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên điểm du lịch</th>
                                    <th>Điểm đến</th>
                                    <th>Lần chỉnh sửa cuối vào lúc</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($destinations as $destination)
                                    <?php
                                    if (isset($isElasticsearchData)) $destination = $destination->_source;
                                    $i++; ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $destination->name }}</td>
                                        <td>{{ $destination->country }}</td>
                                        <td>{{ $destination->updated_at }}</td>
                                        <td>
                                            <a href='{{ url("cms/destinations/edit/$destination->id") }}' class="btn btn-warning btn-xs">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href='{{ url("cms/destinations/delete/$destination->id") }}' class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc muốn xóa bài viết {{ $destination->title }} này chứ?')">
                                                <i class="fa fa-trash-o"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @if (!isset($isElasticsearchData))
                                <?php $destinations->setPath('posts'); ?>
                                {{ $destinations->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn-app {
            display: block;
            height: 100px !important;
        }

        .glyphicon {
            font-size: 30px !important;
            margin-bottom: 10px
        }

        .glyphicon-class {
            font-size: 20px
        }
    </style>
@endsection
