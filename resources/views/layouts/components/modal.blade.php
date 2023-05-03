<div id="modal-login" class="modal modal-simple fade ff-sans" role="dialog" >
    <div class="modal-dialog w100%-60 wmn-950 wmx-1200 xs:wmn-auto xs:w-fit xs:ps-fixed xs:m-0 xs:t0 xs:r0 xs:b0 xs:l0" :class="{'sm:wmn-auto': (currentTab != 'livedorvisitedform'), 'sm:ps-fixed sm:m-0 sm:t0 sm:r0 sm:b0 sm:l0 sm:wmn-auto sm:w-fit': (currentTab == 'livedorvisitedform')}">
        <div class="modal-content bar-5 bg-white xs:h-fit xs:bar-0" :class="modalContentClass">
            <keep-alive>
                <component v-bind:is="currentTabComponent" @change-component="changeComponent" v-bind="bindObject" @change-lived="changeLived" @change-visited="changeVisited" @update-vietnams="updateVietnams" @update-worlds="updateWorlds"></component>
            </keep-alive>
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
                <input type="hidden" name="_token" value="RwVeLdeMZBiM3GobuQZvQ6wIJmq2n1fyZHEgjYl5">
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
                            <img class="w-20 filter-sixth" src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/close-outline.svg" />
                        </button>
                    </div>
                </div>
                <div class="px-12">
                    <template v-if="!dataEmpty && isActive && !!searchInput">
                        <div class="overflow-y-auto overflow-x-hidden">
                            <div class="d-flex ai-center ps-relative py-12 bb bc-eleventh">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/location-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                        {( data?._source?.type || null )}
                                        {( data?._source?.title || '' )}
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a :href="detailUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>

                            <div class="d-none ai-center ps-relative py-12">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/bed-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Khách sạn tại
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a
                                        :href="data?.stay22"
                                        target="_blank"
                                        class="d-block ps-absolute t0 r0 b0 l0"
                                ></a>
                            </div>

                            <div class="d-none ai-center ps-relative py-12 bb bc-eleventh">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/ticket-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Vé tham quan tại
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a
                                        :href="`${detailUrl}/ve-tham-quan`"
                                        class="d-block ps-absolute t0 r0 b0 l0"
                                ></a>
                            </div>

                            <div class="d-flex ai-center ps-relative py-12">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/reader-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Blog du lịch
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a :href="blogUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>

                            <div class="d-flex ai-center ps-relative py-12 bb bc-eleventh">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/images-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Hình ảnh du lịch
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a :href="photoUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>

                            <div class="d-flex ai-center ps-relative py-12">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/people-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Hỏi đáp du lịch
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a
                                        :href="communityUrl"
                                        class="d-block ps-absolute t0 r0 b0 l0"
                                ></a>
                            </div>

                            <div class="d-none ai-center ps-relative py-12 bb bc-eleventh">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/map-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-nineth mb-2">
                                        Hành trình khám phá
                                        <span class="fw-500 tt-capitalize">{(
                      data?._source?.title || ''
                    )}</span>
                                    </p>
                                    <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                        {(
                                        (data?._source?.province?.title &&
                                        `${data?._source?.province?.title} - `) ||
                                        ''
                                        )}
                                        {( data?._source?.country?.title || '' )}
                                    </p>
                                </div>
                                <a :href="planUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>

                            <div class="d-flex ai-center ps-relative py-12">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/search-outline.svg" class="filter-sixth w-20"/>
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-sixth mb-2">
                                        Xem tất cả kết quả cho
                                        <span class="fw-500"
                                        >"{( searchInput )}"</span
                                        >
                                    </p>
                                </div>
                                <a
                                        :href="searchAllUrl"
                                        class="d-block ps-absolute t0 r0 b0 l0"
                                ></a>
                            </div>
                        </div>
                    </template>
                    <template v-if="dataEmpty && loaded && isActive && !!searchInput">
                        <div
                                class="bg-white w-fit z-1"
                        >
                            <div class="d-flex ai-center ps-relative py-12 wb-break-word">
                                <div
                                        class="
                    bar-circle
                    ba
                    bc-eleventh
                    d-flex
                    ai-center
                    jc-center
                    p-10
                    mr-15
                  "
                                >
                                    <img
                                            src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/search-outline.svg"
                                            class="filter-sixth w-20"
                                    />
                                </div>
                                <div class="fl-1">
                                    <p class="fs-16 m-0 fc-sixth mb-2">
                                        Xem tất cả kết quả cho
                                        <span class="fw-500">"{( searchInput )}"</span>
                                    </p>
                                </div>
                                <a :href="searchAllUrl" class="d-block ps-absolute t0 r0 b0 l0"></a>
                            </div>
                        </div>
                    </template>

                    <template v-if="loading && isActive">
                        <load-stream
                                v-for="n in 5"
                                :key="n"
                                :wrapper-classes="['h-40', 'overflow-hidden', 'mb-20']"
                        ></load-stream>
                    </template>

                    <template v-else-if="(isActive && !loaded && dataEmpty) || (isActive && !searchInput)">
                        <template v-if="!!recentlyViewed()">
                            <div class="py-12 fw-500 fs-16">Kết quả tìm kiếm gần đây</div>
                            <div class="overflow-y-auto overflow-x-hidden">
                                <template v-for="(r, rIdx) in recentlyViewed()">
                                    <div class="d-flex ai-center ps-relative py-12 bb bc-eleventh" :key="r?._id">
                                        <div class="ps-relative d-flex ai-center fl-1">
                                            <div
                                                    class="
                          bar-circle
                          ba
                          bc-eleventh
                          d-flex
                          ai-center
                          jc-center
                          p-10
                          mr-15
                        "
                                            >
                                                <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/location-outline.svg" class="filter-sixth w-20"/>
                                            </div>
                                            <div class="fl-1">
                                                <p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                                    {( r?._source?.type || null )}
                                                    {( r?._source?.title || '' )}
                                                </p>
                                                <p class="fs-14 m-0 tt-capitalize fc-sixth">
                                                    {(
                                                    (r?._source?.province?.title &&
                                                    `${r?._source?.province?.title} - `) ||
                                                    ''
                                                    )}
                                                    {( r?._source?.country?.title || '' )}
                                                </p>
                                            </div>
                                            <a :href="recentDetailUrl(r)" class="d-block ps-absolute t0 r0 b0 l0"></a>
                                        </div>
                                        <div class="d-flex ai-center jc-center p-10 c-pointer bar-circle h:card6 mr-2" @click="clearRecentlyViewed(r)">
                                            <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/close-outline.svg" class="w-22 filter-sixth">
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </template>

                        <template v-if="!!topDes.length">
                            <div class="pb-0 pt-20 fw-500 fs-16">Tìm kiếm nhiều</div>
                            <div class="overflow-y-auto overflow-x-hidden d-flex fw-wrap">
                                <div class="d-flex ai-center ps-relative py-12 mr-40 ws-nowrap fl-1" v-for="(d, dIdx) in topDes" :key="d?._id">
                                    <div class="ps-relative d-flex ai-center fl-1">
                                        <div
                                                class="
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
                      "
                                        >
                                            <img :src="d.image" class="bar-circle w-fit h-fit object-center object-cover" :alt="d?.title" loading="lazy"/>
                                        </div>
                                        <div class="fl-1">
                                            <p class="fw-500 fs-16 m-0 tt-capitalize fc-nineth mb-2">
                                                {( d?.title || null )}
                                            </p>
                                        </div>
                                        <a :href="d.link" class="d-block ps-absolute t0 r0 b0 l0"></a>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <!-- <default-destination :wrap-class="'bg-white'"></default-destination> -->
                    </template>

                    <!-- <default-destination :wrap-class="'bg-white'"
                      v-else-if="(isActive && !loaded && dataEmpty) || (isActive && !searchInput)"
                    ></default-destination> -->

                </div>
            </div>
        </div>
    </div>
</div>

<div class="ps-fixed r0 l0 b0 t56 z-1 t-all t-delay-0 t-duration-slow global-nav-launcher">
    <div class="ps-absolute t0 r0 b0 l0 bg-black o50 c-pointer js-global-nav__close"></div>
    <div class="my-0 ml-auto mr-0 w-380 card5 blr-5 ps-absolute t0 r0 b0 z-1 overflow-auto" role="document">
        <div class="bs-none bn p-0">
            <div class="w-fit p-0 bg-white">
                <div class="d-flex fw-nowrap py-6 px-12 ai-end jc-end fs-40">
                    <div class="h:bg-seventh lh-unset h-40 w-40 d-flex ai-center jc-center c-pointer bar-circle t-all t-duration-slow fc-sixth js-global-nav__close">&times;</div>
                </div>
                <div class="bg-white pb-10 px-15">
                    <p class="fc-primary fs-14 fw-500 mt-5 mb-0">Vận hành bởi GODY</p>
                    <div class="d-flex fw-wrap">
                        <a href="#modal-flight-search" data-target="#modal-flight-search" data-toggle="modal" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" rel="noreferrer,nofollow" title="Vé máy bay">
                            <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/airplane.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Vé máy bay">
                            <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Vé máy bay</p>
                        </a>
                        <a href="#modal-experience-search" data-target="#modal-experience-search" data-toggle="modal" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" rel="noreferrer,nofollow" title="Vé tham quan">
                            <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/ticket.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Vé tham quan">
                            <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Vé tham quan</p>
                        </a>
                        <!--
                        <a target="_blank" href="https://vemaybay.gody.vn" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" rel="noreferrer,nofollow" title="Vé máy bay">
                          <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/airplane.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Vé máy bay">
                          <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Vé máy bay</p>
                        </a>
                        <a target="_blank" href="https://vethamquan.vn" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" rel="noreferrer,nofollow" title="Vé tham quan">
                          <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/ticket.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Vé tham quan">
                          <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Vé tham quan</p>
                        </a>
                        -->
                        <a target="_blank" href="/san-pham/voucher-nghi-duong-cam-trai-camping" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-22%" rel="noreferrer,nofollow" title="Voucher">
                            <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/gift.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Voucher">
                            <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Voucher</p>
                        </a>
                        <a target="_blank" href="/san-pham/sim-cuc-phat-wifi" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-22%" title="Sim 4G/5G">
                            <img loading="lazy" src="https://gody.vn/public/v6/images/sim32x32.png" class="w-20 filter-sixth mb-5" alt="Sim 4G/5G">
                            <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Sim 4G/5G</p>
                        </a>
                        <a target="_blank" href="/san-pham/ho-chieu-visa" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" rel="noreferrer,nofollow" title="Visa/Passport">
                            <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/id-card.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Visa/Passport">
                            <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Visa/Passport</p>
                        </a>
                        <a target="_blank" href="/san-pham/bao-hiem-du-lich" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" title="Bảo hiểm">
                            <img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/fitness.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Bảo hiểm">
                            <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Bảo hiểm</p>
                        </a>
                        <a href="{{url('/')}}/partner" target="_blank" class="
                d-flex
                fd-column
                ai-center
                td-none
                outline-none
                v:outline-none
                fv:outline-none
                f:outline-none
                fc-sixth
                pt-12
                pb-5
               w-40%" title="Blogger và Doanh nghiệp"><img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/people.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Blogger và Doanh nghiệp"> <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0">Blogger &amp; Doanh nghiệp</p></a>
                        <a href="https://kinhnghiemdulich.gody.vn" target="_blank" class="
               d-flex
               fd-column
               ai-center
               td-none
               outline-none
               v:outline-none
               fv:outline-none
               f:outline-none
               fc-sixth
               pt-12
               pb-5
              " rel="noreferrer,nofollow" title="Kinh nghiệm du lịch và tổng hợp"><img src="https://gody.vn/public/v6/js/ionicons/5.5.2/svg/ear.svg" class="w-20 filter-sixth mb-5" loading="lazy" alt="Kinh nghiệm du lịch và tổng hợp"> <p class="mb-0 fs-12 fc-sixth mt-0 ta-center">Kinh nghiệm du lịch<br>Tổng hợp</p></a>
                    </div>
                </div>
                <div class="bg-white mt-12 py-10 px-15">
                    <div class="d-flex fw-wrap ai-center">
                        <div>
                            <p class="fc-nineth fs-14 fw-500 mt-5 mb-0">Gody App</p>
                        </div>
                        <div class="fl-1 d-flex pl-5 jc-center">
                            <a href="https://apps.apple.com/vn/app/gody/id1570393254" class="text-center d-block w-110 h-35 lh-30" target="_blank" rel="noreferrer,nofollow" title="App Android">
                                <img loading="lazy"
                                     src="https://gody.vn/public/v6/images/more/appstore.png"
                                     class="w-fit h-fit object-cover"
                                     alt="App Android"
                                />
                            </a>
                            <a
                                    href="https://play.google.com/store/apps/details?id=vn.gody.dulich"
                                    target="_blank"
                                    class="text-center d-block w-116 h-35 lh-30 ml-12" rel="noreferrer,nofollow" title="App IOS"
                            >
                                <img loading="lazy"
                                     src="https://gody.vn/public/v6/images/more/google-play-badge.png"
                                     class="w-fit h-fit object-cover" alt="App IOS"
                                />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white mt-12 py-10 px-15">
                    <p class="fc-nineth fs-14 fw-500 mt-5 mb-0">Đối tác</p>
                    <div class="d-flex fw-wrap">
                        <div class="w-60">
                            <p class="fc-sixth fs-13 fw-500 my-13">Khách sạn</p>
                        </div>
                        <div class="fl-1 d-flex fw-wrap pl-5">
                            <a target="_blank" rel="noreferrer,nofollow" href="http://www.hotelscombined.com/?a_aid=223595" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%"  title="HotelsCombined">
                                <img loading="lazy" src="https://gody.vn/public/v6/images/more/hotelscombined.png" class="w-45 h-20 mb-2" alt="HotelsCombined">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate-line lineclamp1 wmx-fit">HotelsCom...</p>
                            </a>
                            <a target="_blank" rel="noreferrer,nofollow" href="https://www.agoda.com/partners/partnersearch.aspx?pcs=1&cid=1617141" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-22%" title="Agoda">
                                <img loading="lazy" src="https://cdn6.agoda.net/images/MVC/default/agoda-logo-v2.png" class="w-45 h-20 mb-2" alt="Agoda">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate-line lineclamp1">Agoda</p>
                            </a>
                            <a target="_blank" href="https://www.booking.com/index.html?aid=375361" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" rel="noreferrer,nofollow" title="Booking">
                                <img loading="lazy" src="https://cf.bstatic.com/static/img/tfl/group_logos/logo_booking/27c8d1832de6a3123b6ee45b59ae2f81b0d9d0d0.png" class="w-45 h-20 mb-2" alt="Booking">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate-line lineclamp1">Booking</p>
                            </a>
                            <a target="_blank" rel="noreferrer,nofollow" href="https://clk.omgt3.com/?PID=37016&amp;AID=1996267" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-22%"  title="Vntrip">
                                <img loading="lazy" src="https://gody.vn/public/v6/images/more/vntrip-02.png" class="w-45 h-20 mb-2" alt="Vntrip">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate-line lineclamp1">Vntrip</p>
                            </a>
                            <a target="_blank" rel="noreferrer,nofollow" href="https://clk.omgt3.com/?PID=35596&amp;AID=1996267" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%"  title="Hotels.com">
                                <img loading="lazy" src="https://gody.vn/public/v6/images/more/hotel-03.jpeg" class="w-45 h-20 mb-2" alt="Hotels.com">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate-line lineclamp1">Hotels.com</p>
                            </a>
                            <a target="_blank" rel="noreferrer,nofollow" href="https://clk.omgt3.com/?PID=12746&amp;AID=1996267" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-22%"  title="Trip.com">
                                <img loading="lazy" src="https://gody.vn/public/v6/images/more/trip-com-04.png" class="w-45 h-20 mb-2" alt="Trip.com">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate-line lineclamp1">Trip.com</p>
                            </a>
                            <a href="{{url('/')}}/homestay-hostel" target="_blank" rel="noreferrer,nofollow" class="
                  d-flex
                  fd-column
                  ai-center
                  td-none
                  outline-none
                  v:outline-none
                  fv:outline-none
                  f:outline-none
                  fc-sixth
                  pt-12
                  pb-5
                 w-27% mtn-4" title="Homestay"><img loading="lazy" src="https://gody.vn/public/v6/images/logo-filled-100x100.png" class="w-24 mb-2 filter-primary" alt="Homestay"> <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">
                                    Homestay
                                </p></a>
                        </div>
                    </div>
                    <div class="d-flex fw-wrap mt-15">
                        <div class="w-60">
                            <p class="fc-sixth fs-13 fw-500 my-13">Vé tham quan</p>
                        </div>
                        <div class="fl-1 d-flex fw-wrap pl-5">
                            <a target="_blank" href="https://clk.omgt3.com/?PID=30741&amp;AID=1996267" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" rel="noreferrer,nofollow" title="Klook">
                                <img loading="lazy" src="https://res.klook.com/image/upload/v1578304074/klook-nuxt-web/favicon.png" class="w-15 h-20 mb-2" alt="Klook">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Klook</p>
                            </a>
                            <a target="_blank" href="https://clk.omgt3.com/?PID=33463&amp;AID=1996267" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-22%" rel="noreferrer,nofollow" title="Kkday">
                                <img loading="lazy" src="https://gody.vn/public/v6/images/more/kkday-icon.png" class="w-15 h-20 mb-2" alt="Kkday">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Kkday</p>
                            </a>
                            <a target="_blank" href="https://www.viator.com/?pid=P00020623&amp;uid=U00021069&amp;mcid=58086" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-27%" rel="noreferrer,nofollow" title="Viator">
                                <img loading="lazy" src="https://cache.vtrcdn.com/orion/images/favicon.ico" class="w-15 h-20 mb-2" alt="Viator">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Viator</p>
                            </a>
                            <a target="_blank" href="https://www.getyourguide.com?partner_id=NIAR0C7&amp;utm_medium=transport_partners&amp;utm_source=gody.vn&amp;placement=menu-bar" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pt-12 pb-5 w-22%" rel="noreferrer,nofollow" title="Get your guide">
                                <img loading="lazy" src="https://cdn.getyourguide.com/tf/assets/static/logos/android-chrome-96x96.png" class="w-15 h-20 mb-2" alt="Get your guide">
                                <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Get your...</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex fw-wrap mt-15">
                        <div class="w-60">
                            <p class="fc-sixth fs-13 fw-500 m-0 pt-10">Phương tiện</p>
                        </div>
                        <div class="fl-1 pl-5">
                            <div class="d-flex mb-15 l:mb-0">
                                <p class="mb-0 fs-13 fc-sixth mt-0 truncate-line lineclamp2 w-27% pt-10">Việt Nam</p>
                                <div class="d-flex fw-wrap fl-1">
                                    <a target="_blank" href="https://dsvn.vn/#/" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="DSVN">
                                        <img loading="lazy" src="https://dsvn.vn/images/icon-train.png" class="w-45 h-20 object-contain mb-2" alt="DSVN">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">DSVN</p>
                                    </a>
                                    <a target="_blank" href="https://booking.baolau.com/en/?source=261277" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="Baolau">
                                        <img loading="lazy" src="https://www.baolau.com/images/favicons/favicon-32x32.png" class="w-45 h-20 object-contain mb-2" alt="Baolau">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Baolau</p>
                                    </a>
                                    <a target="_blank" href="https://clk.omgt3.com/?PID=39790&amp;AID=1996267" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="Dichung">
                                        <img loading="lazy" src="https://gody.vn/public/v6/images/more/dichung-vn.png" class="w-45 h-20 object-contain mb-2" alt="Dichung">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Dichung</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex mb-15 l:mb-0">
                                <p class="mb-0 fs-13 fc-sixth mt-0 truncate-line lineclamp2 w-27% pt-10">Châu Á</p>
                                <div class="d-flex fw-wrap fl-1">
                                    <a target="_blank" href="https://12go.asia/?z=3898257" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="12go">
                                        <img loading="lazy" src="https://cdn1.onetwogo.com/images/favicon-32x32.png" class="w-45 h-20 object-contain mb-2" alt="12go">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">12go</p>
                                    </a>
                                    <a target="_blank" href="https://clk.omgt3.com/?PID=12746&amp;AID=1996267" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="Trip.com">
                                        <img loading="lazy" src="https://gody.vn/public/v6/images/more/trip-com-04.png" class="w-45 h-20 object-contain mb-2" alt="Trip.com">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Trip.com</p>
                                    </a>
                                    <a target="_blank" href="https://www.easybook.com/vi-vn" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="Easybook">
                                        <img loading="lazy" src="https://www.easybook.com/images/favicon.ico" class="w-45 h-20 object-contain mb-2" alt="Easybook">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Easybook</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex mb-15 l:mb-0">
                                <p class="mb-0 fs-13 fc-sixth mt-0 truncate-line lineclamp2 w-27% pt-10">Mỹ, Châu Âu, ...</p>
                                <div class="d-flex fw-wrap fl-1">
                                    <a target="_blank" href="https://www.rome2rio.com" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="Rome2rio">
                                        <img loading="lazy" src="https://gody.vn/public/v6/images/more/download.png" class="w-45 h-20 object-contain mb-2" alt="Rome2rio">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Rome2rio</p>
                                    </a>
                                    <a target="_blank" href="https://www.carrentals.com" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="Car rental">
                                        <img loading="lazy" src="https://static.r2r.io/images/logos/rentalcars.png" class="w-45 h-20 object-contain mb-2 object-fill" alt="Car rental">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Car rental</p>
                                    </a>
                                    <a target="_blank" href="https://www.expedia.com" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-12" rel="noreferrer,nofollow" title="Expedia">
                                        <img loading="lazy" src="https://gody.vn/public/v6/images/more/expedia.png" class="w-45 h-20 object-contain mb-2 object-fill" alt="Expedia">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Expedia</p>
                                    </a>
                                    <a target="_blank" href="https://www.priceline.com/?vrid=e9b272308ce650923c2891ab27b5623e" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-0" rel="noreferrer,nofollow" title="Priceline">
                                        <img loading="lazy" src="https://gody.vn/public/v6/images/more/price-line.png" class="w-45 h-20 object-contain mb-2 object-cover" alt="Priceline">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Priceline</p>
                                    </a>
                                    <a target="_blank" href="https://www.skyscanner.com.vn" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-0" rel="noreferrer,nofollow" title="Skyscanner">
                                        <img loading="lazy" src="https://gody.vn/public/v6/images/more/skyscanner.png" class="w-45 h-20 object-contain mb-2" alt="Skyscanner">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">Skyscanner</p>
                                    </a>
                                    <a target="_blank" href="https://www.flixbus.co.uk/?wt_mc=.uk.flixbus.aff.generic.326632-TT.12-TT.ad&wt_cc1=-aff_12%3A%3A326632%3A%3Agody%3A%3A%3A%3A1639059723&utm_source=ttruk.generic&utm_medium=aff&utm_campaign=326632-TT.12-TT.-aff_12%3A%3A326632%3A%3Agody%3A%3A%3A%3A1639059723&utm_term=&utm_content=uk.flixbus" class="d-flex fd-column ai-center td-none outline-none v:outline-none fv:outline-none f:outline-none fc-sixth pb-5 grid--cell4 mb-0" style="margin-left:-2px!important;" rel="noreferrer,nofollow" title="FlixBus">
                                        <img loading="lazy" src="https://cdn-cf.cms.flixbus.com/drupal-assets/logos/flixbus.svg" class="w-45 h-20 object-contain mb-2" alt="Skyscanner" style="filter: invert(60%) sepia(98%) saturate(480%) hue-rotate(40deg) brightness(96%) contrast(107%);">
                                        <p class="mb-0 fs-12 ws-nowrap fc-sixth mt-0 truncate">FlixBus</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white mt-12 py-10 px-15">
                    <p class="fc-nineth fs-14 fw-500 mt-5 mb-0">Thông tin cần thiết</p>
                    <div class="mt-15 pb-30"><a target="_blank" href="http://timvere.vn" class="mb-5 fc-fourth td-none outline-none f:outline-none fv:outline-none d-block lh-lg" rel="noreferrer,nofollow" title="Tool tìm vé máy bay giá rẻ, so sánh giá vé từ các hãng hàng không">- Tool tìm vé máy bay giá rẻ, so sánh giá vé từ các hãng hàng không</a><a target="_blank" href="http://www.hotelscombined.vn/?a_aid=223595&amp;label=Tìm khách sạn giá rẻ nhất" class="mb-5 fc-fourth td-none outline-none f:outline-none fv:outline-none d-block lh-lg" rel="noreferrer,nofollow" title="Tìm và so sánh giá khách sạn từ Agoda, Booking, Priceline">- Tìm và so sánh giá khách sạn từ Agoda, Booking, Priceline ....</a><a target="_blank" href="https://clk.omgt3.com/?AID=1996267&amp;PID=30741&amp;UID=homehome&amp;r=https%3A%2F%2Fwww.klook.com%2Fvi%2F" class="mb-5 fc-fourth td-none outline-none f:outline-none fv:outline-none d-block lh-lg" rel="noreferrer,nofollow" title="Đặt vé tham quan từ Klook với giá rẻ">- Đặt vé tham quan từ Klook với giá rẻ</a><a target="_blank" href="https://gody.vn/blog/thuy_do_3f/post/huong-dan-chi-tiet-cach-doi-bang-lai-xe-quoc-te-truc-tuyen-giao-tan-nha-chi-voi-200k-6615" class="mb-5 fc-fourth td-none outline-none f:outline-none fv:outline-none d-block lh-lg" rel="noreferrer,nofollow" title="Hướng dẫn chi tiết đổi bằng lái xe quốc tế">- Hướng dẫn chi tiết đổi bằng lái xe quốc tế với giá 200k giao tận nhà.</a><a target="_blank" href="https://gody.vn/feeds/dia-chi-doi-tien-ngoai-te-usd-tai-sai-gon-012-229" class="mb-5 fc-fourth td-none outline-none f:outline-none fv:outline-none d-block lh-lg" rel="noreferrer,nofollow" title="Địa chỉ đổi ngoại tệ giá tốt">- Địa chỉ đổi ngoại tệ giá tốt</a><a target="_blank" href="https://dichvulamhochieu.vn/huong-dan-thu-tuc-lam-ho-chieu-moi-nhat" class="mb-5 fc-fourth td-none outline-none f:outline-none fv:outline-none d-block lh-lg" rel="noreferrer,nofollow" title="Hướng dẫn chi tiết thủ tục làm hộ chiếu">- Hướng dẫn chi tiết thủ tục làm hộ chiếu ( cấp mới, đổi ...) năm 2020</a></div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade ff-sans" id="modal-tutorial" tabindex="-1" role="dialog">
    <div class="modal-dialog w-fit p-20 my-0 wmx-1200 ws-nowrap overflow-hidden xs:ml-0 xs:p-10" role="document">
        <div class="modal-content h-fit bar-0 modal-content-1 w-fit d-inline-block t-all t-duration-slowx2 va-middle mrn-4">
            <div class="modal-header bn">
                <button type="button" class="close fs-26" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title fc-nineth fw-bold ws-normal">Hướng dẫn tính năng viết Blog trên Gody.vn</h4>
            </div>
            <div class="modal-body">
                <div class="ps-relative" style="padding-bottom: 56.25%;">
                    <iframe src="https://www.youtube.com/embed/7ren_42Ve98" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ps-absolute t0 r0 b0 l0 w-fit h-fit z-10"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div
        class="modal fade ff-sans"
        id="modal-flight-search"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        ref="modalFlightSearch"
        style="background: rgba(255, 255, 255, 0.85)"
>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex btr-5 bg-seventh ai-center">
                <h4 class="m-0 tt-uppercase ta-center fl-1 lh-sm fs-18">
                    Tìm kiếm chuyến bay
                </h4>
                <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="global-flight-search-app">
                <flight-component extra-service-class="d-none"></flight-component>
            </div>
        </div>
    </div>
</div>
<div
        class="modal fade ff-sans"
        id="modal-experience-search"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        ref="modalExperienceSearch"
        style="background: rgba(255, 255, 255, 0.85)"
>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex ai-center btr-5 bg-seventh">
                <h4 class="m-0 tt-uppercase ta-center fl-1 lh-sm fs-18">
                    Vé tham quan
                </h4>
                <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="global-experience-search-app">
                <experience-component :no-dropdown="true"></experience-component>
            </div>
        </div>
    </div>
</div>
