@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        <section class="elementor-section elementor-top-section elementor-element elementor-element-49fc4ca elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="49fc4ca" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                 style="background:#fff">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-70 elementor-top-column elementor-element elementor-element-2009f73" data-id="2009f73" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated" style="position:relative">
                        <div class="elementor-element elementor-element-3f639ea elementor-widget elementor-widget-heading elementor-align-center" data-id="3f639ea" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default" style="font-size:14pt !important;font-weight:bold;color:#181818 !important">CHƯƠNG TRÌNH HỘI THẢO SẮP DIỄN RA</h2>
                            </div>
                        </div>
                        @if ($widget_seminar_middle_banner)
                            <?php echo html_entity_decode($widget_seminar_middle_banner->content) ?>
                        @else
                            <div class="elementor-element elementor-element-9e97130 sukien_csss elementor-widget elementor-widget-jet-blog-smart-listing" data-id="9e97130" data-element_type="widget" data-widget_type="jet-blog-smart-listing.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-jet-blog-smart-listing jet-blog">
                                        <div class="jet-smart-listing-wrap"
                                             data-settings='{&quot;block_title&quot;:&quot;&quot;,&quot;title_tag&quot;:&quot;h2&quot;,&quot;featured_post&quot;:&quot;&quot;,&quot;featured_position&quot;:null,&quot;featured_width&quot;:null,&quot;featured_layout&quot;:null,&quot;featured_image_size&quot;:null,&quot;featured_image_position&quot;:null,&quot;featured_image_width&quot;:null,&quot;featured_excerpt_length&quot;:null,&quot;featured_excerpt_trimmed_ending&quot;:null,&quot;featured_read_more&quot;:null,&quot;featured_read_more_text&quot;:null,&quot;featured_show_meta&quot;:null,&quot;featured_show_author&quot;:null,&quot;featured_show_author_icon&quot;:null,&quot;selected_featured_show_author_icon&quot;:null,&quot;featured_show_date&quot;:null,&quot;featured_show_date_icon&quot;:null,&quot;selected_featured_show_date_icon&quot;:null,&quot;featured_show_comments&quot;:null,&quot;featured_show_comments_icon&quot;:null,&quot;selected_featured_show_comments_icon&quot;:null,&quot;posts_columns_widescreen&quot;:null,&quot;posts_columns&quot;:1,&quot;posts_columns_laptop&quot;:null,&quot;posts_columns_tablet_extra&quot;:null,&quot;posts_columns_tablet&quot;:null,&quot;posts_columns_mobile_extra&quot;:null,&quot;posts_columns_mobile&quot;:null,&quot;posts_rows&quot;:&quot;4&quot;,&quot;image_size&quot;:null,&quot;image_position&quot;:null,&quot;image_width&quot;:null,&quot;excerpt_length&quot;:&quot;&quot;,&quot;excerpt_trimmed_ending&quot;:&quot;...&quot;,&quot;read_more&quot;:&quot;&quot;,&quot;read_more_text&quot;:null,&quot;show_meta&quot;:&quot;&quot;,&quot;show_author&quot;:null,&quot;show_author_icon&quot;:null,&quot;selected_show_author_icon&quot;:null,&quot;show_date&quot;:null,&quot;show_date_icon&quot;:null,&quot;selected_show_date_icon&quot;:null,&quot;show_comments&quot;:null,&quot;show_comments_icon&quot;:null,&quot;selected_show_comments_icon&quot;:null,&quot;query_by&quot;:&quot;category&quot;,&quot;category_ids&quot;:[&quot;232&quot;],&quot;post_tag_ids&quot;:null,&quot;include_ids&quot;:null,&quot;exclude_ids&quot;:&quot;&quot;,&quot;custom_query_by&quot;:null,&quot;custom_terms_ids&quot;:null,&quot;meta_query&quot;:&quot;&quot;,&quot;meta_key&quot;:null,&quot;meta_value&quot;:null,&quot;show_filter&quot;:&quot;&quot;,&quot;filter_by&quot;:null,&quot;show_all_btn&quot;:null,&quot;all_btn_label&quot;:null,&quot;more_terms_icon&quot;:null,&quot;selected_more_terms_icon&quot;:null,&quot;show_arrows&quot;:&quot;&quot;,&quot;arrow_type&quot;:null,&quot;show_featured_terms&quot;:null,&quot;show_featured_terms_tax&quot;:null,&quot;show_terms&quot;:&quot;&quot;,&quot;show_terms_tax&quot;:null,&quot;featured_meta_position&quot;:null,&quot;meta_position&quot;:null,&quot;show_image&quot;:&quot;&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;post_ids&quot;:null,&quot;content_related_meta&quot;:[{&quot;meta_label&quot;:&quot;&lt;i class=\&quot;fas fa-clock\&quot;&gt;&lt;\/i&gt; Th\u1eddi gian:&quot;,&quot;_id&quot;:&quot;328d225&quot;,&quot;meta_key&quot;:&quot;sukien_thoigian&quot;,&quot;meta_format&quot;:&quot;%s&quot;,&quot;date_format&quot;:null,&quot;meta_callback&quot;:&quot;&quot;},{&quot;meta_label&quot;:&quot;&lt;i class=\&quot;fas fa-map-marker-alt\&quot;&gt;&lt;\/i&gt;&ensp;\u0110\u1ecba \u0111i\u1ec3m: &quot;,&quot;meta_key&quot;:&quot;sukien_diadiem&quot;,&quot;meta_format&quot;:&quot;%s&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;eedb6a8&quot;,&quot;meta_callback&quot;:&quot;&quot;}],&quot;show_content_related_meta&quot;:&quot;yes&quot;,&quot;meta_content_related_position&quot;:&quot;before&quot;,&quot;title_related_meta&quot;:[{&quot;meta_key&quot;:&quot;sukien_thu&quot;,&quot;meta_format&quot;:&quot;%s&lt;div class=\&quot;sukien_thu\&quot;&gt;&lt;\/div&gt;&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;919ff8e&quot;,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;},{&quot;_id&quot;:&quot;b5d8a5a&quot;,&quot;meta_key&quot;:&quot;sukien_ngay&quot;,&quot;meta_format&quot;:&quot;&lt;span class=\&quot;sukien_ngay\&quot;&gt;%s&lt;\/span&gt;&quot;,&quot;date_format&quot;:null,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;},{&quot;meta_key&quot;:&quot;sukien_thang&quot;,&quot;meta_format&quot;:&quot;&lt;span class=\&quot;sukien_thang\&quot;&gt;%s&lt;\/span&gt;&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;c11bf79&quot;,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;}],&quot;show_title_related_meta&quot;:&quot;yes&quot;,&quot;meta_title_related_position&quot;:&quot;before&quot;,&quot;featured_title_length&quot;:null,&quot;title_length&quot;:0,&quot;add_button_icon&quot;:&quot;&quot;,&quot;button_icon&quot;:null,&quot;selected_button_icon&quot;:null,&quot;post_add_button_icon&quot;:&quot;&quot;,&quot;post_button_icon&quot;:null,&quot;selected_post_button_icon&quot;:null,&quot;use_custom_query&quot;:&quot;&quot;,&quot;custom_query&quot;:null,&quot;posts_offset&quot;:0,&quot;order&quot;:&quot;DESC&quot;,&quot;order_by&quot;:&quot;date&quot;,&quot;is_archive_template&quot;:&quot;&quot;}'
                                             data-page="1" data-term="0" data-scroll-top=>
                                            <div class="jet-smart-listing__heading"><span class="jet-smart-listing__title-placeholder"></span></div>
                                            <div class="jet-smart-listing rows-4 no-featured">
                                                <div class="jet-smart-listing__posts">
                                                    <img src="{{ asset('public/images/banner_5.jpg') }}" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jet-smart-listing-loading"></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($widget_seminar_middle_banner->link)
                            <a href="{{ $widget_seminar_middle_banner->link }}" title="CHƯƠNG TRÌNH HỘI THẢO SẮP DIỄN RA">
                                <button class="elementor-button elementor-size-md" style="background-color:#00aeef;border-color:#00aeef;padding:10px 30px;position:absolute;bottom:30%;right:5%" id="btn_contact">
                                    <span>
                                        <span class=" elementor-button-icon"></span>
                                        <span class="elementor-button-text">CHI TIẾT</span>
                                    </span>
                                </button>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-3890473" data-id="3890473" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3f639ea elementor-widget elementor-widget-heading elementor-align-center" data-id="3f639ea" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default" style="margin-bottom:20px"></h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9e97130 sukien_csss elementor-widget elementor-widget-jet-blog-smart-listing" data-id="9e97130" data-element_type="widget" data-widget_type="jet-blog-smart-listing.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-jet-blog-smart-listing jet-blog">
                                    <div class="jet-smart-listing-wrap"
                                         data-settings='{&quot;block_title&quot;:&quot;&quot;,&quot;title_tag&quot;:&quot;h2&quot;,&quot;featured_post&quot;:&quot;&quot;,&quot;featured_position&quot;:null,&quot;featured_width&quot;:null,&quot;featured_layout&quot;:null,&quot;featured_image_size&quot;:null,&quot;featured_image_position&quot;:null,&quot;featured_image_width&quot;:null,&quot;featured_excerpt_length&quot;:null,&quot;featured_excerpt_trimmed_ending&quot;:null,&quot;featured_read_more&quot;:null,&quot;featured_read_more_text&quot;:null,&quot;featured_show_meta&quot;:null,&quot;featured_show_author&quot;:null,&quot;featured_show_author_icon&quot;:null,&quot;selected_featured_show_author_icon&quot;:null,&quot;featured_show_date&quot;:null,&quot;featured_show_date_icon&quot;:null,&quot;selected_featured_show_date_icon&quot;:null,&quot;featured_show_comments&quot;:null,&quot;featured_show_comments_icon&quot;:null,&quot;selected_featured_show_comments_icon&quot;:null,&quot;posts_columns_widescreen&quot;:null,&quot;posts_columns&quot;:1,&quot;posts_columns_laptop&quot;:null,&quot;posts_columns_tablet_extra&quot;:null,&quot;posts_columns_tablet&quot;:null,&quot;posts_columns_mobile_extra&quot;:null,&quot;posts_columns_mobile&quot;:null,&quot;posts_rows&quot;:&quot;4&quot;,&quot;image_size&quot;:null,&quot;image_position&quot;:null,&quot;image_width&quot;:null,&quot;excerpt_length&quot;:&quot;&quot;,&quot;excerpt_trimmed_ending&quot;:&quot;...&quot;,&quot;read_more&quot;:&quot;&quot;,&quot;read_more_text&quot;:null,&quot;show_meta&quot;:&quot;&quot;,&quot;show_author&quot;:null,&quot;show_author_icon&quot;:null,&quot;selected_show_author_icon&quot;:null,&quot;show_date&quot;:null,&quot;show_date_icon&quot;:null,&quot;selected_show_date_icon&quot;:null,&quot;show_comments&quot;:null,&quot;show_comments_icon&quot;:null,&quot;selected_show_comments_icon&quot;:null,&quot;query_by&quot;:&quot;category&quot;,&quot;category_ids&quot;:[&quot;232&quot;],&quot;post_tag_ids&quot;:null,&quot;include_ids&quot;:null,&quot;exclude_ids&quot;:&quot;&quot;,&quot;custom_query_by&quot;:null,&quot;custom_terms_ids&quot;:null,&quot;meta_query&quot;:&quot;&quot;,&quot;meta_key&quot;:null,&quot;meta_value&quot;:null,&quot;show_filter&quot;:&quot;&quot;,&quot;filter_by&quot;:null,&quot;show_all_btn&quot;:null,&quot;all_btn_label&quot;:null,&quot;more_terms_icon&quot;:null,&quot;selected_more_terms_icon&quot;:null,&quot;show_arrows&quot;:&quot;&quot;,&quot;arrow_type&quot;:null,&quot;show_featured_terms&quot;:null,&quot;show_featured_terms_tax&quot;:null,&quot;show_terms&quot;:&quot;&quot;,&quot;show_terms_tax&quot;:null,&quot;featured_meta_position&quot;:null,&quot;meta_position&quot;:null,&quot;show_image&quot;:&quot;&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;post_ids&quot;:null,&quot;content_related_meta&quot;:[{&quot;meta_label&quot;:&quot;&lt;i class=\&quot;fas fa-clock\&quot;&gt;&lt;\/i&gt; Th\u1eddi gian:&quot;,&quot;_id&quot;:&quot;328d225&quot;,&quot;meta_key&quot;:&quot;sukien_thoigian&quot;,&quot;meta_format&quot;:&quot;%s&quot;,&quot;date_format&quot;:null,&quot;meta_callback&quot;:&quot;&quot;},{&quot;meta_label&quot;:&quot;&lt;i class=\&quot;fas fa-map-marker-alt\&quot;&gt;&lt;\/i&gt;&ensp;\u0110\u1ecba \u0111i\u1ec3m: &quot;,&quot;meta_key&quot;:&quot;sukien_diadiem&quot;,&quot;meta_format&quot;:&quot;%s&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;eedb6a8&quot;,&quot;meta_callback&quot;:&quot;&quot;}],&quot;show_content_related_meta&quot;:&quot;yes&quot;,&quot;meta_content_related_position&quot;:&quot;before&quot;,&quot;title_related_meta&quot;:[{&quot;meta_key&quot;:&quot;sukien_thu&quot;,&quot;meta_format&quot;:&quot;%s&lt;div class=\&quot;sukien_thu\&quot;&gt;&lt;\/div&gt;&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;919ff8e&quot;,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;},{&quot;_id&quot;:&quot;b5d8a5a&quot;,&quot;meta_key&quot;:&quot;sukien_ngay&quot;,&quot;meta_format&quot;:&quot;&lt;span class=\&quot;sukien_ngay\&quot;&gt;%s&lt;\/span&gt;&quot;,&quot;date_format&quot;:null,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;},{&quot;meta_key&quot;:&quot;sukien_thang&quot;,&quot;meta_format&quot;:&quot;&lt;span class=\&quot;sukien_thang\&quot;&gt;%s&lt;\/span&gt;&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;c11bf79&quot;,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;}],&quot;show_title_related_meta&quot;:&quot;yes&quot;,&quot;meta_title_related_position&quot;:&quot;before&quot;,&quot;featured_title_length&quot;:null,&quot;title_length&quot;:0,&quot;add_button_icon&quot;:&quot;&quot;,&quot;button_icon&quot;:null,&quot;selected_button_icon&quot;:null,&quot;post_add_button_icon&quot;:&quot;&quot;,&quot;post_button_icon&quot;:null,&quot;selected_post_button_icon&quot;:null,&quot;use_custom_query&quot;:&quot;&quot;,&quot;custom_query&quot;:null,&quot;posts_offset&quot;:0,&quot;order&quot;:&quot;DESC&quot;,&quot;order_by&quot;:&quot;date&quot;,&quot;is_archive_template&quot;:&quot;&quot;}'
                                         data-page="1" data-term="0" data-scroll-top=>
                                        <div class="jet-smart-listing__heading"><span class="jet-smart-listing__title-placeholder"></span></div>
                                        <div class="jet-smart-listing rows-4 no-featured">
                                            <div class="jet-smart-listing__posts">
                                                @if (!empty($listSeminars->toArray()))
                                                    @foreach($listSeminars as $post)
                                                        <div class="jet-smart-listing__post-wrapper">
                                                            <div class="jet-smart-listing__post has-thumb-postion-" style="border:none">
                                                                <div class="jet-smart-listing__post-content">
                                                                    <div class="jet-title-fields" style="background:#00aeef">
                                                                        <div class="jet-title-fields__item">
                                                                            <div class="jet-title-fields__item-value" style="border-bottom: 2px solid #fff;"><span class="sukien_ngay" style="color:#fff">
                                                                                    {{ date('d', $post->date) }}
                                                                                </span></div>
                                                                        </div>
                                                                        <div class="jet-title-fields__item">
                                                                            <div class="jet-title-fields__item-value"><span class="sukien_thang" style="color:#fff">Tháng {{ date('m', $post->date) }}</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="jet-smart-listing__post-title post-title-simple" style="padding-top:0"><a href="{{ url($post->share_url) }}" title="{{ $post->title }}" style="color:#181818 !important">{{ $post->title }}</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="margin:10px 0 15px;background:#d4d4d4;width:100%"/>
                                                    @endforeach
                                                @else
                                                    <div class="jet-smart-listing__post-wrapper">
                                                        <div class="jet-smart-listing__post has-thumb-postion-" style="border:none">
                                                            <div class="jet-smart-listing__post-content">
                                                                <div class="jet-title-fields" style="background:#00aeef">
                                                                    <div class="jet-title-fields__item">
                                                                        <div class="jet-title-fields__item-value" style="border-bottom: 2px solid #fff;"><span class="sukien_ngay" style="color:#fff">12</span></div>
                                                                    </div>
                                                                    <div class="jet-title-fields__item">
                                                                        <div class="jet-title-fields__item-value"><span class="sukien_thang" style="color:#fff">Tháng 9</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="jet-smart-listing__post-title post-title-simple" style="padding-top:0"><a href="{{ url('gap-go-dai-dien-truong-hoc-vien-dai-hoc-crown-uc-cihe-thang-5-nam-2023.html') }}" style="color:#181818 !important">Gặp gỡ đại diện Trường Học viện Đại học Crown, Úc (CIHE) tháng 5 năm 2023</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin:10px 0 15px;background:#d4d4d4;width:100%"/>
                                                    <div class="jet-smart-listing__post-wrapper">
                                                        <div class="jet-smart-listing__post has-thumb-postion-" style="border:none">
                                                            <div class="jet-smart-listing__post-content">
                                                                <div class="jet-title-fields" style="background:#00aeef">
                                                                    <div class="jet-title-fields__item">
                                                                        <div class="jet-title-fields__item-value" style="border-bottom: 2px solid #fff;"><span class="sukien_ngay" style="color:#fff">11</span></div>
                                                                    </div>
                                                                    <div class="jet-title-fields__item">
                                                                        <div class="jet-title-fields__item-value"><span class="sukien_thang" style="color:#fff">Tháng 5</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="jet-smart-listing__post-title post-title-simple" style="padding-top:0"><a href="{{ url('gap-go-truong-niagara-college-truong-dao-tao-quan-tri-kinh-doanh-nau-an-du-lich-khach-san-noi-tieng-nhat-canada.html') }}" style="color:#181818 !important">Gặp gỡ Trường Niagara, College &#8211; Trường đào tạo quản trị kinh doanh nổi tiếng nhất Canada</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin:10px 0 15px;background:#d4d4d4;width:100%"/>
                                                    <div class="jet-smart-listing__post-wrapper">
                                                        <div class="jet-smart-listing__post has-thumb-postion-" style="border:none">
                                                            <div class="jet-smart-listing__post-content">
                                                                <div class="jet-title-fields" style="background:#00aeef">
                                                                    <div class="jet-title-fields__item">
                                                                        <div class="jet-title-fields__item-value" style="border-bottom: 2px solid #fff;"><span class="sukien_ngay" style="color:#fff">17</span></div>
                                                                    </div>
                                                                    <div class="jet-title-fields__item">
                                                                        <div class="jet-title-fields__item-value"><span class="sukien_thang" style="color:#fff">Tháng 4</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="jet-smart-listing__post-title post-title-simple" style="padding-top:0"><a href="{{ url('gap-go-truong-dai-hoc-southern-cross-uc-nam-trong-danh-sach-100-truong-dai-hoc-tre-xuat-sac-nhat-the-gioi.html') }}" style="color:#181818 !important">Gặp gỡ Trường Đại học Southern Cross, Úc nằm trong danh sách 100 trường đại học</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
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
        @include('homepage.video')
    </div>
@endsection
