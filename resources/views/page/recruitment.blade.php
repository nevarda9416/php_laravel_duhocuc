@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="949" class="elementor elementor-949">
        @include('widgets.banner')
        <section class="elementor-section elementor-top-section elementor-element elementor-element-7f52a3c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7f52a3c" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70b25de" data-id="70b25de" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-86ecef6 elementor-widget elementor-widget-heading" data-id="86ecef6" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-large" style="font-size:15pt !important;color:#181818 !important;margin-top: 20px;">TUYỂN DỤNG</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <main class="elementor-section elementor-top-section elementor-element elementor-element-78364a7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78364a7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-505ddae" data-id="505ddae" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1c5f801 elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-left elementor-grid-mobile-1 elementor-widget elementor-widget-archive-posts" data-id="1c5f801" data-element_type="widget"
                             data-settings="{&quot;archive_classic_columns&quot;:&quot;1&quot;,&quot;archive_classic_columns_tablet&quot;:&quot;1&quot;,&quot;archive_classic_columns_mobile&quot;:&quot;1&quot;,&quot;archive_classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pagination_type&quot;:&quot;numbers&quot;}"
                             data-widget_type="archive-posts.archive_classic">
                            <div class="elementor-widget-container">
                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid elementor-has-item-ratio">
                                    @if (!empty($listPosts->toArray()))
                                        @foreach($listPosts as $post)
                                            <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                                <a class="elementor-post__thumbnail__link" href="{{ url($post->share_url) }}" title="{{ $post->title }}">
                                                    <div class="elementor-post__thumbnail elementor-fit-height">
                                                        <img width="525" height="300" src="{{ env('FOLDER_UPLOAD') . $post->thumbnail_url }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="{{ $post->title }}" data-ll-status="loaded">
                                                    </div>
                                                </a>
                                                <div class="elementor-post__text">
                                                    <h3 class="elementor-post__title" style="line-height:25px;margin-bottom:15px">
                                                        <a href="{{ url($post->share_url) }}" title="{{ $post->title }}">
                                                            {{ $post->title }}
                                                        </a>
                                                    </h3>
                                                    <div class="elementor-post__excerpt">
                                                        <p style="line-height:25px;font-size:15px">
                                                            {{ $post->excerpt }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </article>
                                            <hr style="margin-bottom:15px;background:#d6d6d6"/>
                                        @endforeach
                                    @else
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/tuyendung_1.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                </div>
                                            </a>
                                            <div class="elementor-post__text">
                                                <h3 class="elementor-post__title" style="line-height:25px;margin-bottom:15px">
                                                    <a href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                        INEC tuyển dụng Nhân viên IT SKY PACIFIC EDU
                                                    </a>
                                                </h3>
                                                <div class="elementor-post__excerpt">
                                                    <p style="line-height:25px;font-size:15px">
                                                        Nối dài chuỗi giải thưởng đã đạt được trong năm 2022 & đầu 2023, ngày 22/5/2023, công ty Đức Anh vinh dự được nhận giải "High Achiever in Vietnam for 2022" do UTS-University of Technology Sydney trao tặng.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                        <hr style="margin-bottom:15px;background:#d6d6d6"/>
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/tuyendung_1.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                </div>
                                            </a>
                                            <div class="elementor-post__text">
                                                <h3 class="elementor-post__title" style="line-height:25px;margin-bottom:15px">
                                                    <a href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                        SKY PACIFIC EDU tuyển dụng Nhân viên SEO làm việc tại TP.HCM
                                                    </a>
                                                </h3>
                                                <div class="elementor-post__excerpt">
                                                    <p style="line-height:25px;font-size:15px">
                                                        Nối dài chuỗi giải thưởng đã đạt được trong năm 2022 & đầu 2023, ngày 22/5/2023, công ty Đức Anh vinh dự được nhận giải "High Achiever in Vietnam for 2022" do UTS-University of Technology Sydney trao tặng.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                        <hr style="margin-bottom:15px;background:#d6d6d6"/>
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/tuyendung_1.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                </div>
                                            </a>
                                            <div class="elementor-post__text">
                                                <h3 class="elementor-post__title" style="line-height:25px;margin-bottom:15px">
                                                    <a href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                        SKY PACIFIC EDU tuyển dụng Nhân viên Marketing làm việc tại TP.HCM
                                                    </a>
                                                </h3>
                                                <div class="elementor-post__excerpt">
                                                    <p style="line-height:25px;font-size:15px">
                                                        Nối dài chuỗi giải thưởng đã đạt được trong năm 2022 & đầu 2023, ngày 22/5/2023, công ty Đức Anh vinh dự được nhận giải "High Achiever in Vietnam for 2022" do UTS-University of Technology Sydney trao tặng.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                        <hr style="margin-bottom:15px;background:#d6d6d6"/>
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:15px">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/tuyendung_1.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                </div>
                                            </a>
                                            <div class="elementor-post__text">
                                                <h3 class="elementor-post__title" style="line-height:25px;margin-bottom:15px">
                                                    <a href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                        INEC tuyển dụng Nhân viên biên dịch, xử lý hồ sơ
                                                    </a>
                                                </h3>
                                                <div class="elementor-post__excerpt">
                                                    <p style="line-height:25px;font-size:15px">
                                                        Nối dài chuỗi giải thưởng đã đạt được trong năm 2022 & đầu 2023, ngày 22/5/2023, công ty Đức Anh vinh dự được nhận giải "High Achiever in Vietnam for 2022" do UTS-University of Technology Sydney trao tặng.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                        <hr style="margin-bottom:15px;background:#d6d6d6"/>
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/tuyendung_1.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
                                                </div>
                                            </a>
                                            <div class="elementor-post__text">
                                                <h3 class="elementor-post__title" style="line-height:25px;margin-bottom:15px">
                                                    <a href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                        Đức Anh A&T vinh dự nhận giải "HIGH ACHIEVER" từ UTS - Đại học trẻ tốt nhất ở Đức
                                                    </a>
                                                </h3>
                                                <div class="elementor-post__excerpt">
                                                    <p style="line-height:25px;font-size:15px">
                                                        Nối dài chuỗi giải thưởng đã đạt được trong năm 2022 & đầu 2023, ngày 22/5/2023, công ty Đức Anh vinh dự được nhận giải "High Achiever in Vietnam for 2022" do UTS-University of Technology Sydney trao tặng.
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    @endif
                                </div>
                                <div class="e-load-more-anchor" data-page="1" data-max-page="8" data-next-page="https://newocean.edu.vn/chuong-trinh-du-hoc/page/2"></div>
                                <nav class="elementor-pagination" aria-label="Pagination" style="display:none">
                                    <span aria-current="page" class="page-numbers current"><span class="elementor-screen-only">Page</span>1</span>
                                    <a class="page-numbers" href="{{ url('/') }}/chuong-trinh-du-hoc/page/2"><span class="elementor-screen-only">Page</span>2</a>
                                    <a class="page-numbers" href="{{ url('/') }}/chuong-trinh-du-hoc/page/3"><span class="elementor-screen-only">Page</span>3</a>
                                    <span class="page-numbers dots">…</span>
                                    <a class="page-numbers" href="{{ url('/') }}/chuong-trinh-du-hoc/page/5"><span class="elementor-screen-only">Page</span>5</a></nav>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($widget_recruitment_right_banner)
                    <?php echo html_entity_decode($widget_recruitment_right_banner->content) ?>
                @else
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
                                                            <a href="" title="" style="margin-top:25px"><img src="{{ asset('public/images/banner_4.jpg') }}" alt=""/></a>
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
                @endif
            </div>
        </main>
    </div>
@endsection
