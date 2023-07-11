@extends('layouts.default')
@section('content')
    <style>
        @media (max-width: 767px) {
            .elementor-949 .elementor-element.elementor-element-094cfd2, .elementor-949 .elementor-element.elementor-element-6caaeb8, .elementor-949 .elementor-element.elementor-element-3f0fc51 {
                width: 100%;
            }
        }
    </style>
    <div data-elementor-type="wp-page" data-elementor-id="949" class="elementor elementor-949">
        @include('widgets.banner')
        @if ($widget_about_description)
            <?php echo html_entity_decode($widget_about_description->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-0492c4d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0492c4d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62c25f5" data-id="62c25f5" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9b186df elementor-widget elementor-widget-heading elementor-align-center" data-id="9b186df" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-large"><span>VỀ CHÚNG TÔI</span></h3></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-5f4ef81 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5f4ef81" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;margin-top:0">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7da0902" data-id="7da0902" data-element_type="column" style="width:50%">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-665c08c elementor-widget elementor-widget-image" data-id="665c08c" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="600" height="400" src="{{ asset('public/images/gioithieu_1.jpg') }}" class="attachment-full size-full wp-image-10700 entered lazyloaded" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2c9b4ea" data-id="2c9b4ea" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="width:50%">
                        <div class="elementor-widget-wrap elementor-element-populated" style="padding-top:0">
                            <div class="elementor-element elementor-element-7efb957 elementor-blockquote--skin-border elementor-blockquote--button-color-official elementor-widget elementor-widget-blockquote" data-id="7efb957" data-element_type="widget" data-widget_type="blockquote.default">
                                <div class="elementor-widget-container">
                                    <blockquote>
                                        <div class="e-q-footer">
                                            <cite class="elementor-blockquote__author" style="font-size:20px;color:#00aeef">Dòng tiêu đề</cite>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6b0d568 elementor-widget elementor-widget-text-editor" data-id="6b0d568" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Đối với học sinh Việt Nam mong muốn chuẩn bị kiến thức tiếng tốt để tự tin DU HỌC ĐẠI HỌC thành công tại các quốc gia, SKY PACIFIC EDU được biết đến là một TRUNG TÂM TIẾNG ANH DU HỌC ĐẠI HỌC chất lượng cao hàng đầu Việt Nam.</p>
                                    <p>Không giống như ở các đơn vị đào tạo tiếng Đức đại trà khác, chương trình đào tạo tiếng Đức của Sky Pacific edu được thiết kế riêng biệt, CHUYÊN phục vụ mục đích DU HỌC.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2c9b4ea" data-id="2c9b4ea" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="width:50%">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7efb957 elementor-blockquote--skin-border elementor-blockquote--button-color-official elementor-widget elementor-widget-blockquote" data-id="7efb957" data-element_type="widget" data-widget_type="blockquote.default">
                                <div class="elementor-widget-container">
                                    <blockquote>
                                        <div class="e-q-footer">
                                            <cite class="elementor-blockquote__author" style="font-size:20px;color:#00aeef">Dòng tiêu đề</cite>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6b0d568 elementor-widget elementor-widget-text-editor" data-id="6b0d568" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Đối với học sinh Việt Nam mong muốn chuẩn bị kiến thức tiếng tốt để tự tin DU HỌC ĐẠI HỌC thành công tại các quốc gia, SKY PACIFIC EDU được biết đến là một TRUNG TÂM TIẾNG ANH DU HỌC ĐẠI HỌC chất lượng cao hàng đầu Việt Nam.</p>
                                    <p>Không giống như ở các đơn vị đào tạo tiếng Đức đại trà khác, chương trình đào tạo tiếng Đức của Sky Pacific edu được thiết kế riêng biệt, CHUYÊN phục vụ mục đích DU HỌC.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7da0902" data-id="7da0902" data-element_type="column" style="width:50%">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-665c08c elementor-widget elementor-widget-image" data-id="665c08c" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="600" height="400" src="{{ asset('public/images/gioithieu_2.jpg') }}" class="attachment-full size-full wp-image-10700 entered lazyloaded" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7da0902" data-id="7da0902" data-element_type="column" style="width:50%">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-665c08c elementor-widget elementor-widget-image" data-id="665c08c" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img width="600" height="400" src="{{ asset('public/images/gioithieu_3.jpg') }}" class="attachment-full size-full wp-image-10700 entered lazyloaded" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2c9b4ea" data-id="2c9b4ea" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="width:50%">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7efb957 elementor-blockquote--skin-border elementor-blockquote--button-color-official elementor-widget elementor-widget-blockquote" data-id="7efb957" data-element_type="widget" data-widget_type="blockquote.default">
                                <div class="elementor-widget-container">
                                    <blockquote>
                                        <div class="e-q-footer">
                                            <cite class="elementor-blockquote__author" style="font-size:20px;color:#00aeef">Dòng tiêu đề</cite>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6b0d568 elementor-widget elementor-widget-text-editor" data-id="6b0d568" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Đối với học sinh Việt Nam mong muốn chuẩn bị kiến thức tiếng tốt để tự tin DU HỌC ĐẠI HỌC thành công tại các quốc gia, SKY PACIFIC EDU được biết đến là một TRUNG TÂM TIẾNG ANH DU HỌC ĐẠI HỌC chất lượng cao hàng đầu Việt Nam.</p>
                                    <p>Không giống như ở các đơn vị đào tạo tiếng Đức đại trà khác, chương trình đào tạo tiếng Đức của Sky Pacific edu được thiết kế riêng biệt, CHUYÊN phục vụ mục đích DU HỌC.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if ($widget_about_why_skypacific)
            <?php echo html_entity_decode($widget_about_why_skypacific->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-3bb0cbe elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3bb0cbe" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-91f0399" data-id="91f0399" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b11d8f3 elementor-widget elementor-widget-heading elementor-align-center" data-id="b11d8f3" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-large">VÌ SAO NÊN CHỌN DU HỌC SKY PACIFIC EDU</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-49c257e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="49c257e" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9b30e98" data-id="9b30e98" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated" style="background-color:#00aeef">
                            <div class="elementor-element elementor-element-deaeec1 elementor-widget elementor-widget-counter" data-id="deaeec1" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" style="font-size:30px">9 Năm</span>
                                            <span class="elementor-counter-number-suffix"></span>
                                        </div>
                                        <div class="elementor-counter-title">Kinh nghiệm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5345b22" data-id="5345b22" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated" style="background-color:#502c84">
                            <div class="elementor-element elementor-element-788e75e elementor-widget elementor-widget-counter" data-id="788e75e" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" style="font-size:30px">8 Quốc gia</span>
                                            <span class="elementor-counter-number-suffix"></span>
                                        </div>
                                        <div class="elementor-counter-title">Du học</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c16eabd" data-id="c16eabd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated" style="background-color:#00aeef">
                            <div class="elementor-element elementor-element-e3947cb elementor-widget elementor-widget-counter" data-id="e3947cb" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" style="font-size:30px">900+ Trường</span>
                                            <span class="elementor-counter-number-suffix"></span>
                                        </div>
                                        <div class="elementor-counter-title">Liên kết trực tiếp</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ae41c71" data-id="ae41c71" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated" style="background-color:#502c84">
                            <div class="elementor-element elementor-element-a91541c elementor-widget elementor-widget-counter" data-id="a91541c" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" style="font-size:30px">2000+ Học sinh</span>
                                            <span class="elementor-counter-number-suffix"></span>
                                        </div>
                                        <div class="elementor-counter-title">Đỗ Visa du học</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section class="elementor-section elementor-top-section elementor-element elementor-element-be00313 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="be00313" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;background:#fff">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9e80f93" data-id="9e80f93" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-9c00e38 elementor-widget elementor-widget-heading elementor-align-left" data-id="9c00e38" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-large">BAN LÃNH ĐẠO</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-a534846 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a534846" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;background:#fff">
            <div class="elementor-container elementor-column-gap-default" style="height:auto">
                <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-094cfd2" data-id="094cfd2" data-element_type="column" style="position:relative;margin:0 2%;height:500px">
                    <div class="elementor-element elementor-element-8fed26c elementor-widget elementor-widget-image" data-id="8fed26c" data-element_type="widget" data-widget_type="image.default" style="position:absolute;top:0;left:0;width:100%;z-index:1">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="400" height="400" src="{{ asset('public/images/lanhdao_1.png') }}" class="attachment-large size-large wp-image-10693 entered lazyloaded" alt="" style="width:300px;border:10px solid #00aeef">
                        </div>
                    </div>
                    <div class="elementor-widget-wrap elementor-element-populated" style="background:#dcc5fd;position:absolute;height:300px;top:200px">
                        <div class="elementor-element elementor-element-32a38fc elementor-widget elementor-widget-text-editor" data-id="32a38fc" data-element_type="widget" data-widget_type="text-editor.default" style="color:#000;padding-top:120px">
                            <div class="elementor-widget-container">
                                <p style="text-align: center;"><strong>LÊ THU HUYỀN</strong></p>
                                <p style="text-align: center;">Phó giám đốc</p>
                                <p style="text-align: center;">"Chúng tôi sẽ luôn nỗ lực để hỗ trợ thật tốt cho các em học sinh trên hành trình chinh phục tương lai"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-6caaeb8" data-id="6caaeb8" data-element_type="column" style="position:relative;margin:0 2%;height:500px">
                    <div class="elementor-element elementor-element-8cbe6e1 elementor-widget elementor-widget-image" data-id="8cbe6e1" data-element_type="widget" data-widget_type="image.default" style="position:absolute;top:0;left:0;width:100%;z-index:1">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="400" height="400" src="{{ asset('public/images/lanhdao_2.png') }}" class="attachment-large size-large wp-image-10693 entered lazyloaded" alt="" style="width:300px;border:10px solid #00aeef">
                        </div>
                    </div>
                    <div class="elementor-widget-wrap elementor-element-populated" style="background:#dcc5fd;position:absolute;height:300px;top:200px">
                        <div class="elementor-element elementor-element-a725374 elementor-widget elementor-widget-text-editor" data-id="a725374" data-element_type="widget" data-widget_type="text-editor.default" style="color:#000;padding-top:120px">
                            <div class="elementor-widget-container">
                                <p style="text-align: center;"><strong>LÊ THU HUYỀN</strong></p>
                                <p style="text-align: center;">Phó giám đốc</p>
                                <p style="text-align: center;">"Chúng tôi sẽ luôn nỗ lực để hỗ trợ thật tốt cho các em học sinh trên hành trình chinh phục tương lai"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3f0fc51" data-id="3f0fc51" data-element_type="column" style="position:relative;margin:0 2%;height:500px">
                    <div class="elementor-element elementor-element-8cdfdf9 elementor-widget elementor-widget-image" data-id="8cdfdf9" data-element_type="widget" data-widget_type="image.default" style="position:absolute;top:0;left:0;width:100%;z-index:1">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="400" height="400" src="{{ asset('public/images/lanhdao_3.png') }}" class="attachment-large size-large wp-image-10693 entered lazyloaded" alt="" style="width:300px;border:10px solid #00aeef">
                        </div>
                    </div>
                    <div class="elementor-widget-wrap elementor-element-populated" style="background:#dcc5fd;position:absolute;height:300px;top:200px">
                        <div class="elementor-element elementor-element-406a492 elementor-widget elementor-widget-text-editor" data-id="406a492" data-element_type="widget" data-widget_type="text-editor.default" style="color:#000;padding-top:120px">
                            <div class="elementor-widget-container">
                                <p style="text-align: center;"><strong>LÊ THU HUYỀN</strong></p>
                                <p style="text-align: center;">Phó giám đốc</p>
                                <p style="text-align: center;">"Chúng tôi sẽ luôn nỗ lực để hỗ trợ thật tốt cho các em học sinh trên hành trình chinh phục tương lai"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -->
        <section class="elementor-section elementor-top-section elementor-element elementor-element-be00313 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="be00313" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;padding:40px 0 20px;background:#fff">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9e80f93" data-id="9e80f93" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-9c00e38 elementor-widget elementor-widget-heading elementor-align-left" data-id="9c00e38" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-large">ĐỘI NGŨ GIÁO VIÊN VÀ NHÂN VIÊN</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-a534846 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a534846" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;background:#fff">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-094cfd2" data-id="094cfd2" data-element_type="column" style="width:23%;margin:0 1% 0 1%">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8fed26c elementor-widget elementor-widget-image" data-id="8fed26c" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="400" height="400" src="{{ asset('public/images/nhansu_1.png') }}" class="attachment-large size-large wp-image-10693 entered lazyloaded" alt="" style="border: 10px solid #ebebeb">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-32a38fc elementor-widget elementor-widget-text-editor" data-id="32a38fc" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container" style="color:#000">
                                <p style="text-align: center;"><strong>LÊ THU HUYỀN</strong></p>
                                <p style="text-align: center;">Giáo viên tiếng Trung</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-6caaeb8" data-id="6caaeb8" data-element_type="column" style="width:23%;margin:0 1% 0 1%">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8cbe6e1 elementor-widget elementor-widget-image" data-id="8cbe6e1" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="400" height="400" src="{{ asset('public/images/nhansu_2.png') }}" class="attachment-large size-large wp-image-10693 entered lazyloaded" alt="" style="border: 10px solid #ebebeb">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a725374 elementor-widget elementor-widget-text-editor" data-id="a725374" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container" style="color:#000">
                                <p style="text-align: center;"><strong>LÊ THU HUYỀN</strong></p>
                                <p style="text-align: center;">Giáo viên tiếng Trung</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-3f0fc51" data-id="3f0fc51" data-element_type="column" style="width:23%;margin:0 1% 0 1%">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8cdfdf9 elementor-widget elementor-widget-image" data-id="8cdfdf9" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="400" height="400" src="{{ asset('public/images/nhansu_3.png') }}" class="attachment-large size-large wp-image-10693 entered lazyloaded" alt="" style="border: 10px solid #ebebeb">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-406a492 elementor-widget elementor-widget-text-editor" data-id="406a492" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container" style="color:#000">
                                <p style="text-align: center;"><strong>LÊ THU HUYỀN</strong></p>
                                <p style="text-align: center;">Giáo viên tiếng Trung</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-7415412" data-id="7415412" data-element_type="column" style="width:23%;margin:0 1% 0 1%">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-09a85f5 elementor-widget elementor-widget-image" data-id="09a85f5" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="400" height="400" src="{{ asset('public/images/nhansu_4.png') }}" class="attachment-large size-large wp-image-10693 entered lazyloaded" alt="" style="border: 10px solid #ebebeb">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-dc0dd34 elementor-widget elementor-widget-text-editor" data-id="dc0dd34" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container" style="color:#000">
                                <p style="text-align: center;margin-bottom:5px"><strong>LÊ THU HUYỀN</strong></p>
                                <p style="text-align: center;">Giáo viên tiếng Trung</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
            @if ($widget_about_picture)
                <?php echo html_entity_decode($widget_about_picture->content) ?>
            @else
                <section class="elementor-section elementor-top-section elementor-element elementor-element-ada7582 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ada7582" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;background:#fff;padding-bottom:0">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fa9242" data-id="6fa9242" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-0ed1dfc elementor-widget elementor-widget-heading" data-id="0ed1dfc" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-large">HÌNH ẢNH VỀ SKY PACIFIC EDU</h3></div>
                                </div>
                                <div class="elementor-element elementor-element-2804b5b elementor-widget elementor-widget-jet-blog-smart-listing" data-id="2804b5b" data-element_type="widget" data-widget_type="jet-blog-smart-listing.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-jet-blog-smart-listing jet-blog">
                                            <div class="jet-smart-listing-wrap"
                                                 data-settings="{&quot;block_title&quot;:&quot;&quot;,&quot;title_tag&quot;:&quot;h3&quot;,&quot;featured_post&quot;:&quot;yes&quot;,&quot;featured_position&quot;:&quot;left&quot;,&quot;featured_width&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;featured_layout&quot;:&quot;simple&quot;,&quot;featured_image_size&quot;:&quot;medium_large&quot;,&quot;featured_image_position&quot;:&quot;top&quot;,&quot;featured_image_width&quot;:null,&quot;featured_excerpt_length&quot;:30,&quot;featured_excerpt_trimmed_ending&quot;:&quot;...&quot;,&quot;featured_read_more&quot;:&quot;&quot;,&quot;featured_read_more_text&quot;:null,&quot;featured_show_meta&quot;:&quot;yes&quot;,&quot;featured_show_author&quot;:&quot;yes&quot;,&quot;featured_show_author_icon&quot;:null,&quot;selected_featured_show_author_icon&quot;:{&quot;value&quot;:&quot;fas fa-user&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;featured_show_date&quot;:&quot;yes&quot;,&quot;featured_show_date_icon&quot;:null,&quot;selected_featured_show_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-calendar-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;featured_show_comments&quot;:&quot;&quot;,&quot;featured_show_comments_icon&quot;:null,&quot;selected_featured_show_comments_icon&quot;:null,&quot;posts_columns_widescreen&quot;:null,&quot;posts_columns&quot;:&quot;1&quot;,&quot;posts_columns_laptop&quot;:null,&quot;posts_columns_tablet_extra&quot;:null,&quot;posts_columns_tablet&quot;:null,&quot;posts_columns_mobile_extra&quot;:null,&quot;posts_columns_mobile&quot;:null,&quot;posts_rows&quot;:&quot;4&quot;,&quot;image_size&quot;:&quot;medium&quot;,&quot;image_position&quot;:&quot;left&quot;,&quot;image_width&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:29,&quot;sizes&quot;:[]},&quot;excerpt_length&quot;:20,&quot;excerpt_trimmed_ending&quot;:&quot;...&quot;,&quot;read_more&quot;:&quot;&quot;,&quot;read_more_text&quot;:null,&quot;show_meta&quot;:&quot;yes&quot;,&quot;show_author&quot;:&quot;yes&quot;,&quot;show_author_icon&quot;:null,&quot;selected_show_author_icon&quot;:{&quot;value&quot;:&quot;fas fa-user&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;show_date&quot;:&quot;yes&quot;,&quot;show_date_icon&quot;:null,&quot;selected_show_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-calendar-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;show_comments&quot;:&quot;&quot;,&quot;show_comments_icon&quot;:null,&quot;selected_show_comments_icon&quot;:null,&quot;query_by&quot;:&quot;category&quot;,&quot;category_ids&quot;:[&quot;10&quot;],&quot;post_tag_ids&quot;:null,&quot;include_ids&quot;:null,&quot;exclude_ids&quot;:&quot;&quot;,&quot;custom_query_by&quot;:null,&quot;custom_terms_ids&quot;:null,&quot;meta_query&quot;:&quot;&quot;,&quot;meta_key&quot;:null,&quot;meta_value&quot;:null,&quot;show_filter&quot;:&quot;&quot;,&quot;filter_by&quot;:null,&quot;show_all_btn&quot;:null,&quot;all_btn_label&quot;:null,&quot;more_terms_icon&quot;:null,&quot;selected_more_terms_icon&quot;:null,&quot;show_arrows&quot;:&quot;&quot;,&quot;arrow_type&quot;:null,&quot;show_featured_terms&quot;:&quot;&quot;,&quot;show_featured_terms_tax&quot;:null,&quot;show_terms&quot;:&quot;&quot;,&quot;show_terms_tax&quot;:null,&quot;featured_meta_position&quot;:&quot;after-excerpt&quot;,&quot;meta_position&quot;:&quot;after-excerpt&quot;,&quot;show_image&quot;:&quot;yes&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;post_ids&quot;:null,&quot;content_related_meta&quot;:null,&quot;show_content_related_meta&quot;:&quot;&quot;,&quot;meta_content_related_position&quot;:null,&quot;title_related_meta&quot;:null,&quot;show_title_related_meta&quot;:&quot;&quot;,&quot;meta_title_related_position&quot;:null,&quot;featured_title_length&quot;:0,&quot;title_length&quot;:&quot;&quot;,&quot;add_button_icon&quot;:&quot;&quot;,&quot;button_icon&quot;:null,&quot;selected_button_icon&quot;:null,&quot;post_add_button_icon&quot;:&quot;&quot;,&quot;post_button_icon&quot;:null,&quot;selected_post_button_icon&quot;:null,&quot;use_custom_query&quot;:&quot;&quot;,&quot;custom_query&quot;:null,&quot;posts_offset&quot;:0,&quot;order&quot;:&quot;DESC&quot;,&quot;order_by&quot;:&quot;date&quot;,&quot;is_archive_template&quot;:&quot;&quot;}"
                                                 data-page="1" data-term="0" data-scroll-top="">
                                                <div class="jet-smart-listing__heading"><span class="jet-smart-listing__title-placeholder"></span>
                                                </div>
                                                <div class="jet-smart-listing rows-4 has-featured-position-left" style="margin-bottom:0">
                                                    <div class="jet-smart-listing__featured featured-layout-simple featured-position-left featured-img-top has-post-thumb">
                                                        <div class="jet-smart-listing__post-thumbnail post-thumbnail-featured"><a href="https://newocean.edu.vn/gap-go-truong-centennial-college-truong-college-cong-lap-dung-dau-danh-sach-lua-chon-cua-hoc-sinh-quoc-te-tai-canada.html"><img width="768" height="576" src="{{ asset('public/images/duhoc_1.jpg') }}"
                                                                                                                                                                                                                                                                                                class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-featured wp-post-image entered lazyloaded"
                                                                                                                                                                                                                                                                                                alt="">
                                                                <noscript><img width="768" height="576" src="https://newocean.edu.vn/wp-content/uploads/2023/05/Event-Centennial-College-768x576.jpg" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-featured wp-post-image" alt="Gặp gỡ Trường Centennial College – Trường College Công lập đứng đầu danh sách lựa chọn của học sinh quốc tế tại Canada" decoding="async"
                                                                               srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/Event-Centennial-College-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/Event-Centennial-College-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/Event-Centennial-College.jpg 800w" sizes="(max-width: 768px) 100vw, 768px"/></noscript>
                                                            </a></div>
                                                    </div>
                                                    <div class="jet-smart-listing__featured featured-layout-simple featured-position-left featured-img-top has-post-thumb">
                                                        <div class="jet-smart-listing__post has-post-thumb has-thumb-postion-left" style="margin:0">
                                                            <div class="jet-smart-listing__post-thumbnail"><a href="https://newocean.edu.vn/thong-bao-lich-nghi-du-lich-thuong-nien-nam-2023.html"><img width="400" height="300" src="{{ asset('public/images/duhoc_2.jpg') }}" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image entered lazyloaded" alt="">
                                                                </a></div>
                                                            <div class="jet-smart-listing__post-thumbnail"><a href="https://newocean.edu.vn/ky-thi-aeis-vao-cac-truong-pho-thong-cong-lap-singapore.html"><img width="400" height="300" src="{{ asset('public/images/duhoc_3.jpg') }}" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image entered lazyloaded" alt="">
                                                                </a></div>
                                                        </div>

                                                        <div class="has-post-thumb has-thumb-postion-left">
                                                            <div class="jet-smart-listing__post-thumbnail"><a href="https://newocean.edu.vn/hoc-vien-quan-ly-nanyang-singapore.html"><img width="400" height="300" src="{{ asset('public/images/duhoc_4.jpg') }}" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image entered lazyloaded" alt="">
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            @include('homepage.partner')
        </div>
    </div>
@endsection
