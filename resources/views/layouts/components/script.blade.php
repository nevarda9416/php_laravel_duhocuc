<script type="text/javascript" src="https://gody.vn/public/v3/plugins/bootstrap/bootstrap.min.js"></script>
<script src="https://gody.vn/public/v3/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="https://gody.vn/public/v3/plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="https://gody.vn/public/v6/js/fancybox-3.1/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="https://media2.gody.vn/public/v3/js/custom.js?v=1235" defer></script>
<script src="https://gody.vn/public/v3/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- scroll menu service -->
<script type="text/javascript">
    $(document).ready(function () {
        //GODY.General.isntallFancyGallery();
        $('#slick-quick-access').slick({
            slidesToShow: 4,
            prevArrow: '#slick-prev',
            nextArrow: '#slick-next',
        });
    });
</script>
<script src="https://gody.vn/public/v3/js/sweetalert.min.js"></script>
<script src="https://gody.vn/public/home/js/lodash.min.js"></script>
<script src="https://gody.vn/public/v3/js/sweetalert.min.js"></script>
<script src="https://gody.vn/public/v3/cropper/cropper.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://gody.vn/public/v3/js/jquery.mousewheel.js"></script>
<script src="https://gody.vn/public/v3/js/simple-sticky-sidebar.js"></script>

<script async="" defer="" src="//platform.instagram.com/en_US/embeds.js"></script>
<script src="https://gody.vn/public/v5/js/iframe_resizer/iframeResizer1.min.js"></script>

<script src="https://gody.vn/public/home/js/jquery.validate.min.js"></script>
<script>
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        console.log(value);
        const parts = value.split(`; ${name}=`);
        console.log(parts);
        if (parts.length === 2) {
            console.log(parts.pop());
            console.log(parts.pop().split(';'));
            console.log(parts.pop().split(';').shift());
            return parts.pop().split(';').shift();
        }
    }
    $(function () {
        getCookie('travel_user_info');
        $(document.body).on('click', '.facebook_login, .google_login', function (e) {
            $('.modalBlogCreateLoading').removeClass('hide');
        });
        // Validate Đặt lại mật khẩu
        $('#reset-form').validate({
            rules: {
                old_password: {
                    required: true,
                    minlength: 6
                },
                new_password: {
                    required: true,
                    minlength: 6
                },
                renew_password: {
                    required: true,
                    minlength: 6,
                    equalTo: '#new_password'
                },
            },
            messages: {
                old_password: {
                    required: 'Vui lòng nhập mật khẩu!',
                    minlength: 'Mật khẩu tối thiểu là 6 ký tự!',
                },
                new_password: {
                    required: 'Vui lòng nhập mật khẩu!',
                    minlength: 'Mật khẩu tối thiểu là 6 ký tự!',
                },
                renew_password: {
                    required: 'Vui lòng nhập lại mật khẩu!',
                    minlength: 'Mật khẩu tối thiểu là 6 ký tự!',
                    equalTo: 'Mật khẩu mới không trùng khớp!'
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        // Validate Chia sẻ, giới thiệu địa điểm mới
        $('#travelCollaboratorForm').validate({
            rules: {
                title: 'required',
                excerpt: 'required',
                continent: 'required',
                country: 'required',
                province: 'required',
            },
            messages: {
                title: 'Vui lòng nhập tên địa điểm!',
                excerpt: 'Vui lòng nhập miêu tả ngắn!',
                continent: 'Vui lòng chọn châu lục!',
                country: 'Vui lòng chọn quốc gia!',
                province: 'Vui lòng chọn tỉnh thành!',
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        // Validate Chia sẻ hình ảnh
        $('#travelPhotoForm').validate({
            rules: {
                title: 'required',
                excerpt: 'required',
                album: 'required',
            },
            messages: {
                title: 'Vui lòng nhập tiêu đề album!',
                excerpt: 'Vui lòng nhập nội dung chi tiết giới thiệu về album!',
                album: 'Vui lòng thêm album ảnh!',
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        // Validate Chia sẻ trải nghiệm & review
        $('#pc-dang-blog-thanh-cong-nut-viet-ngay').click(function () {
          if (typeof getCookie('travel_user_info') === 'undefined') {
              alert('Vui lòng đăng nhập (hoặc đăng ký nếu chưa có tài khoản) để chia sẻ bài viết');
              return false;
          }
        });
        $('#travelPostForm').validate({
            rules: {
                title: 'required',
                excerpt: 'required',
                start_date: 'required',
                duration: 'required',
                cost: 'required',
            },
            messages: {
                title: 'Vui lòng nhập tiêu đề bài viết!',
                excerpt: 'Vui lòng nhập giới thiệu ngắn!',
                start_date: 'Vui lòng nhập ngày bắt đầu!',
                duration: 'Vui lòng nhập tổng số ngày!',
                cost: 'Vui lòng nhập chi phí chuyến đi!',
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        // Validate register form
        $('#sign-up-submit').attr('type', 'submit');
        $('#signup-form').validate({
            rules: {
                fullname: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                re_password: {
                    required: true,
                    minlength: 6,
                    equalTo: '#password'
                }
            },
            messages: {
                fullname: 'Vui lòng nhập đầy đủ họ tên!',
                email: {
                    required: 'Vui lòng nhập email!',
                    email: 'Vui lòng nhập đúng định dạng email!',
                },
                password: {
                    required: 'Vui lòng nhập mật khẩu!',
                    minlength: 'Mật khẩu tối thiểu là 6 ký tự!',
                },
                re_password: {
                    required: 'Vui lòng nhập lại mật khẩu!',
                    minlength: 'Mật khẩu tối thiểu là 6 ký tự!',
                    equalTo: 'Mật khẩu nhập lại không trùng khớp!'
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
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

        $('#login-form').on('shown.bs.modal', function () {
            $('#login_email').focus();
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
<script>
    $(function () {
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
            //popupCheck();
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
                loadScript('/public/js/vue-modules/http-vue-loader/httpVueLoader.js');
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

    // if( typeof initDestinationSearchVue != 'function' ) {
    //     function initDestinationSearchVue() {
    //         if (typeof Vue == 'undefined' || typeof httpVueLoader == 'undefined' || typeof _ == 'undefined') {
    //             setTimeout(() => {
    //                 initDestinationSearchVue();
    //             }, 500);
    //             return;
    //         }
    //
    //         const destinationSearch = new Vue({
    //             el: '#modal-search-v2',
    //             delimiters: ['{(', ')}'],
    //             data: function () {
    //                 return dsData;
    //             },
    //             components: {
    //                 loadStream: httpVueLoader('/public/v6/js/components/master/loadStream.vue'),
    //                 defaultDestination: httpVueLoader(
    //                     '/public/v6/js/components/master/defaultDestinantion.vue?v=5',
    //                 ),
    //             },
    //             computed: {
    //                 dataEmpty: function () {
    //                     return _.isEmpty(this.data);
    //                 },
    //                 detailUrl: function () {
    //                     const country = this.data?._source?.country
    //                         ? this.data?._source?.country
    //                         : this.data?._source;
    //                     const province = this.data?._source?.province;
    //
    //                     const continentId =
    //                         this.data?._index === 'places'
    //                             ? country.continents.slice(0, 1)
    //                             : country?.continent_id;
    //                     const continentSlug = this.continent[continentId]?.slug;
    //
    //                     if (this.data?._index === 'places') {
    //                         return `/${continentSlug}/${country?.countries_slug}/${country?.province_slug}/${country?.slug}`;
    //                     }
    //
    //                     if (
    //                         this.data?._index === 'province' ||
    //                         this.data?._index === 'province_v2'
    //                     ) {
    //                         return `/${continentSlug}/${country?.slug}/${this.data?._source.slug}`;
    //                     }
    //
    //                     let url = `/${this.continent[continentId]?.slug}/${country?.slug}`;
    //
    //                     if (province) {
    //                         url += `/${province?.slug}`;
    //                     }
    //
    //                     return url;
    //                 },
    //                 blogUrl: function () {
    //                     return `${this.detailUrl}/kinh-nghiem`;
    //                 },
    //                 photoUrl: function () {
    //                     return `${this.detailUrl}/hinh-anh`;
    //                 },
    //                 communityUrl: function () {
    //                     return `${this.detailUrl}/hoi-dap`;
    //                 },
    //                 planUrl: function () {
    //                     return `${this.detailUrl}/lich-trinh`;
    //                 },
    //                 searchAllUrl: function () {
    //                     return `/elastic/search/created_keyword/${encodeURI(this.searchInput)}`;
    //                 },
    //             },
    //             watch: {
    //                 data(newVal, oldVal) {
    //                     if (!!newVal?._id) {
    //                         if (typeof(Storage) !== "undefined") {
    //                             let data = localStorage.getItem('USER_SEARCH');
    //                             data = (!!!data) ? {} : JSON.parse(data);
    //                             const orderNo = Object.keys(data).length;
    //                             newVal.orderNo = orderNo;
    //                             data[newVal?._id] = newVal;
    //                             localStorage.setItem('USER_SEARCH', JSON.stringify(data));
    //                         }
    //                     }
    //                 }
    //             },
    //             mounted() {
    //                 this.observer = new MutationObserver(mutations => {
    //                     for (const m of mutations) {
    //                         const newValue = m.target.getAttribute(m.attributeName);
    //                         this.$nextTick(() => {
    //                             this.onClassChange(newValue, m.oldValue);
    //                         });
    //                     }
    //                 });
    //
    //                 this.observer.observe(this.$refs.modalSearchV2, {
    //                     attributes: true,
    //                     attributeOldValue : true,
    //                     attributeFilter: ['class'],
    //                 });
    //
    //                 this.getPopularData();
    //             },
    //             beforeDestroy() {
    //                 this.observer.disconnect();
    //             },
    //             methods: {
    //                 onClassChange(classAttrValue) {
    //                     const classList = classAttrValue.split(' ');
    //                     if (classList.includes('in')) {
    //                         this.isActive = true;
    //                     } else {
    //                         this.isActive = false;
    //                     }
    //                     this.$forceUpdate();
    //                 },
    //                 clearInput() {
    //                     this.searchInput = '';
    //                     this.loading = false;
    //                     this.$refs.globalSearchInput.focus();
    //                 },
    //                 actGlobalSearch: _.debounce(function (e) {
    //                     this.$refs.globalSearchInput.blur();
    //                     this.$refs.globalSearchInput.focus();
    //                     const vm = this;
    //                     if (e.keyCode === 13 && !!vm.searchInput) {
    //                         window.location.href = this.searchAllUrl;
    //                         return;
    //                     }
    //                     vm.searchInput && vm.fetchDataSearch();
    //                 }, 500),
    //                 async fetchDataSearch() {
    //                     const vm = this;
    //                     const url = `https://elasticsearch.gody.vn/public/v2/search-destination/get-list?type=all&query=${vm.searchInput}&response=json`;
    //                     vm.loading = true;
    //                     vm.loaded = false;
    //                     vm.data = {};
    //
    //                     await axios
    //                         .get(url, {
    //                             // cancelToken: new CancelToken(function executor(c) {
    //                             //   cancel = c;
    //                             // }),
    //                         })
    //                         .then(async function (resp) {
    //                             const { hits: data } = resp?.data?.hits;
    //                             vm.loading = false;
    //                             vm.loaded = true;
    //                             vm.data = data?.[0];
    //                             vm.data.stay22 = await vm.stay22Url();
    //                             vm.$forceUpdate();
    //                         })
    //                         .catch(function (error) {
    //                             vm.loading = false;
    //                             vm.loaded = true;
    //                         });
    //                 },
    //                 async stay22Url() {
    //                     if (this.dataEmpty) {
    //                         return '';
    //                     }
    //
    //                     const source = this.data?._source;
    //                     if (source?.latitude && source?.longitude) {
    //                         return `https://www.stay22.com/embed/gm?lat=${source.latitude}&lng=${source.longitude}&aid=godyvn&venue=Chọn%20điểm%20đến&hidebrandlogo=true&hidefooter=true&maincolor=ffffff&buttoncolor=ffffff&fontcolor=ff8c00&hidemodeswitcher=true`;
    //                     }
    //
    //                     const country = this.data?._source?.country
    //                         ? this.data?._source?.country
    //                         : this.data?._source;
    //                     const province = this.data?._source?.province;
    //                     let q = '';
    //                     if (this.data?._index === 'places') {
    //                         q = `${country.title}, ${country.province_name}, ${country.countries_name}`;
    //                     }
    //
    //                     if (this.data?._index === 'city' || this.data?._index === 'province_v2') {
    //                         q = `${source?.title}, ${source?.province?.title}, ${source?.country?.title}`;
    //                     }
    //
    //                     try {
    //                         const config = {
    //                             method: 'get',
    //                             url: `https://www.stay22.com/autocomplete/location?q=${encodeURI(q)}`,
    //                             headers: {},
    //                         };
    //
    //                         const resp = await axios(config);
    //                         const data = resp.data;
    //
    //                         if (!!!data.length) {
    //                             return '';
    //                         }
    //
    //                         const address = data?.[0]?.description || q;
    //
    //                         return `https://www.stay22.com/embed/gm?address=${encodeURI(
    //                             address,
    //                         )}&aid=godyvn&venue=Chọn%20điểm%20đến&hidebrandlogo=true&hidefooter=true&maincolor=ffffff&buttoncolor=ffffff&fontcolor=ff8c00&hidemodeswitcher=true`;
    //                     } catch (error) {
    //                         return '';
    //                     }
    //                 },
    //                 recentDetailUrl(data) {
    //                     const country = data?._source?.country
    //                         ? data?._source?.country
    //                         : data?._source;
    //                     const province = data?._source?.province;
    //
    //                     const continentId =
    //                         data?._index === 'places'
    //                             ? country.continents.slice(0, 1)
    //                             : country?.continent_id;
    //                     const continentSlug = this.continent[continentId]?.slug;
    //
    //                     if (data?._index === 'places') {
    //                         return `/${continentSlug}/${country?.countries_slug}/${country?.province_slug}/${country?.slug}`;
    //                     }
    //
    //                     if (
    //                         data?._index === 'province' ||
    //                         data?._index === 'province_v2'
    //                     ) {
    //                         return `/${continentSlug}/${country?.slug}/${data?._source.slug}`;
    //                     }
    //
    //                     let url = `/${this.continent[continentId]?.slug}/${country?.slug}`;
    //
    //                     if (province) {
    //                         url += `/${province?.slug}`;
    //                     }
    //
    //                     return url;
    //                 },
    //                 recentlyViewed() {
    //                     if (typeof(Storage) !== "undefined") {
    //                         let data = localStorage.getItem('USER_SEARCH');
    //                         if (!!!data) return null;
    //
    //                         data = JSON.parse(data);
    //                         let newData = [];
    //
    //                         for (const property in data) {
    //                             newData.push(data[property]);
    //                         }
    //
    //                         newData.sort((a,b) => {
    //                             if ( a?.orderNo < b?.orderNo ) {
    //                                 return 1;
    //                             }
    //                             if ( a?.orderNo > b?.orderNo ) {
    //                                 return -1;
    //                             }
    //                             return 0;
    //                         });
    //
    //                         return newData.splice(0,5);
    //                     }
    //                     return null;
    //                 },
    //                 clearRecentlyViewed(item) {
    //                     if (item?._id) {
    //                         if (typeof(Storage) !== "undefined") {
    //                             let data = localStorage.getItem('USER_SEARCH');
    //                             data = (!!!data) ? {} : JSON.parse(data);
    //
    //                             delete data[item?._id];
    //                             if (!!Object.keys(data).length) {
    //                                 localStorage.setItem('USER_SEARCH', JSON.stringify(data));
    //                             } else {
    //                                 localStorage.removeItem('USER_SEARCH');
    //                             }
    //
    //                             this.$forceUpdate();
    //                         }
    //                     }
    //                 },
    //                 async getPopularData() {
    //                     try {
    //                         const config = {
    //                             url: 'https://gody.vn/api/v6/top-trends',
    //                             method: 'GET',
    //                             headers: {}
    //                         };
    //
    //                         const resp = await axios(config);
    //                         const data = resp.data;
    //
    //                         const { topDes, topSearch } = data;
    //                         this.topDes = topDes;
    //                         this.topSearch = topSearch;
    //                         this.$forceUpdate();
    //                     } catch (error) {
    //
    //                     }
    //                 }
    //             }
    //         });
    //
    //         $(document.body).on('click', '#search-form__explore input, #main-menu-icon-search, #search-header, .pull-right.ps-relative.mt-12.h-32.top-search.w100vw-220.wmx-250, .modal-search-v2__anchor', function (e) {
    //             e.preventDefault();
    //
    //             $('div#modal-search-v2').modal('show');
    //             $('.search-primary-wrapper .search-primary-bg').css('display', 'none');
    //             setTimeout(function() {
    //                 $('.loading-getlocation').addClass('hide');
    //                 $('#search-header-2').focus();
    //             }, 500);
    //         });
    //
    //         return destinationSearch;
    //     }
    // }
    //
    // initDestinationSearchVue();
</script>
@include('layouts.components.ckeditor_default')
<script src="https://gody.vn/public/js/vue-modules/vue2-datepicker/index.min.js"></script>
<script src="https://gody.vn/public/js/vue-modules/vue2-datepicker/locale/vi.js"></script>
<script defer src="https://gody.vn/public/v6/js/search.js?v=1235"></script>

<!-- ✅ Load the moment library ✅ -->
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
></script>
<script src="{{asset('public/js/jquery.datetimepicker.js')}}"></script>
<script>
    $.datetimepicker.setDateFormatter({
        parseDate: function (date, format) {
            var d = moment(date, format);
            return d.isValid() ? d.toDate() : false;
        },
        formatDate: function (date, format) {
            return moment(date).format(format);
        },
    });
    $('#start_date').datetimepicker({
        changeYear: true,
        changeMonth: true,
        minDate: 0,
        format: 'YYYY-MM-DD hh:mm A',
    });
</script>
