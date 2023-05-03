<div class="navbar nav_title" style="border: 0;">
    <a href="{{ url('/') }}" class="site_title" style="padding-left:0"><img src="{{ asset(env('FOLDER_PUBLIC').'/assets/images/img_1.png')}}"
        style="width: 55%;
    margin: 0 auto;
    display: block;
}"
        /><span>CMS&#183;Dashboard</span></a>
</div>
<div class="clearfix"></div>
<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{ asset(env('FOLDER_PUBLIC').'/assets/images/user.png') }}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Chào mừng,</span>
        <h2>{{ auth()->user() !== null ? auth()->user()->name : '' }}</h2>
    </div>
</div>
<!-- /menu profile quick info -->
<br />
