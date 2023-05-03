@extends('layouts.default')
@section('content')
@include('components.alert')
<div class="travel-blog-create-page">
    <form action="{{ url('photo-blog/dang-bai/note') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="travelPhotoForm" name="travelPhotoForm" novalidate="">
        {{ csrf_field() }}
        <input type="hidden" value="" name="travelPostID" id="travelPostID">
        <input type="hidden" value="" name="travelPostUsername" id="travelPostUsername">
        <input type="hidden" value="" name="travelPostLink" id="travelPostLink">
        <input type="hidden" value="0" name="travelPostStatus" id="travelPostStatus">

        <input type="hidden" value="aquafina9416@gmail.com" name="checkEmail" id="checkEmail">
        <input type="hidden" value="" name="checkPhone" id="checkPhone">

        <div class="container-fluid pr-0 pl-0 min-width-1170 travel-post-header">
            <div class="set-index ">

                <div class="set-bg">
                </div>

                <div class="set-page">
                    <h3 class="mt-2">Hình đại diện</h3>
                    <p>( Hình ảnh tối ưu: 1350 <strong>x</strong> 480px. )</p>
                    <div class="dropdown">
                        <input type="file" name="thumbnail_url" id="thumbnail_url">
                    </div>
                    <div class="clear"></div>
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
                <div class="col-md-9 mt-20">
                    <div class="set-title">
                        <input type="text" class="form-control" placeholder="Tiêu đề album (*)" name="title" id="title">
                    </div>
                </div>
                <div class="col-md-9 mt-20">
                    <div class="form-group pos-r">
                        <textarea id="excerpt" name="excerpt" class="form-control travelPostDescription hmn-120 hmx-500" placeholder="Nội dung chi tiết giới thiệu về album (*)" rows="4" onkeyup="auto_grow(this)"></textarea>
                    </div>

                    <div class="form-group" id="_gallery">
                        <label for="travelPostGalleryIn" class="label-control  cursor-pointer txt-sub-color-blue" style="color: #337ab7;"><i class="fa fa-plus-circle" aria-hidden="true"></i> Albums ảnh (*) (Tối đa 10 ảnh)</label>
                        <input type="file" name="album[]" id="album" multiple="" accept="image/jpeg,image/png,image/gif,.JPEG">
                        <input type="hidden" name="travelPostGalleryRemove" id="travelPostGalleryRemove">
                        <div class="box-input cursor-pointer">
                            <div class="travel-post-gallery gallery-119">
                                <div class="travel-post-gallery-body">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group text-right clearfix">
                        <div class="checkbox pull-left hide"> <label> <input type="checkbox">Hình ảnh do bạn thực hiện</label> </div>
                        <button class="btn btn-primary travel-post-btn-submit box-shadow-hover" id="pc-dang-blog-thanh-cong-nut-viet-ngay" type="submit">Đăng bài</button>
                    </div>

                </div>
                <div class="col-md-3 sidebar mt-30">
                    <div class="sticky mt-10">
                        <div class="card1 content-card mt-12 travel-post-box">
                            <h2 class="hndle ui-sortable-handle"><span>Tags </span><span class="fw-normal">(địa điểm thực hiện, cách nhau bởi dấu , )</span></h2>
                            <div class="dropdown inside">
                                <input type="text" placeholder="An Giang,Bình Phước" class="form-control cursor-pointer color_sub_blue pl-0 input-default-format travel-post-tag-search" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" aria-invalid="false" name="tags" focus="">
                                <ul class="dropdown-menu travel-post-tag-dropdown-list" id="hashtags-list">
                                    Nhập từ khóa...
                                </ul>
                            </div>
                            <div class="travel-post-tag-list">
                            </div>
                            <input type="hidden" name="travelPostTags" id="travelPostTags" value="">
                            <input type="hidden" name="travelPostTagsRemove" id="travelPostTagsRemove">
                        </div>
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
@endsection()
