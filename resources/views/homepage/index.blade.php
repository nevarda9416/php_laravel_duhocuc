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
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:400,500,600&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/temp/Minified.css?v=1235')}}">
    <link rel="stylesheet" href="https://gody.vn/public/v5/css/temp/main.css?v=1235">
    <link rel="stylesheet" href="https://gody.vn/public/v5/css/temp/custom.css?v=1235">
    <link rel="stylesheet" href="{{asset('public/css/atomic.css')}}">
    <link rel="stylesheet" href="https://gody.vn/public/js/vue-modules/vue2-datepicker/css/index.css"/>
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/plugins/slick/slick.css">
    <!-- bxSlider CSS file -->
    <link href="https://media2.gody.vn/public/v3/css/jquery.bxslider.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://media2.gody.vn/public/v3/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" href="{{asset('public/css/customize.css')}}"/>
    <link rel="manifest" href="">
    <link rel="stylesheet" href="https://gody.vn/public/v7/css/post-detail.css?v=1237">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <!--- socket io -->
    <script src="https://gody.vn/public/v3/js/socket.io-1.4.5.js"></script>
    <script type="text/javascript">
        var socket_comment = io.connect('https://realtime.timvere.vn');
    </script>
    <!-- Facebook Pixel Code -->

    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->

    <!-- /Yandex.Metrika counter -->
</head>
<body class="dest-details " ng-app="MyApp" itemscope="" itemtype="http://schema.org/WebPage">
<!-- code track facebook -->

<!-- end code track facebook -->
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
<!-- home -->
@include('components.alert')
@include('layouts.partials.nav')
<section class="p-0 m-0 bg-white">
    <div class="w-fit d-block ps-relative">
        @if (!empty($widget_top_banner['content']))
            <?php echo html_entity_decode($widget_top_banner['content']) ?>
        @endif
        <div class="w-fit d-block ps-absolute b0 h-200">
            <div class="container">
                <div class="d-flex w-fit" style="justify-content: center!important;">
                    <div class="d-flex ps-relative" style="width: 436px;">
                        <input type="text" style="width: 436px; height: 72px; background : white; border-radius: 150px; color: #4F4F4F;border: 1px solid white;" placeholder="Bạn muốn đi đâu?" class="fs-500 fs-24 lh-25 pl-35"/>
                        <div class="ps-absolute" style="bottom: 15px; right: 15px; ">
                            <span class="bg-primary ai-center d-flex" style="width: 45px; height: 45px; justify-content: center!important; border-radius: 100%; ">
                                <ion-icon name="search" style="font-size: 26px; "></ion-icon>
                            </span>
                        </div>
                        <div class="ps-absolute t0 r0 b0 l0 c-pointer modal-search-v2__anchor"></div>
                    </div>
                </div>
                <div class="ta-center mt-12">
                    <a
                            href="{{url('diem-den')}}/chau-a/viet-nam/kien-giang"
                            title="Ph&uacute; Quốc"
                            class="outline-none fw-500 px-5 py-3 fc-white bar-25 mr-10 fs-16 h:fc-primary"
                    >Ph&uacute; Quốc</a>
                    <a
                            href="{{url('diem-den')}}/chau-a/viet-nam/lao-cai"
                            title="Sapa"
                            class="outline-none fw-500 px-5 py-3 fc-white bar-25 mr-10 fs-16 h:fc-primary"
                    >Sapa</a>
                    <a
                            href="{{url('diem-den')}}/chau-a/viet-nam/da-nang"
                            title="Đ&agrave; Nẵng"
                            class="outline-none fw-500 px-5 py-3 fc-white bar-25 mr-10 fs-16 h:fc-primary"
                    >Đ&agrave; Nẵng</a>
                    <a
                            href="{{url('diem-den')}}/chau-a/viet-nam/lam-dong"
                            title="Đ&agrave; Lạt"
                            class="outline-none fw-500 px-5 py-3 fc-white bar-25 mr-10 fs-16 h:fc-primary"
                    >Đ&agrave; Lạt</a>
                    <a
                            href="{{url('diem-den')}}/chau-a/Japan"
                            title="Nhật Bản"
                            class="outline-none fw-500 px-5 py-3 fc-white bar-25 mr-10 fs-16 h:fc-primary"
                    >Nhật Bản</a>
                    <a
                            href="{{url('diem-den')}}/chau-a/taiwan"
                            title="Đ&agrave;i Loan"
                            class="outline-none fw-500 px-5 py-3 fc-white bar-25 mr-10 fs-16 h:fc-primary"
                    >Đ&agrave;i Loan</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-0 m-0 bg-white">
    <div class="container">
        <div class="row">
            <div class="w-fit d-block  pt-20 pb-20 ">
                <h2 class="fc-fourteenth fs-36 lh-44 fw-700">Điểm đến hot</h2>
            </div>
            <div class="w-fit d-block">
                <div class="w-fit d-flex jc-space-between" style="--column:6; --gutter: 100px;">
                    @foreach($hot_locations as $location)
                        <div class="ps-relative d-flex fd-column h-250 xs:h-184" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                            <div class="ps-relative" style="height: 220px;">
                                <a href="{{url('/diem-den' . $location->share_url)}}">
                                    <div class="w-fit d-block ps-relative w-fit h-fit xs:h-120 xs:w-120">
                                        <img src="{{ url(env('FOLDER_UPLOAD') . $location->thumbnail_url) }}"
                                             class="w-fit h-fit bar-8 xs:h-120 xs:w-120 object-cover object-center h:o50"/>
                                    </div>
                                </a>
                                <a href="{{url('/diem-den' . $location->share_url)}}" class="fs-24 lh-24 fw-700 fc-white ps-absolute b10 l10 xs:fs-18">
                                    {{ $location->name }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-0 m-0 bg-white">
    <div class="container">
        <div class="row">
            <div class="w-fit d-block  pt-20 pb-20 ">
                <h2 class="fc-fourteenth fs-36 lh-44 fw-700">Top tìm kiếm</h2>
            </div>
            <div class="w-fit d-block">
                <div class="d-flex ai-top fw-wrap" style="--column:4; --gutter: 38px;">
                    <div class="ps-relative d-flex fd-column mb-10" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                        <div class="w-fit d-flex ai-center">
                            <div class="d-flex " style="width: 45px; height: 45px;">
                                <span class="ai-center d-flex ps-relative" style="width: 45px; height: 45px; justify-content: center!important;">
                                    <img
                                            style="width: 46px; height: 46px;"
                                            data-src="https://h3jd9zjnmsobj.vcdn.cloud//public/v7/mask-01.png"
                                            data-srcset="https://h3jd9zjnmsobj.vcdn.cloud//public/v7/mask-01.png"
                                            class="lazy-load"
                                    />
                                    <ion-icon name="search" style="font-size: 26px; color: #333333; position: absolute; bottom: 10px;"></ion-icon>
                                </span>
                            </div>
                            <a href="{{url('/gioi-thieu/lam-ho-chieu-nhanh')}}" class="w-fit ai-center fc-fourteenth fs-19 fw-600 ml-15 h:fc-primary">L&agrave;m hộ chiếu nhanh</a>
                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column mb-10" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                        <div class="w-fit d-flex ai-center">
                            <div class="d-flex " style="width: 45px; height: 45px;">
                                <span class="ai-center d-flex ps-relative" style="width: 45px; height: 45px; justify-content: center!important;">
                                    <img
                                            style="width: 46px; height: 46px;"
                                            data-src="https://h3jd9zjnmsobj.vcdn.cloud//public/v7/mask-01.png"
                                            data-srcset="https://h3jd9zjnmsobj.vcdn.cloud//public/v7/mask-01.png"
                                            class="lazy-load"
                                    />
                                    <ion-icon name="search" style="font-size: 26px; color: #333333; position: absolute; bottom: 10px;"></ion-icon>
                                </span>
                            </div>
                            <a href="{{url('/gioi-thieu/ve-may-bay')}}" class="w-fit ai-center fc-fourteenth fs-19 fw-600 ml-15 h:fc-primary">V&eacute; m&aacute;y bay </a>
                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column mb-10" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                        <div class="w-fit d-flex ai-center">
                            <div class="d-flex " style="width: 45px; height: 45px;">
                                <span class="ai-center d-flex ps-relative" style="width: 45px; height: 45px; justify-content: center!important;">
                                    <img
                                            style="width: 46px; height: 46px;"
                                            data-src="https://h3jd9zjnmsobj.vcdn.cloud//public/v7/mask-01.png"
                                            data-srcset="https://h3jd9zjnmsobj.vcdn.cloud//public/v7/mask-01.png"
                                            class="lazy-load"
                                    />
                                    <ion-icon name="search" style="font-size: 26px; color: #333333; position: absolute; bottom: 10px;"></ion-icon>
                                </span>
                            </div>
                            <a href="{{url('/gioi-thieu/visa-dai-loan-moi-nhat')}}" class="w-fit ai-center fc-fourteenth fs-19 fw-600 ml-15 h:fc-primary">Visa Đ&agrave;i Loan mới nhất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white pt-80">
    <div class="container">
        <div class="row">
            <div class="w-fit d-block">
                <div
                        class="d-block w-fit"
                        data-style="box-shadow: #ff8c00 1px 1px, #ff8c00 2px 2px, #ff8c00 3px 3px, #ff8c00 4px 4px, #ff8c00 5px 5px, #ff8c00 6px 6px, #ff8c00 7px 7px, #ff8c00 8px 8px, #ff8c00 9px 9px, #ff8c00 10px 10px, #ff8c00 11px 11px, #ff8c00 12px 12px, #ff8c00 13px 13px, #ff8c00 14px 14px"
                >
                    <div class="w-fit d-block barr-black-2 ps-relative">
                        <!--<div class="divider-frame" style="display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-pack: center; -ms-flex-pack: center; justify-content: center; -webkit-box-align: center; -ms-flex-align: center;  align-items: center; height: 2px;  width: 100%;">
                            <div class="main-sub-account-divider" style="-webkit-box-flex: 1; -ms-flex: 1; flex: 0.03; height: 2px; background: #333;"></div>
                            <div class="main-sub-account-or ml-5 mr-5 d-flex ">
                                <img src="https://gody.vn/public/images/icon-1.png?v=1090" style="width: 73px; height: 80px;"/>
                                <h3 class="fc-primary fs-28 fw-700 lh-120% p-0 m-0 tt-capitalize "> Editor's  <br/> Picks </h3>
                            </div>
                            <div class="main-sub-account-divider" style="-webkit-box-flex: 1; -ms-flex: 1; flex: 1; height: 2px; background: #333;"></div>
                        </div>-->
                        <div class="w-fit d-block mb-0 pt-20 pb-20 pl-20 pr-20" style="background: #f7b15c !important;">
                            <div class="w-fit d-block">
                                <h3 class="fc-fourteenth fs-36 fw-700 lh-120% p-0 m-0 tt-capitalize ">Editor's Picks</p>
                            </div>
                            <div class="d-flex ai-top fw-wrap jc-space-between" style="--column:4; --gutter: 47px;">
                                <div class="ps-relative d-flex fd-column mb-10" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                                    <a href="{{url('/')}}/du-lich/vietnam-airlines-chao-he-ve-dong-gia-chi-999000-vndchieu-da-gom-thue-phi-10931">
                                        <img
                                                data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/1b87f17aeaec43c78af5b54777212bf93cfeef85.jpg"
                                                data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/1b87f17aeaec43c78af5b54777212bf93cfeef85.jpg"
                                                style="height: 200px;"
                                                class="lazy-load w-fit object-cover object-center bar-8 d-h:o50"
                                        />
                                    </a>
                                    <div class="w-fit d-block pt-15 pb-0">
                                        <a href="{{url('/')}}/du-lich/vietnam-airlines-chao-he-ve-dong-gia-chi-999000-vndchieu-da-gom-thue-phi-10931" class="fc-fourteenth fs-19 fw-600 lh-24 h:fc-sixth">
                                            Vietnam Airlines &quot;ch&agrave;o h&egrave;&quot;: v&eacute; đồng gi&aacute; chỉ 999.000 VND/chiều (đ&atilde; gồm thuế, ph&iacute;) </a>
                                    </div>
                                </div>
                                <div class="ps-relative d-flex fd-column mb-10" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                                    <a href="{{url('/')}}/du-lich/bali-se-cam-khach-du-lich-thue-xe-may-10911">
                                        <img
                                                data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg"
                                                data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg"
                                                style="height: 200px;"
                                                class="lazy-load w-fit object-cover object-center bar-8 d-h:o50"
                                        />
                                    </a>
                                    <div class="w-fit d-block pt-15 pb-0">
                                        <a href="{{url('/')}}/du-lich/bali-se-cam-khach-du-lich-thue-xe-may-10911" class="fc-fourteenth fs-19 fw-600 lh-24 h:fc-sixth">
                                            Bali sẽ cấm kh&aacute;ch du lịch thu&ecirc; xe m&aacute;y </a>
                                    </div>
                                </div>
                                <div class="ps-relative d-flex fd-column mb-10" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                                    <a href="{{url('/')}}/du-lich/trung-quoc-mo-lai-viec-cap-visa-du-lich-cho-du-khach-nuoc-ngoai-co-viet-nam-10904">
                                        <img
                                                data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg"
                                                data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg"
                                                style="height: 200px;"
                                                class="lazy-load w-fit object-cover object-center bar-8 d-h:o50"
                                        />
                                    </a>
                                    <div class="w-fit d-block pt-15 pb-0">
                                        <a href="{{url('/')}}/du-lich/trung-quoc-mo-lai-viec-cap-visa-du-lich-cho-du-khach-nuoc-ngoai-co-viet-nam-10904" class="fc-fourteenth fs-19 fw-600 lh-24 h:fc-sixth">
                                            Trung Quốc mở lại việc cấp visa du lịch cho du kh&aacute;ch nước ngo&agrave;i (c&oacute; Việt Nam) </a>
                                    </div>
                                </div>
                                <div class="ps-relative d-flex fd-column mb-10" style="width: calc( (100% - var(--gutter)) / var(--column) );">
                                    <a href="{{url('/')}}/du-lich/nha-tho-duc-ba-paris-mo-cua-tro-lai-sau-tran-hoa-hoan-kinh-hoang-2019-10898">
                                        <img
                                                data-src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/fa9c4d2bd1140698e9b23fbf5251d18c1672bbb2.png"
                                                data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/fa9c4d2bd1140698e9b23fbf5251d18c1672bbb2.png"
                                                style="height: 200px;"
                                                class="lazy-load w-fit object-cover object-center bar-8 d-h:o50"
                                        />
                                    </a>
                                    <div class="w-fit d-block pt-15 pb-0">
                                        <a href="{{url('/')}}/du-lich/nha-tho-duc-ba-paris-mo-cua-tro-lai-sau-tran-hoa-hoan-kinh-hoang-2019-10898" class="fc-fourteenth fs-19 fw-600 lh-24 h:fc-sixth">
                                            Nh&agrave; thờ Đức B&agrave; Paris mở cửa trở lại sau trận hỏa hoạn kinh ho&agrave;ng 2019 </a>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="w-fit d-flex" style="justify-content: flex-end!important;">--}}
                            {{--<a--}}
                            {{--href="{{url('/')}}/du-lich"--}}
                            {{--class="fs-20 fw-600 fc-fourteenth td-underline"--}}
                            {{-->Xem thêm</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="p-0 m-0 bg-white">
    <div class="container">
        <div class="row">
            <div class="w-fit d-block pt-0 pb-0">
                <div class="w-fit d-flex ai-center" data-style="border-bottom: 1px solid #333;">
                    <h2 class="fc-fourteenth fs-36 lh-44 fw-700 p-0 m-0" data-style="border-bottom: 3px solid #ff8c00;">Bài viết xem nhiều</h2>
                </div>
            </div>
            <div class="w-fit d-block">
                <div class="slick-item w-fit d-flex jc-space-between" style="justify-content: space-between!important;">
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/thien-duong-tren-ha-gioi-cuu-trai-cau-trung-quoc-97">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2016/12/1/thuy_do_3f/c994b786dae04545af7564c7c04564482d513539.png"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2016/12/1/thuy_do_3f/c994b786dae04545af7564c7c04564482d513539.png"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/thien-duong-tren-ha-gioi-cuu-trai-cau-trung-quoc-97" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">&quot;thi&ecirc;n đường tr&ecirc;n hạ giới&quot; cửu trại c&acirc;u - trung qu&ocirc;c</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/thuy_do_3f" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://gody.vn/public/v3/images/user/avatar/thuy_do_3f/22822220-20210803142306."
                                                    data-srcset="https://gody.vn/public/v3/images/user/avatar/thuy_do_3f/22822220-20210803142306."
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/thuy_do_3f" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Thuy Do</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/hong-kong-dau-chi-co-mua-sam-hay-trai-nghiem-nhung-dieu-thu-vi-co-1-0-2-4429">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2019/6/11/hanguyen54441/d749eeff58d5a9c59ba4b45d35b239df55e41a53.jpg"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2019/6/11/hanguyen54441/d749eeff58d5a9c59ba4b45d35b239df55e41a53.jpg"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/hong-kong-dau-chi-co-mua-sam-hay-trai-nghiem-nhung-dieu-thu-vi-co-1-0-2-4429" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">Hồng k&ocirc;ng đ&acirc;u chỉ c&oacute; mua sắm! h&atilde;y trải nghiệm những Điều th&uacute; vị c&oacute; 1-0-2!</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/hanguyen54441" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://gody.vn/public/v3/images/user/avatar/hanguyen54441/80479924-20190626172823.jpg"
                                                    data-srcset="https://gody.vn/public/v3/images/user/avatar/hanguyen54441/80479924-20190626172823.jpg"
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/hanguyen54441" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Kh&aacute;nh Ng&ocirc;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/bai-da-song-hong-cuoc-gap-go-cuoi-tuan-6873">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2019/11/5/7264932078296568984/299b01d747b632660b2c464f908e0a4f8009b62d.jpg"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2019/11/5/7264932078296568984/299b01d747b632660b2c464f908e0a4f8009b62d.jpg"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/bai-da-song-hong-cuoc-gap-go-cuoi-tuan-6873" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">B&atilde;i đ&aacute; s&ocirc;ng hồng - qu&aacute; quen nhưng th&uacute; vị</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/7264932078296568984" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://graph.facebook.com/v3.2/726493207829656/picture?type=normal"
                                                    data-srcset="https://graph.facebook.com/v3.2/726493207829656/picture?type=normal"
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/7264932078296568984" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Linh Linh Phạm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/ky-su-thai-lan-7152">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2017/10/1/homero_homero20015120/5b34312acc34decdd8a5e379c22e9ca4cf933c45.jpeg"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2017/10/1/homero_homero20015120/5b34312acc34decdd8a5e379c22e9ca4cf933c45.jpeg"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/ky-su-thai-lan-7152" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">K&yacute; sự th&aacute;i lan</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/homero_homero20015120" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://graph.facebook.com/v2.8/1392642617501161/picture?type=normal"
                                                    data-srcset="https://graph.facebook.com/v2.8/1392642617501161/picture?type=normal"
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/homero_homero20015120" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Nguyễn Trung Ki&ecirc;n</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/du-xuan-me-man-voi-mua-hoa-dao-chuong-no-ro-ngat-ngay-tren-dinh-ba-na-2700">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2018/5/2/nhu.bach7672/42be622a9c9bc63adc3c1ea4aa2adfa37746636b.jpg"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2018/5/2/nhu.bach7672/42be622a9c9bc63adc3c1ea4aa2adfa37746636b.jpg"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/du-xuan-me-man-voi-mua-hoa-dao-chuong-no-ro-ngat-ngay-tren-dinh-ba-na-2700" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">Du xu&acirc;n m&ecirc; mẩn với m&ugrave;a hoa đ&agrave;o chu&ocirc;ng nở rộ ngất ng&acirc;y tr&ecirc;n đỉnh b&agrave; n&agrave;</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/nhu.bach7672" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://gody.vn/public/v3/images/user/avatar/2018/5/2/nhu.bach7672/thumbnail-300/1afc3280d826d64da7d0d606a9ce0a36.jpg"
                                                    data-srcset="https://gody.vn/public/v3/images/user/avatar/2018/5/2/nhu.bach7672/thumbnail-300/1afc3280d826d64da7d0d606a9ce0a36.jpg"
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/nhu.bach7672" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Quỳnh Quỳnh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/toa-nha-dai-bac-101-tang-taipei-101-101-101-2839">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2019/1/25/tamtinh212782/4c8d502cedaaaee00ac50b9dfedc56014ff807ae.jpg"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2019/1/25/tamtinh212782/4c8d502cedaaaee00ac50b9dfedc56014ff807ae.jpg"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/toa-nha-dai-bac-101-tang-taipei-101-101-101-2839" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">To&agrave; nh&agrave; Đ&agrave;i bẮc 101 tẦng - taipei 101 - 臺北101 / 台北101</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/tamtinh212782" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://gody.vn/public/v3/images/user/avatar/tamtinh212782/110511424-20190902190641.JPG"
                                                    data-srcset="https://gody.vn/public/v3/images/user/avatar/tamtinh212782/110511424-20190902190641.JPG"
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/tamtinh212782" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">ĐẶNG TUẤN T&Uacute;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/2n1d-trai-nghiem-xuyen-rung-tai-ho-tien-rung-la-ngau-8472">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2020/7/2/huatrucly20108858/8f09a831c72fab45decbf18d6228f6464d7a5cb2.jpg"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2020/7/2/huatrucly20108858/8f09a831c72fab45decbf18d6228f6464d7a5cb2.jpg"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/2n1d-trai-nghiem-xuyen-rung-tai-ho-tien-rung-la-ngau-8472" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">2n1d - trẢi nghiỆm xuy&ecirc;n rỪng tẠi hỒ ti&ecirc;n - rỪng la ng&acirc;u</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/huatrucly20108858" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://gody.vn/public/v3/images/user/avatar/huatrucly20108858/148357470-20220324175323."
                                                    data-srcset="https://gody.vn/public/v3/images/user/avatar/huatrucly20108858/148357470-20220324175323."
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/huatrucly20108858" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Hứa Tr&uacute;c Ly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/dao-lantau-dai-nhi-son-hon-dao-quyen-ru-xu-cang-thom-1563">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2018/9/12/thewolf6958/c7d5f1a3b80203b0c6147196fe0d7de0f0dd3e7c.jpg"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2018/9/12/thewolf6958/c7d5f1a3b80203b0c6147196fe0d7de0f0dd3e7c.jpg"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/dao-lantau-dai-nhi-son-hon-dao-quyen-ru-xu-cang-thom-1563" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">ĐẢo lantau (ĐẠi nhĨ sƠn) - h&ograve;n ĐẢo quyẾn rŨ xỨ cẢng thƠm</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/thewolf6958" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://gody.vn/public/v3/images/user/avatar/thewolf6958/30119107-20180912100449.JPG"
                                                    data-srcset="https://gody.vn/public/v3/images/user/avatar/thewolf6958/30119107-20180912100449.JPG"
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/thewolf6958" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">The Wolf</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-item ps-relative d-flex fd-column">
                        <div class="ps-relative p-0 mt-12 overflow-hidden xs:p-0 w-fit">
                            <a href="{{url('/')}}/bai-viet/thanh-nha-ho-thanh-hoa-4844">
                                <img
                                        data-src="https://media2.gody.vn/public/mytravelmap/images/2019/3/27/yumi.uyenthuong06063858/a1728533d0fb8c098ec925dcc680f8d8331c20c1.jpeg"
                                        data-srcset="https://media2.gody.vn/public/mytravelmap/images/2019/3/27/yumi.uyenthuong06063858/a1728533d0fb8c098ec925dcc680f8d8331c20c1.jpeg"
                                        style="min-height: 150px;"
                                        class="lazy-load w-fit object-cover object-center bar-8 dh:o50"
                                >
                            </a>
                            <div class="my-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="{{url('/')}}/bai-viet/thanh-nha-ho-thanh-hoa-4844" class="mb-5 fs-19 fc-fourteenth fw-600 xs:mb-0 xs:fs-14 h:fc-sixth tt-capitalize outline-none">Th&agrave;nh nh&agrave; hồ - thanh ho&aacute;</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="d-flex ai-center jc-space-between py-10">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                        <a href="{{url('/')}}/blog/yumi.uyenthuong06063858" target="_blank" class="bar-circle bbar-circle ps-relative w-30 h-30 td-none outline-none mr-8 fc-sixth">
                                            <img
                                                    data-src="https://gody.vn/public/v3/images/user/avatar/yumi.uyenthuong06063858/14176626-20190830201214.JPG"
                                                    data-srcset="https://gody.vn/public/v3/images/user/avatar/yumi.uyenthuong06063858/14176626-20190830201214.JPG"
                                                    class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;"
                                            >
                                        </a>
                                        <div class="fl-1">
                                            <a href="{{url('/')}}/blog/yumi.uyenthuong06063858" target="_blank" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Yu Mi Nhon</a>
                                        </div>
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
<section class="bg-white p-0 m-0">
    <div class="container p-0">
        <div class="w-fit d-block  pt-20 pb-20 ">
            <h2 class="fc-fourteenth fs-36 lh-44 fw-700">Bài viết mới</h2>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-9 p-0 m-0">
            <div class="w-fit d-block">
                <div class="bg-white w-fit d-block bar-8 overflow-hidden">
                    <!-- -->
                    <div class="w-fit d-block mb-30">
                        <div style="background: #F4F4F4;border-radius: 0px 0px 8px 8px;">
                            <div class="ps-relative p-0 overflow-hidden xs:p-0">
                                <a href="{{url($first_post->share_url)}}">
                                    <img src="{{ url(env('FOLDER_UPLOAD') . $first_post->thumbnail_url) }}"
                                         style="height: 400px;"
                                         class="w-fit object-cover object-center bar-8 d-h:o50 xs:h-184"
                                    >
                                </a>
                                <div class=" xs:mt-5 ps-relative c-pointer px-20 mt-15 " data-x="my-20">
                                    <div class="_i-content-t">
                                        <a
                                                href="{{url($first_post->share_url)}}"
                                                data-class="mb-5 truncate-line lineclamp2 fs-28 fc-black fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 lh-24 xs:fs-24 xs:my-10"
                                                class=" tt-capitalize fs-28 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-24 xs:my-0 my-10 d-block w-fit h:fc-sixth"
                                                style="line-height: 120%;padding-top: 10px !important;margin-top: 0px !important;"
                                        >
                                            {{ $first_post->title }}️
                                        </a>
                                    </div>
                                    <span class="c-auto _i-des fc-fourteenth fs-15 truncate-line lineclamp4 mb-0 xs:lineclamp5 xs:lh-md td-none fw-400 lh-24 xs:fs-14 xs:my-0 ta-justify">{{ $first_post->excerpt }}</span>
                                    <div class="clearfix"></div>
                                    <div class="d-flex ai-center jc-space-between py-10 xs:pb-3 c-auto">
                                        <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                            <a href="{{url('/')}}" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                                                <img
                                                        data-src="https://graph.facebook.com/v2.8/1110153672468755/picture?type=normal"
                                                        data-srcset="https://graph.facebook.com/v2.8/1110153672468755/picture?type=normal"
                                                        class="lazy-load w-fit h-fit object-cover object-center bar-circle"
                                                        style="filter: none;"
                                                >
                                            </a>
                                            <div class="fl-1">
                                                <a href="{{url('/')}}" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">{{ $first_post->author_name }}️</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($list_posts as $post)
                        <div
                                class="w-fit d-block item-border-top-first"
                                style="
                            border-bottom: 1px solid #e5e5e5;
                            border-left: 1px solid #e5e5e5;
                            border-right: 1px solid #e5e5e5;

                        "
                        >
                            <div class="w-fit p-20 bar-8">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                        <a href="{{url($post->share_url)}}" class="d-block w-fit h-fit ps-relative" target="">
                                            <img
                                                    src="{{ url(env('FOLDER_UPLOAD') . $post->thumbnail_url) }}"
                                                    alt="{{ $post->title }}"
                                                    class="w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84"
                                            >
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a
                                                    href="{{url($post->share_url)}}"
                                                    class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth"
                                                    target=""
                                            >
                                                {{ $post->title }}
                                            </a>
                                        </div>
                                        <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">{{ $post->excerpt }}</span>
                                        <div class="clearfix"></div>

                                        <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                            <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                                <a href="{{url($post->share_url)}}" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth" target="">
                                                    <img
                                                            data-src="https://graph.facebook.com/v2.8/1110153672468755/picture?type=normal"
                                                            data-srcset="https://graph.facebook.com/v2.8/1110153672468755/picture?type=normal"
                                                            class="lazy-load w-fit h-fit object-cover object-center bar-circle"
                                                            style="filter: none;"
                                                            alt="{{ $post->author_name }}"
                                                    >
                                                </a>
                                                <div class="fl-1">
                                                    <a href="{{url('/')}}" class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;" target="">{{ $post->author_name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach()
                </div>
                {{--<div class="w-fit d-flex mt-30 mb-30" style="justify-content: flex-end!important;">--}}
                {{--<a--}}
                {{--href="{{url('/')}}/blog"--}}
                {{--class="fs-20 fw-600 fc-fourteenth td-underline h:fc-primary h:bb h:bc-primary"--}}
                {{-->Xem tất cả</a>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="col-md-3 pl-30">
            {{--<div class="d-block w-fit mb-25">--}}
            {{--<span class="w-fit d-block fc-black fw-700 fs-26 lh-24">Hoạt động mới nhất</span>--}}
            {{--</div>--}}
            {{--<div class="w-fit d-block mb-25">--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/sontung9796" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/sontung9796/24961357-20190611161027.jpeg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/sontung9796/24961357-20190611161027.jpeg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="Son N Tung"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a href="{{url('/')}}/blog/sontung9796" class="fc-nineth fw-500">Son N Tung</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a href="{{url('/')}}/bai-viet/tham-pho-co-hoi-an-10908?action=review" class="fc-nineth fw-500"> THĂM PHỐ CỔ HỘI AN</a>--}}
            {{--</p>--}}
            {{--<a href="{{url('/')}}/bai-viet/tham-pho-co-hoi-an-10908?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">Hội An giờ c&oacute; điểm đến n&agrave;o mới kh&ocirc;ng ah, loay hoay c&oacute; v&agrave;i địa điểm đi cũng nhiều rồi ;)</a>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/thanhnguyen8829" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/thanhnguyen8829/111053704-20190611161234.jpeg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/thanhnguyen8829/111053704-20190611161234.jpeg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="Thanh Nguyen"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a href="{{url('/')}}/blog/thanhnguyen8829" class="fc-nineth fw-500">Thanh Nguyen</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a href="{{url('/')}}/bai-viet/ladakh-diem-du-lich-10905?action=review" class="fc-nineth fw-500"> LADAKH is calling !!!</a>--}}
            {{--</p>--}}
            {{--<a href="{{url('/')}}/bai-viet/ladakh-diem-du-lich-10905?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">hồ sơ xin visa c&oacute; nhiều giấy tờ kh&ocirc;ng ah, chứng minh t&agrave;i ch&iacute;nh bao nhi&ecirc;u l&agrave; đủ vậy bạn</a>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/phuonganh6069" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/phuonganh6069/52724304-20190611162425.jpeg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/phuonganh6069/52724304-20190611162425.jpeg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="Phuong Anh"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a href="{{url('/')}}/blog/phuonganh6069" class="fc-nineth fw-500">Phuong Anh</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a href="{{url('/')}}/bai-viet/trai-nghiem-phu-quoc-4n3d-10906?action=review" class="fc-nineth fw-500"> Trải nghi&ecirc;̣m Phú Qu&ocirc;́c 4N3Đ</a>--}}
            {{--</p>--}}
            {{--<a href="{{url('/')}}/bai-viet/trai-nghiem-phu-quoc-4n3d-10906?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">lễ 30/4 n&agrave;y t&iacute;nh đi ph&uacute; Quốc m&agrave; sợ đ&ocirc;ng qu&aacute; huhu</a>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/trantai5403" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/trantai5403/16087472-20190611160647.jpeg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/trantai5403/16087472-20190611160647.jpeg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="Tran Tai"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a href="{{url('/')}}/blog/trantai5403" class="fc-nineth fw-500">Tran Tai</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a href="{{url('/')}}/photo/ho-dieu-hoa-ho-son-phu-yen-5314?action=review" class="fc-nineth fw-500"> Hồ Điều Ho&agrave; Hồ Sơn- Ph&uacute; Y&ecirc;n</a>--}}
            {{--</p>--}}
            {{--<a href="{{url('/')}}/photo/ho-dieu-hoa-ho-son-phu-yen-5314?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">đẹp qu&aacute; bạn ơi, c&aacute;m ơn bạn đ&atilde; chia sẻ</a>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/nguyenthingochoai13126281" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="Ho&agrave;i Nguyễn"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/nguyenthingochoai13126281"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->Ho&agrave;i Nguyễn</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5806f0580b78a4b2223c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Động Phong Nha</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/nguyenthingochoai13126281" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="Ho&agrave;i Nguyễn"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/nguyenthingochoai13126281"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->Ho&agrave;i Nguyễn</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5c092934ffb295e51a3c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Hồ T&agrave; Đ&ugrave;ng</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/1116431352159453440" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://graph.facebook.com/v15.0/111643135215945/picture?type=normal"--}}
            {{--data-srcset="https://graph.facebook.com/v15.0/111643135215945/picture?type=normal"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="Mart Vin"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/1116431352159453440"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->Mart Vin</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5db57136ffb295570f41cb58"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Nh&agrave; H&agrave;ng Ng&oacute;i N&acirc;u</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/haisonnguyen5960" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://media2.gody.vn//public/images/user-2/2022/12/22/haisonnguyen5960/thumbnail-70/63a3f758b11dc-1671690072.jpeg"--}}
            {{--data-srcset="https://media2.gody.vn//public/images/user-2/2022/12/22/haisonnguyen5960/thumbnail-70/63a3f758b11dc-1671690072.jpeg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="Tran Anh Tuyen"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/haisonnguyen5960"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->Tran Anh Tuyen</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5c667601ffb295d84d3c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Tượng Toripolisi</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="ihewpgwr"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/sample7287"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->ihewpgwr</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5c667601ffb295d84d3c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Tượng Toripolisi</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="ihewpgwr"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/sample7287"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->ihewpgwr</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5c667601ffb295d84d3c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Tượng Toripolisi</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="ihewpgwr"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/sample7287"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->ihewpgwr</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5c667601ffb295d84d3c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Tượng Toripolisi</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="ihewpgwr"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/sample7287"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->ihewpgwr</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5c667601ffb295d84d3c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Tượng Toripolisi</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="ihewpgwr"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/sample7287"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->ihewpgwr</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5c667601ffb295d84d3c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Tượng Toripolisi</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--<div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">--}}
            {{--<div class="d-flex ai-start ps-relative mt-22">--}}
            {{--<div class="overflow-hidden bar-circle mr-12 fl-shrink0">--}}
            {{--<a href="{{url('/')}}/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">--}}
            {{--<img--}}
            {{--data-src="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--data-srcset="https://gody.vn/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg"--}}
            {{--class="lazy-load w-fit h-fit object-cover object-center"--}}
            {{--alt="ihewpgwr"--}}
            {{-->--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">--}}
            {{--<p class="m-0 truncate-line lineclamp2 fs-14 mb-5">--}}
            {{--<a--}}
            {{--href="{{url('/')}}/blog/sample7287"--}}
            {{--class="fc-nineth fw-500"--}}
            {{-->ihewpgwr</a>--}}
            {{--<span class="fc-sixth"> b&igrave;nh luận trong </span>--}}
            {{--<a--}}
            {{--href="{{url('/')}}/redirect-places/5c667601ffb295d84d3c9869"--}}
            {{--class="fc-nineth fw-500"--}}
            {{--> Tượng Toripolisi</a>--}}
            {{--</p>--}}
            {{--<span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>--}}
            {{--</div>--}}
            {{--</div>    </div>--}}
            {{--</div>--}}
            <div class="w-fit d-block mb-25">
                <a>
                    <img
                            data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/image 38.png"
                            data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/image 38.png"
                            class="lazy-load"
                    />
                </a>
            </div>
        </div>
    </div>
</section>

@if (!empty($widget_middle_banner['content']))
    <?php echo html_entity_decode($widget_middle_banner['content']) ?>
@endif

@if (!empty($widget_trend['content']))
    <?php echo html_entity_decode($widget_trend['content']) ?>
@endif

<section class="p-0 m-0 w-fit d-block bg-white">
    <div class="container">
        <div class="row">
            <div class="w-fit d-block  pt-20 pb-20 ">
                <h2 class="fc-fourteenth fs-36 lh-44 fw-700">Q/A - Hỏi đáp du lịch</h2>
            </div>
            <div class="w-fit d-block">
                <div class="w-fit d-block mb-15">
                    <a href="{{url('/')}}/hoi-dap/nha-hang-ngon-an-vat-cafe-dep-o-seminyak-012-5050" class="h:fc-sixth fc-fourteenth fs-22 fw-600 lh-24 d-block w-fit mb-15" style="word-break: break-word; text-align: justify;">Nh&agrave; h&agrave;ng ngon, ăn vặt, cafe đẹp ở Seminyak</a>
                    <div class="w-fit d-flex">
                        <div class="w-32 h-32">
                            <a href="{{url('/')}}/blog/phuonganh6069" class="w-fit h-fit">
                                <img
                                        data-src="https://gody.vn/public/v3/images/user/avatar/phuonganh6069/52724304-20190611162425.jpeg"
                                        data-srcset="https://gody.vn/public/v3/images/user/avatar/phuonganh6069/52724304-20190611162425.jpeg"
                                        class="lazy-load object-cover object-center bar-circle w-fit h-fit"
                                />
                            </a>
                        </div>
                        <div class="w-fit d-block ml-15">
                            <div class="p-20 bar-8 qu-hover--bg--darken" style="background: #F2F2F2;">
                                <p>
                                    <a
                                            href="{{url('/')}}/blog/phuonganh6069"
                                            class="fc-fourteenth fs-16 fw-600 d-block w-fit mb-10"
                                    >
                                        Phuong Anh
                                    </a>
                                    <a href="{{url('/')}}/hoi-dap/nha-hang-ngon-an-vat-cafe-dep-o-seminyak-012-5050" class="fc-fourteenth fs-15 fw-400" style="word-break: break-word; text-align: justify;">
                                        Mọi người cho mình xin Nhà hàng ngon, chợ ăn vặt, quán cf đẹp và chỗ chơi ở SEMINYAK với.
                                        Mình về rồi, cảm ơn mọi người.
                                        mình rất refer Pitato head Beach Club và Woobar nha. Kế bên nhau ngay bãi biển mà cực đông vui ở seminyak. </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block mb-15">
                    <a href="{{url('/')}}/hoi-dap/mua-khan-cashmere-o-an-do-012-5049" class="h:fc-sixth fc-fourteenth fs-22 fw-600 lh-24 d-block w-fit mb-15" style="word-break: break-word; text-align: justify;">Mua khăn Cashmere ở Ấn Độ</a>
                    <div class="w-fit d-flex">
                        <div class="w-32 h-32">
                            <a href="{{url('/')}}/blog/thanhnguyen8829" class="w-fit h-fit">
                                <img
                                        data-src="https://gody.vn/public/v3/images/user/avatar/thanhnguyen8829/111053704-20190611161234.jpeg"
                                        data-srcset="https://gody.vn/public/v3/images/user/avatar/thanhnguyen8829/111053704-20190611161234.jpeg"
                                        class="lazy-load object-cover object-center bar-circle w-fit h-fit"
                                />
                            </a>
                        </div>
                        <div class="w-fit d-block ml-15">
                            <div class="p-20 bar-8 qu-hover--bg--darken" style="background: #F2F2F2;">
                                <p>
                                    <a
                                            href="{{url('/')}}/blog/thanhnguyen8829"
                                            class="fc-fourteenth fs-16 fw-600 d-block w-fit mb-10"
                                    >
                                        Thanh Nguyen
                                    </a>
                                    <a href="{{url('/')}}/hoi-dap/mua-khan-cashmere-o-an-do-012-5049" class="fc-fourteenth fs-15 fw-400" style="word-break: break-word; text-align: justify;">
                                        Cả nhà ơi, ấn độ nổi tiếng vs khăn Cashmere, nhưng mình sợ mua phải hàng fake Tàu giá cao như Khải silk lắm.
                                        Vậy ai có bít hay kinh nghiệm gì về mua món này ở Ấn độ k ạ? </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block mb-15">
                    <a href="{{url('/')}}/hoi-dap/thue-scooter-o-paris-012-5048" class="h:fc-sixth fc-fourteenth fs-22 fw-600 lh-24 d-block w-fit mb-15" style="word-break: break-word; text-align: justify;">Thu&ecirc; Scooter ở Paris</a>
                    <div class="w-fit d-flex">
                        <div class="w-32 h-32">
                            <a href="{{url('/')}}/blog/sontung9796" class="w-fit h-fit">
                                <img
                                        data-src="https://gody.vn/public/v3/images/user/avatar/sontung9796/24961357-20190611161027.jpeg"
                                        data-srcset="https://gody.vn/public/v3/images/user/avatar/sontung9796/24961357-20190611161027.jpeg"
                                        class="lazy-load object-cover object-center bar-circle w-fit h-fit"
                                />
                            </a>
                        </div>
                        <div class="w-fit d-block ml-15">
                            <div class="p-20 bar-8 qu-hover--bg--darken" style="background: #F2F2F2;">
                                <p>
                                    <a
                                            href="{{url('/')}}/blog/sontung9796"
                                            class="fc-fourteenth fs-16 fw-600 d-block w-fit mb-10"
                                    >
                                        Son N Tung
                                    </a>
                                    <a href="{{url('/')}}/hoi-dap/thue-scooter-o-paris-012-5048" class="fc-fourteenth fs-15 fw-400" style="word-break: break-word; text-align: justify;">
                                        Em muốn thuê Scooter ở Paris, em thấy có Lime, Tier, Dott. Anh chị cho em hỏi cách thuê scooter, hãng nào có nhiều xe và thuận tiện thuê nhất ạ? Có app nào check được xe cả 3 hãng này không?
                                        Ở Paris hay Rome có thuê xe Vespa đi được không ạ?
                                        Mọi người hướng dẫn giúp em với nhé.
                                        Em cảm ơn nhiều. </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block mb-15">
                    <a href="{{url('/')}}/hoi-dap/du-lich-tokyo-giua-thang-4-012-5047" class="h:fc-sixth fc-fourteenth fs-22 fw-600 lh-24 d-block w-fit mb-15" style="word-break: break-word; text-align: justify;">Du lịch Tokyo giữa th&aacute;ng 4</a>
                    <div class="w-fit d-flex">
                        <div class="w-32 h-32">
                            <a href="{{url('/')}}/blog/trantai5403" class="w-fit h-fit">
                                <img
                                        data-src="https://gody.vn/public/v3/images/user/avatar/trantai5403/16087472-20190611160647.jpeg"
                                        data-srcset="https://gody.vn/public/v3/images/user/avatar/trantai5403/16087472-20190611160647.jpeg"
                                        class="lazy-load object-cover object-center bar-circle w-fit h-fit"
                                />
                            </a>
                        </div>
                        <div class="w-fit d-block ml-15">
                            <div class="p-20 bar-8 qu-hover--bg--darken" style="background: #F2F2F2;">
                                <p>
                                    <a
                                            href="{{url('/')}}/blog/trantai5403"
                                            class="fc-fourteenth fs-16 fw-600 d-block w-fit mb-10"
                                    >
                                        Tran Tai
                                    </a>
                                    <a href="{{url('/')}}/hoi-dap/du-lich-tokyo-giua-thang-4-012-5047" class="fc-fourteenth fs-15 fw-400" style="word-break: break-word; text-align: justify;">
                                        Cả nhà cho mình hỏi mình dự định đi sang tokyo giữa tháng 4 lúc đấy còn hoa anh đào ko mn, với cả thời tiết còn lạnh ko ạ, có phải mang áo dày đi ko ạ. Cám ơn mọi người. </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block mb-15">
                    <a href="{{url('/')}}/hoi-dap/du-lich-da-nang-5046" class="h:fc-sixth fc-fourteenth fs-22 fw-600 lh-24 d-block w-fit mb-15" style="word-break: break-word; text-align: justify;">Du lịch Đ&agrave; Nẵng</a>
                    <div class="w-fit d-flex">
                        <div class="w-32 h-32">
                            <a href="{{url('/')}}/blog/zgjl5vnfvznqi5t107xzsuq4hmu2" class="w-fit h-fit">
                                <img
                                        data-src="https://graph.facebook.com/2458346227674259/picture"
                                        data-srcset="https://graph.facebook.com/2458346227674259/picture"
                                        class="lazy-load object-cover object-center bar-circle w-fit h-fit"
                                />
                            </a>
                        </div>
                        <div class="w-fit d-block ml-15">
                            <div class="p-20 bar-8 qu-hover--bg--darken" style="background: #F2F2F2;">
                                <p>
                                    <a
                                            href="{{url('/')}}/blog/zgjl5vnfvznqi5t107xzsuq4hmu2"
                                            class="fc-fourteenth fs-16 fw-600 d-block w-fit mb-10"
                                    >
                                        V&acirc;n L&ecirc;
                                    </a>
                                    <a href="{{url('/')}}/hoi-dap/du-lich-da-nang-5046" class="fc-fourteenth fs-15 fw-400" style="word-break: break-word; text-align: justify;">
                                        E muốn thuê homestay,biệt thự hoặc vila gần biển,trung tâm cho tầm 10 ng lớn 4 trẻ con ,ai có kinh nghiệm cho e xin địa chỉ với </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-fit d-block mb-15">
                    <a href="{{url('/')}}/hoi-dap/minh-xin-vai-khach-san-o-kuta-bali-012-5045" class="h:fc-sixth fc-fourteenth fs-22 fw-600 lh-24 d-block w-fit mb-15" style="word-break: break-word; text-align: justify;">M&igrave;nh xin v&agrave;i kh&aacute;ch sạn ở Kuta, Bali</a>
                    <div class="w-fit d-flex">
                        <div class="w-32 h-32">
                            <a href="{{url('/')}}/blog/lethuy3225" class="w-fit h-fit">
                                <img
                                        data-src="https://gody.vn/public/v3/images/user/avatar/lethuy3225/14550383-20191017093759.jpeg"
                                        data-srcset="https://gody.vn/public/v3/images/user/avatar/lethuy3225/14550383-20191017093759.jpeg"
                                        class="lazy-load object-cover object-center bar-circle w-fit h-fit"
                                />
                            </a>
                        </div>
                        <div class="w-fit d-block ml-15">
                            <div class="p-20 bar-8 qu-hover--bg--darken" style="background: #F2F2F2;">
                                <p>
                                    <a
                                            href="{{url('/')}}/blog/lethuy3225"
                                            class="fc-fourteenth fs-16 fw-600 d-block w-fit mb-10"
                                    >
                                        Le Thuy
                                    </a>
                                    <a href="{{url('/')}}/hoi-dap/minh-xin-vai-khach-san-o-kuta-bali-012-5045" class="fc-fourteenth fs-15 fw-400" style="word-break: break-word; text-align: justify;">
                                        Lễ này mình đi Bali khu vực Kuta 1 tuần, bạn nào biết khách sạn ở khu vực này thì giới thiệu mình với ah. Có thông tin liên lạc luôn thì càng tốt. Cám ơn mọi người. </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-0 m-0 w-fit d-block bg-white">
    <div class="container">
        <div class="row">
            <div class="w-fit d-block  pt-20 pb-20 ">
                <h2 class="fc-fourteenth fs-36 lh-44 fw-700">#Godygram</h2>
            </div>
            <div class="w-fit d-flex jc-space-between ai-center" style="--column:4; --gutter: 38px;">
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) ); height: 310px;">
                    <a href="{{url('/')}}/photo/tour-viet-nam-cambodia-thai-lan-5316?photo_album=album" class="w-fit h-fit">
                        <img
                                data-src="https://media2.gody.vn/public/mytravelmap/images/2023/3/26/quan.trangianb4112/original/7084f3b1e4ce0bb83dd3b95e0d723d40079bb608.jpg"
                                data-srcset="https://media2.gody.vn/public/mytravelmap/images/2023/3/26/quan.trangianb4112/original/7084f3b1e4ce0bb83dd3b95e0d723d40079bb608.jpg"
                                class="lazy-load w-fit object-cover object-center h-fit bar-8"
                        />
                        <img
                                data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                class="lazy-load h:o50"
                                style="position: absolute;width: 100%;height: 100%;left: 0;overflow: hidden;border-radius: 8px;"
                        >
                    </a>
                    <div class="ps-absolute b10 l10">
                        <div class="d-flex ai-center jc-space-between">
                            <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                <span target="_blank" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-4 fc-sixth">
                                    <img
                                            data-src="https://lh3.googleusercontent.com/a/AGNmyxbVJrT2CeC91YmpS7frBf6e7cmWMIq8zrYJcinI=s96-c"
                                            data-srcset="https://lh3.googleusercontent.com/a/AGNmyxbVJrT2CeC91YmpS7frBf6e7cmWMIq8zrYJcinI=s96-c"
                                            class="lazy-load w-fit h-fit object-cover object-center bar-circle"
                                    >
                                </span>
                                <a href="{{url('/')}}/blog/quan.trangianb4112" class="fc-white d-inline-block truncate td-none outline-none fs-14 fw-600 wmx-135 ml-5 mr-20">
                                    quan tran
                                </a>
                            </div>
                        </div>
                    </div><!-- ps-absolute -->
                </div>
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) ); height: 310px;">
                    <a href="{{url('/')}}/photo/sai-gon-vung-tau-can-tho-ha-nam-ly-son-dac-lac-5315?photo_album=album" class="w-fit h-fit">
                        <img
                                data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2017/10/6/hiencucvang19855168/453d1f636aca89cf134d54d71bde9908.jpg"
                                data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2017/10/6/hiencucvang19855168/453d1f636aca89cf134d54d71bde9908.jpg"
                                class="lazy-load w-fit object-cover object-center h-fit bar-8"
                        />
                        <img
                                data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                class="lazy-load h:o50"
                                style="position: absolute;width: 100%;height: 100%;left: 0;overflow: hidden;border-radius: 8px;"
                        >
                    </a>
                    <div class="ps-absolute b10 l10">
                        <div class="d-flex ai-center jc-space-between">
                            <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                <span target="_blank" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-4 fc-sixth">
                                    <img
                                            data-src="https://graph.facebook.com/v2.8/1906247742724297/picture?type=normal"
                                            data-srcset="https://graph.facebook.com/v2.8/1906247742724297/picture?type=normal"
                                            class="lazy-load w-fit h-fit object-cover object-center bar-circle"
                                    >
                                </span>
                                <a href="{{url('/')}}/blog/hiencucvang19855168" class="fc-white d-inline-block truncate td-none outline-none fs-14 fw-600 wmx-135 ml-5 mr-20">
                                    Linh Le
                                </a>
                            </div>
                        </div>
                    </div><!-- ps-absolute -->
                </div>
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) ); height: 310px;">
                    <div class="w-fit mb-10 ps-relative" style="height: 150px">
                        <a href="{{url('/')}}/photo/ho-dieu-hoa-ho-son-phu-yen-5314?photo_album=album" class="w-fit h-fit">
                            <img
                                    data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2023/03/21/imissyou_2668257/d815f0f58e90eb155a817e71d414a745.jpg"
                                    data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2023/03/21/imissyou_2668257/d815f0f58e90eb155a817e71d414a745.jpg"
                                    class="lazy-load w-fit object-cover object-center h-fit bar-8"
                            />
                            <img
                                    data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                    data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                    class="lazy-load h:o50"
                                    style="position: absolute;width: 100%;height: 100%;left: 0;overflow: hidden;border-radius: 8px;"
                            >
                        </a>
                        <div class="ps-absolute b10 l10">
                            <div class="d-flex ai-center jc-space-between">
                                <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                    <span target="_blank" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-4 fc-sixth">
                                        <img
                                                data-src="https://graph.facebook.com/v2.8/1110153672468755/picture?type=normal"
                                                data-srcset="https://graph.facebook.com/v2.8/1110153672468755/picture?type=normal"
                                                class="lazy-load w-fit h-fit object-cover object-center bar-circle"
                                        >
                                    </span>
                                    <a href="{{url('/')}}/blog/imissyou_2668257" class="fc-white d-inline-block truncate td-none outline-none fs-14 fw-600 wmx-135 ml-5 mr-20">
                                        L&ecirc; Thị Kiều
                                    </a>
                                </div>
                            </div>
                        </div><!-- ps-absolute -->
                    </div>
                    <div class="w-fit ps-relative" style="height: 150px">
                        <a href="{{url('/')}}/photo/pho-co-hoi-an-5313?photo_album=album" class="w-fit h-fit">
                            <img
                                    data-src="https://media2.gody.vn/public/mytravelmap/images/2023/3/17/ngocvudb8160/original/8960b1a675d6b236b4ba3e25ad06754497ea9487.jpg"
                                    data-srcset="https://media2.gody.vn/public/mytravelmap/images/2023/3/17/ngocvudb8160/original/8960b1a675d6b236b4ba3e25ad06754497ea9487.jpg"
                                    class="lazy-load w-fit object-cover object-center h-fit bar-8"
                            />
                            <img
                                    data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                    data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                    class="lazy-load h:o50"
                                    style="position: absolute;width: 100%;height: 100%;left: 0;overflow: hidden;border-radius: 8px;"
                            >
                        </a>
                        <div class="ps-absolute b10 l10">
                            <div class="d-flex ai-center jc-space-between">
                                <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                    <span target="_blank" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-4 fc-sixth">
                                        <img
                                                data-src="https://lh3.googleusercontent.com/a/AGNmyxY0-9l3Pb_XbIWzZx3xKVP05mnAaqCHnGC2cjrQUQ=s96-c"
                                                data-srcset="https://lh3.googleusercontent.com/a/AGNmyxY0-9l3Pb_XbIWzZx3xKVP05mnAaqCHnGC2cjrQUQ=s96-c"
                                                class="lazy-load w-fit h-fit object-cover object-center bar-circle"
                                        >
                                    </span>
                                    <a href="{{url('/')}}/blog/ngocvudb8160" class="fc-white d-inline-block truncate td-none outline-none fs-14 fw-600 wmx-135 ml-5 mr-20">
                                        Đặng Ngọc Vũ
                                    </a>
                                </div>
                            </div>
                        </div><!-- ps-absolute -->
                    </div>
                </div>
                <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) ); height: 310px;">
                    <a href="{{url('/')}}/photo/chuyen-di-adventure-thu-2-4-tai-nz-5308?photo_album=album" class="w-fit h-fit">
                        <img
                                data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2023/3/6/anhngotrip2942/1e32b4b67d1f25698c0c16d2a64b6e46.jpg"
                                data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2023/3/6/anhngotrip2942/1e32b4b67d1f25698c0c16d2a64b6e46.jpg"
                                class="lazy-load w-fit object-cover object-center h-fit bar-8"
                        />
                        <img
                                data-src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                data-srcset="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-05.png"
                                class="lazy-load h:o50"
                                style="position: absolute;width: 100%;height: 100%;left: 0;overflow: hidden;border-radius: 8px;"
                        >
                    </a>
                    <div class="ps-absolute b10 l10">
                        <div class="d-flex ai-center jc-space-between">
                            <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                                <span target="_blank" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-4 fc-sixth">
                                    <img
                                            data-src="https://media2.gody.vn//public/images/user-2/2023/03/06/anhngotrip2942/thumbnail-70/640587644a0e7-1678083940.jpg"
                                            data-srcset="https://media2.gody.vn//public/images/user-2/2023/03/06/anhngotrip2942/thumbnail-70/640587644a0e7-1678083940.jpg"
                                            class="lazy-load w-fit h-fit object-cover object-center bar-circle"
                                    >
                                </span>
                                <a href="{{url('/')}}/blog/anhngotrip2942" class="fc-white d-inline-block truncate td-none outline-none fs-14 fw-600 wmx-135 ml-5 mr-20">
                                    Ngo Tuan Anh
                                </a>
                            </div>
                        </div>
                    </div><!-- ps-absolute -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-0 m-0 w-fit d-block bg-white">
    <div class="container">
        <div class="row">
            <div class="w-fit d-block  pt-20 pb-20 ">
                <h2 class="fc-fourteenth fs-42 lh-44 fw-700">Đối tác</h2>
            </div>
            <div class="w-fit d-block">
                <div class="d-flex ai-top fw-wrap" style="--column:8; --gutter: 6px;">
                    @foreach($partners as $partner)
                        <div class="ai-center d-flex mb-10 pr-5" style="width: calc((100% - var(--gutter)) / var(--column));">
                            <img src="{{ url(env('FOLDER_UPLOAD') . $partner->logo) }}"
                                 class="object-cover object-center dw-fit img-partner"
                            />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .h-bottom-E0E0E0:hover {
        border-bottom: 2px solid #E0E0E0 !important;
    }

    img.img-partner {
        height: 56px;
    }
</style>
<div id="modal-login" class="modal modal-simple fade ff-sans" role="dialog">
    <div class="modal-dialog w100%-60 wmn-650 wmx-600 xs:wmn-auto xs:w-fit xs:ps-fixed xs:m-0 xs:t0 xs:r0 xs:b0 xs:l0" :class="{'sm:wmn-auto': (currentTab != 'livedorvisitedform'), 'sm:ps-fixed sm:m-0 sm:t0 sm:r0 sm:b0 sm:l0 sm:wmn-auto sm:w-fit': (currentTab == 'livedorvisitedform')}">
        <div class="modal-content bar-5 bg-white xs:h-fit xs:bar-0" :class="modalContentClass">
            <div datalived="[object Object]" datavietnams="" dataworlds="" previousurl="" newuserstatus="0">
                <div class="modal-header d-none bn pb-5 px-12 pt-10 xs:d-block bg-white">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close fs-26 outline-none float-left w-40 mln-14 h-34 o40 s:mtn-6"><i aria-hidden="true" class="fa fa-angle-left"></i></button>
                    <h4 class="modal-title fs-24 m-0 fc-nineth fw-normal tt-uppercase s:fs-16">
                        Đăng nhập
                    </h4></div>
                <div class="py-12 xs:pt-0">
                    <div class="
          w-100%
          ta-center
          px-50
          brw1
          brs-solid
          bc-primary
          ps-relative
          xs:bn xs:w-fit xs:px-12
          sm:bn sm:w-fit
        ">
                        <div class="fc-nineth tt-uppercase mb-15 fs-30 xs:mb-5 xs:fs-24 xs:d-none">
                            Đăng nhập
                        </div>
                        <p class="mx-0 fc-sixth lh-lg mb-20 xs:fs-13 xs:mb-15">
                            Tham gia ngay cộng đồng du lịch hàng đầu Việt Nam và tận hưởng những
                            điều tuyệt vời nhất từ Gody
                        </p>
                        <form method="post" action="{{ url('dang-nhap') }}" id="login-form" name="login-form" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="mb-20 ps-relative"><input type="text" placeholder="Email" class="
                form-control
                bar-5
                h-50
                lh-50
                bc-tenth
                w-fit
                bs-none
                xs:h-40 xs:lh-40
              "> <span class="
                d-inline-block
                fc-thirteenth
                ps-absolute
                l12
                b0
                fs-13
                e:d-none
              "></span></div>
                            <div class="mb-20 ps-relative"><input type="password" placeholder="Mật khẩu" class="
                form-control
                bar-5
                h-50
                lh-50
                bc-tenth
                w-fit
                mb-20
                bs-none
                xs:h-40 xs:lh-40
              "> <span class="
                d-inline-block
                fc-thirteenth
                ps-absolute
                l12
                b0
                fs-13
                e:d-none
              "></span></div>
                            <div class="d-flex jc-space-between mb-12">
                                <div class="radio checkbox m-0 checkbox-bg-primary"><label class="
                  ds-inline-block
                  container
                  w-auto
                  mb-0
                  fs-14
                  fc-nineth
                  ps-relative
                  pl-35
                  c-pointer
                  h-20
                  lh-20
                  user-select-none
                ">Ghi nhớ đăng nhập
                                        <input type="checkbox" name="remember_login" class="ps-absolute o0 c-pointer t0 r0" value="1"> <span class="
                    checkmark
                    card7
                    w-20
                    h-20
                    bar-3
                    ps-absolute
                    t0
                    l0
                    h-20
                    w-20
                    bg-white
                  "></span></label></div>
                                <a href="/quen-mat-khau" class="fc-thirteenth d-inline-block fs-16">Quên mật khẩu ?</a></div>
                            <div class="d-flex mb-8">
                                <button class="
                blr-5
                fs-16
                bs-none
                tt-uppercase
                w-50%
                p-0
                h-50
                d-inline-block
                t-duration-slow
                xs:h-44
               bn bg-primary fc-white" type="button" id="login-submit">
                                    Đăng nhập
                                </button>
                                <a href="/dang-ky" class="
                brr-5
                bc-tenth
                bg-white
                fs-16
                bs-none
                fc-sixth
                tt-uppercase
                w-50%
                lh-48
                d-inline-block
                baw1
                bas-solid
                bls-unset
                t-duration-slow
                xs:h-44
              ">Đăng ký</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-destination" class="modal fade modal-simple" role="dialog">
    <div class="modal-dialog modal-lg" style="max-width: 750px; margin-top:20%; text-align: center;">
        <!-- Modal content-->
        <img src="https://gody.vn/public/images/1x1.png" data-src="https://gody.vn/public/v3/images/loading.gif" data-srcset="/public/v3/images/loading.gif, /public/v3/images/loading.gif" alt="Loading..." class="bg-white">
    </div>
    <!-- /Evaluate popup -->
</div><!-- /.modal-destination -->
<div class="modal fade modal-custom-global" id="modal-user-request" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-request-body">
            <div class="modal_user_request_loading hide" style="display:block;width:100%;max-width:450px;position:fixed;top:0;text-align:center;right:0;bottom:0;left:0;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0;padding-top:100px;background:rgba(255,255,255,.7); z-index: 1;"><img src="https://gody.vn/public/images/1x1.png" data-src="https://gody.vn/public/v3/images/loading.gif" data-srcset="/public/v3/images/loading.gif" alt="Loading..."></div>
            <form action="https://gody.vn/a/goc-yeu-cau/store" method="post" id="modal-user-request-form" novalidate>
                <input type="hidden" name="_token" value="GCzzGrcDfUqNbxZ8oBl3sygegup9bN8mw2iL3ZoB">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"> Góc yêu cầu </h4>
                </div>
                <div class="modal-body">
                    <div class="subject col-md-6 cold-sm-6 col-xs-12 padding_0">
                        <label for="name"></label>
                        <select placeholder="Subject line" name="modal_user_request_option" id="modal_user_request_option">
                            <option value="0">Bài viết, review</option>
                            <option value="1">Cập nhật điểm đến mới</option>
                        </select>
                        <span class="error modal_user_request_option_msg" style="display: none"></span>
                    </div>
                    <div class="email col-md-6 cold-sm-6 col-xs-12 pr-0">
                        <label for="email"></label>
                        <input type="email" placeholder="Email" name="modal_user_request_email" id="modal_user_request_email" value="">
                        <span class="error modal_user_request_email_msg" style="display: none"></span>
                    </div>
                    <div class="name col-md-12 cold-sm-12 col-xs-12 padding_0">
                        <label for="name"></label>
                        <input type="text" placeholder="Tên địa điểm: ( Ghi rõ địa điểm, tỉnh thành, đất nước )" name="modal_user_request_name" id="modal_user_request_name">
                        <span class="error modal_user_request_name_msg" style="display: none"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="message" data-option="0">Thành viên có thể gửi bài yêu cầu về: <b>info@gody.vn</b></div>
                    <div class="message hide" data-option="1">Thành viên có thể đóng góp thông tin địa điểm ( hình ảnh, nội dung ...) về: <b>info@gody.vn</b></div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Gửi ngay</button>
                </div>
            </form>
        </div>
        <div class="modal-content modal-request-body-success hide">
            <div class="modal-header">
                <button type="button" class="close close-report-success" data-dismiss="modal" aria-label="Close" onclick="user_request_success();"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title margin-0">Gửi yêu cầu thành công!</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" style=" margin-top:10px;margin-bottom:0;">Cảm ơn bạn đã gửi yêu cầu cho GODY.VN biết. Chúng tôi sẽ hồi âm trong thời gian sớm nhất!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="user_request_success();">Gửi yêu cầu khác</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="user_request_success();">Đóng</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade v5-layouts-i-md modal__va-middle " id="modal-banner-ads" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content xs:wmx-100%-10">
            <div class="modal-body pl-0 pr-0 pt-0 pb-0">
                <button type="button" class="close ps-absolute w-26 h-26 bg-white bar-circle o100 tn20 rn20" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
    </div>
</div>
@include('layouts.partials.footer_noscript')
<div class="modal fade" id="modal-search-v2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ref="modalSearchV2" style="background: rgba(255,255,255,0.85);">
    <div class="modal-dialog modal-lg bar-8" role="document">
        <div class="modal-content bar-8">
            <div class="modal-body">
                <div class="d-flex ai-center">
                    <div class="ps-relative fs-14 px-12 my-12 fl-1">
                        <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/search-outline.svg"
                             class="
                w-24
                filter-sixth
                o90
                va-middle
                d-inline-block
                ps-absolute
                l24
                t50%
                translateYn50%
              ">
                        <input
                                type="text"
                                v-model.trim="searchInput"
                                class="
                bar-25
                ba
                bc-twentyth
                outline-none
                pl-45
                pr-40
                py-6
                w-fit
                box-border
                fc-sixth
                fs-15
                h-40
              "
                                id="search-header-2"
                                autofocus
                                placeholder="Địa điểm bạn muốn tìm ?"
                                ref="globalSearchInput"
                                @keydown="actGlobalSearch"
                        />
                        <button
                                class="
                bg-transparent
                outline-none
                f:outline-none
                fv:outline-none
                a:outline-none
                ps-absolute
                bn
                fs-22
                r16
                t0
                h-fit
                d-flex
                ai-center
                jc-center
                fc-twentyth
              "
                                v-if="!!searchInput"
                                @click.prevent.stop="clearInput"
                        >
                            <img class="w-20 filter-sixth" src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/close-outline.svg"/>
                        </button>
                    </div>
                </div>
                <div class="px-12">
                    <div class="pb-0 pt-20 fw-500 fs-16">Tìm kiếm nhiều</div>
                    <div class="overflow-y-auto overflow-x-hidden d-flex fw-wrap">
                        <div class="d-flex ai-center ps-relative py-12 mr-40 ws-nowrap fl-1">
                            <div class="ps-relative d-flex ai-center fl-1">
                                <div class="
                        bar-circle
                        ba
                        bc-eleventh
                        d-flex
                        ai-center
                        jc-center
                        p-0
                        w-42
                        h-42
                        mr-15
                      "><img src="https://media2.gody.vn/public/images/place/golden-sand-bar/61afa90039e68-1638902016.jpeg" alt="Phú Quốc" loading="lazy" class="bar-circle w-fit h-fit object-center object-cover"></div>
                                <div class="fl-1"><p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                        Phú Quốc
                                    </p></div>
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/kien-giang" class="d-block ps-absolute t0 r0 b0 l0"></a></div>
                        </div>
                        <div class="d-flex ai-center ps-relative py-12 mr-40 ws-nowrap fl-1">
                            <div class="ps-relative d-flex ai-center fl-1">
                                <div class="
                        bar-circle
                        ba
                        bc-eleventh
                        d-flex
                        ai-center
                        jc-center
                        p-0
                        w-42
                        h-42
                        mr-15
                      "><img src="https://media.gody.vn/images/lao-cai/nha-tho-sapa/10-2016/20161020033948-nha-tho-sapa-gody(9).jpg" alt="Sapa" loading="lazy" class="bar-circle w-fit h-fit object-center object-cover"></div>
                                <div class="fl-1"><p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                        Sapa
                                    </p></div>
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/lao-cai" class="d-block ps-absolute t0 r0 b0 l0"></a></div>
                        </div>
                        <div class="d-flex ai-center ps-relative py-12 mr-40 ws-nowrap fl-1">
                            <div class="ps-relative d-flex ai-center fl-1">
                                <div class="
                        bar-circle
                        ba
                        bc-eleventh
                        d-flex
                        ai-center
                        jc-center
                        p-0
                        w-42
                        h-42
                        mr-15
                      "><img src="https://media.gody.vn/images/da-nang/ba-na-hills/10-2016/20161017073018-ba-ba-hills-da-nang-gody%20(2).jpg" alt="Đà Nẵng" loading="lazy" class="bar-circle w-fit h-fit object-center object-cover"></div>
                                <div class="fl-1"><p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                        Đà Nẵng
                                    </p></div>
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/da-nang" class="d-block ps-absolute t0 r0 b0 l0"></a></div>
                        </div>
                        <div class="d-flex ai-center ps-relative py-12 mr-40 ws-nowrap fl-1">
                            <div class="ps-relative d-flex ai-center fl-1">
                                <div class="
                        bar-circle
                        ba
                        bc-eleventh
                        d-flex
                        ai-center
                        jc-center
                        p-0
                        w-42
                        h-42
                        mr-15
                      "><img src="https://media.gody.vn/images/lam-dong/thung-lung-tinh-yeu/1-2017/20170109030049-thung-lung-tinh-yeu-gody%20(1).jpg" alt="Đà Lạt" loading="lazy" class="bar-circle w-fit h-fit object-center object-cover"></div>
                                <div class="fl-1"><p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                        Đà Lạt
                                    </p></div>
                                <a href="{{url('diem-den')}}/chau-a/viet-nam/lam-dong" class="d-block ps-absolute t0 r0 b0 l0"></a></div>
                        </div>
                        <div class="d-flex ai-center ps-relative py-12 mr-40 ws-nowrap fl-1">
                            <div class="ps-relative d-flex ai-center fl-1">
                                <div class="
                        bar-circle
                        ba
                        bc-eleventh
                        d-flex
                        ai-center
                        jc-center
                        p-0
                        w-42
                        h-42
                        mr-15
                      "><img src="https://media2.gody.vn/public/images/province/Niigata/613a2632955c6-1631200818.jpeg" alt="Nhật Bản" loading="lazy" class="bar-circle w-fit h-fit object-center object-cover"></div>
                                <div class="fl-1"><p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                        Nhật Bản
                                    </p></div>
                                <a href="{{url('diem-den')}}/chau-a/Japan" class="d-block ps-absolute t0 r0 b0 l0"></a></div>
                        </div>
                        <div class="d-flex ai-center ps-relative py-12 mr-40 ws-nowrap fl-1">
                            <div class="ps-relative d-flex ai-center fl-1">
                                <div class="
                        bar-circle
                        ba
                        bc-eleventh
                        d-flex
                        ai-center
                        jc-center
                        p-0
                        w-42
                        h-42
                        mr-15
                      "><img src="https://media.gody.vn/images/hinh-tong-hop/hinh-anh-tong-hop-2/11-2018/15047553-20181119094427-hinh-tong-hop-hinh-anh-tong-hop-2.jpg" alt="Đài Loan" loading="lazy" class="bar-circle w-fit h-fit object-center object-cover"></div>
                                <div class="fl-1"><p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                        Đài Loan
                                    </p></div>
                                <a href="{{url('diem-den')}}/chau-a/taiwan" class="d-block ps-absolute t0 r0 b0 l0"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script type="text/javascript" src="https://gody.vn/public/v3/plugins/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://gody.vn/public/v3/plugins/bootstrap/bootstrap.min.js"></script>
<script src="https://gody.vn/public/v3/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="https://gody.vn/public/v3/plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="https://gody.vn/public/v6/js/fancybox-3.1/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="https://gody.vn/public/v3/js/script.js?v=1235"></script>
<script type="text/javascript" src="https://media2.gody.vn/public/v3/js/custom.js?v=1235" defer></script>
<script src="https://gody.vn/public/v3/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="https://gody.vn/public/v3/js/sweetalert.min.js"></script>
<script src="https://gody.vn/public/home/js/lodash.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var lazyImages = [].slice.call(document.querySelectorAll("img.lazy-load"));
        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.srcset = lazyImage.dataset.srcset;
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });
            lazyImages.forEach(function (lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        } else {
            // Possibly fall back to event handlers here
        }
    });
</script>
<script>
    $(document).ready(function () {
        if (!!!$('.slick-item').length) return;

        $('.slick-item').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            speed: 300,
            variableWidth: true
        })
    });
    $(document).on('click', 'div#top-destination div', function (e) {
        const get_data_type = $(this).attr('data-type');
        $('.item-range').addClass('hide');
        $('.item-range').removeClass('d-block');
        $(`#${get_data_type}`).addClass('d-block');
        //active menu
        //$('.item-destination-menu').removeClass('bc-white');
        $('.item-destination-menu').removeClass('fc-primary');
        $('.item-destination-menu').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
    });
    $(document).on('click', 'div#menu-destination div', function (e) {
        const get_data_type = $(this).attr('data-type');
        $('.item-range-data').addClass('hide');
        $('.item-range-data').removeClass('d-block');
        $(`#${get_data_type}`).addClass('d-block');
        //active menu
        //$('.item-destination-menu-data').removeClass('bc-white');
        $('.item-destination-menu-data').removeClass('fc-primary');
        $('.item-destination-menu-data').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
    });
    $(document).on('click', 'div#mobile-top-destination div', function (e) {
        const get_data_type = $(this).attr('data-type');
        //data
        $('.item-range-mobile').addClass('hide');
        $('.item-range-mobile').removeClass('d-block');
        $(`#${get_data_type}`).addClass('d-block');
        //menu
        $('.item-destination-menu-mobile').removeClass('fc-primary');
        $('.item-destination-menu-mobile').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
    });
    $(document).on('click', 'div#mobile-menu-destination div', function (e) {
        const get_data_type = $(this).attr('data-type');
        //data
        $('.item-range-data-mobile').addClass('hide');
        $('.item-range-data-mobile').removeClass('d-block');
        $(`#${get_data_type}`).addClass('d-block');
        //menu
        $('.item-destination-menu-data-mobile').removeClass('fc-primary');
        $('.item-destination-menu-data-mobile').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
    });
    $(document).on('click', 'div.top-destination-ver02 div', function (e) {
        const data_type = $(this).attr('data-type');
        var afirca = $('div#data-afirca').position(),
            australia = $('div#data-australia').position(),
            americas = $('div#data-americas').position(),
            euro = $('div#data-euro').position(),
            asian = $('div#data-asian').position(),
            viet_nam = $('div#data-viet-nam').position();
        const element = $(`div#${data_type}`).position();
        $(`div.top-destination-ver02 div`).removeClass('fc-primary');
        $(`div.top-destination-ver02 div`).addClass('fc-fourteenth');
        $(this).addClass('fc-primary');
        $(this).removeClass('fc-fourteenth');
        window.scroll({
            top: element.top - 200,
            behavior: 'smooth',
        });
    });
    $(document).on('click', 'div.click-tab-01', function (e) {
        const get_key = $(this).attr('data-key');
        $('div.click-tab-01').removeClass('fc-primary');
        $('div.click-tab-01').removeClass('bc-primary');
        $(this).addClass('fc-primary');
        $(this).addClass('bc-primary');
        $('div.content-tab-01').removeClass('hide');
        $('div.content-tab-01').removeClass('d-block');
        $('div.content-tab-01').addClass('hide');
        $(`div#${get_key}`).removeClass('hide');
    });

    function selectServicePassport(e) {
        $('#country_titleText .item-option').removeClass('hide');
    }

    function closeServicePassport() {
        $('#country_titleText .item-option').addClass('hide');
    }

    //service passport
    function serviceFocus(e) {
        const _parent = $(e).parent().find('p').removeClass('ps-absolute');

    }

    function replaceByDefault(e) {
        e.src = "https://gody.vn/public/v7/images/v7-avatar-default.jpg";
    }

    function showFullContent(e) {
        const _hasClass = $('div.content-guide').hasClass('hide');
        if (_hasClass) {
            $(e).html('Thu Gọn Nội Dung');
            $('div.content-guide').removeClass('hide');
        } else {
            $(e).html('Xem Thêm Nội Dung');
            $('div.content-guide').addClass('hide');
        }
    }

    function goToElement(e, element = null) {
        $(`${element}`).focus();
    }
</script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    $(document).ready(function () {
        $('#departure-date').change(function () {
            startDate = $(this).datepicker('getDate');
            $("#return-date").datepicker("option", "minDate", startDate);
        });
        $('#return-date').change(function () {
            endDate = $(this).datepicker('getDate');
            $("#departure-date").datepicker("option", "maxDate", endDate);
        });
    });
    $(function () {
        $('#departure-date').datepicker({
            closeText: "Đóng",
            prevText: "Trước",
            nextText: "Sau",
            currentText: "Hôm nay",
            monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
            monthNamesShort: ["Một", "Hai", "Ba", "Bốn", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười một", "Mười hai"],
            dayNames: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"],
            dayNamesShort: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
            dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
            weekHeader: "Tuần",
            dateFormat: "dd-mm-yy", //"yy-mm-dd", //"dd/mm/yy",
            //minDate: new Date(),
            minDate: '+7d',
            //firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ""
        }).on('change', function () {
            const _val = $('#departure-date').val();
            $('input[name="departure-date"]').val(_val);
            localStorage.setItem(`plan_departure_date`, _val);
        });
    });
    $(function () {
        $('#return-date').datepicker({
            closeText: "Đóng",
            prevText: "Trước",
            nextText: "Sau",
            currentText: "Hôm nay",
            monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
            monthNamesShort: ["Một", "Hai", "Ba", "Bốn", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười một", "Mười hai"],
            dayNames: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"],
            dayNamesShort: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
            dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
            weekHeader: "Tuần",
            dateFormat: "dd-mm-yy",// "yy-mm-dd",
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ""
        }).on('change', function () {
            const _val = $('#return-date').val();
            $('input[name="return-date"]').val(_val);
            localStorage.setItem(`plan_return_date`, _val);
        });
    })
    $(function () {
        $('.datepicker-plan-time').timepicker({
            timeFormat: 'h:mm p',
            interval: 10,
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    });
</script>
<script src="https://gody.vn/public/v7/js/post-detail.js?v=1235"></script>
<script src="https://gody.vn/public/home/js/jquery.validate.min.js"></script>

<!-- fb -->
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=198019300682232";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    $(function () {
        $(document.body).on('click', '.facebook_login, .google_login', function (e) {
            $('.modalBlogCreateLoading').removeClass('hide');
        });

        $('#login-form').on('shown.bs.modal', function () {
            $('#login_email').focus();
        });

        /* Validate login form */
        $("#login-form").validate({
            rules: {
                login_email: {
                    required: true,
                    email: true,
                },
                login_password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                login_email: {
                    required: 'Vui lòng nhập email!',
                    email: 'Địa chỉ email không hợp lệ!'
                },
                login_password: {
                    required: 'Vui lòng nhập mật khẩu!',
                    minlength: 'Mật khẩu tối thiểu là 6 ký tự!'
                }
            },
            submitHandler: function (form) {
                $('.login_messages').css('display', 'none');
                $('.login_email_msg').css('display', 'none');
                $('.login_password_msg').css('display', 'none');
                var _partner = '';
                var currentWindow = window.open("", "_self");
                var newWindow = window.open("", "_blank");

                $.ajax({
                    url: "https://gody.vn/dang-nhap",
                    type: 'POST',
                    data: $(form).serialize(),
                    success: function (response) {
                        if (response.hasOwnProperty('login_messages')) {
                            $('.login_messages').text(response.login_messages);
                            $('.login_messages').css('display', 'block');
                        } else if (response.hasOwnProperty('login_success')) {
                            newWindow.location = "#";
                            currentWindow.location = "https://gody.vn/map/get_all_country/" + response.username;

                            // newWindow.location = "https://gody.vn/blog/"+response.username;

                            // setTimeout(function() {
                            //     location.reload();
                            // }, 500);

                        }
                        if (response.hasOwnProperty('login_password')) {
                            $('.login_password_msg').text(response.login_password[0]);
                            $('.login_password_msg').css('display', 'block');
                        }
                        if (response.hasOwnProperty('login_email')) {
                            $('.login_email_msg').text(response.login_email[0]);
                            $('.login_email_msg').css('display', 'block');
                        }
                    }
                });
                return false;
            }
        });

        $('.go-to-home').click(function () {
            window.open('https://gody.vn', '_self');
        });

        $('.main-icon-search').click(function () {
            $('#input-search').focus();
        });

    });

    // Read more
    $(".more").click(function () {
        $(".post").addClass("moreContent");
        $(".post").append("");
        $(this).hide();
    });

    $(document.body).on('click', '.facebook_login, .google_login', function (e) {
        setTimeout(function () {

            window.open("https://gody.vn/ban-do-du-lich/viet-nam", '_self');

            //location.reload();

        }, 5000);
    });
</script>

<!-- include('v3.layouts.includes.script') -->
<script>
    $(function () {

        //$('#modal-banner-ads').modal('show');

        $(document.body).on('click', '#modal-banner-ads', function (e) {
            $.ajax({
                url: "https://gody.vn/feeds/banner-hoidap-popup/close",
                type: 'get',
                data: {},
                success: function (response) {
                }
            });
        });

        // Pop up
        $(document.body).on('click', '#modal-banner-ads a', function (e) {
            $('#modal-banner-ads').modal('hide');
            $.ajax({
                url: "https://gody.vn/pop-up/change-status",
                type: 'get',
                data: {},
                success: function (response) {
                    //window.open("https://gody.vn/blog/form/dang-ky", "_blank");
                }
            });
        });

        var modalLogin = window.location.href;

        if (modalLogin.indexOf('#modal-login') > -1) {
            $('#modal-login').modal('show');
        } else if (modalLogin.indexOf('#modal-notification-invite-ig') > -1) {
            $('#modal-notification-invite-ig').modal('show');
        } else {
            popupCheck();
        }

        function popupCheck() {
            /* popup check
        setTimeout(function() {
            $.ajax({
                url: "https://gody.vn/pop-up/check",
                type: "GET",
                data: {},
                success: function(response) {
                    var location_href = window.location.href;

                    if(location_href.indexOf('gody.vn/map/get_all_country') == -1 && location_href.indexOf('gody.vn/ban-do-du-lich/viet-nam') == -1 && location_href.indexOf('gody.vn/du-lich-nuoc-ngoai') == -1 && response.status == false) {
                        // $('#modal-banner-ads .pop-up').addClass('hide');
                        // if(response.number != undefined) {
                        //     $('#modal-banner-ads .pop-up-'+response.number).removeClass('hide');
                        // } else {
                        //     $('#modal-banner-ads .pop-up-1').removeClass('hide');
                        // }
                        //$('#modal-banner-ads').modal('show');
                    }
                },
                error: function(response) {
                    // $('#modal-banner-ads').modal('show');
                }
            });
        }, 5000);
        */
        }

        $(document.body).on('click', '#modal-banner-ads', function (e) {
            $.ajax({
                url: "https://gody.vn/pop-up/change-status",
                type: 'get',
                data: {},
                success: function (response) {

                }, error: function (response) {

                }
            });
        });

        // End Pop up


        $(document.body).on('change', '#modal-user-request .modal-body #modal_user_request_option', function (e) {
            e.preventDefault();
            var _option = $(this).val();
            changeUserRequestOption(_option);
        });

        // Validate Modal User Corner Required
        // $('#modal-user-request-form').validate({
        //     rules: {
        //         modal_user_request_name: {
        //             required: true,
        //             minlength:6
        //         },
        //         modal_user_request_email: {
        //             required: true,
        //             email: true
        //         }
        //     },
        //     messages: {
        //         modal_user_request_name: {
        //             required: 'Vui lòng nhập tên địa điểm!',
        //             minlength: 'Tối thiểu 6 ký tự!'
        //         },
        //         modal_user_request_email: {
        //             required: 'Vui lòng nhập địa chỉ email!',
        //             email: 'Email: example@domain.com'
        //         }
        //     },
        //     submitHandler: function(form) {
        //         var title = $('#modal-user-request-form input#modal_user_request_name').val();
        //         var email = $('#modal-user-request-form input#modal_user_request_email').val();
        //         var type = $('#modal-user-request .modal-body #modal_user_request_option').val();
        //         var _token = $('#modal-user-request-form input[name="_token"]').val();
        //         $('#modal-user-request .modal_user_request_name_msg').css('display', 'none');
        //         $('#modal-user-request .modal_user_request_email_msg').css('display', 'none');
        //         $('#modal-user-request .modal_user_request_loading').removeClass('hide');
        //         $.ajax({
        //             url: "https://gody.vn/a/goc-yeu-cau/store",
        //             type: 'POST',
        //             data: {_token: _token, title: title, email: email, type: type},
        //             success: function(response) {
        //                 changeUserRequestOption(0);
        //                 $(form)[0].reset();
        //                 $('#modal-user-request-form input#modal_user_request_email').val(email);
        //                 $('#modal-user-request .modal_user_request_loading').addClass('hide');

        //                 user_request_success('.modal-content.modal-request-body-success', '.modal-content.modal-request-body');
        //             }, error: function(response) {
        //                 $('#modal-user-request .modal_user_request_loading').addClass('hide');
        //                 response = response.responseJSON;
        //                 if(response.hasOwnProperty('title')) {
        //                     $('.modal_user_request_name_msg').text(response.title[0]);
        //                     $('.modal_user_request_name_msg').css('display', 'block');
        //                 }

        //                 if(response.hasOwnProperty('email')) {
        //                     $('.modal_user_request_email_msg').text(response.email[0]);
        //                     $('.modal_user_request_email_msg').css('display', 'block');
        //                 }
        //                 if(response.hasOwnProperty('type')) {
        //                     $('.modal_user_request_type_msg').text(response.type[0]);
        //                     $('.modal_user_request_type_msg').css('display', 'block');
        //                 }
        //             }
        //         });
        //         return false;
        //     }
        // });
    });


    $(document).ready(function () {
        // const usrMoneyEl = document.querySelectorAll('.js-user-money');
        // console.log(usrMoneyEl);

        $('.navbar-primary .search-primary-wrapper input').focus(function () {
            $('.fixed-box-travel').hide();
            $('.search-primary-bg').show();
            var input_val = $(this).val();
            if (input_val.length > 0) {
                $('.search-primary-wrapper .search-form .filter-panel').hide();
            }
        });
        $(document.body).on('click', '.search-primary-bg', function () {
            $('.search-primary-bg').hide();
            $('.navbar-primary .navbar-collapse ul').first().show();
            $('.navbar-primary .search-primary-wrapper').removeClass('search-focus');
            $('.navbar-primary .search-primary-wrapper input').val('');
            $('.fixed-box-travel').show();
        });
        $('.search-primary-wrapper .search-form a[data-toggle="filter"]').click(function () {
            $('.search-primary-bg').trigger('click');
        });

        $('.home .navbar-primary .search-primary-wrapper').empty();

        $(document.body).on('focus, click', '.search-panel #input-search', function () {
            $("html, body").animate({scrollTop: ($(this).offset().top - 57)}, "slow");
        });

        $(document.body).on('click', '.notification-box .dropdown-menu .notification-menu button', function (e) {
            $('.notification-box .notification-menu button').removeClass('active');
            $(this).addClass('active');

            var data_id = $(this).attr('data-id');
            $('.notification-box .notification-content>div').addClass('hide');
            $('.notification-box .notification-content>div[data-id="' + data_id + '"]').removeClass('hide');

            e.stopPropagation();
        });

        $(document.body).on('click', '.notification-box .notification-bell', function (e) {
            $('.notification-box .notification-bell .notification-bell-count').addClass('hide');
            console.log('xxx');
        });

    }); /* End Document ready */

    function user_request_success(_removeClass = '.modal-content.modal-request-body', _addClass = '.modal-content.modal-request-body-success') {
        $('#modal-user-request ' + _removeClass).removeClass('hide');
        $('#modal-user-request ' + _addClass).addClass('hide');
    }

    function changeUserRequestOption(_option = 0) {
        $('#modal-user-request .modal-body .message').addClass('hide');
        $('#modal-user-request .modal-body .message[data-option="' + _option + '"]').removeClass('hide');
    }

    /* ----- Custom Function ----- */
    function openDestination(e, event, id) {
        event.preventDefault();
        var id = '#' + id;
        $('#modal-destination .filter-category button').removeClass('active');
        $(e).addClass('active');
        $('#modal-destination .tabcontent').css('display', 'none');
        $(id).css('display', 'block');
    }

    if (typeof handleIEError !== 'function') {
        function handleIEError(img) {
            img.src = "https://gody.vn/public/v7/images/v7-avatar-default.jpg";
        }
    }

    if (!!document.querySelector('.js-global-nav__primary_link')) {
        document.querySelector('.js-global-nav__primary_link').addEventListener('click', function (e) {
            document.querySelector('body').classList.toggle('global-nav-launcher-is-open');
            e.stopPropagation();
            e.preventDefault();
        });
    }

    if (!!document.querySelectorAll('.js-global-nav__close')?.length) {
        document.querySelectorAll('.js-global-nav__close').forEach(function (e) {
            e.addEventListener('click', function () {
                document.querySelector('body').classList.remove('global-nav-launcher-is-open');
            });
        });
    }

</script>
<!-- Donate Script -->
<script>
    $(document).ready(function () {

        $(document.body).on('click', '.donate-coin .gtm-donate-invite', function (e) {
            e.preventDefault();
            if (window.innerWidth >= 768) {
                var link = window.location.href;
                FB.ui({
                    method: 'share',
                    display: 'popup',
                    mobile_iframe: true,
                    href: link,
                    hashtag: '#gody'
                }, function (response) {
                    console.log(response);
                });
            } else {
                const url = window.location.href;
                const title = document.querySelector('title').textContent;
                const text = document.querySelector('meta[name="description"]').getAttribute('content');
                if (navigator.share) {
                    navigator
                        .share({
                            title,
                            text,
                            url,
                        })
                        .then(function () {
                        })
                        .catch((error) => console.log('Error sharing', error));
                } else {
                    window.open(
                        `https://www.facebook.com/dialog/share?app_id=198019300682232&display=page&href=${url}&hashtag=%23gody`,
                        '_blank'
                    );
                }
            }
        });


        // Get Coin Donate For Post
        getCoinPoint();

        $('#modal-coin-sender').on('show.bs.modal', function () {
            if (!$(this).hasClass('loaded')) {
                $(this).find('.loadingstream').show();
                $(this).find('.donate-item').hide();
                $(this).find('.donate-item-info').remove();
                var $this = $(this);
                var donateButton = $('.post-donate .donate-coin-box .donate-button');
                var type = $(donateButton).attr('data-type');
                var id = parseInt($(donateButton).attr('data-unique-id'));

                $.ajax({
                    url: '/point/a/get-sender/post/' + id + '/' + type,
                    type: "GET",
                    data: {},
                    success: function (response) {
                        $this.find('.loadingstream').hide();
                        $(this).find('.donate-item-info').remove();

                        if (response.hasOwnProperty('data') && Object.keys(response.data).length > 0) {
                            var html = '';

                            Object.keys(response.data).forEach(function (key) {

                                var user = response.data[key];

                                html += `<a class="d-flex h-40 p-5 mb-5 donate-item-info" href="/blog/` + user.username + `" target="_blank">
                                        <div class="h-30 w-30 _3mf5 ps-relative bar-circle">
                                            <img class="h-fit w-fit object-cover object-center bar-circle" src="` + user.full_avatar + `" onerror="handleIEError(this);">
                                        </div><div class="ml-15 ai-center d-flex jc-space-between bb bc-tenth t-all t-duration-slow h:bc-primary" style="width: calc(100% - 50px);">
                                        <div class="fw-bold fc-nineth">` + user.name + `</div>
                                            <div class="fc-primary">` + user.coin + ` Go-coin</div>
                                        </div>
                                    </a>`;
                            });

                            $this.find('.modal-body').append(html);
                        } else {
                            $this.find('.loadingstream').show();
                            $this.find('.donate-item').hide();
                        }
                    }
                });
                $(this).addClass('loaded');
            }
        });
    });

    if (typeof autoRefreshToken !== 'function') {
        function autoRefreshToken() {
            var csrfToken = $('[name="csrf_token"]').attr('content');

            setInterval(refreshToken, 1800000); // 30 minutes

            function refreshToken() {
                $.get('refresh-csrf').done(function (data) {
                    csrfToken = data; // the new token
                });
            }

            setInterval(refreshToken, 1800000); // 30 minutes
        }
    }

    // autoRefreshToken();

    if (typeof getCoinPoint !== 'function') {
        function getCoinPoint() {
            if ($('.donate-coin-box.status').length) {
                $('.donate-coin-box.status').each(function (index) {
                    var $this = $(this);
                    var type = $(this).attr('data-type');
                    var id = parseInt($(this).attr('data-unique-id'));
                    var author = $(this).attr('data-author');
                    var url = "https://gody.vn/point/a/get-point/post/" + id + "/" + type;
                    if (author?.length) {
                        url += '?author=' + author;
                    }

                    $.ajax({
                        url: url,
                        type: "GET",
                        dataType: "json",
                        data: {},
                        success: function (response) {
                            var total = (response.hasOwnProperty('total')) ? parseInt(response.total) : 0;
                            var authorCoin = (response.hasOwnProperty('author') && response.author.hasOwnProperty('coin') && response.author.coin > 0) ? response.author.coin : 0;
                            $this.addClass('in').removeClass('hide');
                            $this.find('.coin-number').html(total);
                            $('.coin-number-summary').html(total);

                            if ($('.author-coin').length) {
                                $('.author-coin').html(authorCoin);
                            }

                            if (total > 0) {
                                $this.find('.label').html('<a href="#modal-coin-sender" data-toggle="modal" class="fc-fourth" title="Danh sách tặng Go-coin">Bài viết này đã nhận được ' + total + ' Go-coin.</a> <a href="{{url('/')}}/tich-diem" class="fw-bold bar-circle ml-0 inline-block text-center va-middle fs-20" title="Go-coin là gì?" target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i></a>');
                                $('.coin-number-summary').parent().attr('href', '#modal-coin-sender');
                            } else {
                                $this.find('.label').html('Hãy là người đầu tiên tặng Go-coin cho bài viết này. <a href="{{url('/')}}/tich-diem" class="fw-bold bar-circle ml-0 inline-block text-center va-middle fs-20" title="Go-coin là gì?" target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i></a>');
                                $('.coin-number-summary').parent().attr('href', 'javascript:void(0)');
                            }
                        }, error: function (response) {

                        }
                    });
                });
            }
        }
    }
</script>    <!-- /End Donate Script -->

<!-- include('v5.layouts.includes.script_notification') -->

<script id="script-login">
    if (typeof loadScript != 'function') {
        function loadScript(url) {
            var anchor = document.getElementById('script-login');
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = url;
            anchor.parentNode.insertBefore(script, anchor);
        }
    }

    if (typeof initVue != 'function') {
        function initVue() {
            if (typeof Vue == 'undefined') {
                setTimeout(function () {
                    initVue();
                }, 500);
                return;
            }

            if (typeof httpVueLoader == 'undefined') {
                loadScript('https://gody.vn/public/js/vue-modules/http-vue-loader/httpVueLoader.js');
                setTimeout(function () {
                    initVue();
                }, 500);
                return;
            }

            var currentUser = {};

            var appLogin = new Vue({
                el: '#modal-login',
                delimiters: ['{(', ')}'],
                data: {
                    currentTab: 'loginform',
                    // currentTab: 'loginform',
                    lived: {},
                    vietnams: [],
                    worlds: [],
                    previousUrl: '',
                    bindObject: {
                        type: '',
                        dataLived: {},
                        dataVietnams: [],
                        dataWorlds: [],
                        previousUrl: '',
                        newUserStatus: 0,
                        currentUser: currentUser
                    },
                    currentUser: currentUser,
                    newUserStatus: 0
                },
                components: {
                    loginform: httpVueLoader('https://gody.vn/public/js/components/login/loginForm.vue'),
                    livedorvisited: httpVueLoader('https://gody.vn/public/js/components/login/livedOrVisited.vue'),
                    livedorvisitedform: httpVueLoader('https://gody.vn/public/js/components/login/livedOrVisitedForm.vue'),
                    success: httpVueLoader('https://gody.vn/public/js/components/login/success.vue'),
                },
                computed: {
                    currentTabComponent: function () {
                        return this.currentTab.toLowerCase();
                    },
                    modalContentClass: function () {
                        var vm = this;
                        var data = [];
                        switch (vm.currentTab) {
                            case 'livedorvisitedform':
                                data = ['sm:h-fit', 'sm:bar-0'];
                                break;
                            case 'livedorvisited':
                                data = ['xs:overflow-y-auto'];
                                break;
                            case 'loginform':
                                data = ['xs:overflow-y-auto'];
                                break;
                            case 'success':
                                data = ['xs:overflow-y-auto'];
                                break;
                        }
                        return data;
                    }
                },
                mounted() {
                    var vm = this;
                    vm.signupTrack();
                },
                methods: {
                    changeComponent(e) {
                        this.currentTab = e.tab;
                        this.bindObject = e.data;
                        this.bindObject.dataLived = this.lived;
                        this.bindObject.dataVietnams = this.vietnams;
                        this.bindObject.dataWorlds = this.worlds;
                        this.bindObject.currentUser = this.currentUser;
                        this.bindObject.vnTotalProvinces = 63;
                        this.bindObject.previousUrl = this.previousUrl;
                        this.bindObject.newUserStatus = this.newUserStatus;
                    },
                    changeLived(e) {
                        this.lived = e.data;
                    },
                    changeVisited(e) {
                        this.vietnams = (e.data.vietnams != undefined) ? e.data.vietnams : [];
                        this.worlds = (e.data.worlds != undefined) ? e.data.worlds : [];
                    },
                    updateVietnams(e) {
                        this.vietnams = e.data;
                    },
                    updateWorlds(e) {
                        this.worlds = e.data;
                    },
                    signupTrack() {
                        var vm = this;
                        var currentUrl = window.location.href;

                        if (vm.currentUser != undefined && vm.currentUser.username != undefined && (currentUrl.indexOf('success=2') > -1 || currentUrl.indexOf('success%3D2') > -1)) {
                            axios.get(`/api/signup-tracking/signup-share-facebook?success=2`, {
                                cancelToken: new CancelToken(function executor(c) {
                                    cancel = c;
                                })
                            })
                                .then(function (response) {
                                    var data = response.data;
                                })
                                .catch(function (error) {
                                    console.log(error)
                                });
                        }
                    }
                }
            });
        }
    }

    if (typeof Vue != 'undefined') {
        initVue();
    } else {
        loadScript('https://gody.vn/public/js/vue-modules/vue/vue.js');

        loadScript('https://gody.vn/public/js/vue-modules/axios/axios.min.js');
        loadScript('https://gody.vn/public/js/vue-modules/lodash/lodash.min.js');
        loadScript('https://gody.vn/public/js/vue-modules/http-vue-loader/httpVueLoader.js');

        initVue();
    }

</script>
<script>
    const dsData = {
        searchInput: '',
        isActive: false,
        data: {},
        loading: false,
        loaded: false,
        continent: {
            '1': {
                title: 'Châu Mỹ',
                slug: 'chau-my'
            },
            '2': {
                title: 'Châu Phi',
                slug: 'chau-phi'
            },
            '3': {
                title: 'Châu Âu',
                slug: 'chau-au'
            },
            '4': {
                title: 'Châu Á',
                slug: 'chau-a'
            },
            '5': {
                title: 'Châu Đại Dương',
                slug: 'chau-dai-duong'
            }
        },
        topDes: [],
        topSearch: []
    };

    if (typeof initDestinationSearchVue != 'function') {
        function initDestinationSearchVue() {
            if (typeof Vue == 'undefined' || typeof httpVueLoader == 'undefined' || typeof _ == 'undefined') {
                setTimeout(() => {
                    initDestinationSearchVue();
                }, 500);
                return;
            }

            const destinationSearch = new Vue({
                el: '#modal-search-v2',
                delimiters: ['{(', ')}'],
                data: function () {
                    return dsData;
                },
                components: {
                    loadStream: httpVueLoader('/public/v6/js/components/master/loadStream.vue'),
                    defaultDestination: httpVueLoader(
                        '/public/v6/js/components/master/defaultDestinantion.vue?v=5',
                    ),
                },
                computed: {
                    dataEmpty: function () {
                        return _.isEmpty(this.data);
                    },
                    detailUrl: function () {
                        const country = this.data?._source?.country
                            ? this.data?._source?.country
                            : this.data?._source;
                        const province = this.data?._source?.province;

                        const continentId =
                            this.data?._index === 'places'
                                ? country.continents.slice(0, 1)
                                : country?.continent_id;
                        const continentSlug = this.continent[continentId]?.slug;

                        if (this.data?._index === 'places') {
                            return `/${continentSlug}/${country?.countries_slug}/${country?.province_slug}/${country?.slug}`;
                        }

                        if (
                            this.data?._index === 'province' ||
                            this.data?._index === 'province_v2'
                        ) {
                            return `/${continentSlug}/${country?.slug}/${this.data?._source.slug}`;
                        }

                        let url = `/${this.continent[continentId]?.slug}/${country?.slug}`;

                        if (province) {
                            url += `/${province?.slug}`;
                        }

                        return url;
                    },
                    blogUrl: function () {
                        return `${this.detailUrl}/kinh-nghiem`;
                    },
                    photoUrl: function () {
                        return `${this.detailUrl}/hinh-anh`;
                    },
                    communityUrl: function () {
                        return `${this.detailUrl}/hoi-dap`;
                    },
                    planUrl: function () {
                        return `${this.detailUrl}/lich-trinh`;
                    },
                    searchAllUrl: function () {
                        return `/elastic/search/created_keyword/${encodeURI(this.searchInput)}`;
                    },
                },
                watch: {
                    data(newVal, oldVal) {
                        if (!!newVal?._id) {
                            if (typeof (Storage) !== "undefined") {
                                let data = localStorage.getItem('USER_SEARCH');
                                data = (!!!data) ? {} : JSON.parse(data);
                                const orderNo = Object.keys(data).length;
                                newVal.orderNo = orderNo;
                                data[newVal?._id] = newVal;
                                localStorage.setItem('USER_SEARCH', JSON.stringify(data));
                            }
                        }
                    }
                },
                mounted() {
                    this.observer = new MutationObserver(mutations => {
                        for (const m of mutations) {
                            const newValue = m.target.getAttribute(m.attributeName);
                            this.$nextTick(() => {
                                this.onClassChange(newValue, m.oldValue);
                            });
                        }
                    });

                    this.observer.observe(this.$refs.modalSearchV2, {
                        attributes: true,
                        attributeOldValue: true,
                        attributeFilter: ['class'],
                    });

                    this.getPopularData();
                },
                beforeDestroy() {
                    this.observer.disconnect();
                },
                methods: {
                    onClassChange(classAttrValue) {
                        const classList = classAttrValue.split(' ');
                        if (classList.includes('in')) {
                            this.isActive = true;
                        } else {
                            this.isActive = false;
                        }
                        this.$forceUpdate();
                    },
                    clearInput() {
                        this.searchInput = '';
                        this.loading = false;
                        this.$refs.globalSearchInput.focus();
                    },
                    actGlobalSearch: _.debounce(function (e) {
                        this.$refs.globalSearchInput.blur();
                        this.$refs.globalSearchInput.focus();
                        const vm = this;
                        if (e.keyCode === 13 && !!vm.searchInput) {
                            window.location.href = this.searchAllUrl;
                            return;
                        }
                        vm.searchInput && vm.fetchDataSearch();
                    }, 500),
                    async fetchDataSearch() {
                        const vm = this;
                        const url = `https://elasticsearch.gody.vn/public/v2/search-destination/get-list?type=all&query=${vm.searchInput}&response=json`;
                        vm.loading = true;
                        vm.loaded = false;
                        vm.data = {};

                        await axios
                            .get(url, {
                                // cancelToken: new CancelToken(function executor(c) {
                                //   cancel = c;
                                // }),
                            })
                            .then(async function (resp) {
                                const {hits: data} = resp?.data?.hits;
                                vm.loading = false;
                                vm.loaded = true;
                                vm.data = data?.[0];
                                vm.data.stay22 = await vm.stay22Url();
                                vm.$forceUpdate();
                            })
                            .catch(function (error) {
                                vm.loading = false;
                                vm.loaded = true;
                            });
                    },
                    async stay22Url() {
                        if (this.dataEmpty) {
                            return '';
                        }

                        const source = this.data?._source;
                        if (source?.latitude && source?.longitude) {
                            return `https://www.stay22.com/embed/gm?lat=${source.latitude}&lng=${source.longitude}&aid=godyvn&venue=Chọn%20điểm%20đến&hidebrandlogo=true&hidefooter=true&maincolor=ffffff&buttoncolor=ffffff&fontcolor=ff8c00&hidemodeswitcher=true`;
                        }

                        const country = this.data?._source?.country
                            ? this.data?._source?.country
                            : this.data?._source;
                        const province = this.data?._source?.province;
                        let q = '';
                        if (this.data?._index === 'places') {
                            q = `${country.title}, ${country.province_name}, ${country.countries_name}`;
                        }

                        if (this.data?._index === 'city' || this.data?._index === 'province_v2') {
                            q = `${source?.title}, ${source?.province?.title}, ${source?.country?.title}`;
                        }

                        try {
                            const config = {
                                method: 'get',
                                url: `https://www.stay22.com/autocomplete/location?q=${encodeURI(q)}`,
                                headers: {},
                            };

                            const resp = await axios(config);
                            const data = resp.data;

                            if (!!!data.length) {
                                return '';
                            }

                            const address = data?.[0]?.description || q;

                            return `https://www.stay22.com/embed/gm?address=${encodeURI(
                                address,
                            )}&aid=godyvn&venue=Chọn%20điểm%20đến&hidebrandlogo=true&hidefooter=true&maincolor=ffffff&buttoncolor=ffffff&fontcolor=ff8c00&hidemodeswitcher=true`;
                        } catch (error) {
                            return '';
                        }
                    },
                    recentDetailUrl(data) {
                        const country = data?._source?.country
                            ? data?._source?.country
                            : data?._source;
                        const province = data?._source?.province;

                        const continentId =
                            data?._index === 'places'
                                ? country.continents.slice(0, 1)
                                : country?.continent_id;
                        const continentSlug = this.continent[continentId]?.slug;

                        if (data?._index === 'places') {
                            return `/${continentSlug}/${country?.countries_slug}/${country?.province_slug}/${country?.slug}`;
                        }

                        if (
                            data?._index === 'province' ||
                            data?._index === 'province_v2'
                        ) {
                            return `/${continentSlug}/${country?.slug}/${data?._source.slug}`;
                        }

                        let url = `/${this.continent[continentId]?.slug}/${country?.slug}`;

                        if (province) {
                            url += `/${province?.slug}`;
                        }

                        return url;
                    },
                    recentlyViewed() {
                        if (typeof (Storage) !== "undefined") {
                            let data = localStorage.getItem('USER_SEARCH');
                            if (!!!data) return null;

                            data = JSON.parse(data);
                            let newData = [];

                            for (const property in data) {
                                newData.push(data[property]);
                            }

                            newData.sort((a, b) => {
                                if (a?.orderNo < b?.orderNo) {
                                    return 1;
                                }
                                if (a?.orderNo > b?.orderNo) {
                                    return -1;
                                }
                                return 0;
                            });

                            return newData.splice(0, 5);
                        }
                        return null;
                    },
                    clearRecentlyViewed(item) {
                        if (item?._id) {
                            if (typeof (Storage) !== "undefined") {
                                let data = localStorage.getItem('USER_SEARCH');
                                data = (!!!data) ? {} : JSON.parse(data);

                                delete data[item?._id];
                                if (!!Object.keys(data).length) {
                                    localStorage.setItem('USER_SEARCH', JSON.stringify(data));
                                } else {
                                    localStorage.removeItem('USER_SEARCH');
                                }

                                this.$forceUpdate();
                            }
                        }
                    },
                    async getPopularData() {
                        try {
                            const config = {
                                url: 'https://gody.vn/api/v6/top-trends',
                                method: 'GET',
                                headers: {}
                            };

                            const resp = await axios(config);
                            const data = resp.data;

                            const {topDes, topSearch} = data;
                            this.topDes = topDes;
                            this.topSearch = topSearch;
                            this.$forceUpdate();
                        } catch (error) {

                        }
                    }
                }
            });

            $(document.body).on('click', '#search-form__explore input, #main-menu-icon-search, #search-header, .pull-right.ps-relative.mt-12.h-32.top-search.w100vw-220.wmx-250, .modal-search-v2__anchor', function (e) {
                e.preventDefault();

                $('div#modal-search-v2').modal('show');
                $('.search-primary-wrapper .search-primary-bg').css('display', 'none');
                setTimeout(function () {
                    $('.loading-getlocation').addClass('hide');
                    $('#search-header-2').focus();
                }, 500);
            });

            return destinationSearch;
        }
    }

    initDestinationSearchVue();

    $(document).ready(function () {
        $('#login-submit').attr('type', 'submit');
        /* Validate login form */
        $("#loginForm").validate({
            rules: {
                login_email: {
                    required: true,
                    email: true,
                },
                login_password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                login_email: {
                    required: 'Vui lòng nhập email!',
                    email: 'Địa chỉ email không hợp lệ!'
                },
                login_password: {
                    required: 'Vui lòng nhập mật khẩu!',
                    minlength: 'Mật khẩu tối thiểu là 6 ký tự!'
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>

<script src="https://gody.vn/public/js/vue-modules/vue2-datepicker/index.min.js"></script>
<script src="https://gody.vn/public/js/vue-modules/vue2-datepicker/locale/vi.js"></script>
<script defer src="https://gody.vn/public/v6/js/search.js?v=1235"></script>


</body>
</html>
