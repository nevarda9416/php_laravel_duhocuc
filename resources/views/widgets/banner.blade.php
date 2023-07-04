<section class="elementor-section elementor-top-section elementor-element elementor-element-8d2a4c7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8d2a4c7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}"
style="padding-bottom:0">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a5fb2c5" data-id="a5fb2c5" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-bac50ba elementor-widget elementor-widget-slider_revolution" data-id="bac50ba" data-element_type="widget" data-widget_type="slider_revolution.default">
                    <div class="elementor-widget-container">
                        <div class="wp-block-themepunch-revslider">
                            <!-- START Slider 1 REVOLUTION SLIDER 6.5.31 --><p class="rs-p-wp-fix"></p>
                            <rs-module-wrap id="rev_slider_20_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                <rs-module id="rev_slider_20_1" style="" data-version="6.5.31">
                                    <rs-slides>
                                        @if (!empty($banners))
                                            @foreach($banners as $banner)
                                                <img decoding="async" src="{{ env('FOLDER_UPLOAD') . $banner->file }}" alt="{{ $banner->title }}" style="width:100%;height:100%" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ env('FOLDER_UPLOAD') . $banner->file }}" data-no-retina>
                                            @endforeach
                                        @else
                                            <rs-slide style="position: absolute;" data-key="rs-103" data-title="Slide" data-thumb="{{ asset('public/images/banner.jpg') }}" data-link="/" data-tag="l" data-target="_self" data-seoz="front" data-anim="f:slidebased;" data-in="o:1;y:(100%);m:true;col:5;" data-out="a:false;">
                                                <img decoding="async" src="{{ asset('public/images/banner.jpg') }}" alt="" title="poster canada" width="2297" height="822" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('public/images/banner.jpg') }}" data-no-retina>
                                            </rs-slide>
                                        @endif
                                    </rs-slides>
                                </rs-module>
                                <script>
                                    setREVStartSize({c: 'rev_slider_20_1', rl: [1240, 1240, 1240, 480], el: [400, 400, 400, 400], gw: [1120, 1120, 1120, 480], gh: [400, 400, 400, 400], type: 'standard', justify: '', layout: 'fullwidth', mh: "0"});
                                    if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider201"] !== undefined) {
                                        window.RS_MODULES.modules["revslider201"].once = false;
                                        window.revapi20 = undefined;
                                        if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                    }
                                </script>
                            </rs-module-wrap>
                            <!-- END REVOLUTION SLIDER -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
