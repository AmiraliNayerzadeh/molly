<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/asset/images/logo/molly-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Molly</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{auth()->user()->image}}" class="img-circle elevation-2" alt="{{auth()->user()->name}}">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
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
                            <a href="{{route('users.index')}}"
                               class="nav-link  {{Route::currentRouteName() == 'users.index' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All User</p>
                            </a>
                    </ul>

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
                            <a href="{{route('blogs.index')}}"
                               class="nav-link  {{Route::currentRouteName() == 'blogs.index' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Blog</p>
                            </a>
                    </ul>
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


                {{--                Category--}}
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
                            <a href="{{route('categories.index')}}"
                               class="nav-link  {{Route::currentRouteName() == 'categories.index' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Category</p>
                            </a>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}"
                               class="nav-link  {{Route::currentRouteName() == 'categories.create' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                    </ul>
                </li>
                {{--                end Category--}}


                {{--                Category--}}
                <li class="nav-item {{Route::currentRouteName() == 'projects.index' || Route::currentRouteName() == 'projects.create' ||Route::currentRouteName() ==  'projects.edit' ? 'menu-open' : ''}} ">
                    <a href="{{route('projects.index')}}"
                       class="nav-link {{Route::currentRouteName() == 'projects.index' || Route::currentRouteName() == 'projects.create' ||Route::currentRouteName() ==  'projects.edit' ? 'active ' : ''}}">
                        <i class="nav-icon fa fa-sitemap"></i>
                        <p>
                            Projects
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('projects.index')}}"
                               class="nav-link  {{Route::currentRouteName() == 'projects.index' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Projects</p>
                            </a>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('projects.create')}}"
                               class="nav-link  {{Route::currentRouteName() == 'projects.create' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Project</p>
                            </a>
                    </ul>
                </li>
                {{--                end Category--}}

                {{--                Customer--}}
                <li class="nav-item {{Route::currentRouteName() == 'customers.index' || Route::currentRouteName() == 'customers.create' ||Route::currentRouteName() ==  'customers.edit' ? 'menu-open' : ''}} ">
                    <a href="{{route('customers.index')}}"
                       class="nav-link {{Route::currentRouteName() == 'customers.index' || Route::currentRouteName() == 'customers.create' ||Route::currentRouteName() ==  'customers.edit' ? 'active ' : ''}}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Customers
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('customers.index')}}"
                               class="nav-link  {{Route::currentRouteName() == 'customers.index' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Customers</p>
                            </a>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('customers.create')}}"
                               class="nav-link  {{Route::currentRouteName() == 'customers.create' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Customer</p>
                            </a>
                    </ul>
                </li>
                {{--                end Customer--}}


                {{--                Customer--}}
                <li class="nav-item {{Route::currentRouteName() == 'counseling.index' || Route::currentRouteName() == 'counseling.create' ||Route::currentRouteName() ==  'counseling.edit' ? 'menu-open' : ''}} ">
                    <a href="{{route('counseling.index')}}"
                       class="nav-link {{Route::currentRouteName() == 'counseling.index' || Route::currentRouteName() == 'counseling.create' ||Route::currentRouteName() ==  'counseling.edit' ? 'active ' : ''}}">
                        <i class="nav-icon fa fa-american-sign-language-interpreting"></i>
                        <p>
                            Counselings
                            <i class="fas fa-angle-left right"></i>
                            @if(count(\App\Models\Counseling::all()->where('status' , 'New')) > 0)
                            <span class="badge badge-success right">{{\App\Models\Counseling::all()->where('status' , 'New')->count()}} New!</span>
                            @endif
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('counseling.index')}}"
                               class="nav-link  {{Route::currentRouteName() == 'counseling.index' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Counselings</p>
                            </a>
                    </ul>
                </li>
                {{--                end Customer--}}



                {{--                UI--}}
                <li class="nav-item {{Route::currentRouteName() == 'Ui.index' || Route::currentRouteName() == 'Ui.create' ||Route::currentRouteName() ==  'Ui.edit' ? 'menu-open' : ''}} ">
                    <a href="{{route('Ui.index')}}"
                       class="nav-link {{Route::currentRouteName() == 'Ui.index' || Route::currentRouteName() == 'Ui.create' ||Route::currentRouteName() ==  'Ui.edit' ? 'active ' : ''}}">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Banner & Ui
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('Ui.index')}}"
                               class="nav-link  {{Route::currentRouteName() == 'Ui.index' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Banners</p>
                            </a>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('Ui.create')}}"
                               class="nav-link  {{Route::currentRouteName() == 'Ui.create' ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Banner</p>
                            </a>
                    </ul>
                </li>
                {{--                end UI--}}


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
