<div data-elementor-type="footer" data-elementor-id="20951" class="elementor elementor-20951 elementor-location-footer">
    <footer class="elementor-section elementor-top-section elementor-element elementor-element-0b13df5 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0b13df5" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-043701e" data-id="043701e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-822d460 elementor-widget elementor-widget-heading" data-id="822d460" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default" style="color:#FFF !important">THÔNG TIN LIÊN HỆ</h4></div>
                    </div>
                    <div class="elementor-element elementor-element-b5b89f7 elementor-widget elementor-widget-text-editor" data-id="b5b89f7" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container elementor-kit-10750">
                            <p><strong>{{ $setting['company_contact'] ?? '' }}</strong></p>
                            <p><a href="{{ $setting['website_contact'] ?? '' }}">{{ $setting['website_contact'] ?? '' }}</a></p>
                            <p><a href="mailto:{{ $setting['email_contact'] ?? '' }}">{{ $setting['email_contact'] ?? '' }}</a></p>
                            <p><a href="tel:{{ $setting['telephone_contact'] ?? '' }}">{{ $setting['telephone_contact'] ?? '' }}</a></p>
                            <p>{{ $setting['address_contact'] ?? '' }}</p>
                            <p>
                            <div class="elementor-social-icons-wrapper elementor-flex">
<span class="elementor-grid-item" style="margin-right:5px">
					<a href="{{ $setting['youtube'] ?? '' }}" target="_blank">
						<img src="{{ asset('public/images/icon_youtube.png') }}" alt=""/>					</a>
</span>
                                <span class="elementor-grid-item" style="margin-right:7px">
					<a href="{{ $setting['twitter'] ?? '' }}" target="_blank">
						<img src="{{ asset('public/images/icon_twitter.png') }}" alt=""/>				</a>
                                </span>
                                <span class="elementor-grid-item">
					<a href="{{ $setting['google'] ?? '' }}" target="_blank">
						<img src="{{ asset('public/images/icon_google.png') }}" alt=""/>					</a>
                                </span>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-13415ba" data-id="13415ba" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c060e94 elementor-widget elementor-widget-heading" data-id="c060e94" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default" style="color:#FFF !important">HỖ TRỢ KHÁCH HÀNG</h4></div>
                    </div>
                    @if (!empty($setting['copyright_right']))
                        <?php echo html_entity_decode($setting['copyright_right']) ?>
                    @else
                        <div class="elementor-element elementor-element-016c223 elementor-widget elementor-widget-text-editor" data-id="016c223" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Hotline tư vấn Hà Nội : <a href="tel:0964562233">096 456 2233</a> <span class="small-text">(8-21h kể cả T7, CN)</span></p>
                                <p>Hotline tư vấn TP.HCM : <a href="tel:0964561122">096 456 1122</a> <span class="small-text">(8-21h kể cả T7, CN)</span></p>
                                <p>Giờ làm việc: T2-T6 8h-17h; T7 8h-12h; CN nghỉ</p></div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6840879" data-id="6840879" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-343962e elementor-widget elementor-widget-heading" data-id="343962e" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default" style="color:#FFF !important">ĐĂNG KÝ NHẬN TIN</h4></div>
                    </div>
                    <div class="elementor-element elementor-element-45629c2 elementor-widget elementor-widget-text-editor" data-id="45629c2" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Đừng bỏ lỡ những thông tin du học hữu ích cập nhật liên tục trên Skypacificedu</p></div>
                    </div>
                    <div class="elementor-element elementor-element-72cbe67 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="72cbe67" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;33&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width_mobile&quot;:&quot;40&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                         data-widget_type="form.default">
                        <div class="elementor-widget-container">
                            <form class="elementor-form" method="post" name="New Form" action="{{ url('register/newsletter_subcriber') }}">
                                {{ csrf_field() }}
                                <div class="elementor-form-fields-wrapper elementor-labels-">
                                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-66 elementor-sm-60 elementor-field-required">
                                        <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                                            Email </label>
                                        <input size="1" type="email" name="email" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Nhập email của bạn" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-33 e-form__buttons elementor-sm-40" style="align-items:flex-start !important">
                                        <button type="submit" class="elementor-button elementor-size-sm" style="background-color:#00aeef">
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
                </div>
            </div>
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
