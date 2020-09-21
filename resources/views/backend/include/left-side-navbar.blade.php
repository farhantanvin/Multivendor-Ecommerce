<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset("/public/admin-lte/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{env('APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @auth
                    @if(auth()->user()->photo)
                        <img src="{{asset(auth()->user()->photo)}}" class="img-circle elevation-2" alt="User Image">
                    @else
                        <img src="{{asset("/public/demo-pic/profile.png")}}" class="img-circle elevation-2"
                             alt="User Image">
                    @endif
                @elseauth
                    <img src="{{asset("/public/demo-pic/profile.png")}}" class="img-circle elevation-2"
                         alt="User Image">
                @endauth
            </div>
            <div class="info">
                @auth
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                @endauth
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                @if(!empty($aclList[6][1]))
                    <li class="nav-item has-treeview {{ ($routeName == 'user.index' || $routeName == 'user.create' || $routeName == 'user.edit') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if(!empty($aclList[6][1]))
                            <li class="nav-item">
                                <a href="{{route("user.index")}}"
                                   class="nav-link {{ ($routeName == 'user.index' || $routeName == 'user.create'|| $routeName == 'user.edit') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admin Panel User</p>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>
                @endif

                @if(!empty($aclList[1][1]) || !empty($aclList[2][1]) || !empty($aclList[3][1]))
                <li class="nav-item has-treeview {{ ($routeName == 'role.index' || $routeName == 'role.create' || $routeName == 'role.edit' || $routeName == 'role.access' || $routeName == 'user.access') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Access Control
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(!empty($aclList[1][1]))
                        <li class="nav-item">
                            <a href="{{route("role.index")}}"
                               class="nav-link {{ ($routeName == 'role.index' || $routeName == 'role.create'|| $routeName == 'role.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Role Management</p>
                            </a>
                        </li>
                        @endif
                            @if(!empty($aclList[2][1]))
                        <li class="nav-item">
                            <a href="{{route("role.access")}}"
                               class="nav-link {{ ($routeName == 'role.access') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Role Access Control</p>
                            </a>
                        </li>
                            @endif
                            @if(!empty($aclList[3][1]))
                        <li class="nav-item">
                            <a href="{{route("user.access")}}"
                               class="nav-link {{ ($routeName == 'user.access') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Access Control</p>
                            </a>
                        </li>
                                @endif

                    </ul>
                </li>
                @endif

                @if(!empty($aclList[4][1]) || !empty($aclList[5][1]))
                <li class="nav-item has-treeview {{ ($routeName == 'activity.index' || $routeName == 'activity.create' || $routeName == 'activity.edit' || $routeName == 'module.index' || $routeName == 'module.create'|| $routeName == 'module.edit') ? 'menu-open' : '' }}">
                    <a href="#"
                       class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(!empty($aclList[4][1]))
                        <li class="nav-item">
                            <a href="{{route("module.index")}}"
                               class="nav-link {{ ($routeName == 'module.index' || $routeName == 'module.create'|| $routeName == 'module.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Module Management</p>
                            </a>
                        </li>
                        @endif
                            @if(!empty($aclList[5][1]))
                        <li class="nav-item">
                            <a href="{{route("activity.index")}}"
                               class="nav-link {{ ($routeName == 'activity.index' || $routeName == 'activity.create'|| $routeName == 'activity.edit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Activity Management</p>
                            </a>
                        </li>
                                @endif
                    </ul>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{route('admin.logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
