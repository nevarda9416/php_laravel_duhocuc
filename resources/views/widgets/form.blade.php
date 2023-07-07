<style>
    select, ::placeholder { /* Most modern browsers support this now. */
        color: #818a91 !important;
        font-size: 14px !important;
    }
</style>
@if (isset(request()->segments()[0]) && request()->segments()[0] === 'du-hoc')
    <section class="elementor-section elementor-top-section elementor-element elementor-element-3bb0cbe elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3bb0cbe" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;padding-top: 30px">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-91f0399" data-id="91f0399" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b11d8f3 elementor-widget elementor-widget-heading elementor-align-center" data-id="b11d8f3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-large">ĐĂNG KÝ TƯ VẤN DU HỌC {{ mb_strtoupper(str_replace('Du học ', '', $page->title ?? '')) }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<section class="elementor-section elementor-top-section elementor-element elementor-element-393752b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="393752b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d43ce87" data-id="d43ce87" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                @if (empty(request()->segments()))
                    <div class="elementor-element elementor-element-69cd730 elementor-widget elementor-widget-theme-page-title elementor-page-title elementor-widget-heading" data-id="69cd730" data-element_type="widget" data-widget_type="theme-page-title.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-large" style="margin-left:10px;color: #181818 !important">FORM ĐĂNG KÝ TƯ VẤN</h1></div>
                    </div>
                @endif
                <div class="elementor-element elementor-element-18754d6 elementor-widget elementor-widget-heading" data-id="18754d6" data-element_type="widget" data-widget_type="heading.default">
                    @if (isset(request()->segments()[0]) && request()->segments()[0] === 'goc-tu-van' || (isset(request()->segments()[0]) && request()->segments()[0] === 'lien-he'))
                        <img src="{{ asset('public/images/form_tuvan_1.jpg') }}" alt=""/>
                    @else
                        <img src="{{ asset('public/images/form_tuvan.jpg') }}" alt=""/>
                    @endif
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b642215" data-id="b642215" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-86c8255 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="86c8255" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                    <div class="elementor-widget-container">
                        <form class="elementor-form" method="post" name="New Form" id="form_contact">
                            {{ csrf_field() }}
                            <div class="elementor-form-fields-wrapper elementor-labels-" style="margin-top:45px">
                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                    <label for="fullname" class="elementor-field-label elementor-screen-only">
                                        Name </label>
                                    <input size="1" type="text" name="form_fields[fullname]" id="fullname" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Tên*" required="required" aria-required="true">
                                </div>
                                <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required" style="width:47%;margin-right:3%">
                                    <label for="email" class="elementor-field-label elementor-screen-only">
                                        Email </label>
                                    <input size="1" type="email" name="form_fields[email]" id="email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email*" required="required" aria-required="true">
                                </div>
                                <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_3fde122 elementor-col-100 elementor-field-required" style="width:47%;margin-left:3%">
                                    <label for="telephone" class="elementor-field-label elementor-screen-only">
                                        Điện thoại </label>
                                    <input size="1" type="number" name="form_fields[telephone]" id="telephone" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Phone*" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                </div>
                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_fc5bc25 elementor-col-100">
                                    <label for="country" class="elementor-field-label elementor-screen-only">
                                        Chủ đề </label>
                                    <select name="form_fields[country]" id="country" class="elementor-field elementor-size-sm elementor-field-textual">
                                        <option value="0">Quốc gia bạn muốn du học</option>
                                        @if (!empty($countries->toArray()))
                                            @foreach($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                    <label for="note" class="elementor-field-label elementor-screen-only">
                                        Message </label>
                                    <input size="1" type="text" name="form_fields[note]" id="note" class="elementor-field elementor-size-sm elementor-field-textual" placeholder="Lời nhắn" aria-required="false">
                                    <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                        <button type="submit" class="elementor-button elementor-size-md" style="background-color:#00aeef" id="btn_contact">
						<span>
															<span class=" elementor-button-icon">
																										</span>
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
