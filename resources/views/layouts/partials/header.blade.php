<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <script>if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
            var href = document.location.href;
            if (!href.match(/[?&]nowprocket/)) {
                if (href.indexOf("?") == -1) {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "?nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "?nowprocket=1#")
                    }
                } else {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "&nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "&nowprocket=1#")
                    }
                }
            }
        }</script>
    <script>class RocketLazyLoadScripts {
            constructor() {
                this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove", "touchstart", "touchend", "wheel"], this.userEventHandler = this._triggerListener.bind(this), this.touchStartHandler = this._onTouchStart.bind(this), this.touchMoveHandler = this._onTouchMove.bind(this), this.touchEndHandler = this._onTouchEnd.bind(this), this.clickHandler = this._onClick.bind(this), this.interceptedClicks = [], window.addEventListener("pageshow", (e => {
                    this.persisted = e.persisted
                })), window.addEventListener("DOMContentLoaded", (() => {
                    this._preconnect3rdParties()
                })), this.delayedScripts = {normal: [], async: [], defer: []}, this.allJQueries = []
            }

            _addUserInteractionListener(e) {
                document.hidden ? e._triggerListener() : (this.triggerEvents.forEach((t => window.addEventListener(t, e.userEventHandler, {passive: !0}))), window.addEventListener("touchstart", e.touchStartHandler, {passive: !0}), window.addEventListener("mousedown", e.touchStartHandler), document.addEventListener("visibilitychange", e.userEventHandler))
            }

            _removeUserInteractionListener() {
                this.triggerEvents.forEach((e => window.removeEventListener(e, this.userEventHandler, {passive: !0}))), document.removeEventListener("visibilitychange", this.userEventHandler)
            }

            _onTouchStart(e) {
                "HTML" !== e.target.tagName && (window.addEventListener("touchend", this.touchEndHandler), window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.addEventListener("mousemove", this.touchMoveHandler), e.target.addEventListener("click", this.clickHandler), this._renameDOMAttribute(e.target, "onclick", "rocket-onclick"))
            }

            _onTouchMove(e) {
                window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.removeEventListener("mousemove", this.touchMoveHandler), e.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(e.target, "rocket-onclick", "onclick")
            }

            _onTouchEnd(e) {
                window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener("mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this.touchMoveHandler, {passive: !0}), window.removeEventListener("mousemove", this.touchMoveHandler)
            }

            _onClick(e) {
                e.target.removeEventListener("click", this.clickHandler), this._renameDOMAttribute(e.target, "rocket-onclick", "onclick"), this.interceptedClicks.push(e), e.preventDefault(), e.stopPropagation(), e.stopImmediatePropagation()
            }

            _replayClicks() {
                window.removeEventListener("touchstart", this.touchStartHandler, {passive: !0}), window.removeEventListener("mousedown", this.touchStartHandler), this.interceptedClicks.forEach((e => {
                    e.target.dispatchEvent(new MouseEvent("click", {view: e.view, bubbles: !0, cancelable: !0}))
                }))
            }

            _renameDOMAttribute(e, t, n) {
                e.hasAttribute && e.hasAttribute(t) && (event.target.setAttribute(n, event.target.getAttribute(t)), event.target.removeAttribute(t))
            }

            _triggerListener() {
                this._removeUserInteractionListener(this), "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", this._loadEverythingNow.bind(this)) : this._loadEverythingNow()
            }

            _preconnect3rdParties() {
                let e = [];
                document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t => {
                    if (t.hasAttribute("src")) {
                        const n = new URL(t.src).origin;
                        n !== location.origin && e.push({src: n, crossOrigin: t.crossOrigin || "module" === t.getAttribute("data-rocket-type")})
                    }
                })), e = [...new Map(e.map((e => [JSON.stringify(e), e]))).values()], this._batchInjectResourceHints(e, "preconnect")
            }

            async _loadEverythingNow() {
                this.lastBreath = Date.now(), this._delayEventListeners(), this._delayJQueryReady(this), this._handleDocumentWrite(), this._registerAllDelayedScripts(), this._preloadAllScripts(), await this._loadScriptsFromList(this.delayedScripts.normal), await this._loadScriptsFromList(this.delayedScripts.defer), await this._loadScriptsFromList(this.delayedScripts.async);
                try {
                    await this._triggerDOMContentLoaded(), await this._triggerWindowLoad()
                } catch (e) {
                }
                window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this._replayClicks()
            }

            _registerAllDelayedScripts() {
                document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e => {
                    e.hasAttribute("src") ? e.hasAttribute("async") && !1 !== e.async ? this.delayedScripts.async.push(e) : e.hasAttribute("defer") && !1 !== e.defer || "module" === e.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(e) : this.delayedScripts.normal.push(e) : this.delayedScripts.normal.push(e)
                }))
            }

            async _transformScript(e) {
                return await this._littleBreath(), new Promise((t => {
                    const n = document.createElement("script");
                    [...e.attributes].forEach((e => {
                        let t = e.nodeName;
                        "type" !== t && ("data-rocket-type" === t && (t = "type"), n.setAttribute(t, e.nodeValue))
                    })), e.hasAttribute("src") ? (n.addEventListener("load", t), n.addEventListener("error", t)) : (n.text = e.text, t());
                    try {
                        e.parentNode.replaceChild(n, e)
                    } catch (e) {
                        t()
                    }
                }))
            }

            async _loadScriptsFromList(e) {
                const t = e.shift();
                return t ? (await this._transformScript(t), this._loadScriptsFromList(e)) : Promise.resolve()
            }

            _preloadAllScripts() {
                this._batchInjectResourceHints([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload")
            }

            _batchInjectResourceHints(e, t) {
                var n = document.createDocumentFragment();
                e.forEach((e => {
                    if (e.src) {
                        const i = document.createElement("link");
                        i.href = e.src, i.rel = t, "preconnect" !== t && (i.as = "script"), e.getAttribute && "module" === e.getAttribute("data-rocket-type") && (i.crossOrigin = !0), e.crossOrigin && (i.crossOrigin = e.crossOrigin), n.appendChild(i)
                    }
                })), document.head.appendChild(n)
            }

            _delayEventListeners() {
                let e = {};

                function t(t, n) {
                    !function (t) {
                        function n(n) {
                            return e[t].eventsToRewrite.indexOf(n) >= 0 ? "rocket-" + n : n
                        }

                        e[t] || (e[t] = {originalFunctions: {add: t.addEventListener, remove: t.removeEventListener}, eventsToRewrite: []}, t.addEventListener = function () {
                            arguments[0] = n(arguments[0]), e[t].originalFunctions.add.apply(t, arguments)
                        }, t.removeEventListener = function () {
                            arguments[0] = n(arguments[0]), e[t].originalFunctions.remove.apply(t, arguments)
                        })
                    }(t), e[t].eventsToRewrite.push(n)
                }

                function n(e, t) {
                    let n = e[t];
                    Object.defineProperty(e, t, {
                        get: () => n || function () {
                        }, set(i) {
                            e["rocket" + t] = n = i
                        }
                    })
                }

                t(document, "DOMContentLoaded"), t(window, "DOMContentLoaded"), t(window, "load"), t(window, "pageshow"), t(document, "readystatechange"), n(document, "onreadystatechange"), n(window, "onload"), n(window, "onpageshow")
            }

            _delayJQueryReady(e) {
                let t = window.jQuery;
                Object.defineProperty(window, "jQuery", {
                    get: () => t, set(n) {
                        if (n && n.fn && !e.allJQueries.includes(n)) {
                            n.fn.ready = n.fn.init.prototype.ready = function (t) {
                                e.domReadyFired ? t.bind(document)(n) : document.addEventListener("rocket-DOMContentLoaded", (() => t.bind(document)(n)))
                            };
                            const t = n.fn.on;
                            n.fn.on = n.fn.init.prototype.on = function () {
                                if (this[0] === window) {
                                    function e(e) {
                                        return e.split(" ").map((e => "load" === e || 0 === e.indexOf("load.") ? "rocket-jquery-load" : e)).join(" ")
                                    }

                                    "string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = e(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach((t => {
                                        delete Object.assign(arguments[0], {[e(t)]: arguments[0][t]})[t]
                                    }))
                                }
                                return t.apply(this, arguments), this
                            }, e.allJQueries.push(n)
                        }
                        t = n
                    }
                })
            }

            async _triggerDOMContentLoaded() {
                this.domReadyFired = !0, await this._littleBreath(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), window.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this._littleBreath(), document.dispatchEvent(new Event("rocket-readystatechange")), await this._littleBreath(), document.rocketonreadystatechange && document.rocketonreadystatechange()
            }

            async _triggerWindowLoad() {
                await this._littleBreath(), window.dispatchEvent(new Event("rocket-load")), await this._littleBreath(), window.rocketonload && window.rocketonload(), await this._littleBreath(), this.allJQueries.forEach((e => e(window).trigger("rocket-jquery-load"))), await this._littleBreath();
                const e = new Event("rocket-pageshow");
                e.persisted = this.persisted, window.dispatchEvent(e), await this._littleBreath(), window.rocketonpageshow && window.rocketonpageshow({persisted: this.persisted})
            }

            _handleDocumentWrite() {
                const e = new Map;
                document.write = document.writeln = function (t) {
                    const n = document.currentScript, i = document.createRange(), r = n.parentElement;
                    let o = e.get(n);
                    void 0 === o && (o = n.nextSibling, e.set(n, o));
                    const s = document.createDocumentFragment();
                    i.setStart(s, 0), s.appendChild(i.createContextualFragment(t)), r.insertBefore(s, o)
                }
            }

            async _littleBreath() {
                Date.now() - this.lastBreath > 45 && (await this._requestAnimFrame(), this.lastBreath = Date.now())
            }

            async _requestAnimFrame() {
                return document.hidden ? new Promise((e => setTimeout(e))) : new Promise((e => requestAnimationFrame(e)))
            }

            static run() {
                const e = new RocketLazyLoadScripts;
                e._addUserInteractionListener(e)
            }
        }

        RocketLazyLoadScripts.run();</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <!-- This site is optimized with the Yoast SEO Premium plugin v20.7 (Yoast SEO v20.7) - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học</title>
    <link rel="stylesheet preload prefetch" as="style" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=vietnamese&#038;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=vietnamese&#038;display=swap" media="print"
          onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=vietnamese&#038;display=swap"/>
    </noscript>
    <style id="rocket-critical-css">.screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important
        }

        .site-navigation {
            grid-area: nav-menu;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1
        }

        ul {
            box-sizing: border-box
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        .arcuAnimated {
            animation-duration: 1s;
            animation-fill-mode: both
        }

        @keyframes arcu_flipInY {
            from {
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                animation-timing-function: ease-in;
                opacity: 0
            }
            40% {
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                animation-timing-function: ease-in
            }
            60% {
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                opacity: 1
            }
            80% {
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
            }
            to {
                transform: perspective(400px)
            }
        }

        .arcuAnimated.flipInY {
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
            animation-name: arcu_flipInY
        }

        .arcu-text-left {
            text-align: left
        }

        .arcu-widget {
            opacity: 0;
            line-height: 1
        }

        .arcu-widget * {
            box-sizing: border-box
        }

        .arcu-widget .arcu-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.2);
            z-index: 0;
            opacity: 0
        }

        .arcu-widget .arcu-online-badge {
            position: absolute;
            top: 6px;
            right: 6px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            z-index: 1
        }

        .arcu-widget .arcu-online-badge.online {
            background-color: #35ac19
        }

        .arcu-widget .arcu-unread-badge {
            display: flex;
            flex-flow: row wrap;
            -moz-box-pack: center;
            place-content: center;
            -moz-box-align: center;
            align-items: center;
            position: absolute;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif, Arial;
            font-size: 12px;
            min-width: 20px;
            line-height: 1;
            padding: 0px 6px;
            height: 20px;
            border-radius: 10px;
            z-index: 1;
            background-color: #CC0000;
            color: #FFF;
            top: 1px;
            right: 1px;
            font-weight: 700;
            transform: scale(0)
        }

        .arcu-widget.left.arcu-message {
            left: 20px;
            right: auto
        }

        .arcu-widget.left .arcu-message-button {
            right: auto;
            left: 0
        }

        .arcu-widget.left .arcu-prompt {
            left: calc(100% + 10px);
            right: auto;
            transform-origin: 0% 50%
        }

        .arcu-widget.left .arcu-prompt.arcu-prompt-top {
            left: 0;
            right: auto
        }

        .arcu-widget.left .arcu-prompt.arcu-prompt-top:before {
            border-right: 8px solid transparent;
            border-top: 8px solid #FFFFFF;
            border-left: 8px solid transparent;
            border-bottom: 0 none;
            left: 25px;
            right: auto
        }

        .arcu-widget.left .arcu-prompt:before {
            border-right: 8px solid #FFF;
            border-top: 8px solid transparent;
            border-left: 8px solid transparent;
            border-bottom: 8px solid transparent;
            right: auto;
            left: -15px
        }

        .arcu-widget.left .messangers-block {
            right: auto;
            left: 0;
            -webkit-transform-origin: 10% 105%;
            -ms-transform-origin: 10% 105%;
            transform-origin: 10% 105%
        }

        .arcu-widget.left .arcu-forms-container {
            left: 0;
            right: auto
        }

        .arcu-widget.left .messangers-block::before, .arcu-widget.left .arcu-forms-container::before {
            left: 25px;
            right: auto
        }

        .arcu-widget.active {
            opacity: 1
        }

        .arcu-widget.arcu-message {
            z-index: 1000000;
            right: 20px;
            bottom: 20px;
            position: fixed !important;
            height: 70px
        }

        .arcu-widget .arcu-message-button {
            min-width: 70px;
            padding-left: 70px;
            z-index: 1;
            height: 70px;
            right: 0;
            background-color: red;
            border-radius: 50px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            text-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .arcu-widget .arcu-message-button .arcu-button-icon {
            position: absolute;
            left: 0;
            right: 0;
            width: 70px;
            height: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            text-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .arcu-widget .arcu-message-button p {
            font-family: 'Roboto', sans-serif, Arial;
            color: #fff;
            font-weight: 700;
            font-size: 10px;
            line-height: 11px;
            margin: 0
        }

        .arcu-widget .arcu-message-button .pulsation {
            width: 100%;
            height: 100%;
            background-color: red;
            border-radius: 50px;
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            z-index: -1;
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0);
            -webkit-animation: arcu-pulse 2s infinite;
            animation: arcu-pulse 2s infinite
        }

        .arcu-widget .arcu-message-button .icons {
            background-color: #fff;
            width: 44px;
            height: 44px;
            border-radius: 50px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            margin-top: -22px;
            margin-left: -22px
        }

        .arcu-widget .arcu-message-button .static div {
            margin: auto
        }

        .arcu-widget .arcu-message-button .static .static-container {
            width: 60px;
            height: 60px;
            border-radius: 50px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            margin-top: -30px;
            margin-left: -30px;
            display: flex
        }

        .arcu-widget .arcu-message-button .form-icon {
            transform: scale(0)
        }

        .arcu-widget .arcu-message-button .form-icon svg {
            transform: scale(1.5)
        }

        .arcu-widget .arcu-message-button .static, .arcu-widget .arcu-message-button .form-icon {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            display: flex;
            flex: auto
        }

        .arcu-widget .arcu-message-button .static svg, .arcu-widget .arcu-message-button .form-icon svg {
            width: 24px;
            height: 24px;
            color: #FFFFFF;
            line-height: 24px;
            font-size: 24px;
            margin: auto
        }

        .arcu-widget .pulsation:nth-of-type(2n) {
            -webkit-animation-delay: .5s;
            animation-delay: .5s
        }

        .arcu-widget .icons-line {
            top: 10px;
            left: 12px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-transform: translateX(30px);
            -ms-transform: translateX(30px);
            transform: translateX(30px);
            height: 24px
        }

        .arcu-widget .icons-line span {
            display: inline-block;
            width: 24px;
            height: 24px;
            color: red
        }

        .arcu-widget .icons-line span svg {
            width: 24px;
            height: 24px
        }

        .arcu-widget .icons-line span {
            margin-right: 40px
        }

        .arcu-widget .icons.arcu-hide {
            transform: scale(0);
            opacity: 0
        }

        .arcu-widget .icons.arcu-hide .icons-line {
            transform: scale(0)
        }

        .arcu-widget .arcu-close {
            color: #FFFFFF
        }

        .arcu-widget .arcu-close svg {
            -webkit-transform: rotate(180deg) scale(0);
            -ms-transform: rotate(180deg) scale(0);
            transform: rotate(180deg) scale(0);
            display: block
        }

        .arcu-widget .arcu-prompt {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .arcu-widget .arcu-forms-container, .arcu-widget .messangers-block, .arcu-widget .arcu-prompt {
            background: #FFFFFF;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
            width: 300px;
            background-repeat: no-repeat;
            background-position: center;
            position: absolute;
            bottom: 80px;
            right: 0px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding: 10px 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 7px;
            z-index: 1000000;
            transform: scale(1);
            display: none
        }

        .arcu-widget .arcu-forms-container:before, .arcu-widget .messangers-block:before, .arcu-widget .arcu-prompt:before {
            position: absolute;
            bottom: -7px;
            right: 25px;
            left: auto;
            display: inline-block !important;
            border-right: 8px solid transparent;
            border-top: 8px solid #FFFFFF;
            border-left: 8px solid transparent;
            content: ''
        }

        .arcu-widget .arcu-forms-container .arcu-form-container {
            display: none
        }

        .arcu-widget.arcu-fadeindown .arcu-forms-container, .arcu-widget.arcu-fadeindown .messangers-block, .arcu-widget.arcu-fadeindown .arcu-prompt {
            display: block;
            visibility: hidden;
            opacity: 0;
            transform: translate3d(0, -20%, 0)
        }

        .arcu-widget .arcu-prompt.arcu-prompt-top {
            right: 0;
            max-width: 260px;
            bottom: 80px
        }

        .arcu-widget .arcu-prompt.arcu-prompt-top:before {
            bottom: -7px;
            right: 25px;
            left: auto;
            border-right: 8px solid transparent;
            border-top: 8px solid #FFFFFF;
            border-left: 8px solid transparent;
            border-bottom: 0 none
        }

        .arcu-widget .messangers-block {
            display: block
        }

        .arcu-widget .messangers-block.has-header {
            padding-top: 0
        }

        .arcu-widget .messangers-block .messangers-list-container {
            overflow: hidden
        }

        .arcu-widget .messangers-block .arcu-menu-header {
            padding: 18px 15px;
            color: #FFFFFF;
            background: #787878;
            border-radius: 7px 7px 0 0;
            font-family: 'Roboto', sans-serif, Arial;
            margin-bottom: 10px;
            font-size: 17px;
            position: relative;
            line-height: 1.4
        }

        .arcu-widget .messangers-block .arcu-menu-header .arcu-header-icon {
            position: absolute;
            width: 42px;
            height: 42px;
            left: 11px;
            top: 50%;
            margin-top: -21px
        }

        .arcu-widget .messangers-block .arcu-menu-header .arcu-header-icon .arcu-online-badge {
            height: 11px;
            width: 11px;
            border: 2px solid red;
            bottom: -2px;
            right: 3px;
            top: auto
        }

        .arcu-widget .messangers-block .arcu-menu-header .arcu-header-icon.arcu-bg-image {
            background-size: cover;
            border-radius: 50%
        }

        .arcu-widget .messangers-block .arcu-menu-header.arcu-icon-left {
            position: relative;
            padding-left: 68px
        }

        .arcu-widget .arcu-header-close {
            position: absolute;
            right: 0;
            top: -30px;
            padding: 0;
            margin: 0;
            border: 0 none;
            background: none;
            line-height: 1;
            width: 26px;
            height: 26px;
            color: #FFFFFF;
            background: #787878;
            border-radius: 50%;
            text-align: center
        }

        .arcu-widget .arcu-header-close svg {
            height: 12px;
            width: 12px;
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -6px 0 0 -6px
        }

        .arcu-widget .arcu-prompt {
            color: #787878;
            font-family: 'Roboto', sans-serif, Arial;
            font-size: 16px;
            line-height: 18px;
            width: auto;
            bottom: 10px;
            right: 105%;
            left: auto;
            white-space: nowrap;
            padding: 14px 20px 14px
        }

        .arcu-widget .arcu-prompt:before {
            border-right: 8px solid transparent;
            border-top: 8px solid transparent;
            border-left: 8px solid #FFF;
            border-bottom: 8px solid transparent;
            bottom: 16px;
            right: -15px
        }

        .arcu-widget .arcu-prompt .arcu-prompt-close {
            opacity: 0;
            position: absolute;
            right: -10px;
            top: -10px;
            padding: 0;
            margin: 0;
            border: 0 none;
            background: none;
            line-height: 1;
            width: 26px;
            height: 26px;
            color: #FFFFFF;
            background: #787878;
            border-radius: 50%;
            text-align: center
        }

        .arcu-widget .arcu-prompt .arcu-prompt-close svg {
            height: 12px;
            width: 12px;
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -6px 0 0 -6px
        }

        .arcu-widget .messangers-block .messangers-list {
            list-style: none;
            margin: 0;
            padding: 0
        }

        .arcu-widget .messangers-block .messangers-list.arcu-downtoup {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }

        .arcu-widget .arcu-forms-container {
            background: #FFFFFF;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
            width: 410px;
            background-repeat: no-repeat;
            background-position: center;
            position: absolute;
            bottom: 80px;
            left: auto;
            right: 0;
            align-items: center;
            border-radius: 7px;
            -webkit-transform-origin: 85% 100%;
            -ms-transform-origin: 85% 100%;
            transform-origin: 85% 100%;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            z-index: 1000000;
            color: red;
            padding-top: 5px;
            padding-left: 8px;
            padding-right: 8px;
            display: none
        }

        .arcu-widget .arcu-forms-container:before {
            position: absolute;
            bottom: -7px;
            right: 25px;
            left: auto;
            display: inline-block !important;
            border-right: 8px solid transparent;
            border-top: 8px solid #FFFFFF;
            border-left: 8px solid transparent;
            content: ''
        }

        .arcu-widget .arcu-forms-container .arcu-form-container {
            font-family: 'Roboto', sans-serif, Arial;
            font-size: 15px;
            line-height: 18px;
            padding: 0 10px 10px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: none;
            width: 100%;
            position: relative
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-success, .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-error {
            font-size: 18px;
            position: absolute;
            top: 0;
            bottom: -10px;
            left: -8px;
            right: -8px;
            border-radius: 7px;
            background: rgba(255, 255, 255, 0.9);
            text-align: center;
            vertical-align: middle;
            align-items: center;
            display: none
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-success > div, .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-error > div {
            flex: 1 auto
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-header {
            text-align: center;
            margin-bottom: 10px;
            margin-top: -5px;
            margin-left: -18px;
            margin-right: -18px;
            padding: 18px 15px;
            color: #FFFFFF;
            border-radius: 7px 7px 0 0
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group {
            margin-bottom: 10px
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group .arcu-form-field-errors {
            display: none;
            font-size: 12px;
            line-height: 14px;
            margin-left: 3px
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group.arcu-form-group-type-hidden {
            display: none
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group.arcu-form-group-required .arcu-form-label label {
            display: block;
            padding: 0;
            margin: 0
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group.arcu-form-group-required .arcu-form-label label:after {
            content: " *";
            color: #c7254e
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-label {
            font-size: 14px;
            margin-bottom: 3px;
            color: #333333
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-field {
            display: block;
            width: 100%;
            font-family: 'Roboto', sans-serif, Arial;
            font-size: 14px;
            line-height: 16px;
            border-radius: 4px;
            border: 0;
            height: 36px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 6px 10px 6px;
            border: 1px solid #DDDDDD;
            margin: 0 !important
        }

        .arcu-widget .arcu-forms-container .arcu-form-container textarea.arcu-form-field {
            height: 80px;
            resize: vertical;
            max-height: 140px;
            min-height: 60px
        }

        .arcu-widget .arcu-forms-container .arcu-form-container .arcu-button {
            display: block;
            width: 100%;
            border-radius: 4px;
            border: 0;
            background-color: red;
            color: #fff;
            font-family: 'Roboto', sans-serif, Arial;
            font-size: 14px;
            padding: 7px 5px 7px;
            height: 36px;
            margin: 0;
            line-height: 20px;
            text-decoration: none;
            text-align: center
        }

        .arcu-widget .arcu-forms-container .arcu-form-close {
            position: absolute;
            right: 0;
            top: -30px;
            padding: 0;
            margin: 0;
            border: 0 none;
            background: none;
            line-height: 1;
            width: 26px;
            height: 26px;
            color: #FFFFFF;
            background: #787878;
            border-radius: 50%;
            z-index: 1;
            text-align: center
        }

        .arcu-widget .arcu-forms-container .arcu-form-close svg {
            height: 12px;
            width: 12px;
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -6px 0 0 -6px;
            transform: none
        }

        @-webkit-keyframes arcu-pulse {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 1
            }
            50% {
                opacity: .5
            }
            100% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
                opacity: 0
            }
        }

        @media (max-height: 400px) {
            .arcu-widget .arcu-prompt .arcu-prompt-close {
                opacity: 1
            }
        }

        @media (max-width: 428px) {
            .arcu-widget .arcu-prompt .arcu-prompt-close {
                opacity: 1
            }

            .arcu-widget.arcu-message .messangers-block, .arcu-widget.arcu-message .arcu-forms-container {
                bottom: 0;
                border-radius: 0;
                width: 100%;
                position: fixed
            }

            .arcu-widget.arcu-message .arcu-form-container .arcu-form-header, .arcu-widget.arcu-message .arcu-form-container .arcu-form-error, .arcu-widget.arcu-message .arcu-form-container .arcu-form-success {
                border-radius: 0
            }
        }

        @keyframes arcu-pulse {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
                opacity: 1
            }
            50% {
                opacity: .5
            }
            100% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
                opacity: 0
            }
        }

        .arcu-widget .messangers-block {
            background-color: #FFFFFF
        }

        .arcu-widget .messangers-block:before {
            border-top-color: #FFFFFF
        }

        .arcu-widget.left.arcu-message {
            left: 20px
        }

        .arcu-widget .arcu-message-button .static div svg {
            width: 24px;
            height: 24px
        }

        .arcu-widget.left.arcu-message {
            bottom: 20px
        }

        .arcu-widget .messangers-block, .arcu-widget .arcu-prompt {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2)
        }

        .arcu-widget .arcu-message-button .pulsation {
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        .arcu-widget .messangers-block {
            width: 300px
        }

        .arcu-widget .arcu-forms-container {
            width: auto
        }

        .arcu-widget .arcu-forms-container #arcu-form-callback {
            width: 300px
        }

        .arcu-widget .arcu-forms-container #arcu-form-email {
            width: 300px
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        *, :after, :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #333;
            background-color: #fff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h1, h2, h3, h4 {
            margin-top: .5rem;
            margin-bottom: 1rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        h1 {
            font-size: 2.5rem
        }

        h2 {
            font-size: 2rem
        }

        h3 {
            font-size: 1.75rem
        }

        h4 {
            font-size: 1.5rem
        }

        p {
            margin-top: 0;
            margin-bottom: .9rem
        }

        a {
            background-color: transparent;
            text-decoration: none;
            color: #c36
        }

        img {
            border-style: none;
            height: auto;
            max-width: 100%
        }

        [hidden] {
            display: none
        }

        label {
            display: inline-block;
            line-height: 1;
            vertical-align: middle
        }

        button, input, textarea {
            font-family: inherit;
            font-size: 1rem;
            line-height: 1.5;
            margin: 0
        }

        input[type=email], input[type=search], input[type=tel], input[type=text], textarea {
            width: 100%;
            border: 1px solid #666;
            border-radius: 3px;
            padding: .5rem 1rem
        }

        button, input {
            overflow: visible
        }

        button {
            text-transform: none
        }

        [type=submit], button {
            width: auto;
            -webkit-appearance: button
        }

        [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        [type=submit]:-moz-focusring, button:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        [type=submit], button {
            display: inline-block;
            font-weight: 400;
            color: #c36;
            text-align: center;
            white-space: nowrap;
            background-color: transparent;
            border: 1px solid #c36;
            padding: .5rem 1rem;
            font-size: 1rem;
            border-radius: 3px
        }

        textarea {
            overflow: auto;
            resize: vertical
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        li, ul {
            margin-top: 0;
            margin-bottom: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent
        }

        .fa, .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-lg {
            font-size: 1.33333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-angle-down:before {
            content: "\f107"
        }

        .fa-caret-right:before {
            content: "\f0da"
        }

        .fa-chevron-up:before {
            content: "\f077"
        }

        .fa-home:before {
            content: "\f015"
        }

        .fa-search:before {
            content: "\f002"
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.eot);
            src: url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.woff2) format("woff2"), url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.woff) format("woff"), url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.ttf) format("truetype"), url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.svg#fontawesome) format("svg")
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.eot);
            src: url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url({{asset('public/assets/fonts/awesome/fa-solid-900.woff2')}}) format("woff2"), url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.woff) format("woff"), url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.ttf) format("truetype"), url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.svg#fontawesome) format("svg")
        }

        .fa, .fas {
            font-family: "Font Awesome 5 Free"
        }

        .fa, .fas {
            font-weight: 900
        }

        .jet-menu-container {
            position: relative;
            width: 100%
        }

        .jet-menu {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
            position: relative;
            margin: 0;
            padding: 0;
            list-style: none
        }

        .jet-menu.jet-menu--roll-up > .jet-menu-item[hidden] {
            display: none
        }

        .jet-menu .jet-menu-item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .jet-menu .top-level-link {
            width: 100%;
            margin: 0;
            padding: 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .jet-menu ul {
            left: 0
        }

        .jet-menu-item {
            position: relative
        }

        .jet-menu-item > a {
            display: block;
            text-decoration: none;
            width: auto
        }

        .jet-menu-item.jet-mega-menu-item {
            position: static
        }

        .jet-menu-item .jet-sub-menu {
            display: block;
            min-width: 200px;
            margin: 0;
            background-color: #fff;
            list-style: none;
            top: 100%;
            left: 0;
            right: auto;
            position: absolute;
            padding: 0;
            -webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, .2);
            box-shadow: 2px 2px 5px rgba(0, 0, 0, .2);
            z-index: 999
        }

        .jet-menu-item .jet-sub-menu > li {
            display: block
        }

        .jet-menu-item .jet-sub-menu > li > a {
            padding: 10px
        }

        .jet-menu-item .jet-sub-mega-menu {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            background-color: #fff;
            top: 100%;
            left: 0;
            -webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, .2);
            box-shadow: 2px 2px 5px rgba(0, 0, 0, .2);
            z-index: 999
        }

        .jet-menu-item .jet-sub-mega-menu > .elementor {
            width: 100%
        }

        .jet-menu-item-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .jet-menu-item-wrapper .jet-dropdown-arrow {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-item-align: center;
            align-self: center;
            margin-left: 10px
        }

        .jet-sub-menu, .jet-sub-mega-menu {
            opacity: 0;
            visibility: hidden
        }

        .jet-menu.jet-menu--animation-type-fade .jet-sub-menu {
            opacity: 0;
            visibility: hidden
        }

        .jet-menu.jet-menu--animation-type-fade .jet-sub-mega-menu {
            opacity: 0;
            visibility: hidden
        }

        .jet-mega-menu-item {
            position: relative;
            -webkit-transform-origin: 0;
            -ms-transform-origin: 0;
            transform-origin: 0
        }

        .jet-menu {
            justify-content: flex-end !important
        }

        .jet-menu ul.jet-sub-menu {
            min-width: 200px
        }

        @font-face {
            font-display: swap;
            font-family: eicons;
            src: url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.17.0);
            src: url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.17.0#iefix) format("embedded-opentype"), url({{asset('public/assets/fonts/eicons/eicons.woff2')}}) format("woff2"), url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.17.0) format("woff"), url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.17.0) format("truetype"), url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.17.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal
        }

        [class^=eicon] {
            display: inline-block;
            font-family: eicons;
            font-size: inherit;
            font-weight: 400;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .eicon-close:before {
            content: '\e87f'
        }

        .dialog-close-button {
            position: absolute;
            margin-top: 15px;
            right: 15px;
            font-size: 15px;
            line-height: 1
        }

        .dialog-close-button:not(:hover) {
            opacity: .4
        }

        .elementor-screen-only, .screen-reader-text {
            position: absolute;
            top: -10000em;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        .elementor {
            -webkit-hyphens: manual;
            hyphens: manual
        }

        .elementor *, .elementor :after, .elementor :before {
            box-sizing: border-box
        }

        .elementor a {
            box-shadow: none;
            text-decoration: none
        }

        .elementor img {
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0;
            box-shadow: none
        }

        .elementor-widget-wrap > .elementor-element.elementor-fixed {
            position: fixed
        }

        .elementor-widget-wrap .elementor-element.elementor-widget__width-initial {
            max-width: 100%
        }

        .elementor-element {
            --flex-direction: initial;
            --flex-wrap: initial;
            --justify-content: initial;
            --align-items: initial;
            --align-content: initial;
            --gap: initial;
            --flex-basis: initial;
            --flex-grow: initial;
            --flex-shrink: initial;
            --order: initial;
            --align-self: initial;
            flex-basis: var(--flex-basis);
            flex-grow: var(--flex-grow);
            flex-shrink: var(--flex-shrink);
            order: var(--order);
            align-self: var(--align-self)
        }

        .elementor-element.elementor-fixed {
            z-index: 1
        }

        .elementor-align-right {
            text-align: right
        }

        .elementor-align-right .elementor-button {
            width: auto
        }

        :root {
            --page-title-display: block
        }

        .elementor-section {
            position: relative
        }

        .elementor-section .elementor-container {
            display: flex;
            margin-right: auto;
            margin-left: auto;
            position: relative
        }

        @media (max-width: 1024px) {
            .elementor-section .elementor-container {
                flex-wrap: wrap
            }
        }

        .elementor-section.elementor-section-boxed > .elementor-container {
            max-width: 1140px
        }

        .elementor-section.elementor-section-stretched {
            position: relative;
            width: 100%
        }

        .elementor-widget-wrap {
            position: relative;
            width: 100%;
            flex-wrap: wrap;
            align-content: flex-start
        }

        .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
            display: flex
        }

        .elementor-widget-wrap > .elementor-element {
            width: 100%
        }

        .elementor-widget {
            position: relative
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px
        }

        .elementor-column {
            position: relative;
            min-height: 1px;
            display: flex
        }

        .elementor-column-gap-default > .elementor-column > .elementor-element-populated {
            padding: 10px
        }

        @media (min-width: 768px) {
            .elementor-column.elementor-col-25 {
                width: 25%
            }

            .elementor-column.elementor-col-33 {
                width: 33.333%
            }

            .elementor-column.elementor-col-100 {
                width: 100%
            }
        }

        @media (max-width: 767px) {
            .elementor-column {
                width: 100%
            }
        }

        @media (min-width: 1025px) {
            #elementor-device-mode:after {
                content: "desktop"
            }
        }

        @media (min-width: -1px) {
            #elementor-device-mode:after {
                content: "widescreen"
            }
        }

        @media (max-width: -1px) {
            #elementor-device-mode:after {
                content: "laptop";
                content: "tablet_extra"
            }
        }

        @media (max-width: 1024px) {
            #elementor-device-mode:after {
                content: "tablet"
            }
        }

        @media (max-width: -1px) {
            #elementor-device-mode:after {
                content: "mobile_extra"
            }
        }

        @media (max-width: 767px) {
            #elementor-device-mode:after {
                content: "mobile"
            }
        }

        .elementor-form-fields-wrapper {
            display: flex;
            flex-wrap: wrap
        }

        .elementor-field-group {
            flex-wrap: wrap;
            align-items: center
        }

        .elementor-field-group.elementor-field-type-submit {
            align-items: flex-end
        }

        .elementor-field-group .elementor-field-textual {
            width: 100%;
            max-width: 100%;
            border: 1px solid #818a91;
            background-color: transparent;
            color: #373a3c;
            vertical-align: middle;
            flex-grow: 1
        }

        .elementor-field-group .elementor-field-textual::-moz-placeholder {
            color: inherit;
            font-family: inherit;
            opacity: .6
        }

        .elementor-field-textual {
            line-height: 1.4;
            font-size: 15px;
            min-height: 40px;
            padding: 5px 14px;
            border-radius: 3px
        }

        .elementor-field-textual.elementor-size-md {
            font-size: 16px;
            min-height: 47px;
            padding: 6px 16px;
            border-radius: 4px
        }

        .elementor-button-align-stretch .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button {
            flex-basis: 100%
        }

        .elementor-form .elementor-button {
            padding-top: 0;
            padding-bottom: 0;
            border: none
        }

        .elementor-form .elementor-button > span {
            display: flex;
            justify-content: center
        }

        .elementor-form .elementor-button.elementor-size-md {
            min-height: 47px
        }

        .elementor-button {
            display: inline-block;
            line-height: 1;
            background-color: #818a91;
            font-size: 15px;
            padding: 12px 24px;
            border-radius: 3px;
            color: #fff;
            fill: #fff;
            text-align: center
        }

        .elementor-button:visited {
            color: #fff
        }

        .elementor-button-content-wrapper {
            display: flex;
            justify-content: center
        }

        .elementor-button-icon {
            flex-grow: 0;
            order: 5
        }

        .elementor-button-text {
            flex-grow: 1;
            order: 10;
            display: inline-block
        }

        .elementor-button.elementor-size-md {
            font-size: 16px;
            padding: 15px 30px;
            border-radius: 4px
        }

        .elementor-button span {
            text-decoration: inherit
        }

        .elementor-view-stacked .elementor-icon {
            padding: .5em;
            background-color: #818a91;
            color: #fff;
            fill: #fff
        }

        .elementor-view-framed .elementor-icon {
            padding: .5em;
            color: #818a91;
            border: 3px solid #818a91;
            background-color: transparent
        }

        .elementor-icon {
            display: inline-block;
            line-height: 1;
            color: #818a91;
            font-size: 50px;
            text-align: center
        }

        .elementor-icon i, .elementor-icon svg {
            width: 1em;
            height: 1em;
            position: relative;
            display: block
        }

        .elementor-icon i:before, .elementor-icon svg:before {
            position: absolute;
            left: 50%;
            transform: translateX(-50%)
        }

        .elementor-shape-circle .elementor-icon {
            border-radius: 50%
        }

        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            z-index: 1
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            box-sizing: content-box
        }

        .swiper-wrapper {
            transform: translateZ(0)
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative
        }

        .elementor-pagination-position-outside .swiper-container {
            padding-bottom: 30px
        }

        .elementor-swiper {
            position: relative
        }

        .elementor-main-swiper {
            position: static
        }

        .animated {
            animation-duration: 1.25s
        }

        @media (prefers-reduced-motion: reduce) {
            .animated {
                animation: none
            }
        }

        .elementor .elementor-element ul.elementor-icon-list-items {
            padding: 0
        }

        @media (max-width: 767px) {
            .elementor .elementor-hidden-mobile {
                display: none
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .elementor .elementor-hidden-tablet {
                display: none
            }
        }

        .elementor-counter .elementor-counter-number-wrapper {
            display: flex;
            font-size: 69px;
            font-weight: 600;
            line-height: 1
        }

        .elementor-counter .elementor-counter-number-prefix, .elementor-counter .elementor-counter-number-suffix {
            flex-grow: 1;
            white-space: pre-wrap
        }

        .elementor-counter .elementor-counter-number-prefix {
            text-align: right
        }

        .elementor-counter .elementor-counter-number-suffix {
            text-align: left
        }

        .elementor-counter .elementor-counter-title {
            text-align: center;
            font-size: 19px;
            font-weight: 400;
            line-height: 2.5
        }

        .elementor-heading-title {
            padding: 0;
            margin: 0;
            line-height: 1
        }

        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
            color: inherit;
            font-size: inherit;
            line-height: inherit
        }

        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
            font-size: 15px
        }

        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
            font-size: 29px
        }

        .elementor-widget .elementor-icon-list-items {
            list-style-type: none;
            margin: 0;
            padding: 0
        }

        .elementor-widget .elementor-icon-list-item {
            margin: 0;
            padding: 0;
            position: relative
        }

        .elementor-widget .elementor-icon-list-item:after {
            position: absolute;
            bottom: 0;
            width: 100%
        }

        .elementor-widget .elementor-icon-list-item, .elementor-widget .elementor-icon-list-item a {
            display: flex;
            align-items: center;
            font-size: inherit
        }

        .elementor-widget .elementor-icon-list-icon + .elementor-icon-list-text {
            align-self: center;
            padding-left: 5px
        }

        .elementor-widget .elementor-icon-list-icon {
            display: flex
        }

        .elementor-widget .elementor-icon-list-icon i {
            width: 1.25em;
            font-size: var(--e-icon-list-icon-size)
        }

        .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon {
            text-align: var(--e-icon-list-icon-align)
        }

        .elementor-widget.elementor-list-item-link-full_width a {
            width: 100%
        }

        .elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after {
            left: 0
        }

        .elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after {
            right: 0
        }

        @media (min-width: -1px) {
            .elementor-widget:not(.elementor-widescreen-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-widescreen-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @media (max-width: -1px) {
            .elementor-widget:not(.elementor-laptop-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-laptop-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @media (max-width: -1px) {
            .elementor-widget:not(.elementor-tablet_extra-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-tablet_extra-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @media (max-width: 1024px) {
            .elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @media (max-width: -1px) {
            .elementor-widget:not(.elementor-mobile_extra-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-mobile_extra-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        @media (max-width: 767px) {
            .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
                left: 0
            }

            .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
                right: 0
            }
        }

        .elementor-widget-image {
            text-align: center
        }

        .elementor-widget-image a {
            display: inline-block
        }

        .elementor-widget-image img {
            vertical-align: middle;
            display: inline-block
        }

        .elementor-column .elementor-spacer-inner {
            height: var(--spacer-size)
        }

        .elementor-kit-10750 {
            --e-global-color-primary: #0D509C;
            --e-global-color-accent: #F44336;
            --e-global-color-2668858c: #6EC1E4;
            --e-global-color-12e07cf6: #7A7A7A;
            --e-global-color-25250f0e: #4054B2;
            --e-global-color-42c626ee: #23A455;
            --e-global-color-42ebf043: #000;
            --e-global-color-3654844: #FFF;
            --e-global-color-202dc50f: #FF9800;
            --e-global-color-fbfee34: #00209F;
            --e-global-color-7d5d97a: #C40E37;
            --e-global-color-70f6924: #280A6F;
            --e-global-color-1761d5f: #333333;
            --e-global-color-cddfb78: #555555;
            --e-global-color-b4c21f1: #757575;
            --e-global-color-ed769e4: #4F4F4F;
            --e-global-color-4871044: #08B0F7;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Arial";
            --e-global-typography-text-font-size: 18px;
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
            font-family: "Arial", Sans-serif
        }

        .elementor-kit-10750 a {
            color: var(--e-global-color-primary)
        }

        .elementor-kit-10750 h1 {
            font-size: 32px
        }

        .elementor-kit-10750 h2 {
            font-size: 28px
        }

        .elementor-kit-10750 h3 {
            font-size: 24px
        }

        .elementor-kit-10750 h4 {
            font-size: 20px
        }

        .elementor-kit-10750 button, .elementor-kit-10750 .elementor-button {
            color: var(--e-global-color-3654844);
            background-color: #0D509C;
            border-radius: 5px 5px 5px 5px;
            padding: 10px 10px 10px 10px
        }

        .elementor-kit-10750 label {
            font-size: 14px
        }

        .elementor-kit-10750 input:not([type="button"]):not([type="submit"]), .elementor-kit-10750 textarea, .elementor-kit-10750 .elementor-field-textual {
            font-size: 14px
        }

        .elementor-section.elementor-section-boxed > .elementor-container {
            max-width: 1140px
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px
        }

        .elementor-element {
            --widgets-spacing: 20px
        }

        @media (max-width: 1024px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 1024px
            }
        }

        @media (max-width: 767px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 767px
            }
        }

        .elementor-location-header:before {
            content: "";
            display: table;
            clear: both
        }

        [data-elementor-type=popup]:not(.elementor-edit-area) {
            display: none
        }

        .elementor-search-form {
            display: block
        }

        .elementor-search-form input[type=search] {
            margin: 0;
            border: 0;
            padding: 0;
            display: inline-block;
            vertical-align: middle;
            white-space: normal;
            background: none;
            line-height: 1;
            min-width: 0;
            font-size: 15px;
            -webkit-appearance: none;
            -moz-appearance: none
        }

        .elementor-search-form__container {
            display: flex;
            overflow: hidden;
            border: 0 solid transparent;
            min-height: 50px
        }

        .elementor-search-form__container:not(.elementor-search-form--full-screen) {
            background: #eceeef
        }

        .elementor-search-form__input {
            flex-basis: 100%;
            color: #55595c
        }

        .elementor-search-form__input::-moz-placeholder {
            color: inherit;
            font-family: inherit;
            opacity: .6
        }

        .elementor-search-form--skin-full_screen .elementor-search-form input[type=search].elementor-search-form__input {
            font-size: 50px;
            text-align: center;
            border: solid #fff;
            border-width: 0 0 1px;
            line-height: 1.5;
            color: #fff
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__toggle {
            display: inline-block;
            vertical-align: middle;
            color: var(--e-search-form-toggle-color, #494c4f);
            font-size: var(--e-search-form-toggle-size, 33px)
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__toggle i {
            position: relative;
            display: block;
            width: var(--e-search-form-toggle-size, 33px);
            height: var(--e-search-form-toggle-size, 33px);
            background-color: var(--e-search-form-toggle-background-color, rgba(0, 0, 0, .05));
            border: var(--e-search-form-toggle-border-width, 0) solid var(--e-search-form-toggle-color, #494c4f);
            border-radius: var(--e-search-form-toggle-border-radius, 3px)
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__toggle i:before {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__toggle i:before {
            font-size: var(--e-search-form-toggle-icon-size, .55em)
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__container {
            align-items: center;
            position: fixed;
            z-index: 9998;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 100vh;
            padding: 0 15%;
            background-color: rgba(0, 0, 0, .8)
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__container:not(.elementor-search-form--full-screen) {
            overflow: hidden;
            opacity: 0;
            transform: scale(0)
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__container:not(.elementor-search-form--full-screen) .dialog-lightbox-close-button {
            display: none
        }

        .elementor-icon-list-items .elementor-icon-list-item .elementor-icon-list-text {
            display: inline-block
        }

        .e-form__buttons {
            flex-wrap: wrap
        }

        .e-form__buttons {
            display: flex
        }

        .elementor-form .elementor-button > span {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .elementor-form .elementor-button .elementor-button-text {
            white-space: normal;
            flex-grow: 0
        }

        .elementor-skin-carousel .elementor-main-swiper {
            height: 230px
        }

        .elementor-carousel-image {
            background: no-repeat 50%;
            background-size: cover;
            height: 100%;
            position: relative
        }

        .swiper-slide {
            will-change: transform;
            border-style: solid;
            border-width: 0;
            overflow: hidden
        }

        .swiper-slide a {
            display: inline
        }

        .elementor-item:after, .elementor-item:before {
            display: block;
            position: absolute
        }

        .elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):after, .elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):before {
            opacity: 0
        }

        .elementor-nav-menu--main .elementor-nav-menu a {
            padding: 13px 20px
        }

        .elementor-nav-menu--layout-horizontal {
            display: flex
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu {
            display: flex;
            flex-wrap: wrap
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu a {
            white-space: nowrap;
            flex-grow: 1
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li {
            display: flex
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:first-child) > a {
            -webkit-margin-start: var(--e-nav-menu-horizontal-menu-item-margin);
            margin-inline-start: var(--e-nav-menu-horizontal-menu-item-margin)
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:last-child) > a {
            -webkit-margin-end: var(--e-nav-menu-horizontal-menu-item-margin);
            margin-inline-end: var(--e-nav-menu-horizontal-menu-item-margin)
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu > li:not(:last-child):after {
            content: var(--e-nav-menu-divider-content, none);
            height: var(--e-nav-menu-divider-height, 35%);
            border-left: var(--e-nav-menu-divider-width, 2px) var(--e-nav-menu-divider-style, solid) var(--e-nav-menu-divider-color, #000);
            border-bottom-color: var(--e-nav-menu-divider-color, #000);
            border-right-color: var(--e-nav-menu-divider-color, #000);
            border-top-color: var(--e-nav-menu-divider-color, #000);
            align-self: center
        }

        .elementor-nav-menu__align-right .elementor-nav-menu {
            margin-left: auto;
            justify-content: flex-end
        }

        .elementor-widget-nav-menu .elementor-widget-container {
            display: flex;
            flex-direction: column
        }

        .elementor-nav-menu {
            position: relative;
            z-index: 2
        }

        .elementor-nav-menu:after {
            content: " ";
            display: block;
            height: 0;
            font: 0/0 serif;
            clear: both;
            visibility: hidden;
            overflow: hidden
        }

        .elementor-nav-menu, .elementor-nav-menu li {
            display: block;
            list-style: none;
            margin: 0;
            padding: 0;
            line-height: normal
        }

        .elementor-nav-menu a, .elementor-nav-menu li {
            position: relative
        }

        .elementor-nav-menu li {
            border-width: 0
        }

        .elementor-nav-menu a {
            display: flex;
            align-items: center
        }

        .elementor-nav-menu a {
            padding: 10px 20px;
            line-height: 20px
        }

        .elementor-nav-menu--dropdown {
            background-color: #fff;
            font-size: 13px
        }

        .elementor-nav-menu--dropdown.elementor-nav-menu__container {
            margin-top: 10px;
            transform-origin: top;
            overflow-y: auto;
            overflow-x: hidden
        }

        .elementor-nav-menu--dropdown a {
            color: #494c4f
        }

        @media (min-width: 1025px) {
            .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--dropdown {
                display: none
            }

            .elementor-nav-menu--dropdown-tablet nav.elementor-nav-menu--dropdown.elementor-nav-menu__container {
                overflow-y: hidden
            }
        }

        @media (max-width: 1024px) {
            .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--main {
                display: none
            }
        }

        body, html {
            box-sizing: border-box
        }

        .elementor-widget-heading .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-text-editor {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-size: var(--e-global-typography-text-font-size);
            font-weight: var(--e-global-typography-text-font-weight)
        }

        .elementor-widget-button .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent)
        }

        .elementor-widget-icon.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-primary)
        }

        .elementor-widget-icon.elementor-view-framed .elementor-icon {
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary)
        }

        .elementor-widget-icon.elementor-view-framed .elementor-icon {
            fill: var(--e-global-color-primary)
        }

        .elementor-widget-icon-list .elementor-icon-list-icon i {
            color: var(--e-global-color-primary)
        }

        .elementor-widget-icon-list .elementor-icon-list-item > a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-size: var(--e-global-typography-text-font-size);
            font-weight: var(--e-global-typography-text-font-weight)
        }

        .elementor-widget-counter .elementor-counter-number-wrapper {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-counter .elementor-counter-title {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight)
        }

        .elementor-field{{$ID??''}}.elementor-button {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-size: var(--e-global-typography-text-font-size);
            font-weight: var(--e-global-typography-text-font-weight);
            background-color: var(--e-global-color-primary)
        }

        .elementor-widget-form .elementor-field-group > label {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-size: var(--e-global-typography-text-font-size);
            font-weight: var(--e-global-typography-text-font-weight)
        }

        .elementor-widget-form .elementor-field-group .elementor-field {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-size: var(--e-global-typography-text-font-size);
            font-weight: var(--e-global-typography-text-font-weight)
        }

        .elementor-widget-form .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight)
        }

        .elementor-widget-form .elementor-button[type="submit"] {
            background-color: var(--e-global-color-accent)
        }

        .elementor-widget-form {
            --e-form-steps-indicator-active-primary-color: var(--e-global-color-accent);
            --e-form-steps-indicator-completed-primary-color: var(--e-global-color-accent);
            --e-form-steps-indicator-progress-color: var(--e-global-color-accent)
        }

        .elementor-widget-nav-menu .elementor-nav-menu .elementor-item {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight)
        }

        .elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before, .elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
            background-color: var(--e-global-color-accent)
        }

        .elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-item {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight)
        }

        .elementor-widget-search-form input[type="search"].elementor-search-form__input {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-size: var(--e-global-typography-text-font-size);
            font-weight: var(--e-global-typography-text-font-weight)
        }

        @media (max-width: 1024px) {
            .elementor-widget-text-editor {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-widget-icon-list .elementor-icon-list-item > a {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-field{{$ID??''}}.elementor-button {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-widget-form .elementor-field-group > label {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-widget-form .elementor-field-group .elementor-field {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-widget-search-form input[type="search"].elementor-search-form__input {
                font-size: var(--e-global-typography-text-font-size)
            }
        }

        @media (max-width: 767px) {
            .elementor-widget-text-editor {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-widget-icon-list .elementor-icon-list-item > a {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-field{{$ID??''}}.elementor-button {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-widget-form .elementor-field-group > label {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-widget-form .elementor-field-group .elementor-field {
                font-size: var(--e-global-typography-text-font-size)
            }

            .elementor-widget-search-form input[type="search"].elementor-search-form__input {
                font-size: var(--e-global-typography-text-font-size)
            }
        }

        .elementor-174 .elementor-element.elementor-element-8d2a4c7 {
            padding: 10px 0px 10px 0px
        }

        .elementor-174 .elementor-element.elementor-element-06153c3:not(.elementor-motion-effects-element-type-background) {
            background-color: #f7f5f4
        }

        .elementor-174 .elementor-element.elementor-element-06153c3 {
            padding: 20px 0px 0px 0px
        }

        .elementor-174 .elementor-element.elementor-element-c2167f6 .elementor-icon-wrapper {
            text-align: center
        }

        .elementor-174 .elementor-element.elementor-element-c2167f6 .elementor-icon {
            font-size: 38px
        }

        .elementor-174 .elementor-element.elementor-element-0d3b378 .elementor-counter-number-wrapper {
            color: #0d509c;
            font-family: "Roboto", Sans-serif;
            font-size: 32px;
            font-weight: 500
        }

        .elementor-174 .elementor-element.elementor-element-0d3b378 .elementor-counter-title {
            color: #0d509c;
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            line-height: 1.6em
        }

        .elementor-174 .elementor-element.elementor-element-f284d95 {
            --spacer-size: 10px
        }

        .elementor-174 .elementor-element.elementor-element-c9b8816 .elementor-icon-wrapper {
            text-align: center
        }

        .elementor-174 .elementor-element.elementor-element-c9b8816.elementor-view-framed .elementor-icon {
            color: #0D509C;
            border-color: #0D509C
        }

        .elementor-174 .elementor-element.elementor-element-c9b8816.elementor-view-framed .elementor-icon {
            fill: #0D509C
        }

        .elementor-174 .elementor-element.elementor-element-c9b8816 .elementor-icon {
            font-size: 38px
        }

        .elementor-174 .elementor-element.elementor-element-bd493b2 .elementor-counter-number-wrapper {
            color: #0d509c;
            font-family: "Roboto", Sans-serif;
            font-size: 32px;
            font-weight: 500
        }

        .elementor-174 .elementor-element.elementor-element-bd493b2 .elementor-counter-title {
            color: #0d509c;
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            line-height: 1.6em
        }

        .elementor-174 .elementor-element.elementor-element-9ba00c0 {
            --spacer-size: 10px
        }

        .elementor-174 .elementor-element.elementor-element-611792f .elementor-icon-wrapper {
            text-align: center
        }

        .elementor-174 .elementor-element.elementor-element-611792f.elementor-view-framed .elementor-icon {
            color: #0D509C;
            border-color: #0D509C
        }

        .elementor-174 .elementor-element.elementor-element-611792f.elementor-view-framed .elementor-icon {
            fill: #0D509C
        }

        .elementor-174 .elementor-element.elementor-element-611792f .elementor-icon {
            font-size: 38px
        }

        .elementor-174 .elementor-element.elementor-element-28e17cd .elementor-counter-number-wrapper {
            color: #0d509c;
            font-family: "Roboto", Sans-serif;
            font-size: 32px;
            font-weight: 500
        }

        .elementor-174 .elementor-element.elementor-element-28e17cd .elementor-counter-title {
            color: #0d509c;
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            line-height: 1.6em
        }

        .elementor-174 .elementor-element.elementor-element-fc6a6dd {
            --spacer-size: 10px
        }

        .elementor-174 .elementor-element.elementor-element-05671f5 .elementor-icon-wrapper {
            text-align: center
        }

        .elementor-174 .elementor-element.elementor-element-05671f5.elementor-view-framed .elementor-icon {
            color: #0D509C;
            border-color: #0D509C
        }

        .elementor-174 .elementor-element.elementor-element-05671f5.elementor-view-framed .elementor-icon {
            fill: #0D509C
        }

        .elementor-174 .elementor-element.elementor-element-05671f5 .elementor-icon {
            font-size: 38px
        }

        .elementor-174 .elementor-element.elementor-element-0d436dc .elementor-counter-number-wrapper {
            color: #0d509c;
            font-family: "Roboto", Sans-serif;
            font-size: 32px;
            font-weight: 500
        }

        .elementor-174 .elementor-element.elementor-element-0d436dc .elementor-counter-title {
            color: #0d509c;
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            line-height: 1.6em
        }

        .elementor-174 .elementor-element.elementor-element-a50a698 {
            --spacer-size: 10px
        }

        .elementor-174 .elementor-element.elementor-element-d4696b4 {
            margin-top: 20px;
            margin-bottom: 0px
        }

        .elementor-174 .elementor-element.elementor-element-49524d6 {
            text-align: center
        }

        .elementor-174 .elementor-element.elementor-element-49524d6 .elementor-heading-title {
            color: #0D509C;
            font-family: "Roboto", Sans-serif;
            font-weight: 400;
            text-transform: uppercase;
            font-style: normal;
            text-decoration: none;
            line-height: 1em
        }

        .elementor-174 .elementor-element.elementor-element-49524d6 > .elementor-widget-container {
            padding: 10px 0px 10px 0px
        }

        .elementor-174 .elementor-element.elementor-element-203cf98 .elementor-main-swiper {
            height: 378px
        }

        .elementor-174 .elementor-element.elementor-element-203cf98 .elementor-main-swiper .swiper-slide {
            border-radius: 5px
        }

        @media (max-width: 1024px) {
            .elementor-174 .elementor-element.elementor-element-203cf98 .elementor-main-swiper {
                height: 300px
            }
        }

        @media (max-width: 767px) {
            .elementor-174 .elementor-element.elementor-element-8d2a4c7 {
                padding: 0px 0px 0px 0px
            }

            .elementor-174 .elementor-element.elementor-element-f5f345f {
                width: 50%
            }

            .elementor-174 .elementor-element.elementor-element-c2167f6 .elementor-icon {
                font-size: 32px
            }

            .elementor-174 .elementor-element.elementor-element-5950186 {
                width: 50%
            }

            .elementor-174 .elementor-element.elementor-element-c9b8816 .elementor-icon {
                font-size: 32px
            }

            .elementor-174 .elementor-element.elementor-element-8c36b24 {
                width: 50%
            }

            .elementor-174 .elementor-element.elementor-element-611792f .elementor-icon {
                font-size: 32px
            }

            .elementor-174 .elementor-element.elementor-element-90ecce8 {
                width: 50%
            }

            .elementor-174 .elementor-element.elementor-element-05671f5 .elementor-icon {
                font-size: 32px
            }

            .elementor-174 .elementor-element.elementor-element-203cf98 .elementor-main-swiper {
                height: 258px;
                width: 339px
            }
        }

        .elementor-20880 .elementor-element.elementor-element-cb01285 {
            border-style: solid;
            border-width: 0px 0px 1px 0px;
            border-color: #E5E5E5
        }

        .elementor-20880 .elementor-element.elementor-element-60fc103 {
            color: var(--e-global-color-primary);
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            font-weight: 500
        }

        .elementor-20880 .elementor-element.elementor-element-60fc103 > .elementor-widget-container {
            padding: 10px 0px 0px 10px
        }

        .elementor-20880 .elementor-element.elementor-element-b59c2bb .elementor-search-form {
            text-align: right
        }

        .elementor-20880 .elementor-element.elementor-element-b59c2bb .elementor-search-form__toggle {
            --e-search-form-toggle-size: 32px;
            --e-search-form-toggle-color: var(--e-global-color-primary);
            --e-search-form-toggle-background-color: #02010100
        }

        .elementor-20880 .elementor-element.elementor-element-b59c2bb.elementor-search-form--skin-full_screen input[type="search"].elementor-search-form__input {
            border-width: 1px 1px 1px 1px;
            border-radius: 10px
        }

        .elementor-20880 .elementor-element.elementor-element-b59c2bb > .elementor-widget-container {
            padding: 5px 0px 0px 0px
        }

        .elementor-20880 .elementor-element.elementor-element-277796a .elementor-nav-menu .elementor-item {
            font-size: 13px;
            font-weight: 500
        }

        .elementor-20880 .elementor-element.elementor-element-277796a .elementor-nav-menu--main .elementor-item {
            color: var(--e-global-color-primary);
            fill: var(--e-global-color-primary);
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 10px;
            padding-bottom: 10px
        }

        .elementor-20880 .elementor-element.elementor-element-7621bb2 {
            border-style: solid;
            border-width: 0px 0px 1px 0px;
            border-color: #E5E5E5
        }

        .elementor-20880 .elementor-element.elementor-element-c189633 img {
            width: 100%
        }

        .elementor-20880 .elementor-element.elementor-element-c189633 > .elementor-widget-container {
            padding: 15px 0px 15px 0px
        }

        .elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu {
            justify-content: flex-end !important
        }

        .jet-desktop-menu-active .elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu > .jet-menu-item {
            flex-grow: 0
        }

        .elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu .jet-menu-item .top-level-link {
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            color: #0D509C;
            margin: 5px 5px 5px 5px
        }

        .elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu .jet-menu-item.jet-current-menu-item .top-level-link {
            color: #FF9800
        }

        .elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu ul.jet-sub-menu {
            background-color: var(--e-global-color-primary);
            border-radius: 5px 5px 5px 5px
        }

        .elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu li.jet-sub-menu-item .sub-level-link {
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            color: var(--e-global-color-3654844)
        }

        .elementor-20880 .elementor-element.elementor-element-4a35e75 > .elementor-widget-container {
            padding: 15px 0px 0px 0px
        }

        .elementor-20880 .elementor-element.elementor-element-365dd88 .elementor-button {
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            fill: var(--e-global-color-3654844);
            color: var(--e-global-color-3654844);
            background-color: var(--e-global-color-202dc50f);
            border-radius: 90px 90px 90px 90px;
            padding: 10px 15px 10px 15px
        }

        .elementor-20880 .elementor-element.elementor-element-365dd88 > .elementor-widget-container {
            padding: 23px 0px 0px 0px
        }

        @media (min-width: 768px) {
            .elementor-20880 .elementor-element.elementor-element-1bee1f2 {
                width: 37.279%
            }

            .elementor-20880 .elementor-element.elementor-element-90c4824 {
                width: 29.026%
            }

            .elementor-20880 .elementor-element.elementor-element-3339d72 {
                width: 18%
            }

            .elementor-20880 .elementor-element.elementor-element-f9ac3e1 {
                width: 66.664%
            }

            .elementor-20880 .elementor-element.elementor-element-5fd0382 {
                width: 15%
            }
        }

        @media (max-width: 1024px) {
            .elementor-20880 .elementor-element.elementor-element-60fc103 {
                text-align: center
            }
        }

        @media (max-width: 767px) {
            .elementor-20880 .elementor-element.elementor-element-60fc103 > .elementor-widget-container {
                padding: 10px 0px 10px 0px
            }

            .elementor-20880 .elementor-element.elementor-element-3339d72 {
                width: 60%
            }

            .elementor-20880 .elementor-element.elementor-element-c189633 img {
                width: 100%
            }

            .elementor-20880 .elementor-element.elementor-element-c189633 > .elementor-widget-container {
                margin: 5px 5px 5px 5px
            }

            .elementor-20880 .elementor-element.elementor-element-f9ac3e1 {
                width: 40%
            }

            .elementor-20880 .elementor-element.elementor-element-4a35e75 > .elementor-widget-container {
                padding: 30px 15px 0px 0px
            }
        }

        @media (max-width: 1024px) and (min-width: 768px) {
            .elementor-20880 .elementor-element.elementor-element-a5fce40 {
                width: 100%
            }

            .elementor-20880 .elementor-element.elementor-element-1bee1f2 {
                width: 100%
            }
        }

        .elementor-20951 .elementor-element.elementor-element-e8ea893 .elementor-icon-wrapper {
            text-align: center
        }

        .elementor-20951 .elementor-element.elementor-element-e8ea893.elementor-view-stacked .elementor-icon {
            background-color: #BFBFBF
        }

        .elementor-20951 .elementor-element.elementor-element-e8ea893 .elementor-icon {
            font-size: 22px
        }

        .elementor-20951 .elementor-element.elementor-element-e8ea893 {
            width: initial;
            max-width: initial;
            bottom: 100px
        }

        body:not(.rtl) .elementor-20951 .elementor-element.elementor-element-e8ea893 {
            right: 35px
        }

        .elementor-16420 .elementor-element.elementor-element-2a4211e {
            text-align: center
        }

        .elementor-16420 .elementor-element.elementor-element-2a4211e .elementor-heading-title {
            font-family: "Roboto", Sans-serif;
            font-weight: 600
        }

        .elementor-16420 .elementor-element.elementor-element-2a4211e > .elementor-widget-container {
            padding: 0px 0px 10px 0px
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 .elementor-field-group {
            padding-right: calc(10px / 2);
            padding-left: calc(10px / 2);
            margin-bottom: 21px
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 .elementor-form-fields-wrapper {
            margin-left: calc(-10px / 2);
            margin-right: calc(-10px / 2);
            margin-bottom: -21px
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 .elementor-field-group.recaptcha_v3-bottomleft {
            margin-bottom: 0
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 .elementor-field-group .elementor-field {
            font-family: "Roboto", Sans-serif;
            font-size: 13px;
            font-weight: 500
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 .elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper) {
            background-color: #ffffff;
            border-width: 0px 0px 0px 0px;
            border-radius: 90px 90px 90px 90px
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 .elementor-button[type="submit"] {
            background-color: var(--e-global-color-202dc50f);
            color: #ffffff
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 .elementor-button {
            border-radius: 90px 90px 90px 90px
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 {
            --e-form-steps-indicators-spacing: 20px;
            --e-form-steps-indicator-padding: 30px;
            --e-form-steps-indicator-inactive-secondary-color: #ffffff;
            --e-form-steps-indicator-active-secondary-color: #ffffff;
            --e-form-steps-indicator-completed-secondary-color: #ffffff;
            --e-form-steps-divider-width: 1px;
            --e-form-steps-divider-gap: 10px
        }

        .elementor-16420 .elementor-element.elementor-element-9423370 > .elementor-widget-container {
            padding: 0px 10px 0px 10px
        }

        .elementor-15925 .elementor-element.elementor-element-db2ccbc {
            text-align: center
        }

        .elementor-15925 .elementor-element.elementor-element-db2ccbc .elementor-heading-title {
            color: var(--e-global-color-3654844);
            font-family: "Roboto Condensed", Sans-serif
        }

        .elementor-15925 .elementor-element.elementor-element-db2ccbc > .elementor-widget-container {
            padding: 20px 0px 0px 0px
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group {
            padding-right: calc(10px / 2);
            padding-left: calc(10px / 2);
            margin-bottom: 20px
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-form-fields-wrapper {
            margin-left: calc(-10px / 2);
            margin-right: calc(-10px / 2);
            margin-bottom: -20px
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group.recaptcha_v3-bottomleft {
            margin-bottom: 0
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group .elementor-field {
            color: var(--e-global-color-1761d5f)
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group .elementor-field {
            font-family: "Roboto Condensed", Sans-serif;
            font-size: 16px;
            font-weight: 500
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper) {
            background-color: #ffffff;
            border-color: var(--e-global-color-3654844);
            border-width: 0px 0px 0px 0px;
            border-radius: 90px 90px 90px 90px
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-button {
            font-family: "Roboto Condensed", Sans-serif;
            font-weight: 600;
            border-radius: 90px 90px 90px 90px
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-button[type="submit"] {
            background-color: var(--e-global-color-202dc50f);
            color: #ffffff
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 {
            --e-form-steps-indicators-spacing: 20px;
            --e-form-steps-indicator-padding: 30px;
            --e-form-steps-indicator-inactive-secondary-color: #ffffff;
            --e-form-steps-indicator-active-secondary-color: #ffffff;
            --e-form-steps-indicator-completed-secondary-color: #ffffff;
            --e-form-steps-divider-width: 1px;
            --e-form-steps-divider-gap: 10px
        }

        .elementor-15925 .elementor-element.elementor-element-5cf7125 > .elementor-widget-container {
            padding: 20px 20px 20px 20px
        }

        @media (max-width: 767px) {
            .elementor-15925 .elementor-element.elementor-element-db2ccbc .elementor-heading-title {
                font-size: 22px;
                line-height: 1.9em
            }
        }

        .fa, .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-lg {
            font-size: 1.33333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-angle-down:before {
            content: "\f107"
        }

        .fa-caret-right:before {
            content: "\f0da"
        }

        .fa-chevron-up:before {
            content: "\f077"
        }

        .fa-home:before {
            content: "\f015"
        }

        .fa-search:before {
            content: "\f002"
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot);
            src: url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url({{asset('public/assets/fonts/awesome/fa-solid-900.woff2')}}) format("woff2"), url({{asset('public/assets/fonts/awesome/fa-solid-900.woff')}}) format("woff"), url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.ttf) format("truetype"), url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.svg#fontawesome) format("svg")
        }

        .fa, .fas {
            font-family: "Font Awesome 5 Free";
            font-weight: 900
        }

        .elementor-20924 .elementor-element.elementor-element-8f0d5cb:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap {
            background-color: var(--e-global-color-primary)
        }

        .elementor-20924 .elementor-element.elementor-element-8f0d5cb > .elementor-element-populated {
            border-radius: 5px 0px 0px 5px
        }

        .elementor-20924 .elementor-element.elementor-element-909a84c .elementor-heading-title {
            color: var(--e-global-color-3654844);
            font-size: 13px;
            font-weight: 500
        }

        .elementor-20924 .elementor-element.elementor-element-909a84c > .elementor-widget-container {
            padding: 10px 5px 5px 5px
        }

        .elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(13px / 2)
        }

        .elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(13px / 2)
        }

        .elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-icon i {
            color: var(--e-global-color-3654844)
        }

        .elementor-20924 .elementor-element.elementor-element-684374e {
            --e-icon-list-icon-size: 12px;
            --e-icon-list-icon-align: right;
            --e-icon-list-icon-margin: 0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25)
        }

        .elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-text {
            color: var(--e-global-color-3654844)
        }

        .elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-item > a {
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            font-weight: 400
        }

        .elementor-20924 .elementor-element.elementor-element-d4b0de5:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap {
            background-color: var(--e-global-color-primary)
        }

        .elementor-20924 .elementor-element.elementor-element-2162367 .elementor-heading-title {
            color: var(--e-global-color-3654844);
            font-size: 13px;
            font-weight: 500
        }

        .elementor-20924 .elementor-element.elementor-element-2162367 > .elementor-widget-container {
            padding: 10px 5px 5px 5px
        }

        .elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(13px / 2)
        }

        .elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(13px / 2)
        }

        .elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-icon i {
            color: var(--e-global-color-3654844)
        }

        .elementor-20924 .elementor-element.elementor-element-4a443eb {
            --e-icon-list-icon-size: 12px;
            --e-icon-list-icon-align: right;
            --e-icon-list-icon-margin: 0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25)
        }

        .elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-text {
            color: var(--e-global-color-3654844)
        }

        .elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-item > a {
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            font-weight: 400
        }

        .elementor-20924 .elementor-element.elementor-element-dd691cd:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap {
            background-color: var(--e-global-color-primary)
        }

        .elementor-20924 .elementor-element.elementor-element-6f1e6be .elementor-heading-title {
            color: var(--e-global-color-3654844);
            font-size: 13px;
            font-weight: 500
        }

        .elementor-20924 .elementor-element.elementor-element-6f1e6be > .elementor-widget-container {
            padding: 10px 5px 5px 5px
        }

        .elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(13px / 2)
        }

        .elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(13px / 2)
        }

        .elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-icon i {
            color: var(--e-global-color-3654844)
        }

        .elementor-20924 .elementor-element.elementor-element-18a1dae {
            --e-icon-list-icon-size: 12px;
            --e-icon-list-icon-align: right;
            --e-icon-list-icon-margin: 0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25)
        }

        .elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-text {
            color: var(--e-global-color-3654844)
        }

        .elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-item > a {
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            font-weight: 400
        }

        .elementor-20924 .elementor-element.elementor-element-18a1dae > .elementor-widget-container {
            padding: 0px 0px 15px 0px
        }

        .elementor-20924 .elementor-element.elementor-element-be43f4c:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap {
            background-color: var(--e-global-color-primary)
        }

        .elementor-20924 .elementor-element.elementor-element-be43f4c > .elementor-element-populated {
            border-radius: 0px 5px 5px 0px
        }

        .elementor-20924 .elementor-element.elementor-element-c0ee130 .elementor-heading-title {
            color: var(--e-global-color-3654844);
            font-size: 13px;
            font-weight: 500
        }

        .elementor-20924 .elementor-element.elementor-element-c0ee130 > .elementor-widget-container {
            padding: 10px 5px 5px 5px
        }

        .elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(13px / 2)
        }

        .elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(13px / 2)
        }

        .elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-icon i {
            color: var(--e-global-color-3654844)
        }

        .elementor-20924 .elementor-element.elementor-element-d71f05f {
            --e-icon-list-icon-size: 12px;
            --e-icon-list-icon-align: right;
            --e-icon-list-icon-margin: 0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25)
        }

        .elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-text {
            color: var(--e-global-color-3654844)
        }

        .elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-item > a {
            font-family: "Roboto", Sans-serif;
            font-size: 14px;
            font-weight: 400
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        .fadeIn {
            animation-name: fadeIn
        }

        .wp-block-themepunch-revslider {
            position: relative
        }

        @font-face {
            font-family: 'revicons';
            src: url(https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.eot?5510888);
            src: url(https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.eot?5510888#iefix) format('embedded-opentype'), url({{asset('public/assets/fonts/revicons/revicons.woff')}}) format('woff'), url({{asset('assets/fonts/revicons/revicons.ttf')}}) format('truetype'), url(https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.svg?5510888#revicons) format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: swap
        }

        rs-module-wrap {
            visibility: hidden
        }

        rs-module-wrap, rs-module-wrap * {
            box-sizing: border-box
        }

        rs-module-wrap {
            position: relative;
            z-index: 1;
            width: 100%;
            display: block
        }

        rs-module {
            position: relative;
            overflow: hidden;
            display: block
        }

        rs-sbg {
            display: block
        }

        rs-sbg-px, rs-sbg-wrap {
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: 0;
            width: 100%;
            height: 100%;
            display: block
        }

        rs-module img {
            max-width: none !important;
            margin: 0px;
            padding: 0px;
            border: none
        }

        rs-slides, rs-slide, rs-slide:before {
            position: absolute;
            text-indent: 0em;
            top: 0px;
            left: 0px
        }

        rs-slide, rs-slide:before {
            display: block;
            visibility: hidden
        }

        rs-module rs-layer, rs-module .rs-layer {
            opacity: 0;
            position: relative;
            visibility: hidden;
            display: block;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale;
            z-index: 1;
            font-display: swap
        }

        rs-module rs-mask-wrap .rs-layer, rs-module rs-mask-wrap *:last-child {
            margin-bottom: 0
        }

        rs-layer:not(.rs-wtbindex), .rs-layer:not(.rs-wtbindex), .rs-layer *:not(.rs-wtbindex) {
            outline: none !important
        }

        rs-layer-wrap, rs-loop-wrap, rs-mask-wrap {
            display: block
        }

        rs-layer-wrap, rs-mask-wrap {
            transform-style: flat
        }

        @-moz-document url-prefix() {
            rs-layer-wrap, rs-mask-wrap {
                perspective: none
            }
        }

        rs-mask-wrap {
            overflow: hidden
        }

        .rs-layer img, rs-layer img {
            vertical-align: top
        }

        .rs-parallax-wrap.rs-layer-hidden {
            visibility: hidden !important;
            display: none !important
        }

        rs-progress {
            visibility: hidden;
            position: absolute;
            z-index: 200;
            width: 100%;
            height: 100%
        }

        rs-progress-bar {
            display: block;
            z-index: 20;
            box-sizing: border-box;
            background-clip: content-box;
            position: absolute;
            line-height: 0px;
            width: 100%;
            height: 100%
        }

        .rs-layer img {
            background: transparent;
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)";
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF, endColorstr=#00FFFFFF)
        }

        .rs-layer.slidelink {
            width: 100%;
            height: 100%
        }

        rs-bullet, rs-bullets, rs-arrow {
            display: block
        }

        .tp-bullets {
            position: absolute;
            display: block;
            z-index: 1000;
            top: 0px;
            left: 0px
        }

        .tp-bullet {
            width: 15px;
            height: 15px;
            position: absolute;
            background: #fff;
            background: rgba(255, 255, 255, 0.3)
        }

        .tp-bullet.selected {
            background: #fff
        }

        .tparrows {
            background: #000;
            background: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            position: absolute;
            display: block;
            z-index: 1000
        }

        .tparrows:before {
            font-family: "revicons";
            font-size: 15px;
            color: #fff;
            display: block;
            line-height: 40px;
            text-align: center
        }

        .tparrows.tp-leftarrow:before {
            content: '\e824'
        }

        .tparrows.tp-rightarrow:before {
            content: '\e825'
        }

        rs-sbg canvas {
            overflow: hidden;
            z-index: 5;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }</style>
    <link rel="stylesheet preload prefetch" href="{{asset('public/css/1ab8181ff7d8c241e0921085c97e1980.css')}}" as="style" media="all"/>
    <meta name="description" content="Công Ty Tư vấn Du học New Ocean, Trung Tâm Tư Vấn Du Học hỗ trợ chuyên sâu dịch vụ về du học như tư vấn chọn trường, xin thư mời, phỏng vấn"/>
    <link rel="canonical" href="https://newocean.edu.vn/"/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học"/>
    <meta property="og:description" content="Công Ty Tư vấn Du học New Ocean, Trung Tâm Tư Vấn Du Học hỗ trợ chuyên sâu dịch vụ về du học như tư vấn chọn trường, xin thư mời, phỏng vấn"/>
    <meta property="og:url" content="https://newocean.edu.vn/"/>
    <meta property="og:site_name" content="Du học New Ocean™"/>
    <meta property="article:publisher" content="https://www.facebook.com/uocmoduhoc"/>
    <meta property="article:modified_time" content="2023-04-20T09:40:49+00:00"/>
    <meta property="og:image" content="https://newocean.edu.vn/wp-content/uploads/2020/05/Tu-van-Du-hoc-1200x628-1.jpg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="628"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:label1" content="Ước tính thời gian đọc"/>
    <meta name="twitter:data1" content="10 phút"/>
    <script type="application/ld+json" class="yoast-schema-graph">
        {"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://newocean.edu.vn/","url":"https://newocean.edu.vn/","name":"Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học","isPartOf":{"@id":"https://newocean.edu.vn/#website"},"about":{"@id":"https://newocean.edu.vn/#organization"},"primaryImageOfPage":{"@id":"https://newocean.edu.vn/#primaryimage"},"image":{"@id":"https://newocean.edu.vn/#primaryimage"},"thumbnailUrl":"https://newocean.edu.vn/wp-content/uploads/2020/05/Tu-van-Du-hoc-1200x628-1.jpg","datePublished":"2019-11-26T12:36:36+00:00","dateModified":"2023-04-20T09:40:49+00:00","description":"Công Ty Tư vấn Du học New Ocean, Trung Tâm Tư Vấn Du Học hỗ trợ chuyên sâu dịch vụ về du học như tư vấn chọn trường, xin thư mời, phỏng vấn","breadcrumb":{"@id":"https://newocean.edu.vn/#breadcrumb"},"inLanguage":"vi","potentialAction":[{"@type":"ReadAction","target":["https://newocean.edu.vn/"]}]},{"@type":"ImageObject","inLanguage":"vi","@id":"https://newocean.edu.vn/#primaryimage","url":"https://newocean.edu.vn/wp-content/uploads/2020/05/Tu-van-Du-hoc-1200x628-1.jpg","contentUrl":"https://newocean.edu.vn/wp-content/uploads/2020/05/Tu-van-Du-hoc-1200x628-1.jpg","width":1200,"height":628,"caption":"Công ty tư vấn du học, công ty du học, trung tâm du học, trung tâm tư vấn du học"},{"@type":"BreadcrumbList","@id":"https://newocean.edu.vn/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://newocean.edu.vn/#website","url":"https://newocean.edu.vn/","name":"Du học New Ocean | Tư Vấn Du Học New Ocean | Công Ty Du học New Ocean","description":"Chắp cánh ước mơ du học","publisher":{"@id":"https://newocean.edu.vn/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://newocean.edu.vn/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"vi"},{"@type":"Organization","@id":"https://newocean.edu.vn/#organization","name":"Công ty tư vấn du học New Ocean","url":"https://newocean.edu.vn/","logo":{"@type":"ImageObject","inLanguage":"vi","@id":"https://newocean.edu.vn/#/schema/logo/image/","url":"https://newocean.edu.vn/wp-content/uploads/2019/12/logo-du-hoc-new-ocean-scaled.png","contentUrl":"https://newocean.edu.vn/wp-content/uploads/2019/12/logo-du-hoc-new-ocean-scaled.png","width":2560,"height":1970,"caption":"Công ty tư vấn du học New Ocean"},"image":{"@id":"https://newocean.edu.vn/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/uocmoduhoc","https://www.youtube.com/channel/UCOkhgPaV1JJPtOUaRwuW3mA/videos","https://www.flickr.com/photos/new-ocean/albums","https://www.google.com/search?q=Tư Vấn Du Học New Ocean&amp;amp;stick=H4sIAAAAAAAA_-NgU1I1qDA2NDZNTDJPSTUytDCxMDS1MqgwNDQ3MTA0NrAwMEkxT0w0X8QqE3Jsg0LYw11L8xRcShU8Hu7uTVbwSy1X8E9OTcwDAL4VPTZIAAAA&amp;amp;hl=vi&amp;amp;mat=CecDnxXRrSHAElcB8pgkaL0aAHmrKfcuaIYyZWWBPOCa-WbY3bjwJLjTVdJZqG6NsvcXhdvnKnPY9jaqqrG8wYZOOepyU2ULGyxGdOx6RByKnRK8d0o1aPK9ASWN08ncR58&amp;amp;authuser=1","https://www.google.com/search?q=Tư Vấn Du Học New Ocean&amp;amp;stick=H4sIAAAAAAAA_-NgU1I1qDA2NDc1SjMxNkw2MUoxTkyzMqhITUu0SDMwTkpMNjKwMElNW8QqE3Jsg0LYw11L8xRcShU8Hu7uTVbwSy1X8E9OTcwDADDSGDVIAAAA&amp;amp;hl=vi&amp;amp;mat=CZhOr7W6nIYrElcB8pgkaA3I9nca90qT-RfHzMwF9OG1CDy9-QDsobfv0O_s2DQKDIiED37yCdd0oxxKG21qW0X_1LIiBd3ZSvxsF1cwDHNUo58kfDcm83isQKOvMYh9k7U&amp;amp;authuser=1"]}]}















    </script>
    <!-- / Yoast SEO Premium plugin. -->
    <link rel='dns-prefetch' href='//connect.facebook.net'/>
    <link rel='dns-prefetch' href='//maps.googleapis.com'/>
    <link rel='dns-prefetch' href='//maps.gstatic.com'/>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
    <link rel='dns-prefetch' href='//fonts.gstatic.com'/>
    <link rel='dns-prefetch' href='//ajax.googleapis.com'/>
    <link rel='dns-prefetch' href='//apis.google.com'/>
    <link rel='dns-prefetch' href='//google-analytics.com'/>
    <link rel='dns-prefetch' href='//www.google-analytics.com'/>
    <link rel='dns-prefetch' href='//ssl.google-analytics.com'/>
    <link rel='dns-prefetch' href='//youtube.com'/>
    <link rel='dns-prefetch' href='//i.ytimg.com'/>
    <link rel='dns-prefetch' href='//ad.doubleclick.net'/>
    <link rel='dns-prefetch' href='//googleads.g.doubleclick.net'/>
    <link rel='dns-prefetch' href='//stats.g.doubleclick.net'/>
    <link rel='dns-prefetch' href='//cm.g.doubleclick.net'/>
    <link rel='dns-prefetch' href='//www.googletagmanager.com'/>
    <link rel='dns-prefetch' href='//www.googletagservices.com'/>
    <link rel='dns-prefetch' href='//adservice.google.com'/>
    <link rel='dns-prefetch' href='//use.fontawesome.com'/>
    <link rel='dns-prefetch' href='//0.gravatar.com'/>
    <link rel='dns-prefetch' href='//2.gravatar.com'/>
    <link rel='dns-prefetch' href='//1.gravatar.com'/>
    <link rel='dns-prefetch' href='//code.jquery.com'/>
    <link rel='dns-prefetch' href='//scontent-mia3-1.xx.fbcdn.net'/>
    <link rel='dns-prefetch' href='//www.google.com'/>
    <link rel='dns-prefetch' href='//www.gstatic.com'/>
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net'/>
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect'/>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex > * {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='preload' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-10750.css?ver=1684549523' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media='all'/>
    <link rel='preload' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/global.css?ver=1684549524' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media='all'/>
    <link rel='preload' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-174.css?ver=1684549583' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media='all'/>
    <link rel='preload' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20880.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media='all'/>
    <link rel='preload' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20951.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media='all'/>
    <link rel='preload' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-16420.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media='all'/>
    <link rel='preload' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-15925.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')" media='all'/>
    <style id='rocket-lazyload-inline-css'>
        .rll-youtube-player {
            position: relative;
            padding-bottom: 56.23%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
        }

        .rll-youtube-player:focus-within {
            outline: 2px solid currentColor;
            outline-offset: 5px;
        }

        .rll-youtube-player iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            background: 0 0
        }

        .rll-youtube-player img {
            bottom: 0;
            display: block;
            left: 0;
            margin: auto;
            max-width: 100%;
            width: 100%;
            position: absolute;
            right: 0;
            top: 0;
            border: none;
            height: auto;
            -webkit-transition: .4s all;
            -moz-transition: .4s all;
            transition: .4s all
        }

        .rll-youtube-player img:hover {
            -webkit-filter: brightness(75%)
        }

        .rll-youtube-player .play {
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            position: absolute;
            background: url(https://newocean.edu.vn/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;
            background-color: transparent !important;
            cursor: pointer;
            border: none;
        }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='https://newocean.edu.vn/wp-includes/js/jquery/jquery.min.js?ver=3.6.4' id='jquery-core-js'></script>
    <script src='https://newocean.edu.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0' id='jquery-migrate-js'></script>
    <script id='contactus-js-extra'>
        var arCUVars = {"url": "https:\/\/newocean.edu.vn\/wp-admin\/admin-ajax.php", "version": "2.2.7", "_wpnonce": "<input type=\"hidden\" id=\"_wpnonce\" name=\"_wpnonce\" value=\"06bde1af4a\" \/><input type=\"hidden\" name=\"_wp_http_referer\" value=\"\/\" \/>"};
    </script>
    <script src='https://newocean.edu.vn/wp-content/plugins/ar-contactus/res/js/contactus.min.js?ver=2.2.7' id='contactus-js' defer></script>
    <script data-minify="1" src='https://newocean.edu.vn/wp-content/cache/min/1/wp-content/plugins/ar-contactus/res/js/scripts.js?ver=1682646089' id='contactus.scripts-js' defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <link rel="preload" as="font" href="{{asset('public/assets/fonts/awesome/fa-solid-900.woff2')}}" crossorigin>
    <link as="font" href="{{asset('public/assets/fonts/awesome/fa-brands-400.woff')}}2" crossorigin>
    <link as="font" href="{{asset('public/assets/fonts/awesome/fa-regular-400.woff2')}}" crossorigin>
    <link rel="preload" as="font" href="{{asset('public/assets/fonts/eicons/eicons.woff2')}}" crossorigin>
    <meta name="generator" content="Elementor 3.13.2; features: e_dom_optimization, e_optimized_assets_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <meta property="fb:app_id" content="394781937574480"/>
    <meta name="generator" content="Powered by Slider Revolution 6.5.31 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
    <link rel="icon" href="https://newocean.edu.vn/wp-content/uploads/2020/03/ico.png" sizes="32x32"/>
    <link rel="icon" href="https://newocean.edu.vn/wp-content/uploads/2020/03/ico.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="https://newocean.edu.vn/wp-content/uploads/2020/03/ico.png"/>
    <meta name="msapplication-TileImage" content="https://newocean.edu.vn/wp-content/uploads/2020/03/ico.png"/>
    <script>function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
    <style id="wp-custom-css">
        .jet-menu.jet-menu--animation-type-fade .jet-mega-menu-item.jet-menu-hover .jet-sub-mega-menu {
            background: transparent
        }

        ul {
            margin-bottom: 10px
        }

        .grecaptcha-badge {
            visibility: hidden;
        }

        /*phone
         */
        .phonering-alo-phone.phonering-alo-static {
            opacity: .6
        }

        .phonering-alo-phone.phonering-alo-hover, .phonering-alo-phone:hover {
            opacity: 1
        }

        .phonering-alo-ph-img-circle {
            width: 50px;
            height: 50px;
            margin-top: -12px;
            position: absolute;
            background: rgba(30, 30, 30, 0.1) url(https://newocean.edu.vn/wp-content/uploads/2022/04/icon-phone.png) no-repeat center center;
            border-radius: 100% !important;
            border: 2px solid transparent;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%
        }

        .phonering-alo-phone span {
            color: #fff;
            border: solid 1px;
            border-radius: 90px;
            padding: 12px;
            padding-left: 30px;
            margin-left: 31px;
            font-weight: 600;
            font-size: 18px;
        }

        .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out !important;
            animation: phonering-alo-circle-img-anim 1s infinite ease-in-out !important
        }

        .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
            -webkit-animation: phonering-alo-circle-img-anim 0 infinite ease-in-out !important;
            animation: phonering-alo-circle-img-anim 0 infinite ease-in-out !important
        }

        .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
            background-color: #fff;
        }

        .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {
            background-color: #75eb50
        }

        @-webkit-keyframes phonering-alo-circle-anim {
            0% {
                -webkit-transform: rotate(0) scale(.5) skew(1deg);
                -webkit-opacity: .1
            }

            30% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                -webkit-opacity: .5
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                -webkit-opacity: .1
            }
        }

        @-webkit-keyframes phonering-alo-circle-fill-anim {
            0% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                opacity: .2
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                opacity: .2
            }
        }

        @-webkit-keyframes phonering-alo-circle-img-anim {
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg)
            }
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                -ms-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                -ms-transform: none;
                transform: none
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                -ms-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                -ms-transform: none;
                transform: none
            }
        }

        @-webkit-keyframes fadeOutRight {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                -ms-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        @keyframes fadeOutRight {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                -ms-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        @-webkit-keyframes phonering-alo-circle-anim {
            0% {
                -webkit-transform: rotate(0) scale(.5) skew(1deg);
                transform: rotate(0) scale(.5) skew(1deg);
                opacity: .1
            }

            30% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .5
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg);
                opacity: .1
            }
        }

        @keyframes phonering-alo-circle-anim {
            0% {
                -webkit-transform: rotate(0) scale(.5) skew(1deg);
                transform: rotate(0) scale(.5) skew(1deg);
                opacity: .1
            }

            30% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .5
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg);
                opacity: .1
            }
        }

        @-webkit-keyframes phonering-alo-circle-fill-anim {
            0% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .2
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .2
            }
        }

        @keyframes phonering-alo-circle-fill-anim {
            0% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .2
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg);
                opacity: .2
            }

            100% {
                -webkit-transform: rotate(0) scale(.7) skew(1deg);
                transform: rotate(0) scale(.7) skew(1deg);
                opacity: .2
            }
        }

        @-webkit-keyframes phonering-alo-circle-img-anim {
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg)
            }
        }

        @keyframes phonering-alo-circle-img-anim {
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
                transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
                transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
                transform: rotate(0) scale(1) skew(1deg)
            }
        }        </style>
    <noscript>
        <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src] {
                display: none !important;
            }</style>
    </noscript>
    <script type="rocketlazyloadscript">
/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
(function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}}
var rp=loadCSS.relpreload={};rp.support=(function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=!1}
return function(){return ret}})();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){link.media=finalMedia}
if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}
setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3000)};rp.poly=function(){if(rp.support()){return}
var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){link.setAttribute("data-loadcss",!0);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener("load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent("onload",function(){rp.poly();w.clearInterval(run)})}}
if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}
else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this))
    </script>
</head>
<body class="home page-template page-template-elementor_header_footer page page-id-174 wp-custom-logo jet-desktop-menu-active elementor-default elementor-template-full-width elementor-kit-10750 elementor-page elementor-page-174">
