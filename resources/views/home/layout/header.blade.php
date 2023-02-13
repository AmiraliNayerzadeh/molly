<!-- HEADER
			============================================= -->
<header id="header" class="header tra-menu navbar-light">
    <div class="header-wrapper">


        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo"><img src="asset/images/logo-01.png" alt="mobile-logo"/></span>
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
                                <li aria-haspopup="true"><a href="{{route('service.index' , $category->name)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="#features-8">نمونه کارها</a></li>


                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="#features-8">استخدام</a></li>


                        <!-- HEADER BUTTON -->
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="#content-4" class="btn btn-tra-white orange-red-hover last-link">درخواست مشاوره</a>
                        </li>


                        <!-- HEADER SOCIAL LINKS
                        <li class="nl-simple white-color header-socials ico-20 clearfix" aria-haspopup="true">
                            <span><a href="#" class="ico-facebook"><span class="flaticon-facebook"></span></a></span>
                            <span><a href="#" class="ico-twitter"><span class="flaticon-twitter"></span></a></span>
                            <span><a href="#" class="ico-instagram"><span class="flaticon-instagram"></span></a></span>
                            <span><a href="#" class="ico-dribbble"><span class="flaticon-dribbble"></span></a></span>
                        </li> -->


                    </ul>
                </nav>	<!-- END MAIN MENU -->


            </div>
        </div>	<!-- END NAVIGATION MENU -->


    </div>     <!-- End header-wrapper -->
</header>	<!-- END HEADER -->
