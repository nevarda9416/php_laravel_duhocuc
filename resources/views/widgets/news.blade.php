<section class="elementor-section elementor-top-section elementor-element elementor-element-1a09e34 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a09e34" data-element_type="section" id="dangky" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;padding:40px 0 30px 0">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f43cf97" data-id="f43cf97" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-a514669 elementor-widget elementor-widget-heading elementor-align-center" data-id="a514669" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-large">TIN TỨC DU HỌC</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-dfc4a60 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dfc4a60" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;padding-bottom:40px">
    <div class="elementor-container elementor-column-gap-default">
        @if (!empty($list_posts->toArray()))
            @foreach ($list_posts as $post)
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-04a6641" data-id="04a6641" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a3e863c elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="a3e863c" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper" style="background: #f2f2f2;">
                                    <div class="elementor-icon-box-icon" style="margin-bottom:0;position:relative;height:190px">
                                        <a href="{{ url($post->share_url) }}" title="{{ $post->title }}">
                                            <img src="{{ env('FOLDER_UPLOAD') . $post->thumbnail_url }}" alt="{{ $post->title }}" style="height:100%"/>
                                            <span style="position:absolute;left:0;top:30%;color:#FFF;font-weight:bold;display:none">{{ substr($post->excerpt, 0, 100) }}</span>
                                        </a>
                                    </div>
                                    <div class="elementor-icon-box-content elementor-align-left" style="padding:10px">
                                        <p class="elementor-icon-box-title" style="height:75px;margin-bottom:5px">
                                            <span><a href="{{ url($post->share_url) }}" title="{{ $post->title }}">{{ substr($post->title, 0, 100) }}</a></span>
                                        </p>
                                        <p class="elementor-icon-box-description" style="height:75px;font-size:1rem">
                                            <?php echo substr(html_entity_decode($post->excerpt), 0, 100) ?>
                                        </p>
                                        <p class="elementor-align-right" style="margin:0.5rem 0"><i>{{ date('d', strtotime($post->created_at)) . ' tháng ' . date('m', strtotime($post->created_at)) . ' năm ' . date('Y', strtotime($post->created_at)) }}</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-04a6641" data-id="04a6641" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a3e863c elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="a3e863c" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper" style="background: #f2f2f2;">
                                <div class="elementor-icon-box-icon" style="margin-bottom:0;position:relative">
                                    <img src="{{ asset('public/images/duhoc_5.jpg') }}" alt=""/>
                                    <span style="position:absolute;left:0;top:30%;color:#FFF;font-weight:bold">Tham gia các câu lạc bộ và cộng đồng sinh viên khi du học Úc</span>
                                </div>
                                <div class="elementor-icon-box-content elementor-align-left" style="padding:10px">
                                    <p class="elementor-icon-box-title">
                                        <span>3 lý do bạn nên tham gia các câu lạc bộ và cộng đồng sinh viên khi du học Úc</span>
                                    </p>
                                    <p class="elementor-icon-box-description" style="font-size:1rem">
                                        Các bạn du học sinh Việt Nam khi đến với đất nước Úc đều được chào đón nồng nhiệt trong tuần lễ O-Week (tuần lễ chào đón sinh viên). Trong những ngày này, các bạn sẽ có rất nhiều...
                                    </p>
                                    <p class="elementor-align-right" style="margin:0.5rem 0"><i>26 tháng 4 năm 2023</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-04a6641" data-id="04a6641" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a3e863c elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="a3e863c" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper" style="background: #f2f2f2;">
                                <div class="elementor-icon-box-icon" style="margin-bottom:0;position:relative">
                                    <img src="{{ asset('public/images/duhoc_6.jpg') }}" alt=""/>
                                    <span style="position:absolute;left:0;top:30%;color:#FFF;font-weight:bold">Tham gia các câu lạc bộ và cộng đồng sinh viên khi du học Úc</span>
                                </div>
                                <div class="elementor-icon-box-content elementor-align-left" style="padding:10px">
                                    <p class="elementor-icon-box-title">
                                        <span>3 lý do bạn nên tham gia các câu lạc bộ và cộng đồng sinh viên khi du học Úc</span>
                                    </p>
                                    <p class="elementor-icon-box-description" style="font-size:1rem">
                                        Các bạn du học sinh Việt Nam khi đến với đất nước Úc đều được chào đón nồng nhiệt trong tuần lễ O-Week (tuần lễ chào đón sinh viên). Trong những ngày này, các bạn sẽ có rất nhiều...
                                    </p>
                                    <p class="elementor-align-right" style="margin:0.5rem 0"><i>26 tháng 4 năm 2023</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-04a6641" data-id="04a6641" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a3e863c elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="a3e863c" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper" style="background: #f2f2f2;">
                                <div class="elementor-icon-box-icon" style="margin-bottom:0;position:relative">
                                    <img src="{{ asset('public/images/duhoc_7.jpg') }}" alt=""/>
                                    <span style="position:absolute;left:0;top:30%;color:#FFF;font-weight:bold">Tham gia các câu lạc bộ và cộng đồng sinh viên khi du học Úc</span>
                                </div>
                                <div class="elementor-icon-box-content elementor-align-left" style="padding:10px">
                                    <p class="elementor-icon-box-title">
                                        <span>3 lý do bạn nên tham gia các câu lạc bộ và cộng đồng sinh viên khi du học Úc</span>
                                    </p>
                                    <p class="elementor-icon-box-description" style="font-size:1rem">
                                        Các bạn du học sinh Việt Nam khi đến với đất nước Úc đều được chào đón nồng nhiệt trong tuần lễ O-Week (tuần lễ chào đón sinh viên). Trong những ngày này, các bạn sẽ có rất nhiều...
                                    </p>
                                    <p class="elementor-align-right" style="margin:0.5rem 0"><i>26 tháng 4 năm 2023</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-04a6641" data-id="04a6641" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a3e863c elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="a3e863c" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper" style="background: #f2f2f2;">
                                <div class="elementor-icon-box-icon" style="margin-bottom:0;position:relative">
                                    <img src="{{ asset('public/images/duhoc_8.jpg') }}" alt=""/>
                                    <span style="position:absolute;left:0;top:30%;color:#FFF;font-weight:bold">Tham gia các câu lạc bộ và cộng đồng sinh viên khi du học Úc</span>
                                </div>
                                <div class="elementor-icon-box-content elementor-align-left" style="padding:10px">
                                    <p class="elementor-icon-box-title">
                                        <span>3 lý do bạn nên tham gia các câu lạc bộ và cộng đồng sinh viên khi du học Úc</span>
                                    </p>
                                    <p class="elementor-icon-box-description" style="font-size:1rem">
                                        Các bạn du học sinh Việt Nam khi đến với đất nước Úc đều được chào đón nồng nhiệt trong tuần lễ O-Week (tuần lễ chào đón sinh viên). Trong những ngày này, các bạn sẽ có rất nhiều...
                                    </p>
                                    <p class="elementor-align-right" style="margin:0.5rem 0"><i>26 tháng 4 năm 2023</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
