<style>@font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto'), url({{asset('public/assets/fonts/roboto/roboto-400.woff2')}}) format('woff2');
    }</style>
<script>
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
            console.log("To fix this, you can:");
            console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
            console.log("2. Find the double jQuery.js inclusion and remove it");
            return "Double Included jQuery Library";
        }
    }
</script>
<link rel="preload" as="font" id="rs-icon-set-revicon-woff" href="{{asset('public/assets/fonts/revicons/revicons.woff')}}" type="font/woff" crossorigin="anonymous" media="all"/>
<link rel='preload' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20924.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media='all'/>
<style id='rs-plugin-settings-inline-css'>
    #rev_slider_20_1_wrapper .hesperiden.tparrows {
        cursor: pointer;
        background: rgba(0, 0, 0, 0.5);
        width: 40px;
        height: 40px;
        position: absolute;
        display: block;
        z-index: 1000;
        border-radius: 50%
    }

    #rev_slider_20_1_wrapper .hesperiden.tparrows.rs-touchhover {
        background: #000000
    }

    #rev_slider_20_1_wrapper .hesperiden.tparrows:before {
        font-family: 'revicons';
        font-size: 20px;
        color: #ffffff;
        display: block;
        line-height: 40px;
        text-align: center
    }

    #rev_slider_20_1_wrapper .hesperiden.tparrows.tp-leftarrow:before {
        content: '\e82c';
        margin-left: -3px
    }

    #rev_slider_20_1_wrapper .hesperiden.tparrows.tp-rightarrow:before {
        content: '\e82d';
        margin-right: -3px
    }

    #rev_slider_20_1_wrapper .ares.tp-bullets {
    }

    #rev_slider_20_1_wrapper .ares.tp-bullets:before {
        content: ' ';
        position: absolute;
        width: 100%;
        height: 100%;
        background: transparent;
        padding: 10px;
        margin-left: -10px;
        margin-top: -10px;
        box-sizing: content-box
    }

    #rev_slider_20_1_wrapper .ares .tp-bullet {
        width: 8px;
        height: 8px;
        position: absolute;
        background: #e5e5e5;
        border-radius: 50%;
        cursor: pointer;
        box-sizing: content-box
    }

    #rev_slider_20_1_wrapper .ares .tp-bullet.rs-touchhover, #rev_slider_20_1_wrapper .ares .tp-bullet.selected {
        background: #ffffff
    }

    #rev_slider_20_1_wrapper .ares .tp-bullet-title {
        position: absolute;
        color: #888888;
        font-size: 12px;
        padding: 0px 10px;
        font-weight: 600;
        right: 27px;
        top: -4px;
        background: rgba(255, 255, 255, 0.75);
        visibility: hidden;
        transform: translatex(-20px);
        -webkit-transform: translatex(-20px);
        transition: transform 0.3s;
        -webkit-transition: transform 0.3s;
        line-height: 20px;
        white-space: nowrap
    }

    #rev_slider_20_1_wrapper .ares .tp-bullet-title:after {
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent rgba(255, 255, 255, 0.75);
        content: ' ';
        position: absolute;
        right: -10px;
        top: 0px
    }

    #rev_slider_20_1_wrapper .ares .tp-bullet.rs-touchhover .tp-bullet-title {
        visibility: visible;
        transform: translatex(0px);
        -webkit-transform: translatex(0px)
    }

    #rev_slider_20_1_wrapper .ares .tp-bullet.selected.rs-touchhover .tp-bullet-title {
        background: #ffffff
    }

    #rev_slider_20_1_wrapper .ares .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {
        border-color: transparent transparent transparent #ffffff
    }

    #rev_slider_20_1_wrapper .ares.tp-bullets.rs-touchhover .tp-bullet-title {
        visibility: hidden
    }

    #rev_slider_20_1_wrapper .ares.tp-bullets.rs-touchhover .tp-bullet.rs-touchhover .tp-bullet-title {
        visibility: visible;
        transform: translateX(0px) translatey(0px);
        -webkit-transform: translateX(0px) translatey(0px)
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title {
        right: auto;
        left: 27px;
        transform: translatex(20px);
        -webkit-transform: translatex(20px)
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title:after {
        border-width: 10px 10px 10px 0 !important;
        border-color: transparent rgba(255, 255, 255, 0.75) transparent transparent;
        right: auto !important;
        left: -10px !important
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {
        border-color: transparent #ffffff transparent transparent !important
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet-title, #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet-title {
        top: -35px;
        left: 50%;
        right: auto;
        transform: translateX(-50%) translateY(-10px);
        -webkit-transform: translateX(-50%) translateY(-10px)
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet-title:after, #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet-title:after {
        border-width: 10px 10px 0px 10px;
        border-color: rgba(255, 255, 255, 0.75) transparent transparent transparent;
        right: auto;
        left: 50%;
        margin-left: -10px;
        top: auto;
        bottom: -10px
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet.selected.rs-touchhover .tp-bullet-title:after, #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {
        border-color: #ffffff transparent transparent transparent
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet.rs-touchhover .tp-bullet-title, #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet.rs-touchhover .tp-bullet-title {
        transform: translateX(-50%) translatey(0px);
        -webkit-transform: translateX(-50%) translatey(0px)
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title {
        top: 25px;
        left: 50%;
        right: auto;
        transform: translateX(-50%) translateY(10px);
        -webkit-transform: translateX(-50%) translateY(10px)
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title:after {
        border-width: 0 10px 10px 10px;
        border-color: transparent transparent rgba(255, 255, 255, 0.75) transparent;
        right: auto;
        left: 50%;
        margin-left: -10px;
        bottom: auto;
        top: -10px
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.selected.rs-touchhover .tp-bullet-title:after {
        border-color: transparent transparent #ffffff transparent
    }

    #rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.rs-touchhover .tp-bullet-title {
        transform: translateX(-50%) translatey(0px);
        -webkit-transform: translateX(-50%) translatey(0px)
    }
</style>
<script src='https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.18' defer async id='tp-tools-js'></script>
<script src='https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.31' defer async id='revmin-js'></script>
<script id='rocket-browser-checker-js-after'>
    "use strict";
    var _createClass = function () {
        function defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor)
            }
        }

        return function (Constructor, protoProps, staticProps) {
            return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
        }
    }();

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
    }

    var RocketBrowserCompatibilityChecker = function () {
        function RocketBrowserCompatibilityChecker(options) {
            _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options
        }

        return _createClass(RocketBrowserCompatibilityChecker, [{
            key: "_checkPassiveOption", value: function (self) {
                try {
                    var options = {
                        get passive() {
                            return !(self.passiveSupported = !0)
                        }
                    };
                    window.addEventListener("test", null, options), window.removeEventListener("test", null, options)
                } catch (err) {
                    self.passiveSupported = !1
                }
            }
        }, {
            key: "initRequestIdleCallback", value: function () {
                !1 in window && (window.requestIdleCallback = function (cb) {
                    var start = Date.now();
                    return setTimeout(function () {
                        cb({
                            didTimeout: !1, timeRemaining: function () {
                                return Math.max(0, 50 - (Date.now() - start))
                            }
                        })
                    }, 1)
                }), !1 in window && (window.cancelIdleCallback = function (id) {
                    return clearTimeout(id)
                })
            }
        }, {
            key: "isDataSaverModeOn", value: function () {
                return "connection" in navigator && !0 === navigator.connection.saveData
            }
        }, {
            key: "supportsLinkPrefetch", value: function () {
                var elem = document.createElement("link");
                return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype
            }
        }, {
            key: "isSlowConnection", value: function () {
                return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType)
            }
        }]), RocketBrowserCompatibilityChecker
    }();
</script>
<script id='rocket-preload-links-js-extra'>
    var RocketPreloadLinksConfig = {"excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/", "usesTrailingSlash": "1", "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php", "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm", "siteUrl": "https:\/\/newocean.edu.vn", "onHoverDelay": "100", "rateThrottle": "3"};
</script>
<script id='rocket-preload-links-js-after'>
    (function () {
        "use strict";
        var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
            return typeof e
        } : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        }, e = function () {
            function i(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (e, t, n) {
                return t && i(e.prototype, t), n && i(e, n), e
            }
        }();

        function i(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        var t = function () {
            function n(e, t) {
                i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0
            }

            return e(n, [{
                key: "init", value: function () {
                    !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = {excludeUris: RegExp(this.config.excludeUris, "i"), images: RegExp(".(" + this.config.imageExt + ")$", "i"), fileExt: RegExp(".(" + this.config.fileExt + ")$", "i")}, this._initListeners(this))
                }
            }, {
                key: "_initListeners", value: function (e) {
                    -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions)
                }
            }, {
                key: "listener", value: function (e) {
                    var t = e.target.closest("a"), n = this._prepareUrl(t);
                    if (null !== n) switch (e.type) {
                        case"mousedown":
                        case"touchstart":
                            this._addPrefetchLink(n);
                            break;
                        case"mouseover":
                            this._earlyPrefetch(t, n, "mouseout")
                    }
                }
            }, {
                key: "_earlyPrefetch", value: function (t, e, n) {
                    var i = this, r = setTimeout(function () {
                        if (r = null, 0 === i.numOnHover) setTimeout(function () {
                            return i.numOnHover = 0
                        }, 1e3); else if (i.numOnHover > i.config.rateThrottle) return;
                        i.numOnHover++, i._addPrefetchLink(e)
                    }, this.config.onHoverDelay);
                    t.addEventListener(n, function e() {
                        t.removeEventListener(n, e, {passive: !0}), null !== r && (clearTimeout(r), r = null)
                    }, {passive: !0})
                }
            }, {
                key: "_addPrefetchLink", value: function (i) {
                    return this.prefetched.add(i.href), new Promise(function (e, t) {
                        var n = document.createElement("link");
                        n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n)
                    }).catch(function () {
                    })
                }
            }, {
                key: "_prepareUrl", value: function (e) {
                    if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol)) return null;
                    var t = e.href.substring(0, this.config.siteUrl.length), n = this._getPathname(e.href, t), i = {original: e.href, protocol: e.protocol, origin: t, pathname: n, href: t + n};
                    return this._isLinkOk(i) ? i : null
                }
            }, {
                key: "_getPathname", value: function (e, t) {
                    var n = t ? e.substring(this.config.siteUrl.length) : e;
                    return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n
                }
            }, {
                key: "_shouldAddTrailingSlash", value: function (e) {
                    return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex.fileExt.test(e)
                }
            }, {
                key: "_isLinkOk", value: function (e) {
                    return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href))
                }
            }], [{
                key: "run", value: function () {
                    "undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({capture: !0, passive: !0}), RocketPreloadLinksConfig).init()
                }
            }]), n
        }();
        t.run();
    }());
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/vue/vue.min.js?ver=2.6.11' id='jet-vue-js' defer></script>
<script id='jet-menu-public-scripts-js-extra'>
    var jetMenuPublicSettings = {
        "version": "2.2.4",
        "ajaxUrl": "https:\/\/newocean.edu.vn\/wp-admin\/admin-ajax.php",
        "isMobile": "false",
        "getElementorTemplateApiUrl": "https:\/\/newocean.edu.vn\/wp-json\/jet-menu-api\/v2\/get-elementor-template-content",
        "getBlocksTemplateApiUrl": "https:\/\/newocean.edu.vn\/wp-json\/jet-menu-api\/v2\/get-blocks-template-content",
        "menuItemsApiUrl": "https:\/\/newocean.edu.vn\/wp-json\/jet-menu-api\/v2\/get-menu-items",
        "restNonce": "0037ca6127",
        "devMode": "false",
        "wpmlLanguageCode": "",
        "menuSettings": {"jetMenuRollUp": "true", "jetMenuMouseleaveDelay": "500", "jetMenuMegaWidthType": "container", "jetMenuMegaWidthSelector": "", "jetMenuMegaOpenSubType": "hover", "jetMenuMegaAjax": "false"}
    };
</script>
<script data-minify="1" src='https://newocean.edu.vn/wp-content/cache/min/1/wp-content/plugins/jet-menu/assets/public/js/legacy/jet-menu-public-scripts.js?ver=1682646090' id='jet-menu-public-scripts-js' defer></script>
<script id='jet-menu-public-scripts-js-after'>
    function CxCSSCollector() {
        "use strict";
        var t, e = window.CxCollectedCSS;
        void 0 !== e && ((t = document.createElement("style")).setAttribute("title", e.title), t.setAttribute("type", e.type), t.textContent = e.css, document.head.appendChild(t))
    }

    CxCSSCollector();
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1' id='smartmenus-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1' id='jquery-numerator-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0' id='elementor-gallery-js' defer></script>
<script type="rocketlazyloadscript" src='https://www.google.com/recaptcha/api.js?render=explicit&#038;ver=3.13.1' id='elementor-recaptcha_v3-api-js'></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.13.1' id='elementor-pro-webpack-runtime-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.13.2' id='elementor-webpack-runtime-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.13.2' id='elementor-frontend-modules-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2' id='wp-polyfill-inert-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11' id='regenerator-runtime-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
<script id='wp-i18n-js-after'>
    wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});
</script>
<script id='elementor-pro-frontend-js-before'>
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/newocean.edu.vn\/wp-admin\/admin-ajax.php",
        "nonce": "7b6a7f7c73",
        "urls": {"assets": "https:\/\/newocean.edu.vn\/wp-content\/plugins\/elementor-pro\/assets\/", "rest": "https:\/\/newocean.edu.vn\/wp-json\/"},
        "shareButtonsNetworks": {
            "facebook": {"title": "Facebook", "has_counter": true},
            "twitter": {"title": "Twitter"},
            "linkedin": {"title": "LinkedIn", "has_counter": true},
            "pinterest": {"title": "Pinterest", "has_counter": true},
            "reddit": {"title": "Reddit", "has_counter": true},
            "vk": {"title": "VK", "has_counter": true},
            "odnoklassniki": {"title": "OK", "has_counter": true},
            "tumblr": {"title": "Tumblr"},
            "digg": {"title": "Digg"},
            "skype": {"title": "Skype"},
            "stumbleupon": {"title": "StumbleUpon", "has_counter": true},
            "mix": {"title": "Mix"},
            "telegram": {"title": "Telegram"},
            "pocket": {"title": "Pocket", "has_counter": true},
            "xing": {"title": "XING", "has_counter": true},
            "whatsapp": {"title": "WhatsApp"},
            "email": {"title": "Email"},
            "print": {"title": "Print"}
        },
        "facebook_sdk": {"lang": "vi", "app_id": "394781937574480"},
        "lottie": {"defaultAnimationUrl": "https:\/\/newocean.edu.vn\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}
    };
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.13.1' id='elementor-pro-frontend-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js' defer></script>
<script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {"shareOnFacebook": "Chia s\u1ebb tr\u00ean Facebook", "shareOnTwitter": "Chia s\u1ebb tr\u00ean Twitter", "pinIt": "Ghim n\u00f3", "download": "T\u1ea3i xu\u1ed1ng", "downloadImage": "T\u1ea3i h\u00ecnh \u1ea3nh", "fullscreen": "To\u00e0n m\u00e0n h\u00ecnh", "zoom": "Thu ph\u00f3ng", "share": "Chia s\u1ebb", "playVideo": "Ch\u01a1i Video", "previous": "Previous", "next": "Next", "close": "\u0110\u00f3ng"},
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {"label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true},
                "mobile_extra": {"label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false},
                "tablet": {"label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true},
                "tablet_extra": {"label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false},
                "laptop": {"label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false},
                "widescreen": {"label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false}
            }
        },
        "version": "3.13.2",
        "is_static": false,
        "experimentalFeatures": {"e_dom_optimization": true, "e_optimized_assets_loading": true, "a11y_improvements": true, "additional_custom_breakpoints": true, "theme_builder_v2": true, "landing-pages": true, "page-transitions": true, "notes": true, "loop": true, "form-submissions": true, "e_scroll_snap": true},
        "urls": {"assets": "https:\/\/newocean.edu.vn\/wp-content\/plugins\/elementor\/assets\/"},
        "swiperClass": "swiper-container",
        "settings": {"page": [], "editorPreferences": []},
        "kit": {"active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes"},
        "post": {"id": 174, "title": "C%C3%B4ng%20Ty%20T%C6%B0%20v%E1%BA%A5n%20Du%20h%E1%BB%8Dc%20New%20Ocean%20%7C%20Trung%20T%C3%A2m%20T%C6%B0%20V%E1%BA%A5n%20Du%20H%E1%BB%8Dc", "excerpt": "", "featuredImage": "https:\/\/newocean.edu.vn\/wp-content\/uploads\/2020\/05\/Tu-van-Du-hoc-1200x628-1-1024x536.jpg"}
    };
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.13.2' id='elementor-frontend-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.13.1' id='pro-elements-handlers-js' defer></script>
<script data-minify="1" src='https://newocean.edu.vn/wp-content/cache/min/1/wp-content/plugins/jet-menu/includes/elementor/assets/public/js/legacy/widgets-scripts.js?ver=1682646090' id='jet-menu-elementor-widgets-scripts-js' defer></script>
<script id='jet-blog-js-extra'>
    var JetBlogSettings = {"ajaxurl": "https:\/\/newocean.edu.vn\/?nocache=1684578148&jet_blog_ajax=1"};
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/jet-blog/assets/js/jet-blog.min.js?ver=2.3.1' id='jet-blog-js' defer></script>
<script data-minify="1" src='https://newocean.edu.vn/wp-content/cache/min/1/ajax/libs/gsap/2.1.3/TweenMax.min.js?ver=1682646090' id='gsap-js-js' defer></script>
<script id='elementor-extras-frontend-js-extra'>
    var elementorExtrasFrontendConfig = {"urls": {"assets": "https:\/\/newocean.edu.vn\/wp-content\/plugins\/elementor-extras\/assets\/"}, "refreshableWidgets": ["ee-offcanvas.classic", "ee-popup.classic", "gallery-slider.default", "media-carousel.default", "image-carousel.default", "slides.default"]};
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-extras/assets/js/frontend.min.js?ver=2.2.51' id='elementor-extras-frontend-js' defer></script>
<script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi20;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider201"] = {
        once: RS_MODULES.modules["revslider201"] !== undefined ? RS_MODULES.modules["revslider201"].once : undefined, init: function () {
            window.revapi20 = window.revapi20 === undefined || window.revapi20 === null || window.revapi20.length === 0 ? document.getElementById("rev_slider_20_1") : window.revapi20;
            if (window.revapi20 === null || window.revapi20 === undefined || window.revapi20.length == 0) {
                window.revapi20initTry = window.revapi20initTry === undefined ? 0 : window.revapi20initTry + 1;
                if (window.revapi20initTry < 20) requestAnimationFrame(function () {
                    RS_MODULES.modules["revslider201"].init()
                });
                return;
            }
            window.revapi20 = jQuery(window.revapi20);
            if (window.revapi20.revolution == undefined) {
                revslider_showDoubleJqueryError("rev_slider_20_1");
                return;
            }
            revapi20.revolutionInit({
                revapi: "revapi20",
                DPR: "dpr",
                visibilityLevels: "1240,1240,1240,480",
                gridwidth: "1120,1120,1120,480",
                gridheight: "400,400,400,400",
                lazyType: "smart",
                perspective: 600,
                perspectiveType: "global",
                editorheight: "400,768,960,400",
                responsiveLevels: "1240,1240,1240,480",
                progressBar: {disableProgressBar: true},
                navigation: {
                    wheelCallDelay: 1000,
                    onHoverStop: false,
                    arrows: {
                        enable: true,
                        style: "hesperiden",
                        left: {
                            container: "layergrid",
                            h_offset: 5
                        },
                        right: {
                            container: "layergrid",
                            h_offset: 5
                        }
                    },
                    bullets: {
                        enable: true,
                        tmp: "<span class=\"tp-bullet-title\">{{$title??''}}</span>",
                        style: "ares",
                        v_offset: 10
                    }
                },
                viewPort: {
                    global: true,
                    globalDist: "-200px",
                    enable: false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });

        }
    } // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) {
        window.RS_MODULES.checkMinimal();
    }
    ;
</script>
<script>window.lazyLoadOptions = [{
        elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, callback_loaded: function (element) {
            if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                if (element.classList.contains("lazyloaded")) {
                    if (typeof window.jQuery != "undefined") {
                        if (jQuery.fn.fitVids) {
                            jQuery(element).parent().fitVids()
                        }
                    }
                }
            }
        }
    }, {elements_selector: ".rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300,}];
    window.addEventListener('LazyLoad::Initialized', function (e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
            var observer = new MutationObserver(function (mutations) {
                var image_count = 0;
                var iframe_count = 0;
                var rocketlazy_count = 0;
                mutations.forEach(function (mutation) {
                    for (var i = 0; i < mutation.addedNodes.length; i++) {
                        if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                            continue
                        }
                        if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                            continue
                        }
                        images = mutation.addedNodes[i].getElementsByTagName('img');
                        is_image = mutation.addedNodes[i].tagName == "IMG";
                        iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                        is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                        rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                        image_count += images.length;
                        iframe_count += iframes.length;
                        rocketlazy_count += rocket_lazy.length;
                        if (is_image) {
                            image_count += 1
                        }
                        if (is_iframe) {
                            iframe_count += 1
                        }
                    }
                });
                if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                    lazyLoadInstance.update()
                }
            });
            var b = document.getElementsByTagName("body")[0];
            var config = {childList: !0, subtree: !0};
            observer.observe(b, config)
        }
    }, !1)</script>
<script data-no-minify="1" async src="https://newocean.edu.vn/wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js"></script>
<script>function lazyLoadThumb(e) {
        var t = '<img data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>', a = '<button class="play" aria-label="play Youtube video"></button>';
        return t.replace("ID", e) + a
    }

    function lazyLoadYoutubeIframe() {
        var e = document.createElement("iframe"), t = "ID?autoplay=1";
        t += 0 === this.parentNode.dataset.query.length ? '' : '&' + this.parentNode.dataset.query;
        e.setAttribute("src", t.replace("ID", this.parentNode.dataset.src)), e.setAttribute("frameborder", "0"), e.setAttribute("allowfullscreen", "1"), e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"), this.parentNode.parentNode.replaceChild(e, this.parentNode)
    }

    document.addEventListener("DOMContentLoaded", function () {
        var e, t, p, a = document.getElementsByClassName("rll-youtube-player");
        for (t = 0; t < a.length; t++) e = document.createElement("div"), e.setAttribute("data-id", a[t].dataset.id), e.setAttribute("data-query", a[t].dataset.query), e.setAttribute("data-src", a[t].dataset.src), e.innerHTML = lazyLoadThumb(a[t].dataset.id), a[t].appendChild(e), p = e.querySelector('.play'), p.onclick = lazyLoadYoutubeIframe
    });</script>

<script>class RocketElementorAnimation {
        constructor() {
            this.deviceMode = document.createElement("span"),
                this.deviceMode.id = "elementor-device-mode",
                this.deviceMode.setAttribute("class", "elementor-screen-only"),
                document.body.appendChild(this.deviceMode)
        }

        _detectAnimations() {
            let t = getComputedStyle(this.deviceMode, ":after").content.replace(/"/g, "");
            this.animationSettingKeys = this._listAnimationSettingsKeys(t), document.querySelectorAll(".elementor-invisible[data-settings]").forEach(t => {
                const e = t.getBoundingClientRect();
                if (e.bottom >= 0 && e.top <= window.innerHeight) try {
                    this._animateElement(t)
                } catch (t) {
                }
            })
        }

        _animateElement(t) {
            const e = JSON.parse(t.dataset.settings), i = e._animation_delay || e.animation_delay || 0, n = e[this.animationSettingKeys.find(t => e[t])];
            if ("none" === n) return void t.classList.remove("elementor-invisible");
            t.classList.remove(n), this.currentAnimation && t.classList.remove(this.currentAnimation), this.currentAnimation = n;
            let s = setTimeout(() => {
                t.classList.remove("elementor-invisible"), t.classList.add("animated", n), this._removeAnimationSettings(t, e)
            }, i);
            window.addEventListener("rocket-startLoading", function () {
                clearTimeout(s)
            })
        }

        _listAnimationSettingsKeys(t = "mobile") {
            const e = [""];
            switch (t) {
                case"mobile":
                    e.unshift("_mobile");
                case"tablet":
                    e.unshift("_tablet");
                case"desktop":
                    e.unshift("_desktop")
            }
            const i = [];
            return ["animation", "_animation"].forEach(t => {
                e.forEach(e => {
                    i.push(t + e)
                })
            }), i
        }

        _removeAnimationSettings(t, e) {
            this._listAnimationSettingsKeys().forEach(t => delete e[t]), t.dataset.settings = JSON.stringify(e)
        }

        static run() {
            const t = new RocketElementorAnimation;
            requestAnimationFrame(t._detectAnimations.bind(t))
        }
    }

    document.addEventListener("DOMContentLoaded", RocketElementorAnimation.run);
</script>
<noscript>
    <link rel="stylesheet" href="{{asset('public/css/1ab8181ff7d8c241e0921085c97e1980.css')}}" media="all" data-minify="1"/>
    <link rel='stylesheet' id='elementor-post-10750-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-10750.css?ver=1684549523' media='all'/>
    <link rel='stylesheet' id='elementor-global-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/global.css?ver=1684549524' media='all'/>
    <link rel='stylesheet' id='elementor-post-174-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-174.css?ver=1684549583' media='all'/>
    <link rel='stylesheet' id='elementor-post-20880-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20880.css?ver=1684549525' media='all'/>
    <link rel='stylesheet' id='elementor-post-20951-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20951.css?ver=1684549525' media='all'/>
    <link rel='stylesheet' id='elementor-post-16420-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-16420.css?ver=1684549525' media='all'/>
    <link rel='stylesheet' id='elementor-post-15925-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-15925.css?ver=1684549525' media='all'/>
    <link rel='stylesheet' id='elementor-post-20924-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20924.css?ver=1684549525' media='all'/>
</noscript>
</body>
</html>
