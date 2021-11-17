<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
        <div class="image text-center"><img src="dist/img/logo1.png" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> <a href="#"><i class="fa fa-power-off"></i></a> </div>
      </div> -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">ADMIN DASHBOARD</li>
            <li> <a href="{{ route('user_homepage') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"></span> </a>
            </li>

            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin_user_list') }}">All Users</a></li>
                    <li><a href="{{ route('become_supporter') }}">Supporters</a></li>
                </ul>
            </li>

            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Samples</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('become_supporter') }}">Essays</a></li>
                    <li><a href="{{ route('become_supporter') }}">Letters</a></li>
                </ul>
            </li>

            <li > <a href="{{ route('user_profile') }}"> <i class="fa fa-envelope-o "></i> <span>Settings</span> <span class="pull-right-container"> </span> </a>
            </li>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>