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
            <li class="{{ Request::is('admin') ? 'active' : '' }}"> <a href="{{ route('admin_homepage') }}"> <i class="fa fa-dashcube"></i> <span>Dashboard</span> <span class="pull-right-container"></span> </a>
            </li>
            <li class="treeview @if(Request::segment(2) === 'user_create' || Request::segment(2) === 'user-list') active @endif"> <a href="#"> <i class="fa fa-user"></i> <span>Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin_user_list') }}">All Users</a></li>
                    <li><a href="{{ route('admin_user_create') }}">Add User</a></li>
                </ul>
            </li>

            <li class="treeview  @if(Request::segment(2) === 'sample_create' || Request::segment(2) === 'sample-list') active @endif"> <a href="#"> <i class="fa fa-files-o"></i> <span>Samples</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin_samples',['type' => '1']) }}">All Essay Samples</a></li>
                    <li><a href="{{ route('admin_samples',['type' => '2']) }}">All Letter Samples</a></li>
                    <li><a href="{{ route('admin_sample_create') }}">Add Samples</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(2) === 'profile' ? 'active' : '' }}" > <a href="{{ route('admin_profile') }}"> <i class="fa fa-cogs"></i> <span>Settings</span> <span class="pull-right-container"> </span> </a>
            </li>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>