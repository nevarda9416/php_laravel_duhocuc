@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        @if ($page)
            <section class="elementor-section elementor-top-section elementor-element elementor-element-06153c3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="06153c3" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35d5e40" data-id="35d5e40" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
                            <div class="elementor-element elementor-element-49524d6 elementor-widget elementor-widget-heading animated fadeIn" data-id="49524d6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-large elementor-align-left">{{ $page->title }}</h3>
                                </div>
                                <div class="elementor-widget-container elementor-align-left"><?php echo html_entity_decode($page->content) ?></div>
                            </div>
                            @foreach ($categories as $category)
                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <a href="{{ url('truong-hoc/' . $slug . '/' . $category->slug) }}" title="{{ $category->name }}"><img src="{{ env('FOLDER_UPLOAD') . $category->thumbnail_url }}" alt="" style="max-width:87%"/></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-counter">
                                                    <div class="elementor-counter-title"><a href="{{ url('truong-hoc/' . $slug . '/' . $category->slug) }}" title="{{ $category->name }}">{{ $category->name }}</a></div>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-06153c3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="06153c3" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35d5e40" data-id="35d5e40" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
                            <div class="elementor-element elementor-element-49524d6 elementor-widget elementor-widget-heading animated fadeIn" data-id="49524d6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-large elementor-align-left">TRƯỜNG ĐẠI HỌC TẠI ÚC</h3>
                                </div>
                            </div>
                            <p style="margin-bottom:40px">
                                Hơn 2.5 triệu du học sinh đã tốt nghiệp từ 43 Đại học Úc trong 50 năm qua (theo International Education Association of Autralia). Ngoài ra, Úc còn sở hữu nhóm Go8 - một liên minh nghiên cứu chuyên sâu hàng đầu thế giới gồm 8 trường đại học hàng đầu Úc. Đại học Macquarie là một trong những môi trường đào tạo hàng đầu tại Úc, nằm trong top 1% trường đại học xuất sắc nhất thế giới. Đến với Đại học Macquarie, sinh viên sẽ có trải nghiệm học tập sáng tạo và thiết thực,
                                mở ra những cơ hội việc làm triển vọng trong lĩnh vực bạn theo đuổi.
                            </p>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <img src="{{ asset('public/images/daihoc_1.jpg') }}" alt="" style="max-width:87%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">ĐẠI HỌC MACQUARIE</div>
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
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <img src="{{ asset('public/images/daihoc_2.jpg') }}" alt="" style="max-width:87%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">ĐẠI HỌC MACQUARIE</div>
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
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <img src="{{ asset('public/images/daihoc_3.jpg') }}" alt="" style="max-width:87%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">ĐẠI HỌC MACQUARIE</div>
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
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <img src="{{ asset('public/images/daihoc_4.jpg') }}" alt="" style="max-width:87%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">ĐẠI HỌC MACQUARIE</div>
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
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <img src="{{ asset('public/images/daihoc_5.jpg') }}" alt="" style="max-width:87%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">ĐẠI HỌC MACQUARIE</div>
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
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <img src="{{ asset('public/images/daihoc_6.jpg') }}" alt="" style="max-width:87%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">ĐẠI HỌC MACQUARIE</div>
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
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <img src="{{ asset('public/images/daihoc_7.jpg') }}" alt="" style="max-width:87%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">ĐẠI HỌC MACQUARIE</div>
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
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <img src="{{ asset('public/images/daihoc_8.jpg') }}" alt="" style="max-width:87%"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">ĐẠI HỌC MACQUARIE</div>
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
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection
