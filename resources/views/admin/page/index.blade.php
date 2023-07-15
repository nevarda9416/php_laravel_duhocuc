@extends('layouts.admin.default')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Các trang giới thiệu</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <a href="{{ url('cms/pages/create') }}" title="Tạo mới trang giới thiệu" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Tạo mới trang giới thiệu</a>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php $pages->setPath('/cms/pages'); ?>
                    {{ $pages->links() }}
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Tiêu đề</th>
                            <th>Tác giả</th>
                            <th>Ngày tạo</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->author_name }}</td>
                                    <td>{{ date('d/m/Y H:i:s A', strtotime($page->created_at)) }}</td>
                                    <td>
                                        <a href='{{ url("cms/pages/show/$page->id") }}' class="btn btn-xs">
                                            <i class="fa fa-eye"></i> Xem
                                        </a>
                                        <a href='{{ url("cms/pages/edit/$page->id") }}' class="btn btn-xs">
                                            <i class="fa fa-edit"></i> Sửa
                                        </a>
                                        <a href='{{ url("cms/pages/delete/$page->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa bài viết {{ $page->title }} này chứ?')">
                                            <i class="fa fa-trash-o"></i> Xóa
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $pages->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
