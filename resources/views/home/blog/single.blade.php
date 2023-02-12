@component('.home.layout.contetnt')

    <!-- SINGLE POST
			============================================= -->
    <section id="single-post" class="wide-100 inner-page-hero single-post-section division">
        <div class="container">


            <!-- SINGLE POST CONTENT -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="single-post-wrapper">


                        <!-- SINGLE POST TITLE -->
                        <div class="single-post-title">

                            <!-- CATEGORY -->
                            <p class="p-sm post-tag txt-500 txt-upcase"></p>

                            <!-- TITLE -->
                            <h1 class="h2-md">{{$blog->title}}</h1>

                        </div>    <!-- END SINGLE POST TITLE -->

                        <!-- BLOG POST INNER IMAGE -->
                        <div class="post-inner-img">
                            <img class="img-fluid" src="{{$blog->image}}" alt="{{$blog->title}}"/>
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="single-post-txt">
                            {!! $blog->description !!}
                        </div>
                        <!-- END BLOG POST TEXT -->

                    </div>
                </div>
            </div>    <!-- END SINGLE POST CONTENT -->


        </div>     <!-- End container -->
    </section>    <!-- END SINGLE POST -->

    {{--    <!-- POST COMMENTS--}}
    {{--    ============================================= -->--}}
    {{--    <section id="post-comments" class="wide-80 post-comments division">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}


    {{--                <!-- COMMENTS WRAPPER -->--}}
    {{--                <div class="col-lg-10 offset-lg-1">--}}
    {{--                    <div class="comments-wrapper">--}}

    {{--                        <!-- Title -->--}}
    {{--                        <h5 class="h5-lg">4 Comments</h5>--}}


    {{--                        <!-- COMMENT #1 -->--}}
    {{--                        <div class="comment d-flex">--}}

    {{--                            <!-- Comment-1 Avatar -->--}}
    {{--                            <img src="images/review-author-2.jpg" alt="comment-avatar">--}}

    {{--                            <!-- Comment-Body -->--}}
    {{--                            <div class="comment-body">--}}

    {{--                                <!-- Comment-1 Meta -->--}}
    {{--                                <div class="comment-meta">--}}
    {{--                                    <h6 class="h6-xl">Jamie</h6>--}}
    {{--                                    <span class="comment-date">5 days ago&#8194;- </span>--}}
    {{--                                    <span class="btn-reply ico-20">--}}
    {{--												<a href="#leave-comment"><span class="flaticon-reply-arrow"></span> Reply</a>--}}
    {{--											</span>--}}
    {{--                                </div>--}}

    {{--                                <!-- Comment-1 Text -->--}}
    {{--                                <p class="p-md mb-40">Etiam sapien sem magna at vitae pulvinar congue augue egestas pretium--}}
    {{--                                    neque undo viverra suscipit egestas magna porta ratione, mollis risus lectus porta rutrum aenean primis in augue luctus neque purus ipsum neque dolor primis purus efficitur an--}}
    {{--                                    ipsum primis in cubilia laoreet augue--}}
    {{--                                </p>--}}

    {{--                                <hr />--}}

    {{--                                <!-- Nested Comment -->--}}
    {{--                                <div class="comment d-flex">--}}

    {{--                                    <!-- Nested Avatar -->--}}
    {{--                                    <a href="#" class="pr-3">--}}
    {{--                                        <img src="images/review-author-6.jpg" alt="comment-avatar">--}}
    {{--                                    </a>--}}

    {{--                                    <div class="comment-body">--}}

    {{--                                        <!-- Comment-2 Meta -->--}}
    {{--                                        <div class="comment-meta">--}}
    {{--                                            <h6 class="h6-xl">Matthew Clark</h6>--}}
    {{--                                            <span class="comment-date">6 days ago&#8194;- </span>--}}
    {{--                                            <span class="btn-reply ico-20">--}}
    {{--														<a href="#leave-comment"><span class="flaticon-reply-arrow"></span> Reply</a>--}}
    {{--													</span>--}}
    {{--                                        </div>--}}

    {{--                                        <!-- Comment-2 Text -->--}}
    {{--                                        <p class="p-md">Etiam sapien magna at vitae pulvinar congue egestas a pretium neque--}}
    {{--                                            viverra suscipit porta ratione, mollis risus lectus porta aliquet lorem puruss--}}
    {{--                                            mollis--}}
    {{--                                        </p>--}}

    {{--                                    </div>--}}

    {{--                                </div>	<!-- End Nested Comment -->--}}


    {{--                            </div>--}}


    {{--                        </div>	<!-- END COMMENT #1 -->--}}


    {{--                        <hr />--}}


    {{--                        <!-- COMMENT #3 -->--}}
    {{--                        <div class="comment d-flex">--}}

    {{--                            <!-- Comment Avatar -->--}}
    {{--                            <img src="images/review-author-8.jpg" alt="comment-avatar">--}}

    {{--                            <!-- Comment Body -->--}}
    {{--                            <div class="comment-body">--}}

    {{--                                <!-- Comment Meta -->--}}
    {{--                                <div class="comment-meta">--}}
    {{--                                    <h6 class="h6-xl">Olivia Steiner</h6>--}}
    {{--                                    <span class="comment-date">13 days ago&#8194;- </span>--}}
    {{--                                    <span class="btn-reply ico-20">--}}
    {{--												<a href="#leave-comment"><span class="flaticon-reply-arrow"></span> Reply</a>--}}
    {{--											</span>--}}
    {{--                                </div>--}}

    {{--                                <!-- Comment Text -->--}}
    {{--                                <p class="p-md">Porta ratione, mollis risus lectus porta rutrum arcu aenean primis in augue--}}
    {{--                                    luctus and neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius--}}
    {{--                                    an impedit enim tempor vitae pulvinar at congue augue egestas praesent aliquet--}}
    {{--                                </p>--}}

    {{--                            </div>	<!-- End Comment Body -->--}}

    {{--                        </div>	<!-- END COMMENT #3 -->--}}


    {{--                        <hr />--}}


    {{--                        <!-- COMMENT #4 -->--}}
    {{--                        <div class="comment d-flex">--}}

    {{--                            <!-- Comment Avatar -->--}}
    {{--                            <img src="images/review-author-3.jpg" alt="comment-avatar">--}}

    {{--                            <!-- Comment Body -->--}}
    {{--                            <div class="comment-body">--}}

    {{--                                <!-- Comment Meta -->--}}
    {{--                                <div class="comment-meta">--}}
    {{--                                    <h6 class="h6-xl">C. Johnson</h6>--}}
    {{--                                    <span class="comment-date">42 days ago&#8194;- </span>--}}
    {{--                                    <span class="btn-reply ico-20">--}}
    {{--												<a href="#leave-comment"><span class="flaticon-reply-arrow"></span> Reply</a>--}}
    {{--											</span>--}}
    {{--                                </div>--}}

    {{--                                <!-- Comment Text -->--}}
    {{--                                <p class="p-md">Etiam sapien sem magna at vitae pulvinar congue augue egestas pretium neque--}}
    {{--                                    undo viverra suscipit  egestas magna porta ratione, mollis risus lectus porta rutrum arcu--}}
    {{--                                </p>--}}

    {{--                            </div>	<!-- End Comment Body -->--}}

    {{--                        </div>	<!-- END COMMENT #4 -->--}}


    {{--                        <hr />--}}


    {{--                        <!-- COMMENT FORM -->--}}
    {{--                        <div id="leave-comment">--}}

    {{--                            <!-- Title -->--}}
    {{--                            <h5 class="h5-lg">Leave a Comment</h5>--}}

    {{--                            <!-- Text -->--}}
    {{--                            <p class="p-md">Your email address will not be published. Required fields are marked *</p>--}}

    {{--                            <form name="commentForm" class="row comment-form">--}}

    {{--                                <div class="col-md-12 input-message">--}}
    {{--                                    <p>Add Comment *</p>--}}
    {{--                                    <textarea class="form-control message" name="message" rows="6" placeholder="Enter Your Comment Here* ..." required></textarea>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-md-12">--}}
    {{--                                    <p>Name*</p>--}}
    {{--                                    <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-md-12">--}}
    {{--                                    <p>Email*</p>--}}
    {{--                                    <input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" required>--}}
    {{--                                </div>--}}

    {{--                                <!-- Contact Form Button -->--}}
    {{--                                <div class="col-lg-12 form-btn">--}}
    {{--                                    <button type="submit" class="btn btn-skyblue tra-skyblue-hover submit">Post Comment</button>--}}
    {{--                                </div>--}}

    {{--                                <!-- Contact Form Message -->--}}
    {{--                                <div class="col-md-12 comment-form-msg text-center">--}}
    {{--                                    <div class="sending-msg"><span class="loading"></span></div>--}}
    {{--                                </div>--}}

    {{--                            </form>--}}

    {{--                        </div>	<!-- END COMMENT FORM -->--}}

    {{--                    </div>--}}
    {{--                </div>	<!-- END COMMENTS WRAPPER -->--}}


    {{--            </div>     <!-- End row -->--}}
    {{--        </div>     <!-- End container -->--}}
    {{--    </section>	<!-- END POST COMMENTS -->--}}




    <!-- BLOG-1
    ============================================= -->
    <section id="blog-1" class="bg-whitesmoke-gradient wide-60 blog-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-70">
                        <h2 class="h2-md">دیگر مقاله ها</h2>
                    </div>
                </div>
            </div>


            <!-- BLOG POSTS -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">


                <!-- BLOG POST  -->
                @foreach(\App\Models\Blog::inRandomOrder()->limit(3)->get() as $blog)
                    <div class="col">
                        <div id="bp-1-1" class="blog-1-post mb-40 wow fadeInUp">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <a href="{{route('blog.single', $blog->title)}}">
                                        <img class="img-fluid" src="{{$blog->image}}" alt="{{$blog->title}}"/>
                                    </a>
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt">

                                <!-- Post Tag -->
                                <p class="p-md post-tag">{{jdate($blog->created_at)->ago()}}</p>

                                <!-- Post Link -->
                                <h5 class="h5-md">
                                    <a href="{{route('blog.single', $blog->title)}}">{{$blog->title}}</a>
                                </h5>

                                @foreach($blog->categories as $category)
                                    <div class="post-meta"><p class="p-md">{{$category->name}}</p></div>
                                @endforeach

                            </div>    <!-- END BLOG POST TEXT -->

                        </div>
                    </div>
            @endforeach
            <!-- END  BLOG POST  -->

            </div>    <!-- END BLOG POSTS -->


        </div>       <!-- End container -->
    </section>
    <!-- END BLOG-1 -->




    <!-- NEWSLETTER-1
    ============================================= -->
    @include('.home.component.mail')
    <!-- END NEWSLETTER-1 -->


@endcomponent
