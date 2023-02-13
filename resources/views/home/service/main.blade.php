@component('.home.layout.contetnt')

    <!-- TEAM-1
			============================================= -->
    <section id="team-1" class="wide-50 inner-page-hero team-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title title-02 mb-75">
                        <!-- Title -->
                        <h1 class="h2-xs">خدمات ما</h1>

                    </div>
                </div>
            </div>


            <!-- TEAM MEMBERS HOLDER -->
            <div class="team-members-wrapper text-center">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">

                @foreach(\App\Models\Category::all() as $category)
                    <!-- TEAM MEMBER  -->
                        <div class="col">
                            <div class="team-member wow fadeInUp">
                                <!-- Team Member Photo -->
                                <div class="team-member-photo">
                                    <a href="{{route('service.index' , $category)}}">
                                        <img class="img-fluid" src="{{$category->image}}" alt="{{$category->title}}">
                                    </a>
                                </div>

                                <!-- Team Member Data -->
                                <div class="team-member-data">
                                    <a href="{{route('service.index' , $category)}}">
                                        <h5 class="h5-sm">{{$category->name}}</h5>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- END TEAM MEMBER-->
                    @endforeach


                </div>   <!-- End row -->
            </div>    <!-- TEAM MEMBERS HOLDER -->


        </div>        <!-- End container -->
    </section>    <!-- END TEAM-1 -->




    <!-- TESTIMONIALS-3
    ============================================= -->
    <section id="content-2a" class="content-2 bg-whitesmoke wide-60 content-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- IMAGE BLOCK -->
                <div class="col-md-5 col-lg-6">
                    <div class="rel img-block left-column wow fadeInRight"
                         style="visibility: visible; animation-name: fadeInRight;">
                        <img class="img-fluid" src="asset/images/img-17.png" alt="content-image">
                    </div>
                </div>


                <!-- TEXT BLOCK -->
                <div class="col-md-7 col-lg-6">
                    <div class="txt-block right-column wow fadeInLeft"
                         style="visibility: visible; animation-name: fadeInLeft;">

                        <!-- Title -->
                        <h2 class="h2-xs">بازار دیجیتالت رو به مولی بسپار</h2>

                        <!-- List -->
                        <ul class="simple-list">
                            <p class="p-lg">
                                تیم توسعه مولی از صفر تا صد پیاده سازی بستر دیجیتالتون از مشاوره اولیه تا <strong>طرّاحی
                                    سایت، سئو و بهینه سازی،</strong> <strong>مدیریت شکبه های مجازی،</strong> <strong>تولید
                                    محتوا، طراحی گرافیکی</strong> همراه شماست.
                                <br>
                                با خیال راحت وارد دنیای بازار دیجیتال شوید.
                            </p>
                            </p>
                        </ul>

                    </div>
                </div>    <!-- END TEXT BLOCK -->


            </div>       <!-- End row -->
        </div>       <!-- End container -->
    </section>



    <!-- BRANDS-2
    ============================================= -->
    <div id="brands-2" class="pt-70 pb-40 brands-section division">
        <div class="container">


            <!-- BRANDS TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="brands-title text-center">
                        <h3 class="p-xl">بهترین ها به مولی اعتماد کرده اند.</h3>
                    </div>
                </div>
            </div>


            <!-- BRANDS-2 WRAPPER -->
            <div class="brands-2-wrapper">
                <div class="row justify-content-md-center row-cols-2 row-cols-sm-3 row-cols-md-5">

                @foreach(\App\Models\Customer::latest()->get() as $customer)
                    <!-- BRAND LOGO IMAGE -->
                        <div class="col">
                            <div class="brand-logo">
                                <a href="{{$customer->web}}">
                                    <img class="img-fluid" src="{{$customer->logo}}" alt="{{$customer->name}}"/>
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>  <!-- END BRANDS-2 WRAPPER -->


        </div>     <!-- End container -->
    </div>    <!-- END BRANDS-2 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">




    <!-- FAQs-2
    ============================================= -->
    <section id="faqs-2" class="wide-60 faqs-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title title-02 mb-75">

                        <!-- Section ID -->
                        <span class="section-id txt-upcase">سوالات پرتکرار کاربران</span>

                        <!-- Title -->
                        <h2 class="h2-xs">هر آنچیزی که نیاز به دانستن دارید.</h2>

                    </div>
                </div>
            </div>


            <!-- FAQs-2 QUESTIONS -->
            <div class="faqs-2-questions">
                <div class="row row-cols-1 row-cols-lg-2">


                    <!-- QUESTIONS HOLDER -->
                    <div class="col">
                        <div class="questions-holder pr-15">


                            <!-- QUESTION #1 -->
                            <div class="question wow fadeInUp">

                                <!-- Question -->
                                <h5 class="h5-sm">بازاریابی اینترنتی (دیجیتال مارکتینگ) چیست؟</h5>

                                <!-- Answer -->
                                <p class="p-lg">
                                    در بازاریابی اینترنتی شما رفتار کاربران را پیش بینی می کنید که چه چیزی لازم دارند و
                                    به دنبال چه چیزی هستند. پس سعی کنید تا هدف کاربر را در سریع ترین زمان، شناسایی و
                                    راحت ترین شیوه در اختیار او بگذارید.
                                </p>

                            </div>


                            <!-- QUESTION #2 -->
                            <div class="question wow fadeInUp">

                                <!-- Question -->
                                <h5 class="h5-sm">
                                    نقش بازاریابی اینترنتی چیست؟
                                </h5>

                                <!-- Answer -->
                                <p class="p-lg">
                                    شاید شما هم فکر کنید که تنها هدف از بازاریابی اینترنتی، فروش محصولات و خدمات یک کسب
                                    و کار است، اما صرفا همین نیست. گاهی اوقات هدف از بازاریابی اینترنتی، معرفی برند به
                                    مخاطب می باشد و در آن هدف شناساندن نام برند به مشتریان جدید می باشد. در واقع
                                    برندسازی نیز یکی از بخش های بازاریابی اینترنتی محسوب می شود. بازاریابان اینترنتی در
                                    سطح وب و شبکه های اجتماعی اقدام به معرفی نام برند و کسب و کار شما به مخاطبان جدید می
                                    کنند که باعث آشنایی مخاطبان با برند شماست.
                                </p>

                            </div>


                            <!-- QUESTION #3 -->
                            <div class="question wow fadeInUp">

                                <!-- Question -->
                                <h5 class="h5-sm">استراتژی در بازاریابی اینترنتی</h5>

                                <!-- Answer -->
                                <ul class="simple-list">

                                    <p class="p-lg">
                                        در بازاریابی اینترنتی مهم ترین نکته که باید به آن توجه داشت، داشتن برنامه و
                                        استراتژی موثر است.شما باید ابتدا نقات قوت و ضعف کسب و کار خود را شناسایی
                                        کنید و سپس اقدام به رفع آن ها در برنامه ای معین و از پیش تعیین شده
                                        کنید. </p>
                                </ul>

                            </div>


                        </div>
                    </div>    <!-- END QUESTIONS HOLDER -->


                    <!-- QUESTIONS HOLDER -->
                    <div class="col">
                        <div class="questions-holder pl-15">


                            <!-- QUESTION #4 -->
                            <div class="question wow fadeInUp">

                                <!-- Question -->
                                <h5 class="h5-sm">
                                    مزیت های بازاریابی اینترنتی
                                </h5>

                                <!-- Answer -->
                                <p class="p-lg">
                                    با توجه به این که دنیای اینترنت و وب، محدویت مکانی را در بین افراد از جا برداشته، می توان با صرف کمترین هزینه تعداد قابل توجه از مشتریان را به سوی کسب و کار خود روانه کنیم. مهم ترین مزیت بازاریابی اینترنتی، جذب مشتریان در نقاط مختلف کشور و حتی جهان می باشد که می توان نقطه قوت این مدل از بازاریابی در نظر گرفت. همچنین در این شیوه از بازاریابی مشتریان به صورت مستقیم با برند شما در ارتباط اند و دیگر واسطه ای بین شما و مشتریان شما وجود ندارد.این مدل از بازاریابی محدودیت زمانی هم ندارد. شما می توانید هر هفت روز هفته و در طول 24 ساعت از شبانه روز مشتریان جدید را جذب خود کنید
                                </p>

                            </div>


                            <!-- QUESTION #5 -->
                            <div class="question wow fadeInUp">

                                <!-- Question -->
                                <h5 class="h5-sm">در بازار یابی اینترنی، محدودیتی هم وجود دارد؟</h5>

                                <!-- Answer -->
                                <p class="p-lg">
                                    با توجه به اینکه بازاریابی اینترنتی به اینترنت و شبکه های اجتماعی وابسته است و همین امر باعث شده تا در برخی مناطق که دسترسی به اینترنت ممکن نیست، بازاریابی دیجیتال با شکست مواجه شود.

                                </p>
                            </div>


                            <!-- QUESTION #6 -->
                            <div class="question wow fadeInUp">

                                <!-- Question -->
                                <h5 class="h5-sm">آیا مولی برای پروژه های خود، پشتیبانی هم دارد؟</h5>

                                <!-- Answer -->
                                <ul class="simple-list">

                                    <li class="list-item">
                                        <p class="p-lg">بله</p>
                                    </li>

                                    <li class="list-item">
                                        <p class="p-lg">
                                            تمامی پروژه های مولی دارای 4 ماه پشتیبانی رایگان می باشند که پس از اتمام زمان پشتیبانی رایگان، شما می توانید نسب به تمدید آن اقدام نمایید.
                                        </p>
                                    </li>

                                </ul>

                            </div>


                        </div>
                    </div>    <!-- END QUESTIONS HOLDER -->


                </div>    <!-- End row -->
            </div>    <!-- END FAQs-2 QUESTIONS -->


            <!-- MORE QUESTIONS BUTTON -->
            <div class="row">
                <div class="col">
                    <div class="more-questions">
                        <h5 class="h5-sm">جواب سوال خود را پیدا نکردید؟<a href="{{route('contacts')}}">آن را مطرح کنید.</a></h5>
                    </div>
                </div>
            </div>


        </div>       <!-- End container -->
    </section>    <!-- END FAQs-2 -->




    <!-- CALL TO ACTION-3
    ============================================= -->
    @include('.home.component.moshavere')
    <!-- END CALL TO ACTION-3 -->




@endcomponent