<div data-elementor-type="footer" data-elementor-id="20951" class="elementor elementor-20951 elementor-location-footer">
    <footer class="elementor-section elementor-top-section elementor-element elementor-element-0b13df5 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0b13df5" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}"
            style="background-color:#F7F5F4 !important;color: #4d4f4d !important;position: relative;"
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-043701e" data-id="043701e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-822d460 elementor-widget elementor-widget-heading" data-id="822d460" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default" style="color:#003aa7 !important;font-size:18px !important;">CÔNG TY CỔ PHẦN ĐẦU TƯ SKY PACIFIC</h4></div>
                    </div>
                    <div class="elementor-element elementor-element-b5b89f7 elementor-widget elementor-widget-text-editor" data-id="b5b89f7" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container elementor-kit-10750">
                            <a href="{{ url('/') }}" title="">
                                <img width="299" height="70" src="{{ asset('public/assets/images/logo/logo.png') }}" class="attachment-full size-full wp-image-12698" alt="Công ty tư vấn du học, công ty du học, trung tâm du học, trung tâm tư vấn du học"/>
                            </a>
                            <p style="margin-top:20px;margin-left:30px;position:relative"><img src="{{ asset('public/images/icon_location.png') }}" alt="" style="width:20px;margin-right:5px;margin-left:-25px;position:absolute;bottom:-5px;"><strong style="color:#037efb">TRỤ SỞ CHÍNH HÀ NỘI</strong> (<a
                                        href="{{ $setting['link_google_map'] ?? '' }}" target="_blank" style="color:#025abd !important;">Xem bản đồ</a>)</p>
                            <p style="margin-bottom:5px;margin-left:30px">{{ $setting['address_contact'] ?? '' }}</p>
                            <p style="margin-bottom:5px;margin-left:30px">Điện thoại: <a href="tel:{{ $setting['telephone_contact'] ?? '' }}" style="color:#025abd !important;">{{ $setting['telephone_contact'] ?? '' }}</a></p>
                            <p style="margin-left:30px">Email: <a href="mailto:{{ $setting['email_contact'] ?? '' }}" style="color:#025abd !important;">{{ $setting['email_contact'] ?? '' }}</a></p>
                            @if ($setting['copyright_left'])
                                <?php echo html_entity_decode($setting['copyright_left']) ?>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-13415ba" data-id="13415ba" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c060e94 elementor-widget elementor-widget-heading" data-id="c060e94" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default" style="color:#003aa7 !important;font-size:18px !important;">HỖ TRỢ KHÁCH HÀNG</h4></div>
                    </div>
                    @if (!empty($setting['copyright_right']))
                        <?php echo html_entity_decode($setting['copyright_right']) ?>
                    @else
                        <div class="elementor-element elementor-element-016c223 elementor-widget elementor-widget-text-editor" data-id="016c223" data-element_type="widget" data-widget_type="text-editor.default"
                             style="margin-bottom:0">
                            <div class="elementor-widget-container">
                                <p>Hotline tư vấn Hà Nội : <a href="tel:0964562233" style="color:#2263a8 !important;">096 456 2233</a> <span class="small-text">(8-21h kể cả T7, CN)</span></p>
                                <p>Hotline tư vấn TP.HCM : <a href="tel:0964561122" style="color:#2263a8 !important;">096 456 1122</a> <span class="small-text">(8-21h kể cả T7, CN)</span></p>
                                <p>Giờ làm việc: T2-T6 8h-17h; T7 8h-12h; CN nghỉ</p></div>
                        </div>
                    @endif
                    <div class="elementor-element elementor-element-c060e94 elementor-widget elementor-widget-heading" data-id="c060e94" data-element_type="widget" data-widget_type="heading.default"
                         style="margin-bottom:0">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default" style="color:#003aa7 !important;font-size:18px !important;">TÌM HIỂU THÊM VỀ SKY PACIFIC</h4></div>
                    </div>
                    <div class="elementor-element elementor-element-016c223 elementor-widget elementor-widget-text-editor" data-id="016c223" data-element_type="widget" data-widget_type="text-editor.default"
                    >
                        <div class="elementor-widget-container">
                            Giấy chứng nhận ĐKKD số 0102142490 - Sở KHĐT thành phố Hà Nội cấp ngày 17/01/2012
                            <ul style="padding-left: 0;list-style: none;margin-top: 10px;font-weight: bold;">
                                <li style="margin-bottom:5px"><a href="{{ url('gioi-thieu') }}" title="GIỚI THIỆU" style="color:#1b1b1b !important;"><img src="{{ asset('public/images/icon_link.png') }}" alt="" width="12px" style="margin-right:5px"> GIỚI THIỆU</a></li>
                                <li style="margin-bottom:5px"><a href="{{ url('lien-he') }}" title="LIÊN HỆ" style="color:#1b1b1b !important;"><img src="{{ asset('public/images/icon_link.png') }}" alt="" width="12px" style="margin-right:5px"> LIÊN HỆ</a></li>
                                <li style="margin-bottom:5px"><a href="{{ url('doi-tac') }}" title="ĐỐI TÁC" style="color:#1b1b1b !important;"><img src="{{ asset('public/images/icon_link.png') }}" alt="" width="12px" style="margin-right:5px"> ĐỐI TÁC</a></li>
                                <li style="margin-bottom:5px"><a href="{{ url('truong-hoc') }}" title="QUỐC GIA DU HỌC" style="color:#1b1b1b !important;"><img src="{{ asset('public/images/icon_link.png') }}" alt="" width="12px" style="margin-right:5px"> QUỐC GIA DU HỌC</a></li>
                                <li style="margin-bottom:5px"><a href="{{ url('khoa-hoc-ngon-ngu') }}" title="KHÓA HỌC NGÔN NGỮ" style="color:#1b1b1b !important;"><img src="{{ asset('public/images/icon_link.png') }}" alt="" width="12px" style="margin-right:5px"> KHÓA HỌC NGÔN NGỮ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6840879" data-id="6840879" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-343962e elementor-widget elementor-widget-heading" data-id="343962e" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default" style="color:#003aa7 !important;font-size:18px !important;">ĐĂNG KÝ NHẬN TIN</h4></div>
                    </div>
                    <div class="elementor-element elementor-element-45629c2 elementor-widget elementor-widget-text-editor" data-id="45629c2" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Đừng bỏ lỡ những thông tin du học hữu ích cập nhật liên tục trên <span style="color:#278ff9;font-weight:bold">SKY PACIFIC</span></p></div>
                    </div>
                    <div class="elementor-element elementor-element-72cbe67 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="72cbe67" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;33&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width_mobile&quot;:&quot;40&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                         data-widget_type="form.default"
                         style="margin-bottom:0">
                        <div class="elementor-widget-container">
                            <form class="elementor-form" method="post" name="New Form" action="{{ url('register/newsletter_subcriber') }}">
                                {{ csrf_field() }}
                                <div class="elementor-form-fields-wrapper elementor-labels-">
                                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-66 elementor-sm-60 elementor-field-required">
                                        <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                                            Email </label>
                                        <input size="1" type="email" name="email" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Nhập email của bạn" required="required" aria-required="true"
                                               style="border:1px solid #838488">
                                    </div>
                                    <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-33 e-form__buttons elementor-sm-40" style="align-items:flex-start !important">
                                        <button type="submit" class="elementor-button elementor-size-sm" style="background-color:#ff9700">
						<span>
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">đăng ký</span>
													</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-c060e94 elementor-widget elementor-widget-heading" data-id="c060e94" data-element_type="widget" data-widget_type="heading.default"
                         style="margin-bottom:0">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default" style="color:#003aa7 !important;font-size:18px !important;">KẾT NỐI VỚI CHÚNG TÔI</h4></div>
                    </div>
                    <div class="elementor-element elementor-element-016c223 elementor-widget elementor-widget-text-editor" data-id="016c223" data-element_type="widget" data-widget_type="text-editor.default"
                    >
                        <div class="elementor-widget-container">
                            <p>
                            <div class="elementor-social-icons-wrapper elementor-flex">
                                    <span class="elementor-grid-item" style="margin-right:7px">
                        <a href="{{ $setting['facebook'] ?? '' }}" target="_blank">
                            <img src="{{ asset('public/images/icon_facebook.png') }}" alt=""/>				</a>
                                    </span>
                                <span class="elementor-grid-item" style="margin-right:5px">
                        <a href="{{ $setting['youtube'] ?? '' }}" target="_blank">
                            <img src="{{ asset('public/images/icon_youtube.png') }}" alt=""/>					</a>
    </span>
                                <span class="elementor-grid-item">
                        <a href="{{ $setting['tiktok'] ?? '' }}" target="_blank">
                            <img src="{{ asset('public/images/icon_tiktok.png') }}" alt=""/>					</a>
                                    </span>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer_banner">
            <a href="{{ $banner->url }}" title="{{ $banner->title }}"><img style="
    width: 60%;position: absolute;
    bottom: 12%;
    right: 2%;
}" decoding="async" src="https://duhocskypacific.top/cms/public/uploads/2023/07/22/CÁC-NƯỚC-WEB-CHUẨN.png" alt="Banner top trang chủ 1" style="width:100%;height:100%" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="https://duhocskypacific.top/cms/public/uploads/2023/07/22/CÁC-NƯỚC-WEB-CHUẨN.png" data-no-retina=""></a>
        </div>
    </footer>
    <footer class="elementor-section elementor-top-section elementor-element elementor-element-e701c35 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e701c35" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-32e671e" data-id="32e671e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-677ccbe elementor-widget elementor-widget-text-editor" data-id="677ccbe" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <span><i>Copyright © {{ date('Y') }}</i> skypacificedu, <i>All rights reserved</i></span></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
