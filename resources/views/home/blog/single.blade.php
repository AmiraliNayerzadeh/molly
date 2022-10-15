@component('.home.layout.contetnt')




    <!-- blog details area start -->
    <div class="rn-blog-area rn-blog-details-default rn-section-gapTop">
        <div class="container">
            <div class="row g-6">
                <div class="col-xl-8 col-lg-8">
                    <div class="rn-blog-listen">
                        <div class="blog-content-top">
                            <h1 class="title">{{$blog->title}}</h1>
                            <span class="date">{{$blog->created_at}}</span>
                        </div>
                        <div class="bd-thumbnail">
                            <div class="large-img mb--30">
                                <img class="w-100" src="{{$blog->image}}" alt="Blog Images">
                            </div>
                        </div>
                        <div class="news-details">
                            {!! $blog->description !!}
                        </div>
                        <div class="comments-wrapper pt--40">
                            <div class="comments-area">
                                <div class="trydo-blog-comment">
                                    <h5 class="comment-title mb--40">9 پاسخ در مورد "شنیده ای؟"
                                        آژانس بهترین شماست
                                        شرط بندی برای رشد”</h5>
                                    <!-- Start Coment List  -->
                                    <ul class="comment-list">

                                        <!-- Start Single Comment  -->
                                        <li class="comment parent">
                                            <div class="single-comment">
                                                <div class="comment-author comment-img">
                                                    <img class="comment-avatar"
                                                         src="assets/images/blog/comment/comment-01.png"
                                                         alt="تصویر نظر">
                                                    <div class="m-b-20">
                                                        <div class="commenter">والد</div>
                                                        <div class="time-spent"> 20 آذر، ساعت 8:44
                                                            بعد از ظهر
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-text">
                                                    <p>جزئی که امکان ایجاد آسان منو را فراهم می کند
                                                        اقلام، به سرعت
                                                        ایجاد پاراگراف های “لورم ایپسوم” و
                                                        عکس های سفارشی
                                                        اندازه ها.</p>
                                                </div>
                                                <div class="reply-edit">
                                                    <div class="reply">
                                                        <a class="comment-reply-link" href="#">
                                                            <i class="rbt feather-corner-down-left"></i>
                                                            پاسخ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li class="comment byuser ">
                                                    <div class="single-comment">
                                                        <div class="comment-author comment-img">
                                                            <img class="comment-avatar"
                                                                 src="assets/images/blog/comment/comment-01.png"
                                                                 alt="تصویر نظر">
                                                            <div class="m-b-20">
                                                                <div class="commenter">نظر مدیر
                                                                </div>
                                                                <div class="time-spent"> 20 دی،
                                                                    ساعت 8:44 بعد از ظهر
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>جزئی که امکان ایجاد آسان را فراهم می کند
                                                                از آیتم های منو،
                                                                ایجاد سریع پاراگراف های "Lorem
                                                                ایپسوم» و
                                                                تصاویر با اندازه های سفارشی.</p>
                                                        </div>
                                                        <div class="reply-edit">
                                                            <div class="reply">
                                                                <a class="comment-reply-link" href="#">
                                                                    <i class="rbt feather-corner-down-left"></i>
                                                                    پاسخ
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- End Single Comment  -->

                                        <!-- Start Single Comment  -->
                                        <li class="comment parent">
                                            <div class="single-comment">
                                                <div class="comment-author comment-img">
                                                    <img class="comment-avatar"
                                                         src="assets/images/blog/comment/comment-01.png"
                                                         alt="تصویر نظر">
                                                    <div class="m-b-20">
                                                        <div class="commenter">کریگ ای. قاضی</div>
                                                        <div class="time-spent"> 20 دی، ساعت 8:44
                                                            بعد از ظهر
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-text">
                                                    <p>جزئی که امکان ایجاد آسان منو را فراهم می کند
                                                        اقلام، به سرعت
                                                        ایجاد پاراگراف های “لورم ایپسوم” و
                                                        عکس های سفارشی
                                                        اندازه ها.</p>
                                                </div>
                                                <div class="reply-edit">
                                                    <div class="reply">
                                                        <a class="comment-reply-link" href="#">
                                                            <i class="rbt feather-corner-down-left"></i>
                                                            پاسخ
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="single-comment">
                                                        <div class="comment-author comment-img">
                                                            <img class="comment-avatar"
                                                                 src="assets/images/blog/comment/comment-01.png"
                                                                 alt="Comment Image">
                                                            <div class="m-b-20">
                                                                <div class="commenter"><a href="#">
                                                                        نظر</a>
                                                                </div>
                                                                <div class="time-spent"> 20 دی،
                                                                    ساعت 8:44 بعد از ظهر
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>جزئی که امکان ایجاد آسان را فراهم می کند
                                                                از آیتم های منو،
                                                                ایجاد سریع پاراگراف های "لورم
                                                                ایپسوم» و
                                                                تصاویر با اندازه های سفارشی.</p>
                                                        </div>
                                                        <div class="reply-edit">
                                                            <div class="reply">
                                                                <a class="comment-reply-link" href="#">
                                                                    <i class="rbt feather-corner-down-left"></i>
                                                                    پاسخ
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="children">
                                                        <li class="comment">
                                                            <div class="single-comment">
                                                                <div class="comment-author comment-img">
                                                                    <img class="comment-avatar"
                                                                         src="assets/images/blog/comment/comment-01.png"
                                                                         alt="تصویر نظر">
                                                                    <div class="m-b-20">
                                                                        <div class="commenter">
                                                                            <a href="#">
                                                                                نظر</a>
                                                                        </div>
                                                                        <div class="time-spent"> دی
                                                                            20، ساعت 8:44
                                                                            بعد از ظهر
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p>مولفه ای که به راحتی امکان پذیر است
                                                                        ایجاد منو
                                                                        موارد،
                                                                        ایجاد سریع پاراگراف های
                                                                        "لورم ایپسوم" و
                                                                        تصاویر با اندازه های سفارشی.</p>
                                                                </div>
                                                                <div class="reply-edit">
                                                                    <div class="reply">
                                                                        <a class="comment-reply-link" href="#">
                                                                            <i
                                                                                class="rbt feather-corner-down-left"></i>
                                                                            پاسخ
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- End Single Comment  -->


                                    </ul>
                                    <!-- End Coment List  -->
                                </div>
                            </div>
                        </div>

                        <!-- comment form area Start -->

                        <!-- Start Contact Form Area  -->
                        <div class="rn-comment-form pt--60">
                            <div class="inner">
                                <div class="section-title">
                                    <span class="subtitle">نظری داردی؟</span>
                                    <h2 class="title">پاسخ دهید</h2>
                                </div>
                                <form class="mt--40" action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="rnform-group"><input type="text" placeholder="نام"></div>
                                            <div class="rnform-group"><input type="email" placeholder="ایمیل"></div>
                                            <div class="rnform-group"><input type="text" placeholder="وبسایت"></div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="rnform-group"><textarea placeholder="نظر"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="blog-btn">
                                                <a class="btn btn-primary-alta btn-large w-100" href="#"><span>ارسال پیام</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Contact Form Area  -->

                        <!-- comment form area End -->
                        <div class="row g-5 pt--60">
                            <div class="col-lg-12">
                                <h3 class="title">نوشته های اخیر</h3>
                            </div>

                            @foreach(\App\Models\Blog::latest()->paginate(3) as $lastblog )
                            <!-- start single blog -->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="{{route('blog.single' , $lastblog->title)}}">
                                                <img src="{{$lastblog->image}}" alt="Personal Portfolio Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div class="category-info">
                                                <div class="category-list">
                                                    @foreach($lastblog->categories as $cate)
                                                    <a href="blog-details.html">{{$cate->name}} /</a>
                                                    @endforeach
                                                </div>

                                            </div>
                                            <h4 class="title"><a href="{{route('blog.single' , $lastblog->title)}}">{{$lastblog->title}}<i class="feather-arrow-up-left"></i></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end single blog -->
                            @endforeach
                            <!-- start single blog -->

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 mt_md--40 mt_sm--40">
                    <aside class="rwt-sidebar">

                        <div class="rbt-single-widget widget_categories">
                            <h3 class="title">دسته ها</h3>
                            <div class="inner">
                                <ul class="category-list ">
                                    <li><a href="#"><span class="left-content">ارز رمزنگاری</span><span
                                                class="count-text">300</span></a></li>
                                    <li><a href="#"><span class="left-content">بیت کوین</span><span
                                                class="count-text">275</span></a></li>
                                    <li><a href="#"><span class="left-content">هنر دیجیتال</span><span
                                                class="count-text">625</span></a></li>
                                    <li><a href="#"><span class="left-content">UX
                                                طراحی</span><span class="count-text">556</span></a></li>
                                    <li><a href="#"><span class="left-content">کسب و کار</span><span
                                                class="count-text">247</span></a></li>
                                    <li><a href="#"><span class="left-content">برنامه
                                                ارز دیجیتال</span><span class="count-text">457</span></a></li>
                                    <li><a href="#"><span class="left-content">برنامه</span><span
                                                class="count-text">423</span></a></li>
                                    <li><a href="#"><span class="left-content">هنر</span><span
                                                class="count-text">235</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="rbt-single-widget widget_recent_entries mt--40">
                            <h3 class="title">پست های اخیر</h3>
                            <div class="inner">
                                <ul>
                                    <li><a class="d-block" href="#">بهترین نکات شرکتی
                                            امسال بخوانید.</a><span class="cate">توسعه</span></li>
                                    <li><a class="d-block" href="#">باید اقدام شرکتی را رفع کرد
                                            100 مرحله.</a><span class="cate">طراحی UX</span></li>
                                    <li><a class="d-block" href="#">100 چیز بعدی
                                            فوراً درباره.</a><span class="cate">توسعه</span></li>
                                    <li><a class="d-block" href="#">5 درس برتر درباره
                                            شرکت های بزرگ، دارای شخصیت حقوقی
                                            برای یادگیری قبل.</a><span class="cate">بازاریابی</span></li>
                                </ul>
                            </div>
                        </div>


                        <div class="rbt-single-widget widget_tag_cloud mt--40">
                            <h3 class="title">برچسب‌ها</h3>
                            <div class="inner mt--20">
                                <div class="tagcloud">
                                    <a href="#">هنر دیجیتال</a>
                                    <a href="#">رمز</a>
                                    <a href="#">NFT</a>
                                    <a href="#">تصویر دیجیتال</a>
                                    <a href="#">بیت کوین</a>
                                    <a href="#">پایه سکه</a>
                                    <a href="#">توسعه</a>
                                    <a href="#">هنر برنامه</a>
                                    <a href="#">راه اندازی</a>
                                    <a href="#">تصاویر</a>
                                    <a href="#">موسیقی</a>
                                    <a href="#">غیر قابل تعویض</a>
                                    <a href="#">هنر</a>
                                    <a href="#">جادو</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog details area end -->


    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- End Top To Bottom Area  -->






@endcomponent
