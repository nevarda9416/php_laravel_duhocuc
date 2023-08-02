@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        <section class="elementor-section elementor-top-section elementor-element elementor-element-184019e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="184019e" data-settings="" style="padding-top: 10px; left: 0px;">
            <div class="elementor-container elementor-column-gap-default">
                <div background_background="" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d026ca2" data-element_type="column" data-id="d026ca2" data-settings="">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-80ef570 elementor-widget elementor-widget-heading elementor-align-left" data-id="80ef570" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-large">DU HỌC CÁC NƯỚC</h3></div>
                        </div>
                        <div class="elementor-element elementor-element-c7ca10e elementor-widget elementor-widget-gallery" data-id="c7ca10e" data-element_type="widget"
                             data-settings="{&quot;columns_tablet&quot;:3,&quot;columns_mobile&quot;:2,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;columns&quot;:5,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;aspect_ratio&quot;:&quot;3:2&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                             data-widget_type="gallery.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-gallery__container">
                                    @if (!empty($categories->toArray()))
                                        @foreach ($categories as $category)
                                            <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="{{ url($category->share_url) }}" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e"
                                               data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D"
                                               style="position:relative;background:url({{ env('FOLDER_UPLOAD') . ($category->thumbnail_url_2 ? $category->thumbnail_url_2 : $category->thumbnail_url) }});height:141px;text-align:center">
                                                <div class="elementor-gallery-item__image" data-width="600" data-height="400" aria-label="{{ $category->name }}" role="img"
                                                     style="position:absolute;width:100%;top:50%;transform:translateY(-50%);color:rgb(255, 255, 255);padding:0 10px;">{{ $category->name }}
                                                </div>
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection()
