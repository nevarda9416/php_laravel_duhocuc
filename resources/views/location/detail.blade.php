@extends('layouts.default')
@section('content')
    <link rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://gody.vn/public/v6/css/desktop/home/non-critical-styles.css?v=1088">
    <link rel="stylesheet" href="https://gody.vn/public/v7/css/post-detail.css?v=1237">
    <style>
        .list-menu .dropdown {
            position: relative;
            display: inline-block;
        }
        .z-8 {
            z-index: 8;
        }
        .list-menu .dropbtn {
            color: white;
            padding: 13px;
            border: 0;
            cursor: pointer;
            display: inline-block;
        }
    </style>
    <div class="w-fit d-block ps-relative">
        <div style="width: 100%; height: 210px;">
            <img class="w-fit h-fit object-center object-cover d-block ps-absolute t0 r0 b0 l0" data-srcset="https://media.gody.vn//images/an-giang/rung-tram-tra-su/4-2018/6686704-20180414035805-an-giang-rung-tram-tra-su.jpg"
                 src="{{ env('FOLDER_UPLOAD') . $location->top_background_url }}">
        </div>
    </div>
    <section class="pt-10 p-0 m-0">
        <div class="container">
            <div class="row">
                <div class="list-menu ps-relative">
                    <div class="dropdown z-8">
            <span class="dropbtn">
                <a class="fs-16 fw-600 fc-fourteenth tt-capitalize-d h:fc-primary">
                    {{ $location->continent }}
                </a>
                <!-- <ion-icon name="caret-down-outline" style="color: #333333; margin-left: 5px; "></ion-icon> -->
                {{--<img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/caret-down-outline.svg" class="w-14 ml-5 filter-sixth mtn-2">--}}
            </span>
                        <div class="dropdown-content" style="width: 500px; z-index: 11;display: none">
                            <ul id="menu-country-all" data-status="false" class="p-10 m-0 z-10 list-ls-none">
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/armenia" class="fc-sixth h:fc-primary tt-capitalize">Armenia (Cộng hoà Armenia)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/afghanistan" class="fc-sixth h:fc-primary tt-capitalize">Afghanistan</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/bangladesh" class="fc-sixth h:fc-primary tt-capitalize">Bangladesh</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/bhutan" class="fc-sixth h:fc-primary tt-capitalize">Bhutan (Bhutan)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/brunei" class="fc-sixth h:fc-primary tt-capitalize">Brunei</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/trung-quoc" class="fc-sixth h:fc-primary tt-capitalize">China (Trung Quốc)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/campuchia" class="fc-sixth h:fc-primary tt-capitalize">Cambodia ( Campuchia )</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/hong-kong" class="fc-sixth h:fc-primary tt-capitalize">HongKong ( Hồng Kông )</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/iraq" class="fc-sixth h:fc-primary tt-capitalize">Iraq</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/israel" class="fc-sixth h:fc-primary tt-capitalize">Israel (Quốc gia Israel)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/iran" class="fc-sixth h:fc-primary tt-capitalize">Iran</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/india-an-do" class="fc-sixth h:fc-primary tt-capitalize">India (Ấn Độ)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/indonesia" class="fc-sixth h:fc-primary tt-capitalize">indonesia</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/jordan" class="fc-sixth h:fc-primary tt-capitalize">Jordan (Vương quốc Jordan thuộc Hashim)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/Japan" class="fc-sixth h:fc-primary tt-capitalize">Japan ( Nhật bản )</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/kyrgyzstan" class="fc-sixth h:fc-primary tt-capitalize">Kyrgyzstan (Cộng hoà Kyrgyzstan)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/kazakhstan" class="fc-sixth h:fc-primary tt-capitalize">Kazakhstan (Cộng hoà Kazakhstan)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/lao" class="fc-sixth h:fc-primary tt-capitalize">Lào</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/malaysia" class="fc-sixth h:fc-primary tt-capitalize">Malaysia</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/macau" class="fc-sixth h:fc-primary tt-capitalize">Macau (Ma cao)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/maldives" class="fc-sixth h:fc-primary tt-capitalize">Maldives (Cộng hoà Maldives)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/mongolia" class="fc-sixth h:fc-primary tt-capitalize">Mongolia (Mông Cổ)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/maldives" class="fc-sixth h:fc-primary tt-capitalize">Maldives</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/myanmar" class="fc-sixth h:fc-primary tt-capitalize">myanmar</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/nepal" class="fc-sixth h:fc-primary tt-capitalize">Nepal</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/north-korea-trieu-tien" class="fc-sixth h:fc-primary tt-capitalize">North Korea (Triều Tiên)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/oman" class="fc-sixth h:fc-primary tt-capitalize">Oman (Vương quốc Hồi giáo Oman)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/pakistan" class="fc-sixth h:fc-primary tt-capitalize">Pakistan</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/philippines" class="fc-sixth h:fc-primary tt-capitalize">Philippines</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/palestine" class="fc-sixth h:fc-primary tt-capitalize">Palestine</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/qatar" class="fc-sixth h:fc-primary tt-capitalize">Qatar (Quốc gia Qatar)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/south-korea" class="fc-sixth h:fc-primary tt-capitalize">South Korea ( Hàn quốc )</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/sri-lanka" class="fc-sixth h:fc-primary tt-capitalize">Sri Lanka</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/syria" class="fc-sixth h:fc-primary tt-capitalize">Syria</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/singapore" class="fc-sixth h:fc-primary tt-capitalize">Singapore</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/saudi-arabia" class="fc-sixth h:fc-primary tt-capitalize">Saudi Arabia</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/tay-tang" class="fc-sixth h:fc-primary tt-capitalize">Tibet (Tây Tạng)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/taiwan" class="fc-sixth h:fc-primary tt-capitalize">Taiwan ( Đài loan )</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/thailand" class="fc-sixth h:fc-primary tt-capitalize">Thailand ( Thái lan )</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/tajikistan" class="fc-sixth h:fc-primary tt-capitalize">Tajikistan</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/turkey" class="fc-sixth h:fc-primary tt-capitalize">Turkey (Thổ Nhĩ Kỳ)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/united-arab-emirates" class="fc-sixth h:fc-primary tt-capitalize">United Arab Emirates</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/uzbekistan" class="fc-sixth h:fc-primary tt-capitalize">Uzbekistan</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam" class="fc-sixth h:fc-primary tt-capitalize">Việt nam</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/yemen" class="fc-sixth h:fc-primary tt-capitalize">Yemen</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <i aria-hidden="true" class="fa fa-angle-right"></i>
                    <div class="dropdown z-8">
            <span class="dropbtn">
                <a class="fs-16 fw-600 fc-fourteenth tt-capitalize-d tt-capitalize h:fc-primary">
                    {{ $location->country }}
                </a>
                <!-- <ion-icon name="caret-down-outline" style="color: #333333; margin-left: 5px; "></ion-icon> -->
                {{--<img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/caret-down-outline.svg" class="w-14 ml-5 filter-sixth mtn-2">--}}
            </span>
                        <div class="dropdown-content" style="width: 500px; z-index: 11;display: none">
                            <ul id="menu-country-all" data-status="false" class="p-10 m-0 z-10 list-ls-none">
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/an-giang" class="fc-sixth h:fc-primary tt-capitalize">An Giang</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/binh-duong" class="fc-sixth h:fc-primary tt-capitalize">Bình Dương</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/binh-dinh" class="fc-sixth h:fc-primary tt-capitalize">Bình Định</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ba-ria-vung-tau" class="fc-sixth h:fc-primary tt-capitalize">Bà Rịa Vũng Tàu</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/binh-phuoc" class="fc-sixth h:fc-primary tt-capitalize">Bình Phước</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/binh-thuan" class="fc-sixth h:fc-primary tt-capitalize">Bình Thuận</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ben-tre" class="fc-sixth h:fc-primary tt-capitalize">Bến Tre</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/bac-ninh" class="fc-sixth h:fc-primary tt-capitalize">Bắc Ninh</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/bac-lieu" class="fc-sixth h:fc-primary tt-capitalize">Bạc Liêu</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/bac-kan" class="fc-sixth h:fc-primary tt-capitalize">Bắc Kạn</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/bac-giang" class="fc-sixth h:fc-primary tt-capitalize">Bắc Giang</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ca-mau" class="fc-sixth h:fc-primary tt-capitalize">Cà Mau</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/can-tho" class="fc-sixth h:fc-primary tt-capitalize">Cần Thơ</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/cao-bang" class="fc-sixth h:fc-primary tt-capitalize">Cao Bằng</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/dong-nai" class="fc-sixth h:fc-primary tt-capitalize">Đồng Nai</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/dien-bien" class="fc-sixth h:fc-primary tt-capitalize">Điện Biên</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/dak-nong" class="fc-sixth h:fc-primary tt-capitalize">Đắk Nông</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/dak-lak" class="fc-sixth h:fc-primary tt-capitalize">Đắk Lắk</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/da-nang" class="fc-sixth h:fc-primary tt-capitalize">Đà Nẵng</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/dong-thap" class="fc-sixth h:fc-primary tt-capitalize">Đồng Tháp</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/gia-lai" class="fc-sixth h:fc-primary tt-capitalize">Gia Lai</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/hai-phong" class="fc-sixth h:fc-primary tt-capitalize">Hải Phòng</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/hau-giang" class="fc-sixth h:fc-primary tt-capitalize">Hậu Giang</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ho-chi-minh" class="fc-sixth h:fc-primary tt-capitalize">Hồ Chí Minh</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/hoa-binh" class="fc-sixth h:fc-primary tt-capitalize">Hòa Bình</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/hung-yen" class="fc-sixth h:fc-primary tt-capitalize">Hưng Yên</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ha-giang" class="fc-sixth h:fc-primary tt-capitalize">Hà Giang</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ha-nam" class="fc-sixth h:fc-primary tt-capitalize">Hà Nam</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/hai-duong" class="fc-sixth h:fc-primary tt-capitalize">Hải Dương</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ha-noi" class="fc-sixth h:fc-primary tt-capitalize">Hà Nội</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ha-tinh" class="fc-sixth h:fc-primary tt-capitalize">Hà Tĩnh</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/khanh-hoa" class="fc-sixth h:fc-primary tt-capitalize">Khánh Hòa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/kien-giang" class="fc-sixth h:fc-primary tt-capitalize">Kiên Giang</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/kon-tum" class="fc-sixth h:fc-primary tt-capitalize">Kon Tum</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai" class="fc-sixth h:fc-primary tt-capitalize">Lào Cai</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lai-chau" class="fc-sixth h:fc-primary tt-capitalize">Lai Châu</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lam-dong" class="fc-sixth h:fc-primary tt-capitalize">Lâm Đồng</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lang-son" class="fc-sixth h:fc-primary tt-capitalize">Lạng Sơn</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/long-an" class="fc-sixth h:fc-primary tt-capitalize">Long An</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ninh-binh" class="fc-sixth h:fc-primary tt-capitalize">Ninh Bình</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/ninh-thuan" class="fc-sixth h:fc-primary tt-capitalize">Ninh Thuận</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/nghe-an" class="fc-sixth h:fc-primary tt-capitalize">Nghệ An</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/nam-dinh" class="fc-sixth h:fc-primary tt-capitalize">Nam Định</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/phu-tho" class="fc-sixth h:fc-primary tt-capitalize">Phú Thọ</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/phu-yen" class="fc-sixth h:fc-primary tt-capitalize">Phú Yên</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/quang-ngai" class="fc-sixth h:fc-primary tt-capitalize">Quảng Ngãi</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/quang-binh" class="fc-sixth h:fc-primary tt-capitalize">Quảng Bình</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/quang-nam" class="fc-sixth h:fc-primary tt-capitalize">Quảng Nam</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/quang-ninh" class="fc-sixth h:fc-primary tt-capitalize">Quảng Ninh</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/quang-tri" class="fc-sixth h:fc-primary tt-capitalize">Quảng Trị</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/soc-trang" class="fc-sixth h:fc-primary tt-capitalize">Sóc Trăng</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/son-la" class="fc-sixth h:fc-primary tt-capitalize">Sơn La</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/tay-ninh" class="fc-sixth h:fc-primary tt-capitalize">Tây Ninh</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/thanh-hoa" class="fc-sixth h:fc-primary tt-capitalize">Thanh Hóa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/thai-binh" class="fc-sixth h:fc-primary tt-capitalize">Thái Bình</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/tuyen-quang" class="fc-sixth h:fc-primary tt-capitalize">Tuyên Quang</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/tra-vinh" class="fc-sixth h:fc-primary tt-capitalize">Trà Vinh</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/tien-giang" class="fc-sixth h:fc-primary tt-capitalize">Tiền Giang</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/thua-thien-hue" class="fc-sixth h:fc-primary tt-capitalize">Thừa Thiên Huế</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/thai-nguyen" class="fc-sixth h:fc-primary tt-capitalize">Thái Nguyên</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/vinh-phuc" class="fc-sixth h:fc-primary tt-capitalize">Vĩnh Phúc</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/vinh-long" class="fc-sixth h:fc-primary tt-capitalize">Vĩnh Long</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/yen-bai" class="fc-sixth h:fc-primary tt-capitalize">Yên Bái</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <i aria-hidden="true" class="fa fa-angle-right"></i>
                    <div class="dropdown z-8">
            <span class="dropbtn">
                <a class="fs-16 fw-600 fc-primary tt-capitalize-d tt-capitalize">
                    {{ $location->city }}
                </a>
                <!-- <ion-icon name="caret-down-outline" style="color: #333333; margin-left: 5px; "></ion-icon> -->
                {{--<img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/caret-down-outline.svg" class="w-14 ml-5 filter-sixth mtn-2">--}}
            </span>
                        <div class="dropdown-content" style="width: 500px; z-index: 11;display: none">
                            <ul id="menu-country-all" data-status="false" class="p-10 m-0 z-10 list-ls-none">
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/noc-nha-dong-duong-fansipan" class="fc-sixth h:fc-primary tt-capitalize">Nóc nhà Đông Dương Fansipan - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/nui-ham-rong" class="fc-sixth h:fc-primary tt-capitalize">Núi Hàm Rồng - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/nha-tho-sa-pa" class="fc-sixth h:fc-primary tt-capitalize">Nhà thờ Sa Pa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/ban-cat-cat" class="fc-sixth h:fc-primary tt-capitalize">Bản Cát Cát - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/ban-ta-phin" class="fc-sixth h:fc-primary tt-capitalize">Bản Tả Phìn - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/thung-lung-muong-hoa" class="fc-sixth h:fc-primary tt-capitalize">Thung lũng Mường Hoa - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/khu-du-lich-sinh-thai-thac-bac" class="fc-sixth h:fc-primary tt-capitalize">Khu du lịch sinh thái Thác Bạc - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/deo-o-quy-ho" class="fc-sixth h:fc-primary tt-capitalize">Đèo Ô Quy Hồ</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/thang-canh-hang-tien" class="fc-sixth h:fc-primary tt-capitalize">Thắng cảnh Hang Tiên</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/khu-cam-trai-the-haven-sapa" class="fc-sixth h:fc-primary tt-capitalize">Khu cắm trại The Haven Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/y-ty" class="fc-sixth h:fc-primary tt-capitalize">Y Tý</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/khu-nghi-duong-victoria-sapa-resort-va-spa" class="fc-sixth h:fc-primary tt-capitalize">Khu nghỉ dưỡng Victoria Sapa Resort và Spa - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/dinh-hoang-a-tuong" class="fc-sixth h:fc-primary tt-capitalize">Dinh Hoàng A Tưởng</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cho-phien-bac-ha" class="fc-sixth h:fc-primary tt-capitalize">Chợ phiên Bắc Hà</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/fansipan-legend" class="fc-sixth h:fc-primary tt-capitalize">Fansipan Legend - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/den-thuong-thuong-temple" class="fc-sixth h:fc-primary tt-capitalize">Đền Thượng (Thuong Temple)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/bao-tang-van-hoa-sapa-sapa-culture-museum" class="fc-sixth h:fc-primary tt-capitalize">Bảo tàng Văn Hóa Sapa (Sapa Culture Museum)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/quang-truong-sa-pa-sapa-square" class="fc-sixth h:fc-primary tt-capitalize">Quảng Trường Sapa (Sapa Square )</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/thac-tinh-yeu-sapa-love-waterfall-sapa" class="fc-sixth h:fc-primary tt-capitalize">Thác Tình yêu Sapa (Love Waterfall Sapa)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/lang-giang-ta-chai-giang-ta-chai-village" class="fc-sixth h:fc-primary tt-capitalize">Làng Giàng Tả Chải (Giang Ta Chai Village) - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/canh-dong-hoa-tam-giac-mach-lu-than" class="fc-sixth h:fc-primary tt-capitalize">Cánh đồng hoa Tam giác mạch Lử Thẩn</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/doc-a-lu-a-lu-hill" class="fc-sixth h:fc-primary tt-capitalize">Dốc A Lù (A Lu Hill)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/dong-coc-san-coc-san-cave" class="fc-sixth h:fc-primary tt-capitalize">Động Cốc San (Coc San Cave</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cho-phien-can-cau-can-cau-market" class="fc-sixth h:fc-primary tt-capitalize">Chợ phiên Cán Cẩu (Can Cau Market)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/ban-ho-ban-ho-village" class="fc-sixth h:fc-primary tt-capitalize">Bản Hồ (Ban Ho Village) - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/deo-tram-ton-tram-ton-pass" class="fc-sixth h:fc-primary tt-capitalize">Đèo Trạm Tôn (Tram Ton Pass)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/ho-sapa-sapa-lake" class="fc-sixth h:fc-primary tt-capitalize">Hồ Sapa (Sapa Lake)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/dong-ta-phin-ta-phin-cave" class="fc-sixth h:fc-primary tt-capitalize">Động Tả Phìn (Ta Phin Cave) - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/ban-y-linh-ho-y-linh-ho-village" class="fc-sixth h:fc-primary tt-capitalize">Bản Ý Linh Hồ (Y Linh Ho Village) - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/bach-moc-luong-tu" class="fc-sixth h:fc-primary tt-capitalize">Bạch Mộc Lương Tử</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cho-phien-cao-son-cao-son-market" class="fc-sixth h:fc-primary tt-capitalize">Chợ phiên Cao Sơn (Cao Son Market)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/den-bao-ha-bao-ha-temple" class="fc-sixth h:fc-primary tt-capitalize">Đền Bảo Hà (Bao Ha Temple)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cho-phien-muong-khuong-muong-khuong-martket" class="fc-sixth h:fc-primary tt-capitalize">Chợ phiên Mường Khương (Muong Khuong Martket)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/thung-lung-hoa-bac-ha-thai-giang-pho-bac-ha-flower-valley" class="fc-sixth h:fc-primary tt-capitalize">Thung lũng hoa Bắc Hà - Thải Giàng Phố (Bac Ha Flower Valley)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/nha-hang-little-vietnam-little-vietnam-restaurant" class="fc-sixth h:fc-primary tt-capitalize">Nhà Hàng Little Vietnam (Little Vietnam Restaurant) - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cho-phien-sin-cheng-sin-cheng-market" class="fc-sixth h:fc-primary tt-capitalize">Chợ phiên Sín Chéng (Sin Cheng Market)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cau-may-sapa" class="fc-sixth h:fc-primary tt-capitalize">Cầu Mây Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/lao-than-y-ty" class="fc-sixth h:fc-primary tt-capitalize">Núi Lảo Thẩn - Y Tý</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/ngu-chi-son" class="fc-sixth h:fc-primary tt-capitalize">Ngũ Chỉ Sơn - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/tu-vien-ta-phin" class="fc-sixth h:fc-primary tt-capitalize">Tu viện Tả Phìn - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/suoi-lung-po-lung-po-river" class="fc-sixth h:fc-primary tt-capitalize">Suối Lũng Pô (Lung Po River)</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/ban-ta-van" class="fc-sixth h:fc-primary tt-capitalize">Bản Tả Van - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/suoi-vang-golden-spring" class="fc-sixth h:fc-primary tt-capitalize">Suối Vàng (Golden spring) - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/ho-dong-tuyen" class="fc-sixth h:fc-primary tt-capitalize">Hồ Đồng Tuyển</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/den-hang-pho" class="fc-sixth h:fc-primary tt-capitalize">Đền Hàng Phố - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/den-trung-do" class="fc-sixth h:fc-primary tt-capitalize">Đền Trung Đô</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/thac-tien-sa-thac-cat-cat" class="fc-sixth h:fc-primary tt-capitalize">Thác Tiên Sa (thác Cát Cát) - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cho-phien-can-cau" class="fc-sixth h:fc-primary tt-capitalize">Chợ phiên Cán Cẩu</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cho-muong-hum" class="fc-sixth h:fc-primary tt-capitalize">Chợ Mường Hum</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cho-phien-lung-khau-nhin" class="fc-sixth h:fc-primary tt-capitalize">Chợ phiên Lùng Khấu Nhin</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/gem-valley-coffee" class="fc-sixth h:fc-primary tt-capitalize">Gem Valley Coffee - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/fansipan-terrace-sapa" class="fc-sixth h:fc-primary tt-capitalize">Fansipan Terrace Cafe &amp; Homestay - Sapa</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/the-haven-sapa-camp-site" class="fc-sixth h:fc-primary tt-capitalize">The Haven Sapa Camp Site</a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="https://gody.vn/chau-a/viet-nam/lao-cai/cong-ca-phe" class="fc-sixth h:fc-primary tt-capitalize">Cộng Cà Phê - Sapa</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <style>
                .list-menu .dropdown-content {
                    display: none;
                    right: 0;
                    min-width: 160px;
                    box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%);
                    z-index: 1;
                    width: 420px;
                    left: 0;
                    position: absolute;
                    background: white;
                }
                .list-menu .dropdown-content ul li {
                    width: 48%;
                    vertical-align: top;
                }
                .list-menu .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                    font-size: 16px;
                }
                .dropdown.z-8:hover .dropdown-content {
                    display: block;
                }
                @media  screen and (max-width: 768px) {
                    .list-menu .dropdown-content {
                        max-width: 98vw;
                    }
                }
            </style>
            <div class="row mb-20">
                <div data-class="col-md-3 p-0 m-0" class="col-md-3 ps-relative sidebar sidebar-sticky pl-0 test" style="">
                    <div class="pt-30 sidebar__inner" style="position: relative;">
                        <div data-class="w-fit d-block pr-15" class="pr-15">
                            <div class="d-block w-fit" style="box-shadow: #ff8c00 1px 1px, #ff8c00 2px 2px, #ff8c00 3px 3px, #ff8c00 4px 4px, #ff8c00 5px 5px, #ff8c00 6px 6px, #ff8c00 7px 7px, #ff8c00 8px 8px, #ff8c00 9px 9px, #ff8c00 10px 10px, #ff8c00 11px 11px, #ff8c00 12px 12px, #ff8c00 13px 13px, #ff8c00 14px 14px">
                                <div class="w-fit d-block barr-black-2 ps-relative" style="border-left: 2px solid #333;border-bottom: 2px solid #333;border-right: 2px solid #333;background: white;">

                                    <div class="divider-frame" style="display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-pack: center; -ms-flex-pack: center; justify-content: center; -webkit-box-align: center; -ms-flex-align: center;  align-items: center; height: 2px;  width: 100%;">
                                        <div class="main-sub-account-divider" style="-webkit-box-flex: 1; -ms-flex: 1; flex: 0.1; height: 2px; background: #333;"></div>
                                        <div class="main-sub-account-or ml-5 mr-5 truncate-line lineclamp1">
                                            <h3 class="fc-fourteenth fs-28 fw-700 lh-120% p-0 m-0 tt-capitalize "> {{ $location->name }} </h3>
                                        </div>
                                        <div class="main-sub-account-divider" style="-webkit-box-flex: 1; -ms-flex: 1; flex: 1; height: 2px; background: #333;"></div>
                                    </div>
                                    <div class="w-fit d-block mb-12">
                                        <div class="p-16 d-flex jc-space-between box-shadow-02 bg-white mt-30">
                                            <a class="{{ $destinations === null && $lastUri !== 'hinh-anh' ? 'fc-primary' : 'fc-fourteenth' }} lh-120% fs-18 fw-400 h:fc-primary" href="{{ url('diem-den' . $location->share_url) }}">Giới thiệu</a>
                                            <img src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-02.png" width="8px" height="14px">
                                        </div>
                                        <div class="p-16 d-flex jc-space-between box-shadow-02 bg-white">
                                            <a class="{{ $destinations !== null ? 'fc-primary' : 'fc-fourteenth' }} lh-120% fs-18 fw-400 h:fc-primary" href="{{ url('diem-den' . $location->share_url . '/diem-du-lich') }}">Điểm du lịch</a>
                                            <img src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-01.png" width="8px" height="14px">
                                        </div>
                                        {{--<div class="p-16 d-flex jc-space-between box-shadow-02 bg-white">--}}
                                        {{--<a class=" fc-fourteenth  lh-120% fs-18 fw-400 h:fc-primary" href="https://gody.vn/chau-a/viet-nam/lao-cai/kinh-nghiem">Kinh nghiệm du lịch</a>--}}
                                        {{--<img src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-01.png" width="8px" height="14px">--}}
                                        {{--</div>--}}
                                        {{--<div class="p-16 d-flex jc-space-between box-shadow-02 bg-white">--}}
                                        {{--<a class=" fc-fourteenth   lh-120% fs-18 fw-400 h:fc-primary" href="https://gody.vn/chau-a/viet-nam/lao-cai/hoi-dap">Hỏi đáp</a>--}}
                                        {{--<img src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-01.png" width="8px" height="14px">--}}
                                        {{--</div>--}}
                                        <div class="p-16 d-flex jc-space-between bg-white" data-class="p-16 d-flex jc-space-between box-shadow-02 bg-white">
                                            <a class="{{ $lastUri === 'hinh-anh' ? 'fc-primary' : 'fc-fourteenth' }} lh-120% fs-18 fw-400 h:fc-primary" href="{{ url('diem-den' . $location->share_url . '/hinh-anh') }}">Hình ảnh</a>
                                            <img src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/post/post-icon-01.png" width="8px" height="14px">
                                        </div>
                                    </div>
                                </div>
                            </div>                    </div>


                        <div class="w-fit mt-30 overflow-hidden">
                            <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2910673600848421" crossorigin="anonymous"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2910673600848421" data-ad-slot="9371135160" data-ad-format="auto" data-full-width-responsive="true"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 primary-content" id="gioi-thieu">
                    @if (isset($destination))
                        @if (!empty($destination->content))
                            <div id="diem-du-lich">
                                <div class="w-fit d-block mt-10">
                                    <h1 class="fc-fourteenth fs-36 fw-700" style="line-height: 124% !important;">{{$destination->name}}</h1>
                                </div>
                                <?php echo html_entity_decode($destination->content) ?>
                            </div>
                            @if (!empty($destination->album))
                                <div class="w-fit d-flex pt-0 pb-10 jc-space-between ai-center">
                                    <h4 class="w-fit d-block fc-black fw-700 fs-36 lh-38 xs:fs-26 py-10 m-0">Hình ảnh</h4>
                                </div>
                                <div class="w-fit d-block mt-20">
                                    <div class="d-flex ai-top fw-wrap" style="--column:4; --gutter: 38px;">
                                        <?php echo html_entity_decode($destination->album) ?>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @else
                        @if (!empty((array)$destinations))
                            <div class="w-fit d-flex pt-0 pb-10 jc-space-between ai-center">
                                <h1 class="w-fit d-block fc-black fw-700 fs-36 lh-38 xs:fs-26 py-10 m-0">Điểm du lịch tại {{$location->city}}, {{$location->country}}</h1>
                            </div>
                            @foreach($destinations as $destination)
                                <div class="w-fit d-flex fw-wrap" style="--column:4; --gutter: 45px;">
                                    <div class="ps-relative d-flex fd-column" style="width: calc( (100% - var(--gutter)) / var(--column) );  height: 385px; margin-right: calc( var(--gutter) / var(--column) ); margin-bottom: calc( var(--gutter) / var(--column) );">
                                        <a href="{{ url('diem-den' . $location->share_url . '/diem-du-lich/' . $destination->slug) }}">
                                            <img src="{{ url(env('FOLDER_UPLOAD') . $destination->thumbnail_url) }}" data-srcset="https://media.gody.vn//images/kien-giang/dao-nam-du/10-2016/20161019080345-nam-du-gody (20).jpg" style="height: 220px;" class="lazy-load w-fit object-cover object-center bar-8 h:o50" src="https://media.gody.vn//images/kien-giang/dao-nam-du/10-2016/20161019080345-nam-du-gody (20).jpg" srcset="https://media.gody.vn//images/kien-giang/dao-nam-du/10-2016/20161019080345-nam-du-gody (20).jpg">
                                        </a>
                                        <div class="w-fit d-block p-10 mb-0" style="min-height: 77px;">
                                            <a href="{{ url('diem-den' . $location->share_url . '/diem-du-lich/' . $destination->slug) }}" class="fc-fourteenth fs-18 fw-600 truncate-line lineclamp2 h:fc-sixth">
                                                {{ $destination->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @if ($lastUri === 'hinh-anh')
                                @if (!empty($location->album))
                                    <div id="hinh-anh">
                                        <div class="w-fit d-flex pt-0 pb-10 jc-space-between ai-center">
                                            <h1 class="w-fit d-block fc-black fw-700 fs-36 lh-38 xs:fs-26 py-10 m-0"> Hình ảnh du lịch {{ $location->city }}, {{ $location->country }}</h1>
                                        </div>
                                        <div class="w-fit d-block mt-20">
                                            <div class="d-flex ai-top fw-wrap" style="--column:4; --gutter: 38px;">
                                                <?php echo html_entity_decode($location->album) ?>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                @if (!empty($location->content))
                                    <?php echo html_entity_decode($location->content) ?>
                                @endif
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection()
