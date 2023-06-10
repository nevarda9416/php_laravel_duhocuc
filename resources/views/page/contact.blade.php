@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="949" class="elementor elementor-949">
        @include('widgets.banner')
        <main class="elementor-section elementor-top-section elementor-element elementor-element-78364a7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78364a7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-505ddae" data-id="505ddae" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section data-id="393752b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-40 elementor-top-column elementor-element elementor-element-d43ce87" data-id="d43ce87" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-69cd730 elementor-widget elementor-widget-theme-page-title elementor-page-title elementor-widget-heading" data-id="69cd730" data-element_type="widget" data-widget_type="theme-page-title.default">
                                            <div class="elementor-widget-container">
                                                <h1 class="elementor-heading-title elementor-size-large" style="margin-left:10px">FORM ĐĂNG KÝ TƯ VẤN</h1></div>
                                        </div>
                                        <div class="elementor-element elementor-element-18754d6 elementor-widget elementor-widget-heading" data-id="18754d6" data-element_type="widget" data-widget_type="heading.default">
                                            <img src="{{ asset('public/images/form_tuvan_1.jpg') }}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-60 elementor-top-column elementor-element elementor-element-b642215" data-id="b642215" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-86c8255 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="86c8255" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                                            <div class="elementor-widget-container">
                                                <form class="elementor-form" method="post" name="New Form">
                                                    <input type="hidden" name="post_id" value="951">
                                                    <input type="hidden" name="form_id" value="86c8255">
                                                    <input type="hidden" name="referer_title" value="Liên hệ - Du học New Ocean™">

                                                    <input type="hidden" name="queried_id" value="951">

                                                    <div class="elementor-form-fields-wrapper elementor-labels-" style="margin-top:45px">
                                                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                                            <label for="form-field-name" class="elementor-field-label elementor-screen-only">
                                                                Name </label>
                                                            <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Tên*" required="required" aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required" style="width:47%;margin-right:3%">
                                                            <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                                                                Email </label>
                                                            <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email*" required="required" aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_3fde122 elementor-col-100 elementor-field-required" style="width:47%;margin-left:3%">
                                                            <label for="form-field-field_3fde122" class="elementor-field-label elementor-screen-only">
                                                                Điện thoại </label>
                                                            <input size="1" type="tel" name="form_fields[field_3fde122]" id="form-field-field_3fde122" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Phone*" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                                        </div>
                                                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_fc5bc25 elementor-col-100">
                                                            <label for="form-field-field_fc5bc25" class="elementor-field-label elementor-screen-only">
                                                                Chủ đề </label>
                                                            <select name="form_fields[field_fc5bc25]" id="form-field-field_fc5bc25" class="elementor-field elementor-size-sm elementor-field-textual">
                                                                <option value="">Quốc gia bạn muốn du học</option>
                                                            </select>
                                                        </div>
                                                        <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                                            <label for="form-field-message" class="elementor-field-label elementor-screen-only">
                                                                Message </label>
                                                            <input size="1" type="text" name="form_fields[message]" id="form-field-message" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="Lời nhắn" aria-required="false">
                                                            <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                                <button type="submit" class="elementor-button elementor-size-md" style="background-color:#00aeef" id="btn_contact">
						                                            <span>
															            <span class=" elementor-button-icon"></span>
                                                                        <span class="elementor-button-text">LIÊN HỆ NGAY</span>
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
                        </section>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1541197" data-id="1541197" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated" style="position: relative;">
                        <div class="elementor-element elementor-element-b056f95 elementor-widget elementor-widget-template elementor-sticky elementor-sticky--active elementor-section--handles-inside elementor-sticky--effects" data-id="b056f95" data-element_type="widget" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;sticky_offset&quot;:20,&quot;sticky_parent&quot;:&quot;yes&quot;,&quot;sticky_effects_offset&quot;:0}"
                             data-widget_type="template.default" style="margin-top: 0px; margin-bottom: 0px; inset-inline-start: 10px; bottom: 0px;">
                            <div class="elementor-widget-container">
                                <div class="elementor-template">
                                    <div data-elementor-type="section" data-elementor-id="1231" class="elementor elementor-1231 elementor-location-archive">
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-66ae81d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66ae81d" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fdda8dc" data-id="fdda8dc" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <a href="" title=""><img src="{{ asset('public/images/banner_3.jpg') }}" alt=""/></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
