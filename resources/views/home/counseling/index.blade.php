@component('.home.layout.contetnt')

    <!-- CONTACTS-2
			============================================= -->
    <section id="contacts-2" class="bg-snow wide-50 inner-page-hero contacts-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title title-02 mb-80">

                        <!-- Title -->
                        <h2 class="h2-xs">درخواست مشاوره</h2>

                        <!-- Text -->
                        <p class="p-xl">
                            بعد از ارسال فرم، تیم مولی در کم تر از 24 ساعت با شما تماس خواهد گرفت.
                        </p>

                    </div>
                </div>
            </div>


            <!-- CONTACT FORM -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-holder">
                        <form method="post" action="{{route('counseling.store')}}" class="row contact-form">
                            @csrf
                                @method('POST')
                            <!-- Form Select -->
                            <div class="col-md-12 input-subject">
                                <p class="p-lg">در کدام بخش نیاز به مشاوره دارین؟*</p>
                                <select class="form-select subject" aria-label="service" name="category">
                                    <option selected>بخش مورد نیاز را انتخاب کنید</option>
                                    <option name="طراحی و توسعه وب و اپلیکیشن">طراحی و توسعه وب و اپلیکیشن</option>
                                    <option name="سئو بهینه سازی">سئو بهینه سازی</option>
                                    <option name="توسعه کسب و کار">توسعه کسب و کار</option>
                                    <option name="مدیریت شبکه های اجتماعی">مدیریت شبکه های اجتماعی</option>
                                    <option name="حوزه های مربوط به طراحی">حوزه های مربوط به طراحی</option>
                                    <option name="فیلم برداری و تدوین">فیلم برداری و تدوین</option>
                                    <option name="پادکست">پادکست</option>
                                    <option name="دیگر">دیگر</option>
                                </select>
                            </div>

                            <!-- Contact Form Input -->
                            <div class="col-md-12">
                                <p class="p-lg">نام و نام خانوادگی*:</p>
                                <input type="text" required name="name" class="form-control" placeholder="نام خود را وارد کنید*">
                            </div>


                            <div  class="col-md-12">
                                <p class="p-lg">شماره تلفن*: </p>
                                <input type="number" name="phone" class="form-control " placeholder="شماره تلفن خود را وارد کنید*">
                            </div>

                            <div  class="col-md-12">
                                <p class="p-lg">آدرس ایمیل(اختیاری): </p>
                                <input type="text" name="email" class="form-control" placeholder="در صورت تمایل آدرس ایمیل خود را وارد کنید">
                            </div>

                            <div class="col-md-12">
                                <p class="p-lg">آدرس سایت(اختیاری):</p>
                                <input type="text"  name="web" class="form-control " placeholder="اگر برای کسب و کار خود سایت دارید، آدرس آن را وارد کنید.">
                            </div>

                            <div class="col-md-12">
                                <p class="p-lg">توضیحات (اختیاری)</p>
                                <span>توضیحات شما هر چقدر کامل تر باشد، تیم مولی در خصوص توسعه ی شما می تواند بهتر تصمیم گیری کند.</span>
                                <textarea class="form-control " name="description" rows="6"></textarea>
                            </div>

                            <!-- Contact Form Button -->
                            <div class="col-md-12 mt-15 form-btn text-right">
                                <button type="submit" class="btn btn-skyblue tra-grey-hover">ثبت و ارسال</button>
                            </div>

                            <!-- Contact Form Message -->
                            <div class="col-lg-12 contact-form-msg">
                                <span class="loading"></span>
                            </div>

                                <input type="hidden" name="status" value="New">

                        </form>
                    </div>
                </div>
            </div>	   <!-- END CONTACT FORM -->


        </div>	   <!-- End container -->
    </section>	<!-- END CONTACTS-2 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">




    <!-- CALL TO ACTION-8
    ============================================= -->
    <section id="cta-8" class="bg-snow wide-100 cta-section division">
        <div class="container">
            <div class="cta-8-wrapper pc-25">
                <div class="row row-cols-1 row-cols-md-2">


                    <!-- BOX #1 -->
                    <div class="col">
                        <a href="pricing.html">
                            <div class="cta-box cta-top-box bg-white wow fadeInUp">

                                <!-- Icon -->
                                <div class="cta-ico">
                                    <div class="ico-60"><span class="flaticon-wallet"></span></div>
                                </div>

                                <!-- Text -->
                                <div class="cta-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">View Pricing</h5>

                                    <!-- Text -->
                                    <p class="p-lg">Porta semper lacus cursus feugiat primis ultrice ligula risus at auctor
                                        tempus
                                    </p>

                                </div>

                            </div>
                        </a>
                    </div>		<!-- END BOX #1 -->


                    <!-- BOX #2 -->
                    <div class="col">
                        <a href="faqs.html">
                            <div class="cta-box bg-white wow fadeInUp">

                                <!-- Icon -->
                                <div class="cta-ico">
                                    <div class="ico-60"><span class="flaticon-help"></span></div>
                                </div>

                                <!-- Text -->
                                <div class="cta-txt">

                                    <!-- Title -->
                                    <h5 class="h5-md">Read the FAQs</h5>

                                    <!-- Text -->
                                    <p class="p-lg">Porta semper lacus cursus feugiat primis ultrice ligula risus at auctor
                                        tempus
                                    </p>

                                </div>

                            </div>
                        </a>
                    </div>	<!-- END BOX #2 -->


                </div>   <!-- End cta-8-wrapper -->
            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END CALL TO ACTION-8 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">


@endcomponent
