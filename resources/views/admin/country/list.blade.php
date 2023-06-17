<div class="col-md-6 col-sm-6 col-xs-6">
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
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên quốc gia</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td>{{ $country->name }}</td>
                            <td>
                                <a href='{{ url("cms/countries/edit/$country->id") }}' class="btn btn-xs">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a href='{{ url("cms/countries/delete/$country->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa quốc gia {{ $country->name }} này chứ?')">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
