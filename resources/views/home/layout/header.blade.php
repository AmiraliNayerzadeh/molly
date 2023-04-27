<!-- HEADER
			============================================= -->
<header id="header" class="header tra-menu navbar-light">
    <div class="header-wrapper">


        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo"><img src="{{asset('asset/images/logo-01.png')}}" alt="molly team | تیم توسعه مولی"/></span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        </div>


        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">


                <!-- HEADER LOGO -->
                <div class="desktoplogo"><a href="/" class="logo-black"><img src="{{asset('asset/images/logo-01.png')}}" alt="molly team | تیم توسعه مولی"></a></div>
                <div class="desktoplogo"><a href="/" class="logo-white"><img src="{{asset('asset/images/logo-02.png')}}" alt="molly team | تیم توسعه مولی"></a></div>


                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list nav-orange-red-hover">


                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="/">خانه</a></li>


                        <li class="nl-simple" aria-haspopup="true"><a href="{{route('blog.archive')}}">مجله</a></li>


                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true"><span class="wsmenu-click"><i class="wsmenu-arrow"></i></span><a href="{{route('service.main')}}">خدمات<span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                @foreach(\App\Models\Category::all() as $category)
                                <li aria-haspopup="true"><a href="{{route('service.index' , $category->slug)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="{{route('project.index')}}">نمونه کارها</a></li>


                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="#features-8">استخدام</a></li>


                        <!-- HEADER BUTTON -->
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="{{route('Counseling')}}" class="btn btn-tra-white orange-red-hover last-link">درخواست مشاوره</a>
                        </li>

                    </ul>
                </nav>	<!-- END MAIN MENU -->


            </div>
        </div>	<!-- END NAVIGATION MENU -->
    </div>     <!-- End header-wrapper -->
</header>	<!-- END HEADER -->


