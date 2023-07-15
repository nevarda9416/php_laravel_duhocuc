@if(!empty((array)$authors))
    <div class="col-md-4 col-sm-4 col-xs-12">
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
                <?php $authors->setPath('/cms/founders'); ?>
                {{ $authors->links() }}
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên tác giả</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <td>{{$author->id}}</td>
                            <td>{{$author->name}}</td>
                            <td>
                                <a href='{{ url("cms/founders/edit/$author->id") }}' class="btn btn-xs btn-warning">
                                    <i class="fa fa-edit"></i> Sửa
                                </a>
                                <a href='{{ url("cms/founders/delete/$author->id") }}' class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa tác giả {{$author->name}} này chứ?')">
                                    <i class="fa fa-trash-o"></i> Xóa
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $authors->links() }}
            </div>
        </div>
    </div>
@endif
