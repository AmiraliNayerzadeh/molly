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
                        <h2 class="h2-xs">Have a question? Need help? Don't hesitate, drop us a line</h2>

                        <!-- Text -->
                        <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis libero
                            tempus, blandit and cursus varius and magnis sapien
                        </p>

                    </div>
                </div>
            </div>


            <!-- CONTACT FORM -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="form-holder">
                        <form name="contactform" class="row contact-form">

                            <!-- Form Select -->
                            <div class="col-md-12 input-subject">
                                <p class="p-lg">This question is about: </p>
                                <span>Choose a topic, so we know who to send your request to: </span>
                                <select class="form-select subject" aria-label="Default select example">
                                    <option selected>This question is about...</option>
                                    <option>Registering/Authorising</option>
                                    <option>Using Application</option>
                                    <option>Troubleshooting</option>
                                    <option>Backup/Restore</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <!-- Contact Form Input -->
                            <div class="col-md-12">
                                <p class="p-lg">Your Name: </p>
                                <span>Please enter your real name: </span>
                                <input type="text" name="name" class="form-control name" placeholder="Your Name*">
                            </div>

                            <div  class="col-md-12">
                                <p class="p-lg">Your Email Address: </p>
                                <span>Please carefully check your email address for accuracy</span>
                                <input type="text" name="email" class="form-control email" placeholder="Email Address*">
                            </div>

                            <div class="col-md-12">
                                <p class="p-lg">Explain your question in details: </p>
                                <span>Your OS version, OLMO version & build, steps you did. Be VERY precise!</span>
                                <textarea class="form-control message" name="message" rows="6" placeholder="I have a problem with..."></textarea>
                            </div>

                            <!-- Contact Form Button -->
                            <div class="col-md-12 mt-15 form-btn text-right">
                                <button type="submit" class="btn btn-skyblue tra-grey-hover submit">Submit Request</button>
                            </div>

                            <!-- Contact Form Message -->
                            <div class="col-lg-12 contact-form-msg">
                                <span class="loading"></span>
                            </div>

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