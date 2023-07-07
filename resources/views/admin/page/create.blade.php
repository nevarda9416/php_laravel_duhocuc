@extends('layouts.admin.default')
@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Tạo mới trang giới thiệu</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        @if ($message = Session::get('message'))
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        @endif
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/pages/store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề <span
                                        class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="title" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tóm tắt</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea type="text" class="form-control" name="excerpt" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung
                                <i style="font-weight:normal">(Các trang du học tham khảo mẫu trong nội dung chỉ cần sửa text, KHÔNG SỬA/XÓA NỘI DUNG từ {UC}, hệ thống sẽ tự động copy/paste tên nước trong tiêu đề Du học {TÊN NƯỚC} vào thay thế)</i>
                                <br/><br/><br/><br/><br/><br/>
                                <i style="font-weight:normal">Với những bài viết không phải trang du học xóa nội dung mẫu và tùy chỉnh</i>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" id="content" name="content" data-parsley-trigger="keyup" data-parsley-validation-threshold="10">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-184019e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="184019e" data-settings="" style="padding-top: 30px; left: 0px;">
<div class="elementor-container elementor-column-gap-default">
<div background_background="" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d026ca2" data-element_type="column" data-id="d026ca2" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-83ca0be elementor-widget elementor-widget-heading elementor-align-center" data-element_type="widget" data-id="83ca0be" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h1 class="elementor-heading-title elementor-size-default" style="text-transform:uppercase">DU HỌC {UC}</h1>
</div>
</div>

<div class="elementor-element elementor-element-3de4076 elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="3de4076" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<p>Để hưởng lợi từ ch&iacute;nh s&aacute;ch du học {UC} đang rất thuận lợi, bạn c&oacute; thể t&igrave;m hiểu v&agrave; đăng k&yacute; chương tr&igrave;nh du học {UC} th&ocirc;ng qua trung t&acirc;m tư vấn du học uy t&iacute;n như NewOcean, để được tư vấn v&agrave; hỗ trợ đầy đủ về thủ tục nhập học, hồ sơ xin visa, học bổng v&agrave; cơ hội thực tập, l&agrave;m việc sau khi tốt nghiệp.</p>

<p>Với học ph&iacute; chỉ từ 200 triệu, kh&ocirc;ng bắt buộc IELTS, kh&ocirc;ng y&ecirc;u cầu chứng minh t&agrave;i ch&iacute;nh, c&aacute;c bạn c&oacute; cơ hội tiết kiệm chi ph&iacute; học tập tại {UC}.</p>

<p>Hơn nữa, ch&iacute;nh s&aacute;ch visa ở lại l&agrave;m việc 2-6 năm sau khi tốt nghiệp l&agrave; cơ hội để bạn cư tr&uacute; l&acirc;u d&agrave;i tại {UC}, c&oacute; kinh nghiệm l&agrave;m việc v&agrave; ph&aacute;t triển bản th&acirc;n, đồng thời tạo điều kiện thuận lợi cho việc xin được visa định cư {UC} trong tương lai.</p>
</div>
</div>

<div class="elementor-element elementor-element-6887b00 elementor-align-center elementor-widget elementor-widget-button" data-element_type="widget" data-id="6887b00" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"><a class="elementor-button-link elementor-button elementor-size-sm" href="#form_contact" role="button"><span class="elementor-button-content-wrapper"><span class="elementor-button-text">ĐĂNG K&Yacute; TƯ VẤN</span> </span> </a></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-f24d1f4 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="f24d1f4" data-settings="" style="background: rgb(241, 241, 241); padding-top: 30px; left: 0px;">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ad56eef" data-element_type="column" data-id="ad56eef">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-d078ff1 elementor-widget elementor-widget-heading elementor-align-center" data-element_type="widget" data-id="d078ff1" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-large" style="margin-top:30px;text-transform:uppercase">TẠI SAO N&Ecirc;N CHỌN DU HỌC {UC}</h2>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-7e8dea6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="7e8dea6" data-settings="" style="background: rgb(241, 241, 241); padding-top: 30px; left: 0px;">
<div class="elementor-container elementor-column-gap-default">
<div background_background="" class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-44a3cd5" data-element_type="column" data-id="44a3cd5" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important"><img alt="" src="https://duhocskypacific.top/public/images/icon_5.png" /><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">VỊ TR&Iacute; ĐỊA L&Yacute; THUẬN LỢI</span></h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-44a3cd5" data-element_type="column" data-id="44a3cd5" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important"><img alt="" src="https://duhocskypacific.top/public/images/icon_6.png" /><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">CHẤT LƯỢNG GI&Aacute;O DỤC H&Agrave;NG ĐẦU</span></h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-44a3cd5" data-element_type="column" data-id="44a3cd5" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important"><img alt="" src="https://duhocskypacific.top/public/images/icon_7.png" /><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">ĐA DẠNG CHƯƠNG TR&Igrave;NH Đ&Agrave;O TẠO</span></h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-44a3cd5" data-element_type="column" data-id="44a3cd5" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important"><img alt="" src="https://duhocskypacific.top/public/images/icon_8.png" /><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">NGUỒN HỌC BỔNG DỒI D&Agrave;O</span></h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-7e8dea6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="7e8dea6" data-settings="" style="background: rgb(241, 241, 241); padding-top: 30px; left: 0px;">
<div class="elementor-container elementor-column-gap-default">
<div background_background="" class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44a3cd5" data-element_type="column" data-id="44a3cd5" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important"><img alt="" src="https://duhocskypacific.top/public/images/icon_9.png" /><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">BẰNG TỐT NGHIỆP ĐƯỢC CHỨNG NHẬN QUỐC TẾ</span></h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44a3cd5" data-element_type="column" data-id="44a3cd5" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important"><img alt="" src="https://duhocskypacific.top/public/images/icon_10.png" /><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">CƠ HỘI VIỆC L&Agrave;M &amp; THU NHẬP</span></h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44a3cd5" data-element_type="column" data-id="44a3cd5" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default" style="display:flex;color:#555 !important"><img alt="" src="https://duhocskypacific.top/public/images/icon_11.png" /><span style="margin-top:10px;margin-left:10px;font-size:15px;line-height:30px;">CƠ HỘI ĐỊNH CƯ RỘNG MỞ</span></h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
	<li class="elementor-icon-list-item">- {UC} l&agrave; một điểm đến Du học (kể cả du lịch) rất tốt. Ch&uacute;ng ta đều biết trong những năm gần đ&acirc;y, {UC} nổi l&ecirc;n như một cường quốc tại Khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- -->
<section class="elementor-section elementor-top-section elementor-element elementor-section-stretched elementor-element-01aa9bc  elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="01aa9bc" data-settings="{" stretch_section="">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d4058d7" data-element_type="column" data-id="d4058d7">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-3facf9d elementor-widget elementor-widget-heading elementor-align-center" data-element_type="widget" data-id="3facf9d" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-large" style="text-transform:uppercase">Y&Ecirc;U CẦU ĐẦU V&Agrave;O DU HỌC {UC}</h2>
</div>

<p style="margin-top:40px"><strong>Để được chấp nhận v&agrave;o một kh&oacute;a học tại {UC} bạn cần đạt một số điều kiện sau:</strong></p>
</div>
</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-section-stretched elementor-element-562c79e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="562c79e" data-settings="{" stretch_section="">
<div class="elementor-container elementor-column-gap-default">
<div background_background="" class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-81dc62e" data-element_type="column" data-id="81dc62e" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-931e34d elementor-widget elementor-widget-heading" data-element_type="widget" data-id="931e34d" data-widget_type="heading.default">
<div class="elementor-widget-container"><a class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color:#00aeef;color:#fff !important"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">BẬC TRUNG HỌC</span> </span> </a></div>
</div>

<div class="elementor-element elementor-element-5f40369 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="5f40369" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul style="padding-left:15px">
	<li><span class="elementor-icon-list-text">Ho&agrave;n th&agrave;nh tối thiểu chương tr&igrave;nh lớp 6 hoặc 7</span></li>
	<li><span class="elementor-icon-list-text">GPA tối thiểu 6.5 trở l&ecirc;n</span></li>
	<li><span class="elementor-icon-list-text">Kh&ocirc;ng y&ecirc;u cầu chứng chỉ IELTS</span></li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7469d88" data-element_type="column" data-id="7469d88" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-931e34d elementor-widget elementor-widget-heading" data-element_type="widget" data-id="931e34d" data-widget_type="heading.default">
<div class="elementor-widget-container"><a class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color:#502c84;color:#fff !important"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">DỰ BỊ ĐẠI HỌC</span> </span> </a></div>
</div>

<div class="elementor-element elementor-element-5f40369 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="5f40369" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul style="padding-left:15px">
	<li><span class="elementor-icon-list-text">Ho&agrave;n th&agrave;nh chương tr&igrave;nh học lớp 11 tại Việt Nam</span></li>
	<li><span class="elementor-icon-list-text">GPA lớn hơn 6.0</span></li>
	<li><span class="elementor-icon-list-text">Y&ecirc;u cầu IELTS 4.5 hoặc l&agrave;m b&agrave;i test của trường</span></li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-81dc62e" data-element_type="column" data-id="81dc62e" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-931e34d elementor-widget elementor-widget-heading" data-element_type="widget" data-id="931e34d" data-widget_type="heading.default">
<div class="elementor-widget-container"><a class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color:#00aeef;color:#fff !important"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">ĐẠI HỌC</span> </span> </a></div>
</div>

<div class="elementor-element elementor-element-5f40369 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="5f40369" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul style="padding-left:15px">
	<li><span class="elementor-icon-list-text">Học sinh Việt Nam phải ho&agrave;n th&agrave;nh hết năm nhất hoặc vừa hết lớp 12 của trường</span></li>
	<li><span class="elementor-icon-list-text">GPA lớn hơn 6.0 hoặc ho&agrave;n th&agrave;nh xong chương tr&igrave;nh dự bị đại học tại {UC}</span></li>
	<li><span class="elementor-icon-list-text">IELTS 4.5 trở l&ecirc;n hoặc l&agrave;m b&agrave;i test của trường</span></li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-91665df" data-element_type="column" data-id="91665df" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-931e34d elementor-widget elementor-widget-heading" data-element_type="widget" data-id="931e34d" data-widget_type="heading.default">
<div class="elementor-widget-container"><a class="elementor-button-link elementor-button elementor-size-sm" role="button" style="background-color:#502c84;color:#fff !important"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">SAU ĐẠI HỌC</span> </span> </a></div>
</div>

<div class="elementor-element elementor-element-5f40369 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="5f40369" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul style="padding-left:15px">
	<li><span class="elementor-icon-list-text">Học sinh Việt Nam phải ho&agrave;n th&agrave;nh hết năm nhất hoặc vừa hết lớp 12 của trường</span></li>
	<li><span class="elementor-icon-list-text">GPA lớn hơn 6.0 hoặc ho&agrave;n th&agrave;nh xong chương tr&igrave;nh dự bị đại học tại {UC}</span></li>
	<li><span class="elementor-icon-list-text">IELTS 4.5 trở l&ecirc;n hoặc l&agrave;m b&agrave;i test của trường</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- -->
<section class="elementor-section elementor-top-section elementor-element elementor-section-stretched elementor-element-e6c3ee0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="e6c3ee0" data-settings="" style="background: rgb(241, 241, 241)">
<div class="elementor-container elementor-column-gap-default" style="max-width:100%"><img alt="" src="https://duhocskypacific.top/public/images/banner_1.jpg" style="float: right;" /></div>
</section>
<!-- -->
<section class="elementor-section elementor-top-section elementor-element elementor-section-stretched elementor-element-f24d1f4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="f24d1f4" data-settings="" style="padding: 30px 0px; left: 0px;">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ad56eef" data-element_type="column" data-id="ad56eef">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-d078ff1 elementor-widget elementor-widget-heading elementor-align-center" data-element_type="widget" data-id="d078ff1" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-large" style="text-transform:uppercase">CHI PH&Iacute; DU HỌC {UC}</h2>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-7e8dea6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="7e8dea6" data-settings="">
<div class="elementor-container elementor-column-gap-default">
<div background_background="" class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-44a3cd5" data-element_type="column" data-id="44a3cd5" data-settings="" style="margin-right:5%;background:#effbff;border:1px solid #c6e8f3">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading elementor-align-center" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">HỌC PH&Iacute;</h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul>
	<li><span class="elementor-icon-list-text">Tiếng Anh: 300 - 560 AUD/tuần</span></li>
	<li><span class="elementor-icon-list-text">Trung học phổ th&ocirc;ng: 11.000 - 18.000 AUD/năm</span></li>
	<li><span class="elementor-icon-list-text">Cao đẳng li&ecirc;n th&ocirc;ng: 16.000 - 33.000 AUD/năm</span></li>
	<li><span class="elementor-icon-list-text">Dự bị đại học: 16.000 - 18.000 AUD/năm</span></li>
	<li><span class="elementor-icon-list-text">Đại học: 17.000 - 43.000 AUD/tuần</span></li>
	<li><span class="elementor-icon-list-text">Thạc sĩ: 22.000 - 45.000 AUD/năm</span></li>
	<li><span class="elementor-icon-list-text">Tiến sĩ: 22.000 - 45.000 AUD/năm</span></li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-a2b0cdf" data-element_type="column" data-id="a2b0cdf" data-settings="" style="margin-right:5%;background:#effbff;border:1px solid #c6e8f3">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading elementor-align-center" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">CHI PH&Iacute; ĂN Ở</h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul>
	<li><span class="elementor-icon-list-text">Căn hộ ri&ecirc;ng: 90 - 150 AUD mỗi ng&agrave;y</span></li>
	<li><span class="elementor-icon-list-text">Thu&ecirc; chung căn hộ: 85 - 215 AUD mỗi tuần</span></li>
	<li><span class="elementor-icon-list-text">K&yacute; t&uacute;c x&aacute;: 90 - 280 AUD mỗi tuần</span></li>
	<li><span class="elementor-icon-list-text">Ở chung gia đ&igrave;nh bản xứ: 235 - 325 AUD mỗi tuần</span></li>
	<li><span class="elementor-icon-list-text">Chi ph&iacute; ăn uống: Sẽ phụ thuộc v&agrave;o nhu cầu của từng học sinh</span></li>
</ul>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-30 elementor-top-column elementor-element elementor-element-9ce782e" data-element_type="column" data-id="9ce782e" data-settings="" style="margin-right:5%;background:#effbff;border:1px solid #c6e8f3">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8713cd4 elementor-widget elementor-widget-heading elementor-align-center" data-element_type="widget" data-id="8713cd4" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">CHI PH&Iacute; KH&Aacute;C</h3>
</div>
</div>

<div class="elementor-element elementor-element-77a03b0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="77a03b0" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul>
	<li><span class="elementor-icon-list-text">Di chuyển: 50 - 500 AUD/năm</span></li>
	<li><span class="elementor-icon-list-text">Điện thoại, internet: 20 - 50 AUD/th&aacute;ng</span></li>
	<li><span class="elementor-icon-list-text">Bảo hiểm y tế: 620 - 650 AUD/năm</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-1a09e34 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="1a09e34" data-settings="" style="padding-top: 30px; left: 0px;">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f43cf97" data-element_type="column" data-id="f43cf97">
<div class="elementor-widget-wrap elementor-element-populated elementor-align-center">
<div class="elementor-element elementor-element-a514669 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="a514669" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h1 class="elementor-heading-title elementor-size-large" style="text-transform:uppercase">TẠI SAO N&Ecirc;N CHỌN DU HỌC {UC} C&Ugrave;NG SKY PACIFIC</h1>
</div>
</div>

<h4 style="width:100%;font-weight:bold">Sky pacific hỗ trợ học vi&ecirc;n thực hiện tất cả thủ tục v&agrave; quy tr&igrave;nh để c&oacute; thể sang {UC} du học th&agrave;nh c&ocirc;ng</h4>
</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-e6c3ee0 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="e6c3ee0" data-settings="" style="padding-bottom: 30px; left: 0px;">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-11c0075" data-element_type="column" data-id="11c0075">
<div class="elementor-widget-wrap elementor-element-populated" style="border:1px solid #aed1dc;padding:2px">
<div class="elementor-element elementor-element-3ad067e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="3ad067e" data-widget_type="icon-list.default"><img alt="" src="https://duhocskypacific.top/public/images/banner_2.jpg" /></div>
</div>
</div>

<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bfef52b" data-element_type="column" data-id="bfef52b">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-5b40421 elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="5b40421" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<ul style="list-style:none;font-weight:bold;line-height:40px;padding-left:10px">
	<li>- Ho&agrave;n thiện hồ sơ</li>
	<li>- Kh&aacute;m sức khỏe</li>
	<li>- Hỗ trợ chứng minh t&agrave;i ch&iacute;nh</li>
	<li>- Xin thư mời</li>
</ul>
</div>
</div>
</div>
</div>

<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bfef52b" data-element_type="column" data-id="bfef52b">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-5b40421 elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="5b40421" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<ul style="list-style:none;font-weight:bold;line-height:40px">
	<li>- Xin visa</li>
	<li>- Đ&agrave;o tạo IELTS - PTE</li>
	<li>- &Ocirc;n phỏng vấn trường</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-1a09e34 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="1a09e34" data-settings="" id="dangky" style="padding: 30px 0px; left: 0px;">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f43cf97" data-element_type="column" data-id="f43cf97">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-a514669 elementor-widget elementor-widget-heading elementor-align-center" data-element_type="widget" data-id="a514669" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h1 class="elementor-heading-title elementor-size-large" style="text-transform:uppercase">TRẢI NGHIỆM CỦA CỰU HỌC SINH DU HỌC {UC} TẠI SKY PACIFIC</h1>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-dfc4a60 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="dfc4a60" data-settings="{" stretch_section="">
<div class="elementor-container elementor-column-gap-default">
<div background_background="" class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-04a6641" data-element_type="column" data-id="04a6641" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-a3e863c elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="widget" data-id="a3e863c" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon"><img alt="" src="https://duhocskypacific.top/cms/public/uploads/2023/06/29/duhoc15.jpg" style="width: 304px; height: 203px;" /></div>
</div>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-66db4f7" data-element_type="column" data-id="66db4f7" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-f6c8ca8 elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="widget" data-id="f6c8ca8" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon"><img alt="" src="https://duhocskypacific.top/cms/public/uploads/2023/07/03/thu2.jpg" /></div>
</div>
</div>
</div>
</div>
</div>

<div background_background="" class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ef7df71" data-element_type="column" data-id="ef7df71" data-settings="{">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-2d6e700 elementor-view-stacked elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-element_type="widget" data-id="2d6e700" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon"><img alt="" src="https://duhocskypacific.top/cms/public/uploads/2023/07/03/thu3.jpg" /></div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="elementor-element elementor-element-6887b00 elementor-align-center elementor-widget elementor-widget-button" data-element_type="widget" data-id="6887b00" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"><a class="elementor-button-link elementor-button elementor-size-sm" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjE1OTI1IiwidG9nZ2xlIjpmYWxzZX0%3D" role="button"><span class="elementor-button-content-wrapper"><span class="elementor-button-text">XEM TH&Ecirc;M TR&Ecirc;N K&Ecirc;NH YOUTUBE</span> </span> </a></div>
</div>
</div>
</section>
<!-- -->
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh mục</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <select class="form-control" name="category_id">
                                    <option value="0"></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            @if ($category->parent_id > 0) &nbsp;&nbsp;&nbsp;&nbsp;
                                                @if (in_array($category->parent_id, \App\Core\Models\Category::CATEGORY_ID_LIST_SCHOOL))
                                                    |----
                                                @else
                                                    |--
                                                @endif
                                            @endif
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Latitude</label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="text" class="form-control" name="latitude">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Longitude</label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="text" class="form-control" name="longitude">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên người viết <span
                                        class="required">*</span></label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <input type="text" class="form-control" name="author_name" required="required">
                                <input type="hidden" name="user_id" value="{{(auth()->user()) ? auth()->user()->id : 0}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="meta_title" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ khóa (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_keyword" rows="3" required="required"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả (SEO) <span
                                    class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="meta_description" rows="3" required="required"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh đại diện (không bắt buộc)</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <input type="file" class="form-control" name="thumbnail_url">
                                <div id="thumbnail_preview"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái bài viết</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="checked" value="publish" name="status"> Đăng bài
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="draft" name="status"> Bản nháp
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Lưu</button>
                                <button class="btn btn-primary" type="reset">Nhập lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        #thumbnail_preview {
            width: 100%;
            height: 0px;
            background: no-repeat;
        }
        .show-placeholder div:first-child{
            display: none
        }
    </style>
    <script>
        $('input[name="thumbnail_url"]').on('change', function () {console.log(this.files);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
                reader.onloadend = function () { // set image data as background of div
                    $('#thumbnail_preview').css({'background-image': 'url("' + this.result + '")', 'height': '300px'});
                }
            }
        });
    </script>
@endsection
