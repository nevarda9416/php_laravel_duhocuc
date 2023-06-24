@if (!empty($partners->toArray()))
    <section class="elementor-section elementor-top-section elementor-element elementor-element-9594080 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9594080" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f00ae6" data-id="6f00ae6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-fee8db8 elementor-widget elementor-widget-heading" data-id="fee8db8" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-large">ĐỐI TÁC</h3></div>
                    </div>
                    <div class="elementor-element elementor-element-80b927a elementor-skin-carousel elementor-arrows-yes elementor-widget elementor-widget-media-carousel" data-id="80b927a" data-element_type="widget"
                         data-settings="{&quot;slides_per_view&quot;:&quot;5&quot;,&quot;slides_per_view_tablet&quot;:&quot;4&quot;,&quot;slides_per_view_mobile&quot;:&quot;2&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;skin&quot;:&quot;carousel&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}"
                         data-widget_type="media-carousel.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-swiper">
                                <div class="elementor-main-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($partners as $partner)
                                            <div class="swiper-slide">
                                                <div data-bg="{{ env('FOLDER_UPLOAD') . $partner->logo }}" class="elementor-carousel-image rocket-lazyload" role="img" aria-label="logo-lincoln-uni-large" style=""></div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0">
                                        <i aria-hidden="true" class="eicon-chevron-left"></i> <span class="elementor-screen-only">Previous</span>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0">
                                        <i aria-hidden="true" class="eicon-chevron-right"></i> <span class="elementor-screen-only">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6c6c892 elementor-widget elementor-widget-spacer" data-id="6c6c892" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
