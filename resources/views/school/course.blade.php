@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        <section class="elementor-section elementor-top-section elementor-element elementor-element-df9f39d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="df9f39d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
        style="background:#fff">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-092491b" data-id="092491b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-80ef570 elementor-widget elementor-widget-heading elementor-align-left" data-id="80ef570" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-large">KHÓA HỌC NGÔN NGỮ</h3></div>
                        </div>
                        <div class="elementor-element elementor-element-c7ca10e elementor-widget elementor-widget-gallery" data-id="c7ca10e" data-element_type="widget"
                             data-settings="{&quot;columns_tablet&quot;:3,&quot;columns_mobile&quot;:2,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;columns&quot;:5,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;aspect_ratio&quot;:&quot;3:2&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                             data-widget_type="gallery.default">
                            <div class="elementor-widget-container">
                                @if ($widget_course_description)
                                    <?php echo html_entity_decode($widget_course_description->content) ?>
                                @else
                                <p style="margin-bottom:40px">
                                    Ở giai đoạn một, các bạn có thể nhận học bổng 20%-50% học phí. Xét kết quả học tập bậc THPT và có chứng chỉ tiếng Anh quốc tế tương đương IELTS (Academic) 6.0 (các điểm thành phần 5.5) trở lên cho năm thứ nhất.<br/>
                                    Vào năm thứ hai, sinh viên có thể nhận được học bổng 30%-50% học phí, xét kết quả học tập 8 môn học đầu tiên trong năm 1 và có chứng chỉ tiếng Anh quốc tế PTE tăng ít nhất 1 bậc so với trình độ tiếng Anh đầu vào giai đoạn 1.
                                </p>
                                @endif
                                <div class="elementor-gallery__container">
                                    @if (!empty($categories->toArray()))
                                        @foreach ($categories as $category)
                                            <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ url('khoa-hoc-ngon-ngu/' . $category->slug) }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                               data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                               style="position:relative;background:linear-gradient(rgba(0,174,239,0.45),rgba(0,174,239,0.45)),url({{ env('FOLDER_UPLOAD') . $category->thumbnail_url }});height:141px;text-align:center">
                                                <div class="elementor-gallery-item__image" data-width="600" data-height="400" aria-label="{{ $category->name }}" role="img"
                                                     style="position:absolute;width:100%;top:50%;transform:translateY(-50%);color:rgb(255, 255, 255);padding:0 10px;">{{ $category->name }}
                                                </div>
                                            </a>
                                        @endforeach
                                    @else
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
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
