<div id="sticky-wrapper" class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1541197" data-id="1541197" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated" style="position: relative;">
        <div class="elementor-element elementor-element-b056f95 elementor-widget elementor-widget-template elementor-section--handles-inside" data-id="b056f95" data-element_type="widget" data-settings=""
             data-widget_type="template.default" style="margin-top: 0px; margin-bottom: 0px; inset-inline-start: 10px; bottom: 0px;">
            <div class="elementor-widget-container">
                <div class="elementor-template">
                    <div data-elementor-type="section" data-elementor-id="1231" class="elementor elementor-1231 elementor-location-archive">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-66ae81d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66ae81d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fdda8dc" data-id="fdda8dc" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated sticky">
                                        <div class="elementor-element elementor-element-86ecef6 elementor-widget elementor-widget-heading" data-id="86ecef6" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-large" style="font-size:15pt !important;color:#181818 !important;">DANH SÁCH BÀI VIẾT GỢI Ý</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1c5f801 elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-left elementor-grid-mobile-1 elementor-widget elementor-widget-archive-posts" data-id="1c5f801" data-element_type="widget"
                                             data-settings="{&quot;archive_classic_columns&quot;:&quot;1&quot;,&quot;archive_classic_columns_tablet&quot;:&quot;1&quot;,&quot;archive_classic_columns_mobile&quot;:&quot;1&quot;,&quot;archive_classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pagination_type&quot;:&quot;numbers&quot;}"
                                             data-widget_type="archive-posts.archive_classic">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                                    @if (!empty($otherPosts->toArray()))
                                                        @foreach ($otherPosts as $post)
                                                            <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                                <a class="elementor-post__thumbnail__link" href="{{ url($post->share_url) }}" title="{{ $post->title }}">
                                                                    <div class="elementor-post__thumbnail">
                                                                        <img width="525" height="300" src="{{ env('FOLDER_UPLOAD') . $post->thumbnail_url }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="{{ $post->title }}" data-ll-status="loaded">
                                                                    </div>
                                                                </a>
                                                                <div class="elementor-post__text">
                                                                    <h3 class="elementor-post__title">
                                                                        <a href="{{ url($post->share_url) }}" title="{{ $post->title }}" style="font-size:15px;line-height:20px;color:#363636 !important">
                                                                            {{ $post->title }}
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                            </article>
                                                            <hr style="margin-bottom:15px"/>
                                                        @endforeach
                                                    @else
                                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                            <a class="elementor-post__thumbnail__link" href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                                <div class="elementor-post__thumbnail">
                                                                    <img width="525" height="300" src="https://duhocskypacific.top/public/images/bg_duhoc.jpg" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                                </div>
                                                            </a>
                                                            <div class="elementor-post__text">
                                                                <h3 class="elementor-post__title">
                                                                    <a href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html" style="font-size:15px;line-height:20px;color:#363636 !important">
                                                                        Danh sách trung tâm tư vấn du học Mỹ TP.HCM: Cách chọn uy tín, không lòng vòng
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                        <hr style="margin-bottom:15px"/>
                                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                            <a class="elementor-post__thumbnail__link" href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                                <div class="elementor-post__thumbnail">
                                                                    <img width="525" height="300" src="https://duhocskypacific.top/public/images/bg_duhoc.jpg" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                                </div>
                                                            </a>
                                                            <div class="elementor-post__text">
                                                                <h3 class="elementor-post__title">
                                                                    <a href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html" style="font-size:15px;line-height:20px;color:#363636 !important">
                                                                        Du học Mỹ nên chọn ngành gì? Top 10 ngành dễ xin việc & thu nhập cao
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                        <hr style="margin-bottom:15px"/>
                                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                            <a class="elementor-post__thumbnail__link" href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                                <div class="elementor-post__thumbnail">
                                                                    <img width="525" height="300" src="https://duhocskypacific.top/public/images/bg_duhoc.jpg" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                                </div>
                                                            </a>
                                                            <div class="elementor-post__text">
                                                                <h3 class="elementor-post__title">
                                                                    <a href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html" style="font-size:15px;line-height:20px;color:#363636 !important">
                                                                        Danh sách trung tâm tư vấn du học Mỹ TP.HCM: Cách chọn uy tín, không lòng vòng
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                        <hr style="margin-bottom:15px"/>
                                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                            <a class="elementor-post__thumbnail__link" href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                                <div class="elementor-post__thumbnail">
                                                                    <img width="525" height="300" src="https://duhocskypacific.top/public/images/bg_duhoc.jpg" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                                </div>
                                                            </a>
                                                            <div class="elementor-post__text">
                                                                <h3 class="elementor-post__title">
                                                                    <a href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html" style="font-size:15px;line-height:20px;color:#363636 !important">
                                                                        Du học Mỹ nên chọn ngành gì? Top 10 ngành dễ xin việc & thu nhập cao
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                        <hr style="margin-bottom:15px"/>
                                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                            <a class="elementor-post__thumbnail__link" href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                                <div class="elementor-post__thumbnail">
                                                                    <img width="525" height="300" src="https://duhocskypacific.top/public/images/bg_duhoc.jpg" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                                </div>
                                                            </a>
                                                            <div class="elementor-post__text">
                                                                <h3 class="elementor-post__title">
                                                                    <a href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html" style="font-size:15px;line-height:20px;color:#363636 !important">
                                                                        Danh sách trung tâm tư vấn du học Mỹ TP.HCM: Cách chọn uy tín, không lòng vòng
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                        <hr style="margin-bottom:15px"/>
                                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                            <a class="elementor-post__thumbnail__link" href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                                <div class="elementor-post__thumbnail">
                                                                    <img width="525" height="300" src="https://duhocskypacific.top/public/images/bg_duhoc.jpg" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                                </div>
                                                            </a>
                                                            <div class="elementor-post__text">
                                                                <h3 class="elementor-post__title">
                                                                    <a href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html" style="font-size:15px;line-height:20px;color:#363636 !important">
                                                                        Du học Mỹ nên chọn ngành gì? Top 10 ngành dễ xin việc & thu nhập cao
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                        <hr style="margin-bottom:15px"/>
                                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                            <a class="elementor-post__thumbnail__link" href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                                <div class="elementor-post__thumbnail">
                                                                    <img width="525" height="300" src="https://duhocskypacific.top/public/images/bg_duhoc.jpg" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                                </div>
                                                            </a>
                                                            <div class="elementor-post__text">
                                                                <h3 class="elementor-post__title">
                                                                    <a href="https://duhocskypacific.top/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html" style="font-size:15px;line-height:20px;color:#363636 !important">
                                                                        Danh sách trung tâm tư vấn du học Mỹ TP.HCM: Cách chọn uy tín, không lòng vòng
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                        <hr/>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @if (isset($widget_consultation_right_banner))
                                            <?php echo html_entity_decode($widget_consultation_right_banner->content) ?>
                                        @else
                                            @if ($widget_scholarship_right_banner)
                                                <?php echo html_entity_decode($widget_scholarship_right_banner->content) ?>
                                            @else
                                                <a href="" title=""><img src="{{ asset('public/images/banner_3.jpg') }}" alt=""/></a>
                                            @endif
                                        @endif
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
