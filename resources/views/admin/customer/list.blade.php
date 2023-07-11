<div class="col-md-7 col-sm-7 col-xs-12">
    <?php $customers->setPath('/cms/customers'); ?>
    {{ $customers->links() }}
    <a href='{{ url("cms/customers/download") }}' class="btn btn-xs btn-primary">
        <i class="fa fa-download"></i> Download danh sách
    </a>
    <table class="table">
        <thead>
        <tr>
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Thời gian đăng ký</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->fullname }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->telephone }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>
                    <a href='{{ url("cms/customers/edit/$customer->id") }}' class="btn btn-xs">
                        <i class="fa fa-edit"></i> Sửa
                    </a>
                    <a href='{{ url("cms/customers/delete/$customer->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa người dùng đăng ký {{ $customer->fullname }} này chứ?')">
                        <i class="fa fa-trash-o"></i> Xóa
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $customers->links() }}
</div>
