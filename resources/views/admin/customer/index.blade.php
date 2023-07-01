@extends('layouts.admin.default')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
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
                                    <th>Tổ chức</th>
                                    <th>Chức vụ</th>
                                    <th>Số lượng CBCNV</th>
                                    <th>Thời gian đăng ký</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->fullname }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->telephone }}</td>
                                        <td>{{ $customer->organization }}</td>
                                        <td>{{ $customer->position }}</td>
                                        <td>{{ $customer->number_of_employees }}</td>
                                        <td>{{ $customer->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $customers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
