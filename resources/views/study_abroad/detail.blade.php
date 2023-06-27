@extends('layouts.default')
@section('content')
    <div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
        @include('widgets.banner')
        @if (isset($widget_study_description))
            <?php echo html_entity_decode($widget_study_description->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-184019e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="184019e" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;margin-top:20px">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d026ca2" data-id="d026ca2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-83ca0be elementor-widget elementor-widget-heading elementor-align-center" data-id="83ca0be" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">DU HỌC ÚC</h1></div>
                            </div>
                            <div class="elementor-element elementor-element-3de4076 elementor-widget elementor-widget-text-editor" data-id="3de4076" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Để hưởng lợi từ chính sách du học Úc đang rất thuận lợi, bạn có thể tìm hiểu và đăng ký chương trình du học Úc thông qua trung tâm tư vấn du học uy tín như NewOcean, để được tư vấn và hỗ trợ đầy đủ về thủ tục nhập học, hồ sơ xin visa, học bổng và cơ hội thực tập, làm việc sau khi tốt nghiệp.</p>
                                    <p>Với học phí chỉ từ 200 triệu, không bắt buộc IELTS, không yêu cầu chứng minh tài chính, các bạn có cơ hội tiết kiệm chi phí học tập tại Úc.</p>
                                    <p>Hơn nữa, chính sách visa ở lại làm việc 2-6 năm sau khi tốt nghiệp là cơ hội để bạn cư trú lâu dài tại Úc, có kinh nghiệm làm việc và phát triển bản thân, đồng thời tạo điều kiện thuận lợi cho việc xin được visa định cư Úc trong tương lai.</p></div>
                            </div>
                            <div class="elementor-element elementor-element-6887b00 elementor-align-center elementor-widget elementor-widget-button" data-id="6887b00" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{ url('#form_contact') }}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						                <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">ĐĂNG KÝ TƯ VẤN</span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if (isset($widget_study_why_chosen))
            <?php echo html_entity_decode($widget_study_why_chosen->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-f24d1f4 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f24d1f4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;background: #f1f1f1">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ad56eef" data-id="ad56eef" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d078ff1 elementor-widget elementor-widget-heading elementor-align-center" data-id="d078ff1" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-large" style="margin-top:30px">TẠI SAO NÊN CHỌN DU HỌC ÚC</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-7e8dea6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7e8dea6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;background: #f1f1f1">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-44a3cd5" data-id="44a3cd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important">
                                        <img src="{{ asset('public/images/icon_5.png') }}" alt=""/><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">VỊ TRÍ ĐỊA LÝ THUẬN LỢI</span></h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-44a3cd5" data-id="44a3cd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important">
                                        <img src="{{ asset('public/images/icon_6.png') }}" alt=""/><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">CHẤT LƯỢNG GIÁO DỤC HÀNG ĐẦU</span></h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-44a3cd5" data-id="44a3cd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important">
                                        <img src="{{ asset('public/images/icon_7.png') }}" alt=""/><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">ĐA DẠNG CHƯƠNG TRÌNH ĐÀO TẠO</span></h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-44a3cd5" data-id="44a3cd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important">
                                        <img src="{{ asset('public/images/icon_8.png') }}" alt=""/><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">NGUỒN HỌC BỔNG DỒI DÀO</span></h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-7e8dea6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7e8dea6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;background: #f1f1f1;padding-top: 30px">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44a3cd5" data-id="44a3cd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important">
                                        <img src="{{ asset('public/images/icon_9.png') }}" alt=""/><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">BẰNG TỐT NGHIỆP ĐƯỢC CHỨNG NHẬN QUỐC TẾ</span></h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44a3cd5" data-id="44a3cd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important">
                                        <img src="{{ asset('public/images/icon_10.png') }}" alt=""/><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">CƠ HỘI VIỆC LÀM & THU NHẬP</span></h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44a3cd5" data-id="44a3cd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important">
                                        <img src="{{ asset('public/images/icon_11.png') }}" alt=""/><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">CƠ HỘI ĐỊNH CƯ RỘNG MỞ</span></h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items">
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                        <li class="elementor-icon-list-item">
                                            - Úc là một điểm đến Du học (kể cả du lịch) rất tốt. Chúng ta đều biết trong những năm gần đây, Úc nổi lên như một cường quốc tại Khu vực Châu Á Thái Bình Dương.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if (isset($widget_study_request_input))
            <?php echo html_entity_decode($widget_study_request_input->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-01aa9bc elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="01aa9bc" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width:1519px;left:0px;padding-top:30px;background:#f1f1f1">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d4058d7" data-id="d4058d7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-3facf9d elementor-widget elementor-widget-heading elementor-align-center" data-id="3facf9d" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-large">YÊU CẦU ĐẦU VÀO DU HỌC ÚC</h2>
                                </div>
                                <p style="margin-top:40px"><strong>Để được chấp nhận vào một khóa học tại Úc, bạn cần đạt một số điều kiện sau:</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-562c79e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="562c79e" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px;background:#f1f1f1;padding-bottom:30px">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-81dc62e" data-id="81dc62e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-931e34d elementor-widget elementor-widget-heading" data-id="931e34d" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <a class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color:#00aeef;color:#fff !important">
						            <span class="elementor-button-content-wrapper">
						                <span class="elementor-button-text">BẬC TRUNG HỌC</span>
                            		</span>
                                    </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5f40369 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5f40369" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul style="padding-left:15px">
                                        <li>
                                            <span class="elementor-icon-list-text">Hoàn thành tối thiểu chương trình lớp 6 hoặc 7</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">GPA tối thiểu 6.5 trở lên</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Không yêu cầu chứng chỉ IELTS</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7469d88" data-id="7469d88" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-931e34d elementor-widget elementor-widget-heading" data-id="931e34d" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <a class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color:#502c84;color:#fff !important">
						            <span class="elementor-button-content-wrapper">
						                <span class="elementor-button-text">DỰ BỊ ĐẠI HỌC</span>
                            		</span>
                                    </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5f40369 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5f40369" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul style="padding-left:15px">
                                        <li>
                                            <span class="elementor-icon-list-text">Hoàn thành chương trình học lớp 11 tại Việt Nam</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">GPA lớn hơn 6.0</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Yêu cầu IELTS 4.5 hoặc làm bài test của trường</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-81dc62e" data-id="81dc62e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-931e34d elementor-widget elementor-widget-heading" data-id="931e34d" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <a class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color:#00aeef;color:#fff !important">
						            <span class="elementor-button-content-wrapper">
						                <span class="elementor-button-text">ĐẠI HỌC</span>
                            		</span>
                                    </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5f40369 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5f40369" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul style="padding-left:15px">
                                        <li>
                                            <span class="elementor-icon-list-text">Học sinh Việt Nam phải hoàn thành hết năm nhất hoặc vừa hết lớp 12 của trường</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">GPA lớn hơn 6.0 hoặc hoàn thành xong chương trình dự bị đại học tại Úc</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">IELTS 4.5 trở lên hoặc làm bài test của trường</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-91665df" data-id="91665df" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-931e34d elementor-widget elementor-widget-heading" data-id="931e34d" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <a class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color:#502c84;color:#fff !important">
						            <span class="elementor-button-content-wrapper">
						                <span class="elementor-button-text">SAU ĐẠI HỌC</span>
                            		</span>
                                    </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5f40369 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5f40369" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul style="padding-left:15px">
                                        <li>
                                            <span class="elementor-icon-list-text">Học sinh Việt Nam phải hoàn thành hết năm nhất hoặc vừa hết lớp 12 của trường</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">GPA lớn hơn 6.0 hoặc hoàn thành xong chương trình dự bị đại học tại Úc</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">IELTS 4.5 trở lên hoặc làm bài test của trường</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if (isset($widget_study_middle_banner))
            <?php echo html_entity_decode($widget_study_middle_banner->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-e6c3ee0 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e6c3ee0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px">
                <div class="elementor-container elementor-column-gap-default" style="max-width:100%">
                    <img src="{{ asset('public/images/banner_1.jpg') }}" alt=""/>
                </div>
            </section>
        @endif
        @if (isset($widget_study_cost))
            <?php echo html_entity_decode($widget_study_cost->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-f24d1f4 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f24d1f4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;padding:30px 0 30px 0">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ad56eef" data-id="ad56eef" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d078ff1 elementor-widget elementor-widget-heading elementor-align-center" data-id="d078ff1" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-large">CHI PHÍ DU HỌC ÚC</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-7e8dea6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7e8dea6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}" style="width: 1519px; left: 0px">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-44a3cd5" data-id="44a3cd5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="margin-right:5%;background:#effbff;border:1px solid #c6e8f3">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading elementor-align-center" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">HỌC PHÍ</h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul>
                                        <li>
                                            <span class="elementor-icon-list-text">Tiếng Anh: 300 - 560 AUD/tuần</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Trung học phổ thông: 11.000 - 18.000 AUD/năm</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Cao đẳng liên thông: 16.000 - 33.000 AUD/năm</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Dự bị đại học: 16.000 - 18.000 AUD/năm</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Đại học: 17.000 - 43.000 AUD/tuần</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Thạc sĩ: 22.000 - 45.000 AUD/năm</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Tiến sĩ: 22.000 - 45.000 AUD/năm</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-a2b0cdf" data-id="a2b0cdf" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="margin-right:5%;background:#effbff;border:1px solid #c6e8f3">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading elementor-align-center" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">CHI PHÍ ĂN Ở</h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul>
                                        <li>
                                            <span class="elementor-icon-list-text">Căn hộ riêng: 90 - 150 AUD mỗi ngày</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Thuê chung căn hộ: 85 - 215 AUD mỗi tuần</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Ký túc xá: 90 - 280 AUD mỗi tuần</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Ở chung gia đình bản xứ: 235 - 325 AUD mỗi tuần</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Chi phí ăn uống: Sẽ phụ thuộc vào nhu cầu của từng học sinh</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-9ce782e" data-id="9ce782e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background:#effbff;border:1px solid #c6e8f3">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading elementor-align-center" data-id="8713cd4" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">CHI PHÍ KHÁC</h3></div>
                            </div>
                            <div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="77a03b0" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul>
                                        <li>
                                            <span class="elementor-icon-list-text">Di chuyển: 50 - 500 AUD/năm</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Điện thoại, internet: 20 - 50 AUD/tháng</span>
                                        </li>
                                        <li>
                                            <span class="elementor-icon-list-text">Bảo hiểm y tế: 620 - 650 AUD/năm</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if (isset($widget_study_why_skypacific))
            <?php echo html_entity_decode($widget_study_why_skypacific->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1a09e34 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a09e34" data-element_type="section" id="dangky" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;padding-top:30px">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f43cf97" data-id="f43cf97" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated elementor-align-center">
                            <div class="elementor-element elementor-element-a514669 elementor-widget elementor-widget-heading" data-id="a514669" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-large">TẠI SAO NÊN CHỌN DU HỌC ÚC CÙNG SKY PACIFIC</h1>
                                </div>
                            </div>
                            <h4 style="width:100%;font-weight:bold">Sky pacific hỗ trợ học viên thực hiện tất cả thủ tục và quy trình để có thể sang Úc du học thành công</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-e6c3ee0 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e6c3ee0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;padding-bottom:30px">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-11c0075" data-id="11c0075" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated" style="border:1px solid #aed1dc;padding:2px">
                            <div class="elementor-element elementor-element-3ad067e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3ad067e" data-element_type="widget" data-widget_type="icon-list.default">
                                <img src="{{ asset('public/images/banner_2.jpg') }}" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bfef52b" data-id="bfef52b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5b40421 elementor-widget elementor-widget-text-editor" data-id="5b40421" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <ul style="list-style:none;font-weight:bold;line-height:40px;padding-left:10px">
                                        <li>- Hoàn thiện hồ sơ</li>
                                        <li>- Khám sức khỏe</li>
                                        <li>- Hỗ trợ chứng minh tài chính</li>
                                        <li>- Xin thư mời</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bfef52b" data-id="bfef52b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5b40421 elementor-widget elementor-widget-text-editor" data-id="5b40421" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <ul style="list-style:none;font-weight:bold;line-height:40px">
                                        <li>- Xin visa</li>
                                        <li>- Đào tạo IELTS - PTE</li>
                                        <li>- Ôn phỏng vấn trường</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @include('widgets.form')
        @if (isset($widget_study_experience))
            <?php echo html_entity_decode($widget_study_experience->content) ?>
        @else
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1a09e34 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a09e34" data-element_type="section" id="dangky" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;padding:30px 0 30px 0">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f43cf97" data-id="f43cf97" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a514669 elementor-widget elementor-widget-heading elementor-align-center" data-id="a514669" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-large">TRẢI NGHIỆM CỦA CỰU HỌC SINH DU HỌC ÚC TẠI SKY PACIFIC</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-dfc4a60 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dfc4a60" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: 0px;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-04a6641" data-id="04a6641" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a3e863c elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="a3e863c" data-element_type="widget" data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <img src="{{ asset('public/images/gioithieu_4.jpg') }}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-66db4f7" data-id="66db4f7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f6c8ca8 elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="f6c8ca8" data-element_type="widget" data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <img src="{{ asset('public/images/gioithieu_4.jpg') }}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ef7df71" data-id="ef7df71" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-2d6e700 elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="2d6e700" data-element_type="widget" data-widget_type="icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-box-wrapper">
                                        <div class="elementor-icon-box-icon">
                                            <img src="{{ asset('public/images/gioithieu_4.jpg') }}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6887b00 elementor-align-center elementor-widget elementor-widget-button" data-id="6887b00" data-element_type="widget" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjE1OTI1IiwidG9nZ2xlIjpmYWxzZX0%3D" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">XEM THÊM TRÊN KÊNH YOUTUBE</span>
		</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @include('widgets.news')
    </div>
@endsection()
