<div class="col-md-6 col-sm-6 col-xs-12">
    <?php $subcribers->setPath('/cms/subcribers'); ?>
    {{ $subcribers->links() }}
    <a href='{{ url("cms/subcribers/download") }}' class="btn btn-xs btn-primary">
        <i class="fa fa-download"></i> Download danh sách
    </a>
    <table class="table">
        <thead>
        <tr>
            <th>Email</th>
            <th>Thời gian đăng ký</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subcribers as $subcriber)
            <tr>
                <td>{{ $subcriber->email }}</td>
                <td>{{ $subcriber->created_at }}</td>
                <td>
                    <a href='{{ url("cms/subcribers/edit/$subcriber->id") }}' class="btn btn-xs">
                        <i class="fa fa-edit"></i> Sửa
                    </a>
                    <a href='{{ url("cms/subcribers/delete/$subcriber->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa email đăng ký {{ $subcriber->email }} này chứ?')">
                        <i class="fa fa-trash-o"></i> Xóa
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $subcribers->links() }}
</div>
