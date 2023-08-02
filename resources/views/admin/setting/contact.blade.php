@extends('layouts.admin.default')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Cài đặt</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @include('components.alert')
        <div class="col-md-7 col-sm-7 col-xs-7">
            <div class="x_panel" style="height: auto">
                <div class="x_title">
                    <h2>Thông tin liên hệ website <i>(bản Tiếng Việt)</i></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none">
                    <br/>
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/contact/store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên công ty liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="company_contact" value="{{ $contact['company_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Số điện thoại liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="telephone_contact" value="{{ $contact['telephone_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fax liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="fax_contact" value="{{ $contact['fax_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên website</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="website_name" value="{{ $contact['website_name'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="website_contact" value="{{ $contact['website_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="email_contact" value="{{ $contact['email_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="address_contact" value="{{ $contact['address_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link google map</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="link_google_map" value="{{ $contact['link_google_map'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian hỗ trợ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="timer_support" value="{{ $contact['timer_support'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Logo header công ty</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="logo_header_company" value="{{ $contact['logo_header_company'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Logo footer công ty</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="logo_company" value="{{ $contact['logo_company'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Copyright trái</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control editor_basic" name="copyright_left" id="copyright_left">{{ $contact['copyright_left'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Copyright phải</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control editor_basic" name="copyright_right" id="copyright_right">{{ $contact['copyright_right'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link facebook</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="facebook" value="{{ $contact['facebook'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link youtube</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="youtube" value="{{ $contact['youtube'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link instagram</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="instagram" value="{{ $contact['instagram'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link twitter</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="twitter" value="{{ $contact['twitter'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link google</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="google" value="{{ $contact['google'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link tiktok</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="tiktok" value="{{ $contact['tiktok'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Slogan đăng ký</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control editor_basic" name="slogan_register" id="slogan_register">{{ $contact['slogan_register'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề (SEO) <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="meta_title" required="required" value="{{ $setting['meta_title'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ khóa (SEO) <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_keyword" rows="3" required="required">{{ $setting['meta_keyword'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả (SEO) <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_description" rows="3" required="required">{{ $setting['meta_description'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh (SEO)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="meta_image" value="{{ $setting['meta_image'] ?? '' }}">
                            </div>
                        </div>
                        @if (!empty($setting['meta_image']))
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <p>Ảnh (SEO) hiện tại (bên dưới)</p>
                                    <p><img src="{{ config()->get('constants.FRONTEND_URL') . $setting['meta_image'] }}" width="100%"/></p>
                                </div>
                            </div>
                        @endif
                        <input type="hidden" name="user_id" value="{{(auth()->user()) ? auth()->user()->id : 0}}">
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thông tin liên hệ website <i>(bản Tiếng Anh)</i></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/contact/en/store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên công ty liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="company_contact" value="{{ $contact_en['company_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Số điện thoại liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="telephone_contact" value="{{ $contact_en['telephone_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fax liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="fax_contact" value="{{ $contact_en['fax_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên website</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="website_name" value="{{ $contact_en['website_name'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="website_contact" value="{{ $contact_en['website_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="email_contact" value="{{ $contact_en['email_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ liên hệ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="address_contact" value="{{ $contact_en['address_contact'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link google map</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="link_google_map" value="{{ $contact_en['link_google_map'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian hỗ trợ</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="timer_support" value="{{ $contact_en['timer_support'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Logo header công ty</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="logo_header_company" value="{{ $contact_en['logo_header_company'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Logo footer công ty</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="logo_company" value="{{ $contact_en['logo_company'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Copyright trái</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control editor_basic" name="copyright_left" id="copyright_left_en">{{ $contact_en['copyright_left'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Copyright phải</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control editor_basic" name="copyright_right" id="copyright_right_en">{{ $contact_en['copyright_right'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link facebook</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="facebook" value="{{ $contact_en['facebook'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link youtube</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="youtube" value="{{ $contact_en['youtube'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link instagram</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="instagram" value="{{ $contact_en['instagram'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link twitter</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="twitter" value="{{ $contact_en['twitter'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link google</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="google" value="{{ $contact_en['google'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link tiktok</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="tiktok" value="{{ $contact_en['tiktok'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Slogan đăng ký</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control editor_basic" name="slogan_register" id="slogan_register_en">{{ $contact_en['slogan_register'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề (SEO) <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="meta_title" required="required" value="{{ $setting_en['meta_title'] ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ khóa (SEO) <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_keyword" rows="3" required="required">{{ $setting_en['meta_keyword'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả (SEO) <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_description" rows="3" required="required">{{ $setting_en['meta_description'] ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh (SEO)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="file" class="form-control" name="meta_image" value="{{ $setting_en['meta_image'] ?? '' }}">
                            </div>
                        </div>
                        @if (!empty($setting_en['meta_image']))
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <p>Ảnh (SEO) hiện tại (bên dưới)</p>
                                    <p><img src="{{ config()->get('constants.FRONTEND_URL') . $setting_en['meta_image'] }}" width="100%"/></p>
                                </div>
                            </div>
                        @endif
                        <input type="hidden" name="user_id" value="{{(auth()->user()) ? auth()->user()->id : 0}}">
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-5">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Hình ảnh minh họa</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('admin.setting.preview')
                </div>
            </div>
        </div>
    </div>
@endsection
