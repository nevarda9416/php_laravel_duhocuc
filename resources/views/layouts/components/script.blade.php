<script type='text/javascript'>
    /* <![CDATA[ */
    var hasJetBlogPlaylist = 0;
    /* ]]> */
</script>

<script type="rocketlazyloadscript">
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';

    </script>
<div id="arcontactus"></div>

<script src="https://newocean.edu.vn/wp-content/plugins/ar-contactus/res/js/maskedinput.min.js?version=2.2.7" defer></script>
<script type="text/javascript" id="arcu-main-js">
    var $arcuWidget;
    var zaloWidgetInterval;
    var tawkToInterval;
    var tawkToHideInterval;
    var skypeWidgetInterval;
    var lcpWidgetInterval;
    var closePopupTimeout;
    var lzWidgetInterval;
    var paldeskInterval;
    var arcuOptions;
    var hideCustomerChatInterval;
    var _arCuTimeOut = null;
    var arCuPromptClosed = false;
    var _arCuWelcomeTimeOut = null;
    var arCuMenuOpenedOnce = false;
    var arcuAppleItem = null;

    var arcItems = [];
    window.addEventListener('load', function () {
        $arcuWidget = document.createElement('div');
        var body = document.getElementsByTagName('body')[0];
        $arcuWidget.id = 'arcontactus';

        if (document.getElementById('arcontactus')) {
            document.getElementById('arcontactus').parentElement.removeChild(document.getElementById('arcontactus'));
        }

        body.appendChild($arcuWidget);

        arCuClosedCookie = arCuGetCookie('arcu-closed');
        $arcuWidget.addEventListener('arcontactus.init', function () {
            $arcuWidget.classList.add('arcuAnimated');
            $arcuWidget.classList.add('flipInY');

            setTimeout(function () {
                $arcuWidget.classList.remove('flipInY');
            }, 1000);


            if (document.querySelector('#arcu-form-callback form')) {
                document.querySelector('#arcu-form-callback form').append(contactUs.utils.DOMElementFromHTML(arCUVars._wpnonce));
            }


            if (document.querySelector('#arcu-form-email form')) {
                document.querySelector('#arcu-form-email form').append(contactUs.utils.DOMElementFromHTML(arCUVars._wpnonce));
            }


            $arcuWidget.addEventListener('arcontactus.successSendFormData', function (event) {
            });
            $arcuWidget.addEventListener('arcontactus.successSendFormData', function (event) {
            });
            $arcuWidget.addEventListener('arcontactus.errorSendFormData', function (event) {
                if (event.detail.data && event.detail.data.message) {
                    alert(event.detail.data.message);
                }
            });
            $arcuWidget.addEventListener('arcontactus.hideFrom', function () {
                clearTimeout(closePopupTimeout);
            });
        });
        $arcuWidget.addEventListener('arcontactus.closeMenu', function () {
            arCuCreateCookie('arcumenu-closed', 1, 1);
        });
        var arcItem = {};
        arcItem.id = 'msg-item-6';
        arcItem.class = 'msg-item-envelope';
        arcItem.title = "Liên hệ qua Email";
        arcItem.subTitle = "info@newocean.edu.vn";
        arcItem.icon = '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'mailto:info@newocean.edu.vn';

        arcItem.color = '#FF643A';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-1';
        arcItem.class = 'msg-item-facebook-messenger';
        arcItem.title = "Nhắn tin Messenger";
        arcItem.subTitle = "Fanpage Ước mơ du học";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'https://m.me/uocmoduhoc';

        arcItem.color = '#0084FF';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-7';
        arcItem.class = 'msg-item-phone';
        arcItem.title = "Gọi điện trực tiếp 24/7";
        arcItem.subTitle = "096.456.2233";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'tel:0964562233';

        arcItem.target = '_self';
        arcItem.color = '#168900';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-12';
        arcItem.class = 'msg-item-phone';
        arcItem.title = "Gọi máy bàn (8h00 - 17h00)";
        arcItem.subTitle = "(024) 3537.8311";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'tel:02435378311';

        arcItem.color = '#106500';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-10';
        arcItem.class = 'msg-item-zalo';
        arcItem.title = "Liên hệ Zalo";
        arcItem.subTitle = "096.456.0011 ";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"/></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'https://zalo.me/0964560011';

        arcItem.color = '#0180C7';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-9';
        arcItem.onClick = function (e) {
            e.preventDefault();
            contactUs.closeMenu();
            contactUs.showForm('callback');
            return false;
        }
        arcItem.class = 'msg-item-phone';
        arcItem.title = "Yêu cầu gọi lại";
        arcItem.subTitle = "Vui lòng để lại số điện thoại";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = null;
        arcItem.color = '#4EB625';
        arcItems.push(arcItem);
        arcuOptions = {
            rootElementId: 'arcontactus',
            credits: false,
            visible: true,
            wordpressPluginVersion: '2.2.7',
            online: true,
            buttonIcon: '<svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="currentColor"></use></g></g><defs><path fill="currentColor" id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"></path></defs></svg>',
            layout: 'default',
            drag: false,
            mode: 'regular',
            buttonIconUrl: 'https://newocean.edu.vn/wp-content/plugins/ar-contactus/res/img/msg.svg',
            showMenuHeader: true,
            menuHeaderText: "New Ocean có thể hỗ trợ gì cho bạn?",
            menuSubheaderText: "",

            menuHeaderLayout: 'icon-left',
            menuHeaderIcon: 'https://newocean.edu.vn/wp-content/uploads/2023/01/no-chat-1.jpg',
            menuHeaderTextAlign: 'left',

            showHeaderCloseBtn: true,
            headerCloseBtnBgColor: '#008749',
            headerCloseBtnColor: '#FFFFFF',
            itemsIconType: 'rounded',
            align: 'left',
            reCaptcha: false,
            reCaptchaKey: '',
            countdown: 0,
            theme: '#008749',
            buttonText: "Liên hệ",
            buttonSize: 'large',
            buttonIconSize: 24,
            menuSize: 'normal',
            phonePlaceholder: '',
            callbackSubmitText: '',
            errorMessage: '',
            callProcessText: '',
            callSuccessText: '',
            callbackFormText: '',
            iconsAnimationSpeed: 600,
            iconsAnimationPause: 2000,
            items: arcItems,
            ajaxUrl: 'https://newocean.edu.vn/wp-admin/admin-ajax.php',
            promptPosition: 'top',
            popupAnimation: 'fadeindown',
            style: '',
            itemsAnimation: 'downtoup',
            menuStyle: 'regular',
            backdrop: true,
            forms: {
                callback: {
                    id: 'callback',
                    header: {
                        content: "Vui lòng để lại số điện thoại . Chúng tôi sẽ gọi lại sớm!",
                        layout: "text",
                    },
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>',
                    success: "Đã gửi yêu cầu gọi lại! Chúng tôi sẽ liên hệ lại với bạn sớm.",
                    error: "Lỗi khi gửi yêu cầu gọi lại! Vui lòng thử lại!",
                    action: 'https://newocean.edu.vn/wp-admin/admin-ajax.php',
                    buttons: [
                        {
                            name: "submit",
                            label: "Yêu cầu gọi lại",
                            type: "submit",
                        },
                    ],
                    fields: {
                        formId: {
                            name: 'formId',
                            value: 'callback',
                            type: 'hidden'
                        },
                        action: {
                            name: 'action',
                            value: 'arcontactus_request_callback',
                            type: 'hidden'
                        },
                        name: {
                            name: "name",
                            enabled: true,
                            required: false,
                            type: "text",
                            label: "Họ tên",
                            placeholder: "Nhập Họ tên",
                            values: [],
                            value: "",
                        },
                        phone: {
                            name: "phone",
                            enabled: true,
                            required: true,
                            type: "tel",
                            label: "Số điện thoại",
                            placeholder: "Nhập số điện thoại",
                            values: [],
                            value: "",
                        },
                    }
                },
                email: {
                    id: 'email',
                    header: {
                        content: "Đăng ký tư vấn",
                        layout: "text",
                    },
                    icon: '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>',
                    success: "Đã gửi! Chúng tôi sẽ liên hệ lại với bạn sớm.",
                    error: "Lỗi đăng ký! Vui lòng thử lại!",
                    action: 'https://newocean.edu.vn/wp-admin/admin-ajax.php',
                    buttons: [
                        {
                            name: "submit",
                            label: "ĐĂNG KÝ",
                            type: "submit",
                        },
                    ],
                    fields: {
                        formId: {
                            name: 'formId',
                            value: 'email',
                            type: 'hidden'
                        },
                        action: {
                            name: 'action',
                            value: 'arcontactus_request_email',
                            type: 'hidden'
                        },
                        name: {
                            name: "name",
                            enabled: true,
                            required: false,
                            type: "text",
                            label: "Họ tên",
                            placeholder: "Nhập Họ tên",
                            values: [],
                            value: "",
                        },
                        email: {
                            name: "email",
                            enabled: true,
                            required: true,
                            type: "email",
                            label: "Địa chỉ email",
                            placeholder: "Nhập địa chỉ email",
                            values: [],
                            value: "",
                        },
                        phone: {
                            name: "phone",
                            enabled: true,
                            required: true,
                            type: "tel",
                            label: "Số điện thoại",
                            placeholder: "Nhập số điện thoại",
                            values: [],
                            value: "",
                        },
                        message: {
                            name: "message",
                            enabled: true,
                            required: true,
                            type: "textarea",
                            label: "Lời nhắn",
                            placeholder: "Nội dung email",
                            values: [],
                            value: "",
                        },
                    }
                },

            }
        };
        contactUs.init(arcuOptions);
    });
</script>
<script type="text/x-template" id="mobile-menu-item-template">
    <li
            :id="'jet-mobile-menu-item-'+itemDataObject.itemId"
            :class="itemClasses"
    >
        <div
                class="jet-mobile-menu__item-inner"
                tabindex="1"
                :aria-label="itemDataObject.name"
                v-on:click="itemSubHandler"
                v-on:keyup.enter="itemSubHandler"
        >
            <a
                    :class="itemLinkClasses"
                    :href="itemDataObject.url"
                    :rel="itemDataObject.xfn"
                    :title="itemDataObject.attrTitle"
                    :target="itemDataObject.target"
            >
                <div class="jet-menu-item-wrapper">
                    <div
                            class="jet-menu-icon"
                            v-if="isIconVisible"
                            v-html="itemIconHtml"
                    ></div>
                    <div class="jet-menu-name">
					<span
                            class="jet-menu-label"
                            v-html="itemDataObject.name"
                    ></span>
                        <small
                                class="jet-menu-desc"
                                v-if="isDescVisible"
                                v-html="itemDataObject.description"
                        ></small>
                    </div>
                    <div
                            class="jet-menu-badge"
                            v-if="isBadgeVisible"
                    >
                        <div class="jet-menu-badge__inner" v-html="itemDataObject.badgeContent"></div>
                    </div>
                </div>
            </a>
            <span
                    class="jet-dropdown-arrow"
                    v-if="isSub && !templateLoadStatus"
                    v-html="dropdownIconHtml"
                    v-on:click="markerSubHandler"
            >
		</span>
            <div
                    class="jet-mobile-menu__template-loader"
                    v-if="templateLoadStatus"
            >
                <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="24px" height="25px" viewBox="0 0 128 128" xml:space="preserve">
				<g>
                    <linearGradient id="linear-gradient">
                        <stop offset="0%" :stop-color="loaderColor" stop-opacity="0"/>
                        <stop offset="100%" :stop-color="loaderColor" stop-opacity="1"/>
                    </linearGradient>
                    <path d="M63.85 0A63.85 63.85 0 1 1 0 63.85 63.85 63.85 0 0 1 63.85 0zm.65 19.5a44 44 0 1 1-44 44 44 44 0 0 1 44-44z" fill="url(#linear-gradient)" fill-rule="evenodd"/>
                    <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1080ms" repeatCount="indefinite"></animateTransform>
                </g>
			</svg>
            </div>
        </div>

        <transition name="menu-container-expand-animation">
            <mobile-menu-list
                    v-if="isDropdownLayout && subDropdownVisible"
                    :depth="depth+1"
                    :children-object="itemDataObject.children"
            ></mobile-menu-list>
        </transition>

    </li>
</script>
<script type="text/x-template" id="mobile-menu-list-template">
    <div
            class="jet-mobile-menu__list"
            role="navigation"
    >
        <ul class="jet-mobile-menu__items">
            <mobile-menu-item
                    v-for="(item, index) in childrenObject"
                    :key="item.id"
                    :item-data-object="item"
                    :depth="depth"
            ></mobile-menu-item>
        </ul>
    </div>
</script>
<script type="text/x-template" id="mobile-menu-template">
    <div
            :class="instanceClass"
            v-on:keyup.esc="escapeKeyHandler"
    >
        <div
                class="jet-mobile-menu__toggle"
                ref="toggle"
                tabindex="1"
                aria-label="Open/Close Menu"
                v-on:click="menuToggle"
                v-on:keyup.enter="menuToggle"
        >
            <div
                    class="jet-mobile-menu__template-loader"
                    v-if="toggleLoaderVisible"
            >
                <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="24px" height="25px" viewBox="0 0 128 128" xml:space="preserve">
				<g>
                    <linearGradient id="linear-gradient">
                        <stop offset="0%" :stop-color="loaderColor" stop-opacity="0"/>
                        <stop offset="100%" :stop-color="loaderColor" stop-opacity="1"/>
                    </linearGradient>
                    <path d="M63.85 0A63.85 63.85 0 1 1 0 63.85 63.85 63.85 0 0 1 63.85 0zm.65 19.5a44 44 0 1 1-44 44 44 44 0 0 1 44-44z" fill="url(#linear-gradient)" fill-rule="evenodd"/>
                    <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1080ms" repeatCount="indefinite"></animateTransform>
                </g>
			</svg>
            </div>

            <div
                    class="jet-mobile-menu__toggle-icon"
                    v-if="!menuOpen && !toggleLoaderVisible"
                    v-html="toggleClosedIcon"
            ></div>
            <div
                    class="jet-mobile-menu__toggle-icon"
                    v-if="menuOpen && !toggleLoaderVisible"
                    v-html="toggleOpenedIcon"
            ></div>
            <span
                    class="jet-mobile-menu__toggle-text"
                    v-if="toggleText"
                    v-html="toggleText"
            ></span>

        </div>

        <transition name="cover-animation">
            <div
                    class="jet-mobile-menu-cover"
                    v-if="menuContainerVisible && coverVisible"
                    v-on:click="closeMenu"
            ></div>
        </transition>

        <transition :name="showAnimation">
            <div
                    class="jet-mobile-menu__container"
                    v-if="menuContainerVisible"
            >
                <div
                        class="jet-mobile-menu__container-inner"
                >
                    <div
                            class="jet-mobile-menu__header-template"
                            v-if="headerTemplateVisible"
                    >
                        <div
                                class="jet-mobile-menu__header-template-content"
                                ref="header-template-content"
                                v-html="headerContent"
                        ></div>
                    </div>

                    <div
                            class="jet-mobile-menu__controls"
                    >
                        <div
                                class="jet-mobile-menu__breadcrumbs"
                                v-if="isBreadcrumbs"
                        >
                            <div
                                    class="jet-mobile-menu__breadcrumb"
                                    v-for="(item, index) in breadcrumbsPathData"
                                    :key="index"
                            >
                                <div
                                        class="breadcrumb-label"
                                        v-on:click="breadcrumbHandle(index+1)"
                                        v-html="item"
                                ></div>
                                <div
                                        class="breadcrumb-divider"
                                        v-html="breadcrumbIcon"
                                        v-if="(breadcrumbIcon && index !== breadcrumbsPathData.length-1)"
                                ></div>
                            </div>
                        </div>
                        <div
                                class="jet-mobile-menu__back"
                                ref="back"
                                tabindex="1"
                                aria-label="Close Menu"
                                v-if="!isBack && isClose"
                                v-html="closeIcon"
                                v-on:click="menuToggle"
                                v-on:keyup.enter="menuToggle"
                        ></div>
                        <div
                                class="jet-mobile-menu__back"
                                ref="back"
                                tabindex="1"
                                aria-label="Back to Prev Items"
                                v-if="isBack"
                                v-html="backIcon"
                                v-on:click="goBack"
                                v-on:keyup.enter="goBack"
                        ></div>
                    </div>

                    <div
                            class="jet-mobile-menu__before-template"
                            v-if="beforeTemplateVisible"
                    >
                        <div
                                class="jet-mobile-menu__before-template-content"
                                ref="before-template-content"
                                v-html="beforeContent"
                        ></div>
                    </div>

                    <div
                            class="jet-mobile-menu__body"
                    >
                        <transition :name="animation">
                            <mobile-menu-list
                                    v-if="!templateVisible"
                                    :key="depth"
                                    :depth="depth"
                                    :children-object="itemsList"
                            ></mobile-menu-list>
                            <div
                                    class="jet-mobile-menu__template"
                                    ref="template-content"
                                    v-if="templateVisible"
                            >
                                <div
                                        class="jet-mobile-menu__template-content"
                                        v-html="itemTemplateContent"
                                ></div>
                            </div>
                        </transition>
                    </div>

                    <div
                            class="jet-mobile-menu__after-template"
                            v-if="afterTemplateVisible"
                    >
                        <div
                                class="jet-mobile-menu__after-template-content"
                                ref="after-template-content"
                                v-html="afterContent"
                        ></div>
                    </div>

                </div>
            </div>
        </transition>
    </div>
</script>
