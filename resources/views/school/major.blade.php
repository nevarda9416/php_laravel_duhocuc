@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        @if (!empty($categories->toArray()))
            <section class="elementor-section elementor-top-section elementor-element elementor-element-06153c3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="06153c3" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}"
                     style="background:#fff">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35d5e40" data-id="35d5e40" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
                            <div class="elementor-element elementor-element-49524d6 elementor-widget elementor-widget-heading animated fadeIn" data-id="49524d6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-large elementor-align-left">NGÀNH HỌC CÁC NƯỚC</h3>
                                </div>
                            </div>
                            @if ($widget_major_description)
                                <?php echo html_entity_decode($widget_major_description->content) ?>
                            @endif
                            @foreach ($categories as $category)
                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <a href="{{ url('nganh-hoc/' . $category->slug) }}" title="{{ $category->name }}"><img src="{{ env('FOLDER_UPLOAD') . $category->thumbnail_url }}" alt="{{ $category->name }}" style="max-width:87%"/></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-counter">
                                                    <div class="elementor-counter-title"><a href="{{ url('nganh-hoc/' . $category->slug) }}" title="{{ $category->name }}">{{ $category->name }}</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f284d95 elementor-widget elementor-widget-spacer" data-id="f284d95" data-element_type="widget" data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-df9f39d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="df9f39d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                     style="background:#fff">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-092491b" data-id="092491b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-80ef570 elementor-widget elementor-widget-heading elementor-align-left" data-id="80ef570" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-large">NHỮNG NGÀNH HỌC Ở ÚC</h3></div>
                            </div>
                            <div class="elementor-element elementor-element-c7ca10e elementor-widget elementor-widget-gallery" data-id="c7ca10e" data-element_type="widget"
                                 data-settings="{&quot;columns_tablet&quot;:3,&quot;columns_mobile&quot;:2,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;columns&quot;:5,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;aspect_ratio&quot;:&quot;3:2&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                                 data-widget_type="gallery.default">
                                <div class="elementor-widget-container">
                                    <p style="margin-bottom:40px">
                                        Ở giai đoạn một, các bạn có thể nhận học bổng 20%-50% học phí. Xét kết quả học tập bậc THPT và có chứng chỉ tiếng Anh quốc tế tương đương IELTS (Academic) 6.0 (các điểm thành phần 5.5) trở lên cho năm thứ nhất.<br/>
                                        Vào năm thứ hai, sinh viên có thể nhận được học bổng 30%-50% học phí, xét kết quả học tập 8 môn học đầu tiên trong năm 1 và có chứng chỉ tiếng Anh quốc tế PTE tăng ít nhất 1 bậc so với trình độ tiếng Anh đầu vào giai đoạn 1.
                                    </p>
                                    <div class="elementor-gallery__container">
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Học tiếng Anh
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Chăm sóc ý tế - Sức khỏe
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Công nghệ sinh học - Môi trường
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Hospitality
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Giáo dục và đào tạo
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Kế toán - Kiểm toán
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Khoa học - Nghiên cứu
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Khoa học máy tính - Công nghệ thông tin
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Khoa học xã hội & Nhân văn
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Khoáng sản - Địa chất
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Kiến trúc - Xây dựng
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Kinh doanh và quản trị
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Kỹ thuật - Ứng dụng
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Hàng không
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Luật
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Nghệ thuật sáng tạo - Thiết kế
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Nông - Lâm - Ngư nghiệp
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Quản lý chuỗi cung ứng - Logistics
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Tài chính - Ngân hàng
                                            </div>
                                        </a>
                                        <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                           data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                           style="position:relative;background:#00aeef;height:141px">
                                            <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="{{ asset('public/images/bg_nganhhoc.jpg') }}" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img"
                                                 style="position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:rgb(255, 255, 255);padding:0 10px;">Tâm lý học
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection
