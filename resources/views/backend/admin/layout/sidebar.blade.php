@php
$profile_pic=!empty(auth()->user()->userinfo->profile_pic) ? asset('storage/'.auth()->user()->userinfo->profile_pic) : asset('backend/assets/images/profile/user-profile.jpeg');
@endphp
<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{ $profile_pic }}" alt="User-Profile-Image">
                    <div class="user-details">
                        <span>{{ auth()?->user()?->userinfo?->fname }} {{ auth()?->user()?->userinfo?->lname }}</span>
                        <div id="more-details">Role: {{ auth()?->user()?->role }}<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="{{ route('admin.profile') }}"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="{{ route('admin.logout') }}"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">

                <li class="nav-item mt-3">
                    <a href="{{ route('admin.dashboard')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Manage Products</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:void(0);" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Product</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="#">Add New Product</a></li>
                        <li><a href="#">All Products</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="{{ route('admin.attribute.index')}}">Attributes</a></li>
                        <li><a href="{{ route('admin.color.index')}}">Colors</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Forms &amp; table</label>
                </li>
                <li class="nav-item">
                    <a href="form_elements.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
                </li>
                <li class="nav-item">
                    <a href="tbl_bootstrap.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Chart & Maps</label>
                </li>
                <li class="nav-item">
                    <a href="chart-apex.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
                </li>
                <li class="nav-item">
                    <a href="map-google.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Settings</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:void(0);" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Settings</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin.global-settings') }}">Global Settings</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="sample-page.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

            </ul>
        </div>
    </div>
</nav>