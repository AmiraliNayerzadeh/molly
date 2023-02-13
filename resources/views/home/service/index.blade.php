@component('.home.layout.contetnt')

    <!-- CONTENT-1
			============================================= -->
    <section id="content-1" class="content-1 wide-60 inner-page-hero content-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-7 col-lg-6 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInRight">

                        <!-- Title -->
                        <h1 class="h2-xs">{{$category->name}}</h1>

                        @foreach(\App\Models\Category::all()->where('parent' , $category->id) as $sub)
                        <!-- List -->
                        <ul class="simple-list">
                            <li class="list-item">
                                <a href="">
                                    {{$sub->name}}
                                </a>
                            </li>
                        </ul>
                            @endforeach
                        <a class="btn btn-purple" href="">در خواست خدمات {{$category->name}} از مولی </a>
                    </div>
                </div>	<!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-5 col-lg-6 order-first order-md-2">
                    <div class="rel img-block right-column wow fadeInLeft">
                        <img class="img-fluid" src="{{$category->image}}" alt="content-image">
                    </div>
                </div>


            </div>	   <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-1 -->




    <!-- CONTENT-3
    ============================================= -->
    <section id="content-3" class="bg-snow content-3 wide-60 content-section division">
        <div class="container">
            <!-- TOP ROW -->
            <div class="top-row pb-50">
                <div class="row d-flex align-items-center">
                    <!-- TEXT BLOCK -->
                    <div class="col-md-12 col-lg-12">
                        <div class="txt-block right-column wow fadeInLeft">
                            <!-- Title -->
                            <h3 class="h2-xs">{{$category->name}}  با گروه توسعه مولی </h3>

                            <!-- Text -->

                            {!! $category->description !!}

                            <!-- Tools List -->
                        </div>
                    </div>	<!-- END TEXT BLOCK -->

                </div>
            </div>	<!-- END TOP ROW -->


        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-3 -->





    <!-- FEATURES-4
    ============================================= -->
    <section id="features-4" class="pb-60 features-section division">
        <div class="container">


            <!-- FEATURES-4 WRAPPER -->
            <div class="fbox-4-wrapper fbox-4-wide">
                <div class="row row-cols-1 row-cols-md-2">


                    <!-- FEATURE BOX #1 -->
                    <div class="col">
                        <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico">
                                <div class="ico-65">
                                    <span class="flaticon-web-browser"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">Cross-Platform</h5>

                                <!-- Text -->
                                <p class="p-lg">Porta semper lacus cursus feugiat primis ultrice ligula risus auctor
                                    tempus feugiat impedit undo auctor felis augue mauris aoreet tempor
                                </p>

                            </div>

                        </div>
                    </div>


                    <!-- FEATURE BOX #2 -->
                    <div class="col">
                        <div class="fbox-4 pl-25 mb-40 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico">
                                <div class="ico-65">
                                    <span class="flaticon-filter-1"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">Powerful Options</h5>

                                <!-- Text -->
                                <p class="p-lg">Porta semper lacus cursus feugiat primis ultrice ligula risus auctor
                                    tempus feugiat impedit undo auctor felis augue mauris aoreet tempor
                                </p>

                            </div>

                        </div>
                    </div>


                    <!-- FEATURE BOX #3 -->
                    <div class="col">
                        <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico">
                                <div class="ico-65">
                                    <span class="flaticon-priority"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">Extremely Flexible</h5>

                                <!-- Text -->
                                <p class="p-lg">Porta semper lacus cursus feugiat primis ultrice ligula risus auctor
                                    tempus feugiat impedit undo auctor felis augue mauris aoreet tempor
                                </p>

                            </div>

                        </div>
                    </div>


                    <!-- FEATURE BOX #4 -->
                    <div class="col">
                        <div class="fbox-4 pl-25 mb-40 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico">
                                <div class="ico-65">
                                    <span class="flaticon-web-programming"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">Easy to Embed</h5>

                                <!-- Text -->
                                <p class="p-lg">Porta semper lacus cursus feugiat primis ultrice ligula risus auctor
                                    tempus feugiat impedit undo auctor felis augue mauris aoreet tempor
                                </p>

                            </div>

                        </div>
                    </div>


                    <!-- FEATURE BOX #5 -->
                    <div class="col">
                        <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico">
                                <div class="ico-65">
                                    <span class="flaticon-layers"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">Extensions & Addons</h5>

                                <!-- Text -->
                                <p class="p-lg">Porta semper lacus cursus feugiat primis ultrice ligula risus auctor
                                    tempus feugiat impedit undo auctor felis augue mauris aoreet tempor
                                </p>

                            </div>

                        </div>
                    </div>


                    <!-- FEATURE BOX #6 -->
                    <div class="col">
                        <div class="fbox-4 pl-25 mb-40 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico">
                                <div class="ico-65">
                                    <span class="flaticon-translation"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">Multi-language</h5>

                                <!-- Text -->
                                <p class="p-lg">Porta semper lacus cursus feugiat primis ultrice ligula risus auctor
                                    tempus feugiat impedit undo auctor felis augue mauris aoreet tempor
                                </p>

                            </div>

                        </div>
                    </div>


                </div>
            </div>    <!-- END FEATURES-4 WRAPPER -->


        </div>     <!-- End container -->
    </section>	<!-- END FEATURES-4 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">




    <!-- STATISTIC-2
    ============================================= -->
    <section id="statistic-2" class="wide-100 statistic-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-lg-6">
                    <div class="txt-block right-column wow fadeInLeft">
                        <h3 class="h3-xs">More than 65,000 users around the world are already using OLMO actively</h3>
                    </div>
                </div>


                <!-- STATISTIC BLOCK #1 -->
                <div class="col-sm-5 col-md-4 col-lg-3 offset-sm-1 offset-md-2 offset-lg-1">
                    <div class="statistic-block wow fadeInUp">

                        <!-- Text -->
                        <h2 class="h2-title-xs statistic-number"><span class="count-element">65</span>K</h2>
                        <p class="p-lg mt-20">Active downloads <br /> from the community</p>

                    </div>
                </div>


                <!-- STATISTIC BLOCK #2 -->
                <div class="col-sm-5 col-md-4 col-lg-2">
                    <div class="statistic-block wow fadeInUp">

                        <!-- Text -->
                        <h2 class="h2-title-xs statistic-number">
                            <span class="count-element">4</span>.<span class="count-element">86</span>
                        </h2>

                        <!-- Rating -->
                        <div class="txt-block-rating ico-15 yellow-color">
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-1"></span>
                            <span class="flaticon-star-half-empty"></span>
                        </div>

                        <p class="p-lg txt-400">8,376 Rating</p>
                    </div>
                </div>


            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END STATISTIC-2 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">




    <!-- TESTIMONIALS-1
    ============================================= -->
    <section id="reviews-1" class="wide-100 reviews-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-70">

                        <!-- Title -->
                        <h2 class="h2-md">Stories From Our Customers</h2>

                        <!-- Text -->
                        <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero
                            tempus, blandit and cursus varius and magnis sapien
                        </p>

                    </div>
                </div>
            </div>


            <!-- TESTIMONIALS CONTENT -->
            <div class="row">
                <div class="col">
                    <div class="owl-carousel owl-theme reviews-1-wrapper">


                        <!-- TESTIMONIAL #1 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="review-1-ico ico-25">
                                <span class="flaticon-left-quote"></span>
                            </div>

                            <!-- Text -->
                            <div class="review-1-txt">

                                <!-- Text -->
                                <p class="p-lg">Etiam sapien sagittis congue augue massa varius egestas ultrice
                                    varius magna a tempus aliquet undo cursus suscipit
                                </p>

                                <!-- Testimonial Author -->
                                <div class="author-data clearfix">

                                    <!-- Testimonial Avatar -->
                                    <div class="review-avatar">
                                        <img src="/asset/images/review-author-1.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">

                                        <h6 class="h6-xl">Scott Boxer</h6>
                                        <p class="p-md">@scott_boxer</p>

                                        <!-- Rating -->
                                        <div class="review-rating ico-15 yellow-color">
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-half-empty"></span>
                                        </div>

                                    </div>

                                </div>	<!-- End Testimonial Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #1 -->


                        <!-- TESTIMONIAL #2 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="review-1-ico ico-25">
                                <span class="flaticon-left-quote"></span>
                            </div>

                            <!-- Text -->
                            <div class="review-1-txt">

                                <!-- Text -->
                                <p class="p-lg">At sagittis congue augue and egestas magna ipsum vitae a purus ipsum
                                    primis in cubilia laoreet augue egestas luctus and donec diam ultrice ligula magna
                                    suscipit lectus gestas augue into cubilia
                                </p>

                                <!-- Testimonial Author -->
                                <div class="author-data clearfix">

                                    <!-- Testimonial Avatar -->
                                    <div class="review-avatar">
                                        <img src="/asset/images/review-author-2.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">

                                        <h6 class="h6-xl">Joel Peterson</h6>
                                        <p class="p-md">Internet Surfer</p>

                                        <!-- Rating -->
                                        <div class="review-rating ico-15 yellow-color">
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-half-empty"></span>
                                        </div>

                                    </div>

                                </div>	<!-- End Testimonial Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #2 -->


                        <!-- TESTIMONIAL #3 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="review-1-ico ico-25">
                                <span class="flaticon-left-quote"></span>
                            </div>

                            <!-- Text -->
                            <div class="review-1-txt">

                                <!-- Text -->
                                <p class="p-lg">Mauris donec magnis sapien etiam sapien congue augue egestas et ultrice
                                    vitae purus diam integer a congue magna ligula undo egestas magna at suscipit feugiat
                                    primis
                                </p>

                                <!-- Testimonial Author -->
                                <div class="author-data clearfix">

                                    <!-- Testimonial Avatar -->
                                    <div class="review-avatar">
                                        <img src="/asset/images/review-author-3.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">

                                        <h6 class="h6-xl">Marisol19</h6>
                                        <p class="p-md">@marisol19</p>

                                        <!-- Rating -->
                                        <div class="review-rating ico-15 yellow-color">
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-half-empty"></span>
                                        </div>

                                    </div>

                                </div>	<!-- End Testimonial Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #3 -->


                        <!-- TESTIMONIAL #4 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="review-1-ico ico-25">
                                <span class="flaticon-left-quote"></span>
                            </div>

                            <!-- Text -->
                            <div class="review-1-txt">

                                <!-- Text -->
                                <p class="p-lg">Mauris donec a magnis sapien etiam sapien congue augue pretium ligula
                                    lectus aenean a magna undo mauris lectus laoreet tempor egestas
                                </p>

                                <!-- Testimonial Author -->
                                <div class="author-data clearfix">

                                    <!-- Testimonial Avatar -->
                                    <div class="review-avatar">
                                        <img src="/asset/images/review-author-4.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">

                                        <h6 class="h6-xl">Leslie D.</h6>
                                        <p class="p-md">Web Developer</p>

                                        <!-- Rating -->
                                        <div class="review-rating ico-15 yellow-color">
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-half-empty"></span>
                                        </div>

                                    </div>

                                </div>	<!-- End Testimonial Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #4 -->


                        <!-- TESTIMONIAL #5 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="review-1-ico ico-25">
                                <span class="flaticon-left-quote"></span>
                            </div>

                            <!-- Text -->
                            <div class="review-1-txt">

                                <!-- Text -->
                                <p class="p-lg">An augue cubilia laoreet magna suscipit egestas and ipsum a lectus purus ipsum
                                    primis and augue ultrice ligula and egestas a suscipit lectus gestas undo auctor tempus
                                    feugiat impedit
                                </p>

                                <!-- Testimonial Author -->
                                <div class="author-data clearfix">

                                    <!-- Testimonial Avatar -->
                                    <div class="review-avatar">
                                        <img src="/asset/images/review-author-5.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">

                                        <h6 class="h6-xl">Jennifer Harper</h6>
                                        <p class="p-md">App Developer</p>

                                        <!-- Rating -->
                                        <div class="review-rating ico-15 yellow-color">
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-half-empty"></span>
                                        </div>

                                    </div>

                                </div>	<!-- End Testimonial Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #5 -->


                        <!-- TESTIMONIAL #6 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="review-1-ico ico-25">
                                <span class="flaticon-left-quote"></span>
                            </div>

                            <!-- Text -->
                            <div class="review-1-txt">

                                <!-- Text -->
                                <p class="p-lg">An augue cubilia laoreet undo magna ipsum semper suscipit egestas magna
                                    ipsum ligula a vitae purus and ipsum primis cubilia magna suscipit
                                </p>

                                <!-- Testimonial Author -->
                                <div class="author-data clearfix">

                                    <!-- Testimonial Avatar -->
                                    <div class="review-avatar">
                                        <img src="/asset/images/review-author-6.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">

                                        <h6 class="h6-xl">Jonathan Barnes</h6>
                                        <p class="p-md">jQuery Programmer</p>

                                        <!-- Rating -->
                                        <div class="review-rating ico-15 yellow-color">
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-half-empty"></span>
                                        </div>

                                    </div>

                                </div>	<!-- End Testimonial Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #6 -->


                        <!-- TESTIMONIAL #7 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="review-1-ico ico-25">
                                <span class="flaticon-left-quote"></span>
                            </div>

                            <!-- Text -->
                            <div class="review-1-txt">

                                <!-- Text -->
                                <p class="p-lg">Augue egestas diam tempus volutpat egestas augue in cubilia laoreet magna
                                    suscipit luctus dolor and blandit vitae purus diam tempus an aliquet porta rutrum gestas
                                </p>

                                <!-- Testimonial Author -->
                                <div class="author-data clearfix">

                                    <!-- Testimonial Avatar -->
                                    <div class="review-avatar">
                                        <img src="/asset/images/review-author-7.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">

                                        <h6 class="h6-xl">Mike Harris</h6>
                                        <p class="p-md">Graphic Designer</p>

                                        <!-- Rating -->
                                        <div class="review-rating ico-15 yellow-color">
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-half-empty"></span>
                                        </div>

                                    </div>

                                </div>	<!-- End Testimonial Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #7 -->


                        <!-- TESTIMONIAL #8 -->
                        <div class="review-1">

                            <!-- Quote Icon -->
                            <div class="review-1-ico ico-25">
                                <span class="flaticon-left-quote"></span>
                            </div>

                            <!-- Text -->
                            <div class="review-1-txt">

                                <!-- Text -->
                                <p class="p-lg">Augue at vitae purus tempus egestas volutpat augue undo cubilia laoreet
                                    magna suscipit luctus dolor blandit at purus tempus feugiat impedit
                                </p>

                                <!-- Testimonial Author -->
                                <div class="author-data clearfix">

                                    <!-- Testimonial Avatar -->
                                    <div class="review-avatar">
                                        <img src="/asset/images/review-author-8.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">

                                        <h6 class="h6-xl">Evelyn Martinez</h6>
                                        <p class="p-md">WordPress Consultant</p>

                                        <!-- Rating -->
                                        <div class="review-rating ico-15 yellow-color">
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-1"></span>
                                            <span class="flaticon-star-half-empty"></span>
                                        </div>

                                    </div>

                                </div>	<!-- End Testimonial Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #8 -->


                    </div>
                </div>
            </div>	<!-- END TESTIMONIALS CONTENT -->


        </div>     <!-- End container -->
    </section>	<!-- END TESTIMONIALS-1 -->




    <!-- CONTENT-2A
    ============================================= -->
    <section id="content-2a" class="content-2 bg-lightgrey wide-60 content-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- IMAGE BLOCK -->
                <div class="col-md-5 col-lg-6">
                    <div class="rel img-block left-column wow fadeInRight">
                        <img class="img-fluid" src="/asset/images/img-05.png" alt="content-image">
                    </div>
                </div>


                <!-- TEXT BLOCK -->
                <div class="col-md-7 col-lg-6">
                    <div class="txt-block right-column wow fadeInLeft">

                        <!-- Section ID -->
                        <span class="section-id txt-upcase">Handling With Ease</span>

                        <!-- Title -->
                        <h2 class="h2-xs">More productivity with less effort</h2>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p class="p-lg">Fringilla risus, luctus mauris orci auctor euismod iaculis luctus
                                    magna purus pretium ligula purus undo quaerat tempor sapien rutrum mauris quaerat ultrice
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="p-lg">Quaerat sodales sapien euismod purus blandit</p>
                            </li>

                            <li class="list-item">
                                <p class="p-lg">Nemo ipsam egestas volute turpis dolores undo ultrice aliquam
                                    quaerat at sodales sapien purus
                                </p>
                            </li>

                        </ul>

                    </div>
                </div>	<!-- END TEXT BLOCK -->


            </div>	   <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-2A -->




    <!-- CONTENT-7
    ============================================= -->
    <section id="content-7" class="content-7 wide-60 content-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInLeft">

                        <!-- TEXT BOX -->
                        <div class="txt-box mb-25">

                            <!-- Title -->
                            <h5 class="h5-lg">Manage Everything in One Place</h5>

                            <!-- Text -->
                            <p class="p-lg">Quaerat sodales sapien euismod blandit at vitae ipsum primis undo and
                                cubilia laoreet augue and luctus magna dolor luctus at egestas sapien vitae nemo egestas
                                volute and turpis dolores aliquam quaerat sodales a sapien
                            </p>

                        </div>

                        <!-- TEXT BOX -->
                        <div class="txt-box">

                            <!-- Title -->
                            <h5 class="h5-lg">Advanced Control and Privacy</h5>

                            <!-- List -->
                            <ul class="simple-list">

                                <li class="list-item">
                                    <p class="p-lg">Fringilla risus, luctus mauris auctor euismod an iaculis luctus
                                        magna purus pretium ligula purus and quaerat
                                    </p>
                                </li>

                                <li class="list-item">
                                    <p class="p-lg">Nemo ipsam egestas volute turpis dolores undo ultrice aliquam quaerat
                                        at sodales sapien purus
                                    </p>
                                </li>

                            </ul>

                        </div>	<!-- END TEXT BOX -->

                    </div>
                </div>	<!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="content-7-img wow fadeInRight">
                        <img class="img-fluid" src="/asset/images/dashboard-04.png" alt="content-image">
                    </div>
                </div>


            </div>	  <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-7 -->




    <!-- CALL TO ACTION-3
    ============================================= -->
    <section id="cta-3" class="cta-section division">
        <div class="cta-3-holder bg-lightgrey">
            <div class="container">
                <div class="bg-white cta-3-wrapper">
                    <div class="row d-flex align-items-center">


                        <!-- CALL TO ACTION TEXT -->
                        <div class="col-lg-7 col-lg-8">
                            <div class="cta-3-txt">
                                <h4 class="h4-xl">Try OLMO free for 14 days. Start your trial now and pick a plan later</h4>
                            </div>
                        </div>


                        <!-- CALL TO ACTION BUTTON -->
                        <div class="col-lg-4">
                            <div class="text-end">
                                <div class="cta-3-btn text-center">
                                    <a href="pricing.html" class="btn btn-skyblue tra-grey-hover">Get Started Now</a>
                                    <p><a href="faqs.html">Read The FAQs</a></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>    <!-- End row -->
            </div>	   <!-- End container -->
        </div>
    </section>	<!-- END CALL TO ACTION-3 -->


@endcomponent
