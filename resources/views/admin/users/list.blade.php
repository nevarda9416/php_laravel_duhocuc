<div class="col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
        <div class="x_content">
            <table class="table">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Họ và tên</th>
                    <th>Quyền</th>
                    @if (auth()->user()->role == 'admin')
                        <th>Thao tác</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            {{ $user->role }}
                        </td>
                        @if (auth()->user()->role == 'admin')
                            <td>
                                <a href='{{ url("cms/users/edit/$user->id") }}' class="btn btn-xs">
                                    <i class="fa fa-edit"></i> Sửa
                                </a>
                                <a href='{{ url("cms/users/delete/$user->id") }}' class="btn btn-xs" onclick="return confirm('Bạn có chắc muốn xóa user {{ $user->name }} này chứ?')">
                                    <i class="fa fa-trash-o"></i> Xóa
                                </a>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
