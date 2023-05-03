<div id="modalLoginForm" class="modal modal-simple fade ff-sans" role="dialog">
    <div class="modal-dialog w100%-60 wmn-650 wmx-600 xs:wmn-auto xs:w-fit xs:ps-fixed xs:m-0 xs:t0 xs:r0 xs:b0 xs:l0" :class="{'sm:wmn-auto': (currentTab != 'livedorvisitedform'), 'sm:ps-fixed sm:m-0 sm:t0 sm:r0 sm:b0 sm:l0 sm:wmn-auto sm:w-fit': (currentTab == 'livedorvisitedform')}">
        <div class="modal-content bar-5 bg-white xs:h-fit xs:bar-0" :class="modalContentClass">
            <div datalived="[object Object]" datavietnams="" dataworlds="" previousurl="" newuserstatus="0">
                <div class="modal-header d-none bn pb-5 px-12 pt-10 xs:d-block bg-white">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close fs-26 outline-none float-left w-40 mln-14 h-34 o40 s:mtn-6"><i aria-hidden="true" class="fa fa-angle-left"></i></button>
                    <h4 class="modal-title fs-24 m-0 fc-nineth fw-normal tt-uppercase s:fs-16">
                        Đăng nhập
                    </h4></div>
                <div class="py-12 xs:pt-0 modal-body">
                    <div class="
          w-100%
          ta-center
          px-50
          brw1
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
                        <form method="post" action="{{ url('dang-nhap') }}" id="loginForm" name="login-form" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="mb-20 ps-relative ta-left"><input type="text" id="login_email" name="login_email" placeholder="Email" class="
                form-control
                bar-5
                h-50
                lh-50
                bc-tenth
                w-fit
                bs-none
                xs:h-40 xs:lh-40
              "> <span class="

              "></span></div>
                            <div class="mb-20 ps-relative ta-left"><input type="password" id="login_password" name="login_password" placeholder="Mật khẩu" class="
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
               bn bg-primary fc-white" type="submit" id="login-submit">
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
<footer class="bt btw4 bc-primary mt-0">
    <div class="container wmn-1170">
        <div class="row pt-0">
            <div class="col-md-4">
                <a href="/" class="d-block pt-20">
                    <img src="{{url($setting['logo_company']??'')}}" alt="Gody Logo" class="w-130 d-block lazyload">
                </a>
                <?php echo html_entity_decode($setting['copyright_left'] ?? '') ?>
                <div class="mt-20 d-flex">
                    <a href="https://www.facebook.com/GodyTravel/" target="_blank" rel="noreferrer nofollow" class="w-50 h-50 d-flex ai-center jc-center bg-white bar-circle card6 text-center fc-fourth fs-24 lh-50 h:card3 t-duration-slow t-all t-delay-0" id="icon-mang-xa-hoi-facebook-gody-footer-trang-chu">
                        <span class="fc-transparent ps-absolute">FB</span>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCtQWjnshk_9PPyl9M-Ip7aQ" target="_blank" rel="noreferrer nofollow" class="w-50 h-50 d-flex ai-center jc-center bg-white bar-circle ml-10 card6 text-center fc-thirteenth fs-24 lh-50 h:card3 t-duration-slow t-all t-delay-0" id="icon-mang-xa-hoi-youtube-gody-footer-trang-chu">
                        <span class="fc-transparent ps-absolute">YT</span>
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/gody_travel/" target="_blank" rel="noreferrer nofollow" class="w-50 h-50 d-flex ai-center jc-center bg-white bar-circle ml-10 card6 text-center fs-24 lh-50 h:card3 t-duration-slow t-all t-delay-0" id="icon-mang-xa-hoi-instagram-gody-footer-trang-chu">
                        <span class="fc-transparent ps-absolute">IG</span>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pt-20">
                <p class="fs-18 fc-sixth mb-0">
                    Về Gody
                </p>
                <span class="d-inline-block w-30 bb bc-primary baw2"></span>
                <div class="mt-12">
                    <a href="{{ url('gioi-thieu') }}" class="show fc-sixth h:fc-primary">Giới thiệu</a>
                    <a href="{{ url('lien-he') }}" class="show fc-sixth h:fc-primary mt-5">Liên hệ</a>
                    <a href="{{ url('chinh-sach-bao-mat') }}" class="show fc-sixth h:fc-primary mt-5">Chính sách bảo mật</a>
                    <a href="{{ url('chinh-sach-quyen-rieng-tu') }}" class="show fc-sixth h:fc-primary mt-5">Chính sách quyền riêng tư</a>
                </div>
            </div>
            <div class="col-md-2 pt-20">
                <p class="fs-18 fc-sixth mb-0">
                    Du lịch
                </p>
                <span class="d-inline-block w-30 bb bc-primary baw2"></span>
                <div class="mt-12">
                    <a href="{{url('/')}}/diem-den" class="show fc-sixth h:fc-primary mt-5">Điểm đến</a>
                </div>
            </div>
            <div class="col-md-2 pt-20">
                <p class="fs-18 fc-sixth mb-0">
                    Tiện ích
                </p>
                <span class="d-inline-block w-30 bb bc-primary baw2"></span>
                <div class="mt-12">
                    <a href="{{url('/')}}/hoi-dap" class="show fc-sixth h:fc-primary mt-5">Hỏi đáp du lịch</a>
                    <a href="{{url('/')}}/blog/viet-bai/note" class="show fc-sixth h:fc-primary mt-5">Viết blog du lịch</a>
                    <a href="{{url('/')}}/diem-den" class="show fc-sixth h:fc-primary mt-5">Điểm đến</a>
                </div>
            </div>
        </div>
        <div class="row pb-30 mt-0">
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="bg-eleventh text-center fc-nineth h-36 lh-36">
        Copyright &copy; {{ date('Y') }}
    </div>
</footer>
