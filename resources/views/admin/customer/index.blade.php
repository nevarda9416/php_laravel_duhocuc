@extends('layouts.admin.default')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        @include('components.alert')
                        @include('admin.customer.list')
                        @if ($action === 'edit')
                            @include('admin.customer.form')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
