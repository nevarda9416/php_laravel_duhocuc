@extends('layouts.default')
@section('content')
@if($action!='create')
    <div class="page-title">
        <div class="title_left">
            <h3><a href="{{ url('/solution') }}" title="Tạo giải pháp">&larr; Tạo giải pháp</a></h3>
        </div>
    </div>
@endif
<div class="clearfix"></div>
<div class="row">
    @include('components.alert')
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{__(ucfirst($action))}} giải pháp <strong>{{$solution->name}}</strong></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <form class="form-horizontal form-label-left input_mask" action="{{ url('solution/update/'.$solution->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên giải pháp <span
                                    class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" name="name" required="required" value="{{$solution->name??''}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon giải pháp @if($action!='edit') <span
                                    class="required">*</span> @endif</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="icon" @if($action!='edit') required="required" @endif>
                            @if(isset($solution->icon))
                                <div id="thumbnail_preview" class="mt-4">
                                    <img src="{{config()->get('constants.STATIC_IMAGES').$solution->icon}}" style="width:20%">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Banner giải pháp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="file" class="form-control" name="banner">
                            @if(isset($solution->banner))
                                <div id="banner_preview" class="mt-4">
                                    <img src="{{config()->get('constants.STATIC_IMAGES').$solution->banner}}" style="width:50%">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tóm tắt giải pháp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control editor_basic" name="excerpt" id="excerpt">{{$solution->excerpt}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung giải pháp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control editor_basic" name="content" id="content">{{$solution->content}}</textarea>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <label class="control-label col-md-1 col-sm-1 col-xs-12 text-primary">Mẫu</label>
                        <div class="col-md-11 col-sm-11 col-xs-12">
                            <textarea class="form-control editor_example" name="_example" id="_example" rows="5">
                                <section id="content1">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                <h2>MONG MUỐN</h2>
                                                <ul>
                                                    <li>1: Đáp ứng nhu cầu của CBNV</li>
                                                    <li>2: Tăng thêm các hoạt động phúc lợi cho CBNV</li>
                                                    <li>3: Cùng CBNV thực hiện các giá trị cho cộng đồng, xã hội</li>
                                                </ul>
                                                <span class="highlight"><strong>Từ đó:</strong></span>
                                                <ul>
                                                    <li>1: Tăng cường hiệu suất làm việc CBNV</li>
                                                    <li>2: Gia tăng sự gắn bó, trung thành của người lao động</li>
                                                    <li>3: Khẳng định danh tiếng của tổ chức</li>
                                                </ul>
                                                <hr/>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                <h2>THỰC TRẠNG</h2>
                                                <span class="highlight"><strong>Nguồn tiền chi tiêu cho các hoạt động chủ yếu từ:</strong></span>
                                                <ul>
                                                    <li>1: Quỹ công đoàn</li>
                                                    <li>2: Quỹ phúc lợi Doanh nghiệp</li>
                                                    <li>3: Nguồn tài trợ từ mạnh thường quân</li>
                                                    <li>4: Nguồn từ chính chủ doanh nghiệp</li>
                                                </ul>
                                                <span class="highlight"><strong>Đặc điểm nguồn tiền:</strong></span>
                                                <ul>
                                                    <li>1: Phụ thuộc</li>
                                                    <li>2: Biến động</li>
                                                    <li>3: Không bền vững</li>
                                                    <li>4: Chưa thỏa mãn hết các nhu cầu phúc lợi của NLĐ</li>
                                                </ul>
                                                <hr/>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="box1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
                                                <h2>
                                                    <span><img width="10%" class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_14.png')}}"
                                                               srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_14.png')}} 1x" alt=""></span>
                                                    Nút thắt là vấn đề tài chính</h2>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="slogan1">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <h2 class="text-center mt-2">
                                                    <img class="mr-2 pb-3" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_8.png')}}" alt="">
                                                    PHI THƯƠNG BẤT PHÚ</h2>
                                                <p>Làm sao để hưởng lợi ích từ thương mại nhưng không làm thay đổi bất kể hoạt động thông thường nào của doanh nghiệp?
                                                    <img class="ml-3 pt-2" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_9.png')}}" alt=""></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <h2 class="last-child"><svg data-type="Rectangle" data-name="Rectangle 244" class="Rectangle_244">
                                                        <rect class="Rectangle_244_Class" rx="0" ry="0" x="0" y="0" width="5" height="40">
                                                        </rect>
                                                    </svg>
                                                    VỀ MÔ HÌNH</h2>
                                                <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}}"
                                                     srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27@2x.png')}} 2x" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="content2" style='background: url("{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_60.png')}}") no-repeat top left;'>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
                                            <div class="box2 col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                <h2>5 GIÁ TRỊ CỐT LÕI
                                                    CỦA MÔ HÌNH</h2>
                                                <p>
                                                    Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                                                </p>
                                                <p>
                                                    Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                                                </p>
                                                <p>
                                                    Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </textarea>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('solution.list')
</div>
@endsection
