@extends('layouts.default')
@section('content')
    <link rel="stylesheet" href="https://gody.vn/public/v7/css/post-detail.css?v=1237">
    <section class="p-0 m-0">
        <div class="container mt-15 mb-20 pl-20">
            <div class="row">
                <div class="col-md-12 pl-25">
                <span class="truncate-line lineclamp1">
                    <a href="/" class="fs-16 fw-600 fc-fourteenth tt-capitalize-d h:fc-primary">Du lịch</a>
                                                            <i aria-hidden="true" class="fa fa-angle-right ml-1 mr-10"></i>
                    <span class="fs-16 fw-600 fc-primary tt-capitalize-d">Tin tức</span>
                                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="p-0 m-0">
        <div class="container">
            <div class="col-md-9">
                <div class="w-fit d-block overflow-hidden bg-white post p-20 bar-8">
                    <h1 class="d-block w-fit fw-600 fc-black p-0 m-0 ">{{ $blog->title }}</h1>
                    <div class="d-flex ai-center jc-space-between fw-wrap mbn-18 py-10">
                        <div class="ws-nowrap d-flex ai-center btr-10 fl-1">
                            <span target="_blank" class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                              <a class="fc-nineth" href="https://gody.vn/blog/nguyenlamdl5569">
                                <img src="https://graph.facebook.com/v2.8/1110153672468755/picture?type=normal" class="w-fit h-fit object-cover object-center bar-circle">
                              </a>
                            </span>
                            <div class="fl-1">
                              <span class="fc-nineth d-inline-block va-middle d-truncate td-none outline-none fs-14 fw-600 d-wmx-135 xs:wmx-auto">
                                            <span class="fc-nineth">{{ $blog->author_name }}</span>
                                            <span class="p-10">
                                  <img src="https://h3jd9zjnmsobj.vcdn.cloud/public/v7/dot.png">
                                </span>
                                <span class="fs-14 fw-400 lh-25" style="color: #828282;">{{ date('D, d/m/Y', $blog->published_at) }}</span>
                              </span>
                            </div>
                        </div>
                    </div>
                    <?php echo html_entity_decode($blog->content) ?>
                </div>

                <div class="mt-30">
                    <div class="bar-8 ps-relative bg-white overflow-hidden xs:bar-0">
                        <div class="bbrr-8 fc-white fs-20 fw-600 py-10 pl-25 pr-35 bg-primary mb-20 d-inline-block xs:mb-10">
                            Tin tài trợ
                        </div>
                        <div class="d-flex ai-top jc-center px-12 mt-8 mb-30 xs:mt-10 xs:px-16 xs:mb-20">
                            <div class="ps-relative fl-1 px-12 d-flex fd-column pt-12 bar-8 t-all t-duration-slow xs:px-4 h:bg-grayf2">
                                <div class="bar-8 h-140 xs:h-100">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/74a5da505cd83cc223ec8485beb0d63a.jpg" class="w-fit h-fit object-cover object-center bar-8" alt="Dịch vụ làm mới &amp; làm lại hộ chiếu">
                                </div>
                                <div class="fl-1">
                                    <p class="fc-nineth fw-600 mt-16 mb-0 fs-16 truncate-line lineclamp3 xs:fs-14">Dịch vụ làm mới &amp; làm lại hộ chiếu</p>
                                    <p class="fc-fourteenth mt-5 mb-0 fs-14__5 truncate-line lineclamp2 xs:d-none">Nhanh, uy tín, online, giá rẻ</p>
                                </div>

                                <a href="http://bookingbamien.com/ho-chieu?utm_source=sponsored&amp;utm_medium=sponsored.posts&amp;utm_campaign=sponsored&amp;utm_id=sponsored.posts&amp;utm_content=blog_details" class="ps-absolute t0 r0 b0 l0 d-block bar-8" style="text-indent: -999px;" target="_blank">Dịch vụ làm mới &amp; làm lại hộ chiếu</a>
                            </div>
                            <div class="ps-relative fl-1 px-12 d-flex fd-column pt-12 bar-8 t-all t-duration-slow xs:px-4 h:bg-grayf2">
                                <div class="bar-8 h-140 xs:h-100">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/5dc303350885666062ac109c914dc1da.jpg" class="w-fit h-fit object-cover object-center bar-8" alt="Bảo hiểm du lịch trong nước &amp; nước ngoài">
                                </div>
                                <div class="fl-1">
                                    <p class="fc-nineth fw-600 mt-16 mb-0 fs-16 truncate-line lineclamp3 xs:fs-14">Bảo hiểm du lịch trong nước &amp; nước ngoài</p>
                                    <p class="fc-fourteenth mt-5 mb-0 fs-14__5 truncate-line lineclamp2 xs:d-none">Đặt mua bảo hiểm du lịch online, đơn giản </p>
                                </div>

                                <a href="http://bookingbamien.com/bao-hiem-du-lich?utm_source=sponsored&amp;utm_medium=sponsored.posts&amp;utm_campaign=sponsored&amp;utm_id=sponsored.posts&amp;utm_content=blog_details" class="ps-absolute t0 r0 b0 l0 d-block bar-8" style="text-indent: -999px;" target="_blank">Bảo hiểm du lịch trong nước &amp; nước ngoài</a>
                            </div>
                            <div class="ps-relative fl-1 px-12 d-flex fd-column pt-12 bar-8 t-all t-duration-slow xs:px-4 h:bg-grayf2">
                                <div class="bar-8 h-140 xs:h-100">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2016/12/6/nguyen_tu_7a/cf24a4597bc50648c4ca5f4f921cfe57.jpg" class="w-fit h-fit object-cover object-center bar-8" alt="Dịch vụ visa">
                                </div>
                                <div class="fl-1">
                                    <p class="fc-nineth fw-600 mt-16 mb-0 fs-16 truncate-line lineclamp3 xs:fs-14">Dịch vụ visa</p>
                                    <p class="fc-fourteenth mt-5 mb-0 fs-14__5 truncate-line lineclamp2 xs:d-none">Hồ sơ đơn giản, tỷ lệ đậu visa cao lên tới 99%</p>
                                </div>

                                <a href="http://bookingbamien.com/visa?utm_source=sponsored&amp;utm_medium=sponsored.posts&amp;utm_campaign=sponsored&amp;utm_id=sponsored.posts&amp;utm_content=blog_details" class="ps-absolute t0 r0 b0 l0 d-block bar-8" style="text-indent: -999px;" target="_blank">Dịch vụ visa</a>
                            </div>
                        </div>
                    </div>            </div>

                <div class="clearfix"></div>

                <div class="w-fit d-block mt-35 mb-10">
                    <span class="w-fit d-block fc-black fw-700 fs-36 lh-38 xs:fs-26">Bài viết liên quan</span>

                </div>

                <div class="w-fit d-block bg-white bar-8">
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/nam-2070-con-nguoi-se-di-du-lich-nhu-the-nao-10968" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg" alt="Năm 2070: con người sẽ đi du lịch như thế nào?" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/nam-2070-con-nguoi-se-di-du-lich-nhu-the-nao-10968" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Năm 2070: con người sẽ đi du lịch như thế nào?
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Các học giả và các nhà tương lai học cho rằng năm 2070, công nghệ sẽ phát triển mạnh mẽ và ảnh hưởng đáng kể đến cách con người du lịch. Taxi bay,  giường thông minh, nhân viên khách sạn Hologram, máy in 3D,... hay du lịch về quá khứ sẽ xuất hiện. Theo báo cáo "2070: The Future Travel Report" của easyJet.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/vietnam-airlines-chao-he-ve-dong-gia-chi-999000-vndchieu-da-gom-thue-phi-10931" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/1b87f17aeaec43c78af5b54777212bf93cfeef85.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/1b87f17aeaec43c78af5b54777212bf93cfeef85.jpg" alt="Vietnam Airlines &quot;chào hè&quot;: vé đồng giá chỉ 999.000 VND/chiều (đã gồm thuế, phí)" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/1b87f17aeaec43c78af5b54777212bf93cfeef85.jpg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/1b87f17aeaec43c78af5b54777212bf93cfeef85.jpg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/vietnam-airlines-chao-he-ve-dong-gia-chi-999000-vndchieu-da-gom-thue-phi-10931" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Vietnam Airlines "chào hè": vé đồng giá chỉ 999.000 VND/chiều (đã gồm thuế, phí)
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Nhân mùa du lịch hè đang đến, đây là thời điểm mà mọi người đều muốn tìm kiếm những chuyến đi thú vị cùng gia đình và bạn bè. Hãng hàng không quốc gia Việt Nam Vietnam Airlines đã triển khai chương trình khuyến mãi “Chào Hè rực rỡ, ưu đãi hết cỡ” với ưu đãi đồng giá từ Vietnam Airlines”. Theo đó Vietnam Airlines sẽ bán vé máy bay đồng giá trên các chặng bay Nội địa và Quốc tế (đã báo gồm thuế, phí).</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/bali-se-cam-khach-du-lich-thue-xe-may-10911" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg" alt="Bali sẽ cấm khách du lịch thuê xe máy" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/bali-se-cam-khach-du-lich-thue-xe-may-10911" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Bali sẽ cấm khách du lịch thuê xe máy
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Bali có kế hoạch ban hành một số quy tắc áp dụng cho du khách nước ngoài, trong đó có quy định cấm khách du lịch thuê xe gắn máy. Lệnh cấm sẽ được thực hiện vào khoảng cuối năm nay.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/trung-quoc-mo-lai-viec-cap-visa-du-lich-cho-du-khach-nuoc-ngoai-co-viet-nam-10904" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg" alt="Trung Quốc mở lại việc cấp visa du lịch cho du khách nước ngoài (có Việt Nam)" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/trung-quoc-mo-lai-viec-cap-visa-du-lich-cho-du-khach-nuoc-ngoai-co-viet-nam-10904" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Trung Quốc mở lại việc cấp visa du lịch cho du khách nước ngoài (có Việt Nam)
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Trung Quốc sẽ nối lại việc cấp tất cả các loại visa (thị thực) cho người nước ngoài, bao gồm visa du lịch bắt đầu từ ngày 15 tháng 3 năm 2023. Đây là động thái mới nhất của chính phủ Trung Quốc trong việc mở lại hoàn toàn biên giới.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/nha-tho-duc-ba-paris-mo-cua-tro-lai-sau-tran-hoa-hoan-kinh-hoang-2019-10898" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/fa9c4d2bd1140698e9b23fbf5251d18c1672bbb2.png" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/fa9c4d2bd1140698e9b23fbf5251d18c1672bbb2.png" alt="Nhà thờ Đức Bà Paris mở cửa trở lại sau trận hỏa hoạn kinh hoàng 2019" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/fa9c4d2bd1140698e9b23fbf5251d18c1672bbb2.png" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/fa9c4d2bd1140698e9b23fbf5251d18c1672bbb2.png">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/nha-tho-duc-ba-paris-mo-cua-tro-lai-sau-tran-hoa-hoan-kinh-hoang-2019-10898" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Nhà thờ Đức Bà Paris mở cửa trở lại sau trận hỏa hoạn kinh hoàng 2019
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Nhà thờ Đức Bà Paris dự kiến sẽ mở cửa đón du khách và tổ chức các thánh lễ Công giáo vào cuối năm 2024, sau chưa đầy 6 năm kể từ trận hỏa hoạn kinh hoàng năm 2019.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/luu-y-du-khach-co-the-bi-phat-vi-mac-dong-phuc-hoc-sinh-thai-lan-10893" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/80faebc648ee01e531a587323f9c03ea4e12fbd6.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/80faebc648ee01e531a587323f9c03ea4e12fbd6.jpeg" alt="Lưu ý: Du khách có thể bị phạt vì mặc đồng phục học sinh Thái Lan" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/80faebc648ee01e531a587323f9c03ea4e12fbd6.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/80faebc648ee01e531a587323f9c03ea4e12fbd6.jpeg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/luu-y-du-khach-co-the-bi-phat-vi-mac-dong-phuc-hoc-sinh-thai-lan-10893" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Lưu ý: Du khách có thể bị phạt vì mặc đồng phục học sinh Thái Lan
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Một luật sư Thái Lan đã cảnh báo khách du lịch không được mặc đồng phục học sinh Thái Lan khi đi du lịch ở nước này vì hành động đó có thể bị phạt 1.000 baht.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/dai-loan-tang-tien-cho-khach-du-lich-den-nuoc-nay-10868" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/9609a41d6ea45cc414f30dd58f40c30cff2beb18.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/9609a41d6ea45cc414f30dd58f40c30cff2beb18.jpeg" alt="Đài Loan tặng tiền cho khách du lịch đến nước này" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/9609a41d6ea45cc414f30dd58f40c30cff2beb18.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/9609a41d6ea45cc414f30dd58f40c30cff2beb18.jpeg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/dai-loan-tang-tien-cho-khach-du-lich-den-nuoc-nay-10868" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Đài Loan tặng tiền cho khách du lịch đến nước này
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Đài Loan sẽ trao 5.000 Đài tệ (tương đương khoảng 166 USD) cho 500.000 khách du lịch cá nhân cùng với 20.000 Đài tệ (tương đương khoảng 667 USD) cho 90.000 nhóm du lịch thông qua các công ty du lịch. Đây là một phần một phần trong kế hoạch trị giá 5,3 tỷ NTD của chính phủ Đài Loan nhằm thu hút khoảng 6 triệu du khách nước ngoài đến trong năm nay.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/tu-62023-thai-lan-se-thu-phi-nhap-canh-doi-voi-du-khach-nuoc-ngoai-10861" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/61576dd7f5158b1a95aed522b5521ebcc21a9911.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/61576dd7f5158b1a95aed522b5521ebcc21a9911.jpeg" alt="Từ 6/2023: Thái Lan sẽ thu phí nhập cảnh đối với du khách nước ngoài" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/61576dd7f5158b1a95aed522b5521ebcc21a9911.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/61576dd7f5158b1a95aed522b5521ebcc21a9911.jpeg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/tu-62023-thai-lan-se-thu-phi-nhap-canh-doi-voi-du-khach-nuoc-ngoai-10861" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Từ 6/2023: Thái Lan sẽ thu phí nhập cảnh đối với du khách nước ngoài
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Chính phủ Thái Lan đã chính thức phê duyệt đề xuất thu phí nhập cảnh đối với khách du lịch quốc tế nhập cảnh nước này, thời gian chính thức áp dụng quy định này là từ ngày 1 tháng 6 năm 2023.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/tu-922023-nhap-canh-brunei-phai-dien-e-arrival-card-10848" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/765f357c1e11c7f8ba31147fde34462b9f706887.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/765f357c1e11c7f8ba31147fde34462b9f706887.jpeg" alt="Từ 9/2/2023: nhập cảnh Brunei phải điền E-Arrival Card" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/765f357c1e11c7f8ba31147fde34462b9f706887.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/765f357c1e11c7f8ba31147fde34462b9f706887.jpeg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/tu-922023-nhap-canh-brunei-phai-dien-e-arrival-card-10848" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Từ 9/2/2023: nhập cảnh Brunei phải điền E-Arrival Card
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Brunei yêu cầu khách du lịch nhập cảnh nước này sẽ phải điền form khai online - E-Arrival Card kể từ ngày 9 tháng 2 năm 2023. Khách du lịch quá cảnh được miễn điền form khai E-Arrival Card.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="w-fit p-25 box-shadow-1">
                        <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                            <div class="fl-shrink0 xs:w-120 xs:h-84" style="background: none; width: 216px; height: 186px;">
                                <a href="http://bookingbamien.com/du-lich/top-10-ho-chieu-quyen-luc-nhat-the-gioi-nam-2023-10800" class="d-block w-fit h-fit ps-relative" target="">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/17e3ce73fd6243071e5c39a411ff6044294fc32c.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/17e3ce73fd6243071e5c39a411ff6044294fc32c.jpeg" alt="Top 10 hộ chiếu “quyền lực” nhất thế giới năm 2023" class="lazy-load w-fit h-fit object-cover object-center bar-8 d-h:o50 xs:w-120 xs:h-84" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/17e3ce73fd6243071e5c39a411ff6044294fc32c.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/17e3ce73fd6243071e5c39a411ff6044294fc32c.jpeg">
                                </a>
                            </div>
                            <div class="fl-1 ml-20 xs:ml-10 ps-relative c-pointer">
                                <div class="_i-content-t">
                                    <a href="http://bookingbamien.com/du-lich/top-10-ho-chieu-quyen-luc-nhat-the-gioi-nam-2023-10800" class=" mb-5 truncate-line lineclamp2 fs-22 fc-fourteenth fw-600 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-16_5 d-xs:fs-15 xs:my-5 h:fc-sixth" target="">
                                        Top 10 hộ chiếu “quyền lực” nhất thế giới năm 2023
                                    </a>
                                </div>
                                <span class="c-auto _i-des fc-fourteenth fs-15 fw-400 truncate-line lineclamp2 mb-0 xs:lineclamp3 xs:lh-md td-none xs:d-none ta-justify" style="line-height: 140%;">Theo chỉ số xếp hạng hộ chiếu Henley (Henley Passport Index) vừa được công ty tư vấn cư trú &amp; quốc tịch toàn cầu Henley &amp; Partners công bố, hộ chiếu quyền lực nhất thế giới 2023 thuộc về Nhật Bản khi người sở hữu hộ chiếu của quốc gia này có thể đến 193 điểm đến khác nhau trên thế giới mà không cần xin thị thực.</span>
                                <div class="clearfix"></div>

                                <div class="d-flex ai-center jc-space-between py-10 c-auto">
                                    <div class="ws-nowrap d-flex ai-center btr-10 fl-1">

                <span class="bar-circle bbar-circle ps-relative w-32 h-32 td-none outline-none mr-8 fc-sixth">
                    <img src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" data-srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" class="lazy-load w-fit h-fit object-cover object-center bar-circle" style="filter: none;" alt="Lam NG" src="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg" srcset="https://media2.gody.vn//public/images/user-2/2023/01/06/nguyenlamdl5569/thumbnail-70/63b7d688b2ac7-1672992392.jpg">
                </span>
                                        <div class="fl-1">
                                            <span class="d-inline-block va-middle truncate td-none outline-none fs-14 fw-600 wmx-135" style="color: #828282;">Lam NG</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="d-block w-fit mb-25">
                    <span class="w-fit d-block fc-black fw-700 fs-26 lh-24">Bài viết mới nhất</span>
                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/nam-2070-con-nguoi-se-di-du-lich-nhu-the-nao-10968" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7abe21376f3872f85e3e75fa1f769d779dad0af9.jpeg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/nam-2070-con-nguoi-se-di-du-lich-nhu-the-nao-10968" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Năm 2070: con người sẽ đi du lịch như thế nào?</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/vietnam-airlines-chao-he-ve-dong-gia-chi-999000-vndchieu-da-gom-thue-phi-10931" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/1b87f17aeaec43c78af5b54777212bf93cfeef85.jpg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/vietnam-airlines-chao-he-ve-dong-gia-chi-999000-vndchieu-da-gom-thue-phi-10931" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Vietnam Airlines "chào hè": vé đồng giá chỉ 999.000 VND/chiều (đã gồm thuế, phí)</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/bali-se-cam-khach-du-lich-thue-xe-may-10911" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/c5ce094c8069069fb2f6d431585a1643a5a4fa97.jpg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/bali-se-cam-khach-du-lich-thue-xe-may-10911" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Bali sẽ cấm khách du lịch thuê xe máy</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/trung-quoc-mo-lai-viec-cap-visa-du-lich-cho-du-khach-nuoc-ngoai-co-viet-nam-10904" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/7be0469e91530756117521350bd1b58bd9943ffc.jpeg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/trung-quoc-mo-lai-viec-cap-visa-du-lich-cho-du-khach-nuoc-ngoai-co-viet-nam-10904" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Trung Quốc mở lại việc cấp visa du lịch cho du khách nước ngoài (có Việt Nam)</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/nha-tho-duc-ba-paris-mo-cua-tro-lai-sau-tran-hoa-hoan-kinh-hoang-2019-10898" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/fa9c4d2bd1140698e9b23fbf5251d18c1672bbb2.png" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/nha-tho-duc-ba-paris-mo-cua-tro-lai-sau-tran-hoa-hoan-kinh-hoang-2019-10898" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Nhà thờ Đức Bà Paris mở cửa trở lại sau trận hỏa hoạn kinh hoàng 2019</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/kinh-nghiem-tham-quan-jewel-san-bay-changi-singapore-10897" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/66b1ca6c378d74fb3eb47c8ede65ff62d9683fcd.jpg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/kinh-nghiem-tham-quan-jewel-san-bay-changi-singapore-10897" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Kinh nghiệm tham quan Jewel, sân bay Changi, Singapore</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/luu-y-du-khach-co-the-bi-phat-vi-mac-dong-phuc-hoc-sinh-thai-lan-10893" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/80faebc648ee01e531a587323f9c03ea4e12fbd6.jpeg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/luu-y-du-khach-co-the-bi-phat-vi-mac-dong-phuc-hoc-sinh-thai-lan-10893" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Lưu ý: Du khách có thể bị phạt vì mặc đồng phục học sinh Thái Lan</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/nhung-mon-an-duong-pho-o-dai-loan-nhat-dinh-phai-thu-10879" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/97c547a77ffe71fe2cc84768f4fb9b43d72723f4.jpeg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/nhung-mon-an-duong-pho-o-dai-loan-nhat-dinh-phai-thu-10879" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Những món ăn đường phố ở Đài Loan nhất định phải thử</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/cac-nha-hang-dat-sao-michelin-noi-tieng-o-dai-bac-10871" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/cac-nha-hang-dat-sao-michelin-noi-tieng-o-dai-bac-10871" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Các nhà hàng đạt sao Michelin nổi tiếng ở Đài Bắc</a>
                            </div>
                        </div>
                    </div>                </div>
                <div class="w-fit d-block box-shadow-1 mb-10 pb-10">
                    <div class="ps-relative overflow-hidden xs:p-0">
                        <div class="ps-relative c-pointer d-flex ai-center box-border">
                            <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                <a href="http://bookingbamien.com/du-lich/dai-loan-tang-tien-cho-khach-du-lich-den-nuoc-nay-10868" class="d-block w-fit h-fit">
                                    <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/9609a41d6ea45cc414f30dd58f40c30cff2beb18.jpeg" error="handleIEError(this);" class="w-fit h-fit object-cover object-center bar-8">
                                </a>
                            </div>
                            <div class="fl-1 ml-12 ps-relative c-pointer va-top">
                                <a href="http://bookingbamien.com/du-lich/dai-loan-tang-tien-cho-khach-du-lich-den-nuoc-nay-10868" class="mb-5 truncate-line lineclamp3 fs-14 fc-black fw-600 xs:truncate-line xs:lineclamp1 xs:mb-0 xs:fs-14">Đài Loan tặng tiền cho khách du lịch đến nước này</a>
                            </div>
                        </div>
                    </div>                </div>


                <div class="d-block w-fit mb-25 mt-35">
                    <span class="w-fit d-block fc-black fw-700 fs-26 lh-24">Bình luận mới nhất</span>
                </div>
                <div class="w-fit d-block mb-25">
                    <div class="w-fit d-block mb-25">

                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/trang65055" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/trang65055/44448913-20191017173418.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/trang65055/44448913-20191017173418.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Siếu Siếu" src="http://bookingbamien.com/public/v3/images/user/avatar/trang65055/44448913-20191017173418.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/trang65055/44448913-20191017173418.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/trang65055" class="fc-nineth fw-500">Siếu Siếu</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/bai-viet/hanh-trinh-chinh-phuc-dinh-phu-xai-lai-leng-noc-nha-day-truong-son-bac-10944?action=review" class="fc-nineth fw-500"> Hành trình chinh phục đỉnh Phu Xai Lai Leng - Nóc nhà dãy Trường Sơn Bắc</a>
                                    </p>
                                    <a href="http://bookingbamien.com/bai-viet/hanh-trinh-chinh-phuc-dinh-phu-xai-lai-leng-noc-nha-day-truong-son-bac-10944?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">đoạn đường đi khoản bao nhiêu km vậy ah, mình thấy đi bộ 5km tới chân núi thì chắc đi phải hơn chục km nhỉ</a>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/trang85170" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/trang85170/114804445-20191017174406.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/trang85170/114804445-20191017174406.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Katy Chan" src="http://bookingbamien.com/public/v3/images/user/avatar/trang85170/114804445-20191017174406.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/trang85170/114804445-20191017174406.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/trang85170" class="fc-nineth fw-500">Katy Chan</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/bai-viet/chua-toi-200-canh-cho-mot-chuyen-di-chua-lanh-toi-nui-ham-lon-soc-son-10949?action=review" class="fc-nineth fw-500"> Chưa tới 200 cành cho một "chuyến đi chữa lành" tới núi Hàm Lợn - Sóc Sơn?</a>
                                    </p>
                                    <a href="http://bookingbamien.com/bai-viet/chua-toi-200-canh-cho-mot-chuyen-di-chua-lanh-toi-nui-ham-lon-soc-son-10949?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">tính thêm xăng thì cũng 200k hoặc hơn á chứ</a>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/trang102130" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/trang102130/96529556-20191017220627.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/trang102130/96529556-20191017220627.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Coco Alex" src="http://bookingbamien.com/public/v3/images/user/avatar/trang102130/96529556-20191017220627.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/trang102130/96529556-20191017220627.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/trang102130" class="fc-nineth fw-500">Coco Alex</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/bai-viet/lich-trinh-kham-pha-moc-chau-4n3d-siu-chi-tiet-10950?action=review" class="fc-nineth fw-500"> Lịch trình khám phá MỘC CHÂU 4N3D siu chi tiết</a>
                                    </p>
                                    <a href="http://bookingbamien.com/bai-viet/lich-trinh-kham-pha-moc-chau-4n3d-siu-chi-tiet-10950?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">cầu kính Bạch Long đẹp vậy ta, mình có được đi trên đó không bạn</a>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/phuong7294" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/phuong7294/54479153-20190611155938.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/phuong7294/54479153-20190611155938.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Hoài Phương" src="http://bookingbamien.com/public/v3/images/user/avatar/phuong7294/54479153-20190611155938.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/phuong7294/54479153-20190611155938.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/phuong7294" class="fc-nineth fw-500">Hoài Phương</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/bai-viet/lich-trinh-kham-pha-moc-chau-4n3d-siu-chi-tiet-10950?action=review" class="fc-nineth fw-500"> Lịch trình khám phá MỘC CHÂU 4N3D siu chi tiết</a>
                                    </p>
                                    <a href="http://bookingbamien.com/bai-viet/lich-trinh-kham-pha-moc-chau-4n3d-siu-chi-tiet-10950?action=review" class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15">bài viết chi tiết lắm ah, đã theo dõi bạn và chờ các bài tiếp theo</a>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/hoangphucdakmilfake9384" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="https://lh3.googleusercontent.com/a/AGNmyxZXZ5dkKV_uzu7ggz0VCgTZW6riFHe_lG4TaeZK=s96-c" data-srcset="https://lh3.googleusercontent.com/a/AGNmyxZXZ5dkKV_uzu7ggz0VCgTZW6riFHe_lG4TaeZK=s96-c" class="lazy-load w-fit h-fit object-cover object-center" alt="Hoàng Phúc" src="https://lh3.googleusercontent.com/a/AGNmyxZXZ5dkKV_uzu7ggz0VCgTZW6riFHe_lG4TaeZK=s96-c" srcset="https://lh3.googleusercontent.com/a/AGNmyxZXZ5dkKV_uzu7ggz0VCgTZW6riFHe_lG4TaeZK=s96-c">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/hoangphucdakmilfake9384" class="fc-nineth fw-500">Hoàng Phúc</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5c94bcd3ffb29594553c9869" class="fc-nineth fw-500"> Nhà Ngục Đăk Mil</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/bachtran.nd6924" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="https://lh3.googleusercontent.com/a/AGNmyxbmsXwM5fs-PIznzJ1KwQ1Qo2TE6N8Ftqsf22BNn4c=s96-c" data-srcset="https://lh3.googleusercontent.com/a/AGNmyxbmsXwM5fs-PIznzJ1KwQ1Qo2TE6N8Ftqsf22BNn4c=s96-c" class="lazy-load w-fit h-fit object-cover object-center" alt="VĂN BÁCH" src="https://lh3.googleusercontent.com/a/AGNmyxbmsXwM5fs-PIznzJ1KwQ1Qo2TE6N8Ftqsf22BNn4c=s96-c" srcset="https://lh3.googleusercontent.com/a/AGNmyxbmsXwM5fs-PIznzJ1KwQ1Qo2TE6N8Ftqsf22BNn4c=s96-c">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/bachtran.nd6924" class="fc-nineth fw-500">VĂN BÁCH</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5c2338ffffb29522163c9869" class="fc-nineth fw-500"> Nhà thờ Hồi giáo Lớn Sheikh Zayed (Sheikh Zayed Grand Mosque)</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/bachtran.nd6924" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="https://lh3.googleusercontent.com/a/AGNmyxbmsXwM5fs-PIznzJ1KwQ1Qo2TE6N8Ftqsf22BNn4c=s96-c" data-srcset="https://lh3.googleusercontent.com/a/AGNmyxbmsXwM5fs-PIznzJ1KwQ1Qo2TE6N8Ftqsf22BNn4c=s96-c" class="lazy-load w-fit h-fit object-cover object-center" alt="VĂN BÁCH" src="https://lh3.googleusercontent.com/a/AGNmyxbmsXwM5fs-PIznzJ1KwQ1Qo2TE6N8Ftqsf22BNn4c=s96-c" srcset="https://lh3.googleusercontent.com/a/AGNmyxbmsXwM5fs-PIznzJ1KwQ1Qo2TE6N8Ftqsf22BNn4c=s96-c">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/bachtran.nd6924" class="fc-nineth fw-500">VĂN BÁCH</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5c233cf2ffb295e5293c9869" class="fc-nineth fw-500"> Công viên giải trí Ferrari (Ferrari theme park)</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/nguyenthingochoai13126281" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Hoài Nguyễn" src="http://bookingbamien.com/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/nguyenthingochoai13126281" class="fc-nineth fw-500">Hoài Nguyễn</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5806f0580b78a4b2223c9869" class="fc-nineth fw-500"> Động Phong Nha</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/nguyenthingochoai13126281" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="Hoài Nguyễn" src="http://bookingbamien.com/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/nguyenthingochoai13126281/82272501-20180810133430.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/nguyenthingochoai13126281" class="fc-nineth fw-500">Hoài Nguyễn</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5c092934ffb295e51a3c9869" class="fc-nineth fw-500"> Hồ Tà Đùng</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/1116431352159453440" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="https://graph.facebook.com/v15.0/111643135215945/picture?type=normal" data-srcset="https://graph.facebook.com/v15.0/111643135215945/picture?type=normal" class="lazy-load w-fit h-fit object-cover object-center" alt="Mart Vin" src="https://graph.facebook.com/v15.0/111643135215945/picture?type=normal" srcset="https://graph.facebook.com/v15.0/111643135215945/picture?type=normal">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/1116431352159453440" class="fc-nineth fw-500">Mart Vin</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5db57136ffb295570f41cb58" class="fc-nineth fw-500"> Nhà Hàng Ngói Nâu</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/haisonnguyen5960" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="https://media2.gody.vn//public/images/user-2/2022/12/22/haisonnguyen5960/thumbnail-70/63a3f758b11dc-1671690072.jpeg" data-srcset="https://media2.gody.vn//public/images/user-2/2022/12/22/haisonnguyen5960/thumbnail-70/63a3f758b11dc-1671690072.jpeg" class="lazy-load w-fit h-fit object-cover object-center" alt="Tran Anh Tuyen" src="https://media2.gody.vn//public/images/user-2/2022/12/22/haisonnguyen5960/thumbnail-70/63a3f758b11dc-1671690072.jpeg" srcset="https://media2.gody.vn//public/images/user-2/2022/12/22/haisonnguyen5960/thumbnail-70/63a3f758b11dc-1671690072.jpeg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/haisonnguyen5960" class="fc-nineth fw-500">Tran Anh Tuyen</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5c667601ffb295d84d3c9869" class="fc-nineth fw-500"> Tượng Toripolisi</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="ihewpgwr" src="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/sample7287" class="fc-nineth fw-500">ihewpgwr</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5c667601ffb295d84d3c9869" class="fc-nineth fw-500"> Tượng Toripolisi</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="ihewpgwr" src="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/sample7287" class="fc-nineth fw-500">ihewpgwr</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5c667601ffb295d84d3c9869" class="fc-nineth fw-500"> Tượng Toripolisi</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                        <div class="w-fit d-block item-comment box-shadow-1 mb-10 pb-10">
                            <div class="d-flex ai-start ps-relative mt-22">
                                <div class="overflow-hidden bar-circle mr-12 fl-shrink0">
                                    <a href="http://bookingbamien.com/blog/sample7287" target="_blank" class="d-block bbar-circle ps-relative bar-circle w-32 h-32">
                                        <img src="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" data-srcset="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" class="lazy-load w-fit h-fit object-cover object-center" alt="ihewpgwr" src="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg" srcset="http://bookingbamien.com/public/v3/images/user/avatar/sample7287/143191049-20230322220805.jpg">
                                    </a>
                                </div>
                                <div class="fl1 ps-relative mtn-2" style="width: calc(100% - 36px);">
                                    <p class="m-0 truncate-line lineclamp2 fs-14 mb-5">
                                        <a href="http://bookingbamien.com/blog/sample7287" class="fc-nineth fw-500">ihewpgwr</a>
                                        <span class="fc-sixth"> bình luận trong </span>
                                        <a href="http://bookingbamien.com/redirect-places/5c667601ffb295d84d3c9869" class="fc-nineth fw-500"> Tượng Toripolisi</a>
                                    </p>
                                    <span class="fc-fourteenth fs-14 m-0 truncate-line lineclamp2 lh-15"></span>
                                </div>
                            </div>    </div>
                    </div>            </div>

                <div class="w-fit">
                    <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2910673600848421" crossorigin="anonymous"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2910673600848421" data-ad-slot="9371135160" data-ad-format="auto" data-full-width-responsive="true"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                </div>
            </div>
            <!-- --->
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="w-fit d-block mt-35 mb-10">
                    <span class="w-fit d-block fc-black fw-700 fs-36 lh-38 xs:fs-26">Có thể bạn quan tâm</span>

                </div>
                <div class="d-flex ai-top fw-wrap jc-space-between" style="--column:3; --gutter: 36px;">
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/cac-nha-hang-dat-sao-michelin-noi-tieng-o-dai-bac-10871" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Các nhà hàng đạt sao Michelin nổi tiếng ở Đài Bắc" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/379e0c9d0b116c571e19b0c37c39ec39f56c372a.jpeg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/cac-nha-hang-dat-sao-michelin-noi-tieng-o-dai-bac-10871" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Các nhà hàng đạt sao Michelin nổi tiếng ở Đài Bắc</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/5-dia-diem-ngam-hoa-anh-dao-dep-nhat-nhat-ban-nam-2023-10797" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/bdaa68ff41d3f6687fc93c76c2b6841469c49905.jpg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/bdaa68ff41d3f6687fc93c76c2b6841469c49905.jpg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="5 địa điểm ngắm hoa anh đào đẹp nhất Nhật Bản năm 2023" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/bdaa68ff41d3f6687fc93c76c2b6841469c49905.jpg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/bdaa68ff41d3f6687fc93c76c2b6841469c49905.jpg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/5-dia-diem-ngam-hoa-anh-dao-dep-nhat-nhat-ban-nam-2023-10797" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">5 địa điểm ngắm hoa anh đào đẹp nhất Nhật Bản năm 2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/ve-may-bay-tet-quy-mao-2023-chieu-lech-khuyen-mai-nhieu-10767" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8ac078c41c8e7f5d58f8c5f8c5e8eff9ee0a02ad.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8ac078c41c8e7f5d58f8c5f8c5e8eff9ee0a02ad.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Vé máy bay Tết Quý Mão 2023 chiều lệch khuyến mãi nhiều" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8ac078c41c8e7f5d58f8c5f8c5e8eff9ee0a02ad.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8ac078c41c8e7f5d58f8c5f8c5e8eff9ee0a02ad.jpeg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/ve-may-bay-tet-quy-mao-2023-chieu-lech-khuyen-mai-nhieu-10767" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Vé máy bay Tết Quý Mão 2023 chiều lệch khuyến mãi nhiều</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/nhung-mon-an-duong-pho-o-dai-loan-nhat-dinh-phai-thu-10879" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/97c547a77ffe71fe2cc84768f4fb9b43d72723f4.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/97c547a77ffe71fe2cc84768f4fb9b43d72723f4.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Những món ăn đường phố ở Đài Loan nhất định phải thử" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/97c547a77ffe71fe2cc84768f4fb9b43d72723f4.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/97c547a77ffe71fe2cc84768f4fb9b43d72723f4.jpeg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/nhung-mon-an-duong-pho-o-dai-loan-nhat-dinh-phai-thu-10879" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Những món ăn đường phố ở Đài Loan nhất định phải thử</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/kinh-nghiem-du-lich-han-quoc-thang-1-10766" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/526cfa8f4a61ffc8f4b88cc596ed230fe55e686c.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/526cfa8f4a61ffc8f4b88cc596ed230fe55e686c.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Kinh nghiệm du lịch Hàn Quốc tháng 1" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/526cfa8f4a61ffc8f4b88cc596ed230fe55e686c.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/526cfa8f4a61ffc8f4b88cc596ed230fe55e686c.jpeg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/kinh-nghiem-du-lich-han-quoc-thang-1-10766" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Kinh nghiệm du lịch Hàn Quốc tháng 1</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/festival-bien-nha-trang-2023-se-duoc-to-chuc-vao-thang-6-10768" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8e03647e10cf63a64fced18f1f568f618b24e54c.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8e03647e10cf63a64fced18f1f568f618b24e54c.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Festival Biển Nha Trang 2023 sẽ được tổ chức vào tháng 6" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8e03647e10cf63a64fced18f1f568f618b24e54c.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8e03647e10cf63a64fced18f1f568f618b24e54c.jpeg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/festival-bien-nha-trang-2023-se-duoc-to-chuc-vao-thang-6-10768" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Festival Biển Nha Trang 2023 sẽ được tổ chức vào tháng 6</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/korea-grand-sale-2023-voi-nhieu-uu-dai-va-khuyen-mai-lon-10787" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/84c0015d1099859c69302a142e524fb761c715b7.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/84c0015d1099859c69302a142e524fb761c715b7.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Korea Grand Sale 2023 với nhiều ưu đãi và khuyến mãi lớn" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/84c0015d1099859c69302a142e524fb761c715b7.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/84c0015d1099859c69302a142e524fb761c715b7.jpeg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/korea-grand-sale-2023-voi-nhieu-uu-dai-va-khuyen-mai-lon-10787" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Korea Grand Sale 2023 với nhiều ưu đãi và khuyến mãi lớn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/7-thanh-pho-ban-nhat-dinh-phai-ghe-tham-truoc-khi-chet-10794" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8316a9995b6693d9897fc1d22336cd0f75abfb1a.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8316a9995b6693d9897fc1d22336cd0f75abfb1a.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="7 thành phố bạn nhất định &quot;phải ghé thăm trước khi chết&quot;" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8316a9995b6693d9897fc1d22336cd0f75abfb1a.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/8316a9995b6693d9897fc1d22336cd0f75abfb1a.jpeg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/7-thanh-pho-ban-nhat-dinh-phai-ghe-tham-truoc-khi-chet-10794" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">7 thành phố bạn nhất định "phải ghé thăm trước khi chết"</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                    <div class="ps-relative d-flex fd-column gd-item" style="
                        width: calc( (100% - var(--gutter)) / var(--column) );
                        padding-right: calc( var(--gutter) / var(--column) );
                    ">
                        <div class="d-block mb-25 gb-item-border w-fit">
                            <div class="ps-relative overflow-hidden xs:p-0">
                                <div class="ps-relative c-pointer d-flex d-ai-center box-border">
                                    <div class="fl-shrink0 xs:w-1/3-5 xs:h-66" style="background: none; width: 90px; height: 70px;">
                                        <a href="http://bookingbamien.com/du-lich/du-lich-thanh-pho-khi-monkey-city-lopburi-thai-lan-10863" class="d-block w-fit h-fit">
                                            <img src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e809d38e66ef5ed60c194b1316b8717ecd50f66f.jpeg" data-srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e809d38e66ef5ed60c194b1316b8717ecd50f66f.jpeg" error="handleIEError(this);" class="lazy-load w-fit h-fit object-cover object-center bar-8" alt="Du lịch “Thành phố khỉ” (Monkey City), Lopburi - Thái Lan" src="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e809d38e66ef5ed60c194b1316b8717ecd50f66f.jpeg" srcset="https://media2.gody.vn/public/mytravelmap/images/2022/11/17/nguyenlamdl5569/original/e809d38e66ef5ed60c194b1316b8717ecd50f66f.jpeg">
                                        </a>
                                    </div>
                                    <div class="fl-1 ml-20 ps-relative c-pointer">
                                        <div class="_i-content-t">
                                            <a href="http://bookingbamien.com/du-lich/du-lich-thanh-pho-khi-monkey-city-lopburi-thai-lan-10863" class="mb-5 fs-15 fc-black fw-500 xs:truncate-line xs:lineclamp3 xs:mb-0 xs:fs-14">Du lịch “Thành phố khỉ” (Monkey City), Lopburi - Thái Lan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        </div>
                    </div>
                </div>
            </div>
            <!-- --->
        </div>
    </section>
@endsection()
