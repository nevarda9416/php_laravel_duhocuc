@if(!empty((array)$solutions))
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
                <?php $solutions->setPath('/solution'); ?>
                {{ $solutions->links() }}
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên giải pháp</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($solutions as $solution)
                        <tr>
                            <td>{{$solution->id}}</td>
                            <td>{{$solution->name}}</td>
                            <td>
                                <a href='{{ url("solution/edit/$solution->id") }}' class="btn btn-xs btn-warning">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a href='{{ url("solution/delete/$solution->id") }}' class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa giải pháp {{$solution->name}} này chứ?')">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $solutions->links() }}
            </div>
        </div>
    </div>
@endif
