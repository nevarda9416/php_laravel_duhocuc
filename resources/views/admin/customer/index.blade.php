@extends('layouts.admin.default')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php $customers->setPath('customer'); ?>
                            {{ $customers->links() }}
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Thời gian đăng ký</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->email }}</td>
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
