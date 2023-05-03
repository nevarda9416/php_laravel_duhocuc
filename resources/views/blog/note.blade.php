@extends('layouts.default')
@section('content')
@include('components.alert')
<div class="travel-blog-create-page _create1 create-current-page create-v3">
    <div data-toggle="modal" data-target="#modal-login" class="pos-f cursor-pointer w-fit h-fit t0 r0 b0 l0 z-8" style="display:none"></div>
    <form action="{{ url('blog/viet-bai/note') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="travelPostForm" name="travelPostForm" novalidate="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="type" value="note">
        <div class="container-fluid pr-0 pl-0 min-width-1170 travel-post-header">
            <div class="set-index ">

                <div class="set-bg">
                </div>

                <div class="set-page">
                    <h3 class="mt-2">Thêm hình cover bài viết</h3>
                    <p style="padding-left:130px;">( Hình ảnh tối ưu: 1350px <strong>x</strong> 480px. )</p>
                    <div class="dropdown">
                        <input type="file" name="thumbnail_url">
                    </div>
                    <div class="clear"></div>
                    <div class="moxie-shim moxie-shim-html5" style="position: absolute; top: 10vw; left: 275px; width: 67px; height: 67px; overflow: hidden; z-index: -1;">
                        <input type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.JPEG,image/png,image/gif" name="setPageInput">
                    </div>
                </div>

                <div class="set-title bar-10 card6 ww-break-word w-1140 h-62 bg-white ba bc-white ps-absolute b25 z-1 l50% translateXn50% lh-20">
                    <input type="text" value="" placeholder="Tiêu đề bài viết (*)" name="title" id="title" class="bar-10 w-1140 h-60 fs-18 bn py-0 px-15 fc-sixth float-left d-inline-block ta-start m-0 outline-none">
                </div>

                <div class="dropdown set-btn primary-dropdown-more">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog" aria-hidden="true"></i> Thay đổi cover bài viết</button>
                    <ul class="dropdown-menu mt-0 border-radius-0" aria-labelledby="dLabel">
                        <li>
                            <a role="button" class="set-add" hreft="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Thay hình ảnh</a>
                        </li>
                        <!-- <li>
                            <a role="button" class="set-add-re-edit" hreft="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Sửa hình ảnh</a>
                        </li> -->
                        <li>
                            <a role="button" hreft="#" class="set-add-remove"><i class="fa fa-picture-o" aria-hidden="true"></i> Xóa</a>
                        </li>
                    </ul>
                </div>

                <div class="clip-layer">
                    <div class="clip-mask cursor-pointer"></div>
                    <span class="clip-close clip-cancel" aria-hidden="true">×</span>
                    <div class="clip-panel">
                        <img id="clip-windown" src="" alt="" style="max-width: 100%; vertical-align: middle; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-20 min-width-1170 travel-blog-body">
            <div class="row">
                <input type="hidden" value="" name="travelPostID" id="travelPostID">
                <input type="hidden" value="" name="travelPostUsername" id="travelPostUsername">
                <input type="hidden" value="" name="travelPostLink" id="travelPostLink">
                <input type="hidden" value="0" name="travelPostStatus" id="travelPostStatus">

                <div class="col-xs-12 mt-20 ps-relative">
                    <textarea id="excerpt" name="excerpt" class="form-control travelPostDescription bar-10 bn card6 p-15 resize-none w-fit h-inherit bn fs-18 bar-2" placeholder="Giới thiệu ngắn (*)" rows="4"></textarea>
                </div>

                <div class="col-xs-12 mt-40 ps-relative">
                    <div class="col-xs-4 pr-10 pl-0 ps-relative datepicker-box">
                        <label for="" class="ps-absolute c-pointer t0 l20 h-50 lh-50 fs-16 w-30 ta-left"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                        <input type="text" name="start_date" id="start_date" placeholder="Ngày bắt đầu (*)" value="" class="w-fit fs-16 pl-50 pr-14 h-50 lh-50 bn card6 outline-none bar-10 datepicker c-pointer trip-start-datepicker">
                        <label for="" class="ps-absolute c-pointer t0 r20 h-50 lh-50 fs-26 w-30 ta-left fc-sixth hide" id="tripStartDateClear">&times;</label>
                    </div>
                    <div class="col-xs-4 px-10 ps-relative">
                        <label for="duration" class="ps-absolute c-pointer t0 l30 h-50 lh-50 fs-16 w-30 ta-left"><i class="fa fa-clock-o" aria-hidden="true"></i></label>
                        <input type="number" placeholder="Tổng số ngày (*)" value="" name="duration" class="w-fit fs-16 pl-50 pr-14 h-50 lh-50 bn card6 outline-none bar-10 appearance-none js-enter-none" min="0" id="duration">
                    </div>
                    <div class="col-xs-4 px-10 ps-relative">
                        <label for="cost" class="ps-absolute c-pointer t0 l30 h-50 lh-50 fs-16 w-30 ta-left"><i class="fa fa-dollar" aria-hidden="true"></i></label>
                        <input type="text" placeholder="Chi phí chuyến đi (*)" value="" name="cost" class="w-fit fs-16 pl-50 pr-14 h-50 lh-50 bn card6 outline-none bar-10 appearance-none" id="cost">
                    </div>
                </div>

                <div class="col-xs-12 mt-12 travel-post-tag-list">
                </div>

                <div class="col-xs-12 mt-30">
                    <div class="form-group ps-relative">
                        <label for="content" class="display-inline-block txt-sub-color-blue cursor-pointer font-weight-normal">Mô tả dài</label>
                        <textarea class="form-control editor_basic" id="content" name="content" data-parsley-trigger="keyup" data-parsley-validation-threshold="10" placeholder="Mô tả dài ..."></textarea>
                    </div>

                    <div class="form-group text-center ps-fixed b0 w-fit l0 card1 mb-0 p-12 bg-white z-9">
                        <button class="btn btn-primary travel-post-btn-submit bg-primary bc-primary h:bs-lg" id="pc-dang-blog-thanh-cong-nut-viet-ngay" type="submit">Đăng bài</button>
                    </div>

                    <div class="form-group hide">
                        <span style=" font-weight:bold;text-decoration:underline;color:#D02028;"><i class="fa fa-clock-o" aria-hidden="true"></i> Lưu ý:</span> <br>
                        - Bạn chỉ có thể chỉnh sửa bài viết trong vòng <span style="color:#D02028;">2 tiếng </span>kể từ khi đăng bài. <br>
                        - Hãy sử dụng chức năng <span style="color:#D02028;">"Lưu nháp"</span> cho bài viết chưa hoàn thiện.
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="post-link-ewrap">
    <span class="arrow"></span>
    <div>
        <a href="#" class="btn btn-default border-radius-0 border-none edit-link" title="Edit link"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        <a href="#" class="btn btn-default border-radius-0 border-none unlink" title="Unlink"><i class="fa fa-chain-broken" aria-hidden="true"></i></a>
    </div>
</div>
<div id="content-edit-toolbar" class="content-edit-toolbar ps-absolute v-hidden o0">
    <div class="ps-absolute w-10 h-10 baw1 bas-solid bc-eighteenth l50% mln-5 bn5 rotate-1/8 bg-eighteenth brs-unset bbs-unset"></div>

    <ul class="list-ls-none p-0 m-0 clearfix">
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth blr-4 editor-action-bold" title="bold">B</button>
        </li>
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth editor-action-italic" title="italic">
                <i>I</i>
            </button>
        </li>
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth editor-action-underline" title="underline">
                <u>U</u>
            </button>
        </li>
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth editor-action-h2" title="mục lục bài viết">H2</button>
        </li>
        <li class="pull-left">
            <button type="button" class="ta-center fw-bold w-50 h-50 bn fs-14 fc-white outline-none bg-eighteenth brr-4 editor-action-link" title="link" data-toggle="dropdown"><i class="fa fa-link"></i></button>

            <div class="dropdown-menu bs-none bn bg-eighteenth t0 fc-white p-0 m-0 ws-nowrap mln-70">
                <input type="text" class="bn bs-none form-control d-inline-block w-300 va-middle bg-eighteenth fc-white editor-action-link__input" placeholder="Đường dẫn" autofocus="autofocus">
                <button type="button" class="bn bs-none bg-transparent w-36 h-50 d-inline-block outline-none va-middle editor-action-link__save h:fc-sixteenth"><i class="fa fa-check" aria-hidden="true"></i></button>
                <button type="button" class="bn bs-none bg-transparent w-36 h-50 d-inline-block outline-none va-middle editor-action-link__close fs-30 h:fc-sixteenth">&times;</button>
            </div>
        </li>
    </ul>
</div>
@endsection()
