<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Quản lý</h3>
        <ul class="nav side-menu">
            <li><a href="{{ url('cms/dashboard') }}"><i class="fa fa-home"></i>Bảng điều khiển</a></li>
            <li><a href="{{ url('cms/categories') }}"><i class="fa fa fa-list"></i>Danh mục</a></li>
            {{--<li><a href="{{ url('cms/locations') }}"><i class="fa fa-location-arrow"></i>Quản lý điểm đến</a></li>--}}
            {{--<li><a href="{{ url('cms/destinations') }}"><i class="fa fa-map"></i>Quản lý điểm du lịch</a></li>--}}
            <li><a href="{{ url('cms/posts') }}"><i class="fa fa-file-text"></i>Danh sách bài viết</a></li>
            <li><a href="{{ url('cms/pages') }}" title="Các trang giới thiệu"><i class="fa fa-legal"></i> Các trang giới thiệu</a></li>
            <li><a href="{{ url('cms/customers') }}"><i class="fa fa-users"></i>Quản lý người dùng đăng ký</a></li>
            <li><a href="{{ url('cms/frequently-questions') }}"><i class="fa fa-question"></i> Câu hỏi thường gặp</a></li>
            <li><a href="{{ url('cms/partner') }}"><i class="fa fa-hand-peace-o"></i>Quản lý đối tác</a></li>


            {{--<li><a href="{{ url('cms/solution') }}"><i class="fa fa-cube"></i>Quản lý giải pháp</a></li>--}}
            {{--<li><a href="{{ url('cms/banners') }}"><i class="fa fa-picture-o"></i>Quản lý banner</a></li>--}}
            <li><a href="{{ url('cms/contact') }}"><i class="fa fa-globe"></i>Quản lý thông tin website</a></li>
            <li><a><i class="fa fa-laptop"></i>QL nội dung trang chủ<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('cms/widgets/homepage/top_banner') }}">Banner đầu trang</a></li>
                    <li><a href="{{ url('cms/widgets/homepage/middle_banner') }}">Banner giữa trang</a></li>
                    <li><a href="{{ url('cms/widgets/homepage/trend') }}">Xu hướng</a></li>
                </ul>
            </li>
            <li><a href="{{ url('cms/users') }}"><i class="fa fa-user"></i>Quản lý tài khoản</a></li>
            {{--<li><a><i class="fa fa-laptop"></i>QL nội dung về chúng tôi<span class="fa fa-chevron-down"></span></a>--}}
                {{--<ul class="nav child_menu">--}}
                    {{--<li><a href="{{ url('cms/banner') }}">Header banner</a></li>--}}
                    {{--<li><a href="{{ url('cms/widgets/aboutus/content1') }}">Nội dung 1</a></li>--}}
                    {{--<li><a href="{{ url('cms/widgets/aboutus/author') }}">TÁC GIẢ MÔ HÌNH</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a><i class="fa fa-laptop"></i>QL nội dung hoạt động<span class="fa fa-chevron-down"></span></a>--}}
                {{--<ul class="nav child_menu">--}}
                    {{--<li><a href="{{ url('cms/banner') }}">Header banner</a></li>--}}
                    {{--<li><a href="{{ url('cms/widgets/activity/slogan_banner') }}">Slogan banner</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a><i class="fa fa-laptop"></i>QL nội dung chi tiết HĐ<span class="fa fa-chevron-down"></span></a>--}}
                {{--<ul class="nav child_menu">--}}
                    {{--<li><a href="{{ url('cms/banner') }}">Header banner</a></li>--}}
                    {{--<li><a href="{{ url('cms/widgets/activity_detail/slogan_banner') }}">Slogan banner</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a><i class="fa fa-laptop"></i>QL nội dung giải pháp<span class="fa fa-chevron-down"></span></a>--}}
                {{--<ul class="nav child_menu">--}}
                    {{--<li><a href="{{ url('cms/solution') }}">Header banner</a></li>--}}
                    {{--<li><a href="{{ url('cms/widgets/solution/content1') }}">Nội dung 1</a></li>--}}
                    {{--<li><a href="{{ url('cms/widgets/solution/slogan1') }}">Slogan 1</a></li>--}}
                    {{--<li><a href="{{ url('cms/widgets/solution/content2') }}">Nội dung 2</a></li>--}}
                    {{--<li><a href="{{ url('cms/widgets/solution/slogan_banner') }}">Slogan banner</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>
<!-- /sidebar menu -->