<!DOCTYPE html>
<html lang="vi" prefix="og:http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}</title>
    <meta name="description" content="{{ !empty($metaData['meta_description']) ? $metaData['meta_description'] : 'Chuyên trang chia sẻ về những kinh nghiệm, hỏi đáp thắc mắc khi đi du lịch, du lịch phượt, tour du lịch, vé tham quan' }}"/>
    <meta name="robots" content="index, follow"/>
    <meta property="fb:app_id" content=""/>
    <meta name="google-signin-client_id" content="">
    <meta name="google-site-verification" content=""/>
    <link rel="canonical" href="<?php echo config()->get('constants.FRONTEND_URL') . $_SERVER['REQUEST_URI'] ?>"/>
    <meta name="twitter:title" content="{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ !empty($metaData['meta_image']) ? $metaData['meta_image'] : '/images/logo@3x.png' }}">
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:title" content="{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}" itemprop="headline"/>
    <meta property="og:description" content="{{ !empty($metaData['meta_description']) ? $metaData['meta_description'] : 'Chuyên trang chia sẻ về những kinh nghiệm, hỏi đáp thắc mắc khi đi du lịch, du lịch phượt, tour du lịch, vé tham quan' }}" itemprop="description"/>
    <meta property="og:image" content="{{ !empty($metaData['meta_image']) ? $metaData['meta_image'] : '/images/logo@3x.png' }}" itemprop="thumbnailUrl"/>
    <meta property="og:image:alt" content="{{ !empty($metaData['meta_title']) ? $metaData['meta_title'] : config()->get('constants.SITE_NAME') }}">
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="315"/>
    <meta property="og:url" content="{{ Request::fullUrl() }}" itemprop="url"/>
    <meta property="og:type" content="website"/>
    <meta property="og:ttl" content="2419200"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://gody.vn/public/images/icon-1.png?v=1235">
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://gody.vn/public/v6/css/fancybox-3.1/jquery.fancybox.min.css">
    <!-- <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/fancybox-3.0/jquery.fancybox.min.css"> -->
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:400,500,600&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/temp/Minified.css?v=1235')}}">
    <link rel="stylesheet" href="https://gody.vn/public/v5/css/temp/main.css?v=1235">
    <link rel="stylesheet" href="https://gody.vn/public/v5/css/temp/custom.css?v=1235">
    <link rel="stylesheet" href="https://gody.vn/public/v5/css/atomic.css?v=1235">
    <link rel="stylesheet" href="{{asset('public/css/jquery.datetimepicker.css')}}">
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/slick/slick.css">
    <!-- bxSlider CSS file -->
    <link href="https://media2.gody.vn/public/v3/css/jquery.bxslider.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" href="https://gody.vn/public/v3/cropper/cropper.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://gody.vn/public/v3/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://gody.vn/public/v5/css/custom_travel.css?v=641efc30450e6">

    <style>
        html,body{
            font-family:'Montserrat',sans-serif
        }

        .ff-sans{
            font-family:'Montserrat',sans-serif!important
        }

        .ff-serif{
            font-family:'Lora',serif!important
        }

        .img-thumb-post .img-thumb-post-remove {
            opacity: 1 !important;
        }

        .quick-insert-container {
            opacity: 0;
            visibility: hidden;
        }

        .quick-insert-container.visible {
            opacity: 1;
            visibility: visible;
        }

        .quick-insert-container.open .floating-btn {
            transform: rotate(270deg) !important;
        }

        .quick-insert-helper button .title {
            transition: all .2s;
            opacity: 0;
            visibility: hidden;
            z-index: -1;
        }

        .quick-insert-helper button:hover .title {
            opacity: 1;
            visibility: visible;
            z-index: 0;
        }

        #travelPostContent div.placeholder:first-child:before {
            content: 'Nội dung bài viết ... (Click + để chèn hình ảnh, clip, fb, instagram ...)';
            color: #999;
            display: block;
            position: absolute;
        }

        #travelPostContent>div:first-child:empty {
            height: 32px;
        }

        #travelPostContent div.insert-embeds:empty:before {
            content: 'Dán link YouTube, Vimeo, Facebook hoặc Instagram và nhấn Enter';
            color: #999;
            display: block;
            height: 32px;
        }

        .quick-insert:hover:after {
            content: 'Chèn nhanh';
            font-size: 12px;
            white-space: nowrap;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: #ff8c00;
            color: #fff;
            padding-left: 8px;
            padding-right: 8px;
            border-radius: 4px;
            height: auto;
            line-height: 16px;
            transition: all .25s;
        }

        .ce-element--focused:not(:empty) {
            position: relative;
        }

        .ce-element--focused:not(:empty):after {
            content: '';
            height: 100%;
            border-right: 2px solid #ff8c00;
            display: block;
            position: absolute;
            top: 0;
            right: -10px;
        }

        .travel-post-content h2 {
            font-size: 20px;
            font-weight: bold;
            margin-top: 0;
            line-height: 32px;
        }

        .tag {
            display: inline-block;
        }

        #travelPostContent .img-thumb-post .img-thumb-post-remove {
            display: block !important;
        }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

    <!--- socket io -->

    <!-- Facebook Pixel Code -->
    <!-- End Facebook Pixel Code -->
    <!-- Facebook Pixel Code -->
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
    <!-- /Yandex.Metrika counter -->
</head>

<body class="dest-details" ng-app="MyApp" itemscope="" itemtype="http://schema.org/WebPage">
<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->

