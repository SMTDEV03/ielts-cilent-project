<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('user_homepage') }}" class="logo blue-bg">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="{{ asset('public/assets/front_assets/images/logo.png') }}" alt=""></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{ asset('public/assets/front_assets/images/logo.png') }}" alt=""></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar blue-bg navbar-static-top">

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user-circle-o fa-2x"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('user_profile') }}"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>