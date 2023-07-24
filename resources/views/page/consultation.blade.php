@extends('layouts.default')
@section('content')
    <style>
        select, ::placeholder { /* Most modern browsers support this now. */
            color: #818a91 !important;
            font-size: 14px !important;
        }
    </style>
    <div data-elementor-type="wp-page" data-elementor-id="949" class="elementor elementor-949">
        @include('widgets.banner')
        <main class="elementor-section elementor-top-section elementor-element elementor-element-78364a7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78364a7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;
margin-top: 20px">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-505ddae" data-id="505ddae" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-86ecef6 elementor-widget elementor-widget-heading" data-id="86ecef6" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-large" style="font-size:15pt !important;color:#181818 !important;">GÓC TƯ VẤN</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1c5f801 elementor-grid-1 elementor-grid-tablet-1 elementor-posts--thumbnail-left elementor-grid-mobile-1 elementor-widget elementor-widget-archive-posts" data-id="1c5f801" data-element_type="widget"
                             data-settings="{&quot;archive_classic_columns&quot;:&quot;1&quot;,&quot;archive_classic_columns_tablet&quot;:&quot;1&quot;,&quot;archive_classic_columns_mobile&quot;:&quot;1&quot;,&quot;archive_classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pagination_type&quot;:&quot;numbers&quot;}"
                             data-widget_type="archive-posts.archive_classic">
                            <div class="elementor-widget-container">
                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid elementor-has-item-ratio">
                                    @if (!empty($listPosts->toArray()))
                                        @foreach($listPosts as $post)
                                            <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:5px">
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
                                                            {{ substr($post->excerpt, 0, 100) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach
                                        <hr style="margin-bottom:15px"/>
                                    @else
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:5px">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/duhoc_9.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
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
                                        <hr style="margin-bottom:15px"/>
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:5px">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/duhoc_10.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
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
                                        <hr style="margin-bottom:15px"/>
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:5px">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/duhoc_11.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
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
                                        <hr style="margin-bottom:15px"/>
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/duhoc_9.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
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
                                        <hr style="margin-bottom:15px"/>
                                        <article class="elementor-post elementor-grid-item post-20353 post type-post status-publish format-standard has-post-thumbnail hentry category-chuong-trinh-du-hoc category-tin-tuc-du-hoc tag-du-hoc-bac-thpt tag-du-hoc-cap-3 tag-du-hoc-thpt tag-du-hoc-trung-hoc" style="margin-bottom:5px">
                                            <a class="elementor-post__thumbnail__link" href="{{ url('/') }}/du-hoc-cap-3-diem-khac-nhau-giua-bang-ibdp-a-level-va-sace.html">
                                                <div class="elementor-post__thumbnail elementor-fit-height">
                                                    <img width="525" height="300" src="{{ asset('public/images/duhoc_10.jpg') }}" class="attachment-medium size-medium wp-image-20355 entered lazyloaded" alt="" data-ll-status="loaded">
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
                        <section data-id="393752b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-40 elementor-top-column elementor-element elementor-element-d43ce87" data-id="d43ce87" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated" style="padding:0">
                                        <div class="elementor-element elementor-element-69cd730 elementor-widget elementor-widget-theme-page-title elementor-page-title elementor-widget-heading" data-id="69cd730" data-element_type="widget" data-widget_type="theme-page-title.default">
                                            <div class="elementor-widget-container">
                                                <h1 class="elementor-heading-title elementor-size-large" style="margin-left:10px;font-size:15pt !important;color:#181818 !important;">FORM ĐĂNG KÝ TƯ VẤN</h1></div>
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
                    </div>
                </div>
                @include('widgets.col_right')
            </div>
        </main>
    </div>
@endsection
