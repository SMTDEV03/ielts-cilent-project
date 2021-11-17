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
            <li class="header">PERSONAL</li>
            <li> <a href="{{ route('user_homepage') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"></span> </a>
            </li>
            <li> <a href="{{ route('become_supporter') }}"> <i class="fa fa-files-o"></i> <span>Become a Suppoter</span> <span class="pull-right-container"></span> </a>

            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Speaking</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('become_supporter') }}">Speaking club</a></li>
                    <li><a href="{{ route('become_supporter') }}">Recent Topics</a></li>
                    <li><a href="{{ route('become_supporter') }}">Sample Answers</a></li>
                </ul>
            </li>

            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Listening</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('become_supporter') }}"> Tests</a></li>
                    <li><a href="{{ route('become_supporter') }}">Vocabulary</a></li>
                </ul>
            </li>



            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Reading</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('become_supporter') }}">Academic Tests</a></li>
                    <li><a href="{{ route('become_supporter') }}">General Tests</a></li>
                    <li><a href="{{ route('become_supporter') }}">Vocabulary</a></li>
                </ul>
            </li>


            <li class="treeview"> <a href="#"> <i class="fa fa-bullseye"></i> <span>Writing</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('become_supporter') }}">IELTS Expert</a></li>
                    <li><a href="{{ route('become_supporter') }}">Premium Checker</a></li>
                    <li><a href="{{ route('become_supporter') }}">Simple Checker </a></li>
                    <li><a href="{{ route('become_supporter') }}">My Writings</a></li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-envelope-o "></i> <span>Top Examples</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('become_supporter') }}">Academic </a></li>
                            <li><a href="{{ route('become_supporter') }}">Letter</a></li>
                            <li><a href="{{ route('become_supporter') }}">Essay</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li > <a href="{{ route('user_profile') }}"> <i class="fa fa-envelope-o "></i> <span>Settings</span> <span class="pull-right-container"> </span> </a>
            </li>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>