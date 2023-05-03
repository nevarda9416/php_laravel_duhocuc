@if(!empty((array)$banners))
    <div class="col-md-5 col-sm-5 col-xs-12">
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
                <?php $banners->setPath('/banner'); ?>
                {{ $banners->links() }}
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên file banner</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banners as $banner)
                        <tr>
                            <td>{{$banner->id}}</td>
                            <td>{{$banner->name}}</td>
                            <td>
                                <a href='{{ url("banner/edit/$banner->id") }}' class="btn btn-xs btn-warning">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a href='{{ url("banner/delete/$banner->id") }}' class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa banner {{$banner->name}} này chứ?')">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $banners->links() }}
            </div>
        </div>
    </div>
@endif
