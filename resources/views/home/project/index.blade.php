@component('.home.layout.contetnt')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section two inner">
        <div class="banner-element-four two">
            <img src="/asset/images/element/element-5.png" alt="element">
        </div>
        <div class="banner-element-five two">
            <img src="/asset/images/element/element-7.png" alt="element">
        </div>
        <div class="banner-element-nineteen two">
            <img src="/asset/images/element/element-6.png" alt="element">
        </div>
        <div class="banner-element-twenty-two two">
            <img src="/asset/images/element/element-69.png" alt="element">
        </div>
        <div class="banner-element-twenty-three two">
            <img src="/asset/images/element/element-70.png" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">پروژه ها</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Gallery
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="gallery-section ptb-120">
        <div class="container">
            <div class="gallery-filter-wrapper">
                <div class="grid two">
                    <div class="grid-item two marketing">
                        @foreach($project as $projects)
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{$projects->featuring}}" alt="gallery">
                                <div class="gallery-thumb-overlay">
                                    <div class="gallery-icon">
                                        <a class="img-popup"  href="/asset/images/gallery/gallery-9.png"><img src="{{$projects->clientLogo}}" alt="{{$projects->client}}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-content text-right">
                                <span class="sub-title">{{$projects->client}}</span>
                                <h3 class="title"><a href="project-details.html">{{$projects->title}}</a></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Gallery
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endcomponent
