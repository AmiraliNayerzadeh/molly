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
                        <a class="btn btn-purple" href="{{route('Counseling')}}">در خواست خدمات {{$category->name}} از مولی </a>
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
                                    <span class="flaticon-line-graph-1"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">مشاور دیجیتال مارکتینگ</h5>

                                <!-- Text -->
                                <p class="p-lg">
                                    با بهره‌مندی از خدمات مشاوره دیجیتال مارکتینگ می‌توانید در مدیریت منابع انسانی، مالی، زمانی و … موفق‌تر باشید. مشاوره دیجیتال مارکتینگ به شما کمک می‌کند تا با استفاده از یک برنامه‌ریزی هدفمند و زمان‌بندی مشخص در مسیر اهداف خود با اطمینان خاطر بیشتری گام بردارید.
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
                                    <span class="flaticon-seo"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">
                                    سئو و بهینه سازی سایت
                                </h5>

                                <!-- Text -->
                                <p class="p-lg">
                                    موتور های جستجو در فراهم آوردن ترافیک هدفمند بی نظیر و منحصر به فرد هستند. افراد زمانی که به دنبال محصول یا خدمات مورد نیاز خود میگردند اولین جایی که بررسی میکنند موتور های جستجو است.
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
                                    <span class="flaticon-keyboard"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">
                                    تولید محتوا و بازاریابی محتوایی
                                </h5>

                                <!-- Text -->
                                <p class="p-lg">
                                    محتوا بخش بزرگی از زندگی روزمره شما است. محتوا ما را آگاه می‌کند، به سؤالاتمان پاسخ می‌دهد، سرگرممان می‌کند، باعث می‌شود لبخند بزنیم، در تصمیم گیری راهنماییمان می‌کند و…. محتوا به شما کمک می‌کند، مشتری‌ها را به سمت خود جذب کنید تا مخاطبان درگیرتان شوند و از تعامل با شما ارزش بدست بیاورند.
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
                                    <span class="flaticon-add-1"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">
                                    طراحی کمپین تبلیغاتی
                                </h5>

                                <!-- Text -->
                                <p class="p-lg">
                                    مجموعه‌ای از فعالیت‌های تبلیغاتی چندجانبه است که با برنامه‌ریزی دقیق، بکوشد پیام مناسب در دوره زمانی مناسب با بودجه مناسب را به سمع و نظر مخاطبان هدف برای دست یابی به اهداف آن کمپین، ترغیب نماید. معمولا کمپین های تبلیغاتی مبتنی بر هدف و یا مبتنی بر بودجه است.   </p>
                            </div>

                        </div>
                    </div>


                    <!-- FEATURE BOX #5 -->
                    <div class="col">
                        <div class="fbox-4 pr-25 mb-40 wow fadeInUp">

                            <!-- Icon -->
                            <div class="fbox-ico">
                                <div class="ico-65">
                                    <span class="flaticon-worldwide"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">
                                    طراحی سایت
                                </h5>

                                <!-- Text -->
                                <p class="p-lg">
                                    وبسایت هویت و اعتبار کسب و کار شماست. با یک سایت معتبر و قدرتمند می توانید اعتبار خودتان را چند برابر کنید و به مشتریان تان اطمینان بدهید.
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
                                    <span class="flaticon-instagram"></span>
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">

                                <!-- Title -->
                                <h5 class="h5-md">
                                    بازاریابی در شبکه های اجتماعی و اینستاگرام مارکتینگ
                                </h5>

                                <!-- Text -->
                                <p class="p-lg">
                                    شبکه‌های اجتماعی شما را به انبوهی از میلیون‌ها کاربر، مرتبط می‌کند و شما در این فضا می‌توانید مخاطبان خود را به صورتی دقیق شناسایی و با آن‌ها ارتباط برقرار کنید.
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


    <!-- CONTENT-2A
    ============================================= -->
    <section id="content-2a" class="content-2 bg-lightgrey wide-60 content-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-12 col-lg-12">
                    <div class="txt-block right-column wow fadeInLeft">
                        @foreach(\App\Models\Category::all()->where('parent' , $category->id) as $sub)
                        <!-- Title -->
                        <h3 class="h2-xs">{{$sub->name}}</h3>

                        @if($sub->meta_description)
                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p class="p-lg">
                                    {{$sub->meta_description}}
                                </p>
                            </li>
                        </ul>
                            @endif
                            @endforeach

                    </div>
                </div>	<!-- END TEXT BLOCK -->


            </div>	   <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END CONTENT-2A -->




    <!-- CALL TO ACTION-3
    ============================================= -->
    @include('.home.component.moshavere')

@endcomponent
