<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                {{--                Dashboard--}}
                <li class="nav-item menu-open">
                    <a href="/admin" class="nav-link {{Route::currentRouteName() == 'dashboard' ? 'active' :''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                {{--                users--}}
                <li class="nav-item {{Route::currentRouteName() == 'users.index' || Route::currentRouteName() == 'users.create' ||Route::currentRouteName() ==  'users.edit' ? 'menu-open' : ''}} ">
                    <a href="{{route('users.index')}}"
                       class="nav-link {{Route::currentRouteName() == 'users.index' || Route::currentRouteName() == 'users.create' ||Route::currentRouteName() ==  'users.edit' ? 'active ' : ''}}">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.create')}}"
                               class="nav-link  {{Route::currentRouteName() == 'users.create' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add User</p>
                            </a>
                    </ul>
                </li>
                {{--                end users--}}


                {{--                blogs--}}
                <li class="nav-item {{Route::currentRouteName() == 'blogs.index' || Route::currentRouteName() == 'blogs.create' ||Route::currentRouteName() ==  'blogs.edit' ? 'menu-open' : ''}} ">
                    <a href="{{route('blogs.index')}}"
                       class="nav-link {{Route::currentRouteName() == 'blogs.index' || Route::currentRouteName() == 'blogs.create' ||Route::currentRouteName() ==  'blogs.edit' ? 'active ' : ''}}">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('blogs.create')}}"
                               class="nav-link  {{Route::currentRouteName() == 'blogs.create' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                    </ul>
                </li>
                {{--                end blogs--}}


                {{--                blogs--}}
                <li class="nav-item {{Route::currentRouteName() == 'categories.index' || Route::currentRouteName() == 'categories.create' ||Route::currentRouteName() ==  'categories.edit' ? 'menu-open' : ''}} ">
                    <a href="{{route('categories.index')}}"
                       class="nav-link {{Route::currentRouteName() == 'categories.index' || Route::currentRouteName() == 'categories.create' ||Route::currentRouteName() ==  'categories.edit' ? 'active ' : ''}}">
                        <i class="nav-icon fa fa-sitemap"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}"
                               class="nav-link  {{Route::currentRouteName() == 'categories.create' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                    </ul>
                </li>
                {{--                end blogs--}}


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
