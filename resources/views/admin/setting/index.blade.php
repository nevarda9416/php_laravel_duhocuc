@extends('layouts.admin.default')
@section('content')
    <div class="row">
        @include('components.alert')
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cài đặt</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/setting/allowGetDynamicContent') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="key" value="{{'website.config'}}">
                        <input type="hidden" name="user_id" value="{{(auth()->user()) ? auth()->user()->id : 0}}">
                        <div class="form-group">
                            <label class="control-label col-md-5 col-sm-5 col-xs-12">Cho phép lấy nội dung động</label>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="checkbox">
                                    @if(isset($setting->value))
                                        <?php $allow_get_dynamic_content = json_decode($setting->value, true); $allow_get_dynamic_content = isset($allow_get_dynamic_content['allow_get_dynamic_content']) ? $allow_get_dynamic_content['allow_get_dynamic_content'] : 0; ?>
                                        <input type="checkbox" class="flat" name="allow_get_dynamic_content" value="1"{{ $allow_get_dynamic_content == 1 ? ' checked' : '' }}>
                                    @else
                                        <input type="checkbox" class="flat" name="allow_get_dynamic_content" value="1">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-5">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
