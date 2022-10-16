@component('.home.layout.contetnt')




    <!-- start banner area -->
    <div class="slider-one rn-section-gapTop">
        <div class="container">
            <div class="row row-reverse-sm align-items-center">
                <div class="col-lg-5 col-md-6 col-sm-12 mt_sm--50">
                    <h2 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">کار نشد
                        نداره!</h2>
                    <p class="slide-disc" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">اهمیت میدهیم!
                        چون شما اهمیت میدهید.</p>
                    <div class="button-group">
                        <a class="btn btn-large btn-primary" href="#" data-sal-delay="400" data-sal="slide-up"
                           data-sal-duration="800">درخواست مشاوره</a>
                        <a class="btn btn-large btn-primary-alta" href="create.html" data-sal-delay="500"
                           data-sal="slide-up" data-sal-duration="800">درباره مولی</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 offset-lg-1">
                    <div class="slider-thumbnail">
                        @foreach(\App\Models\Ui::all()->where('name', 'Main') as $slider)
                            <img src="{{$slider->image}}" alt="Slider Images">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End banner area -->


    <div class="key-feature-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="title">ویژگی های کلیدی ما</h2>
                    <p class="disc pr--20">ما سعی بر این داریم تا در طول فرایند اجرایی شدن پروژه شما،لبخند بر لبان شما
                        بیاوریم.😊</p>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="single-key">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-archive">
                            <polyline points="21 8 21 21 3 21 3 8"></polyline>
                            <rect x="1" y="3" width="22" height="5"></rect>
                            <line x1="10" y1="12" x2="14" y2="12"></line>
                        </svg>
                        <label>امنیت</label>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="single-key">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-box">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <label>خدمات استاندارد</label>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="single-key">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-monitor">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                        <label>توسعه همه پسند</label>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="single-key">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-clock">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <label>تحویل پروژه در کوتاه ترین زمان</label>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="single-key">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-coffee">
                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                            <line x1="6" y1="1" x2="6" y2="4"></line>
                            <line x1="10" y1="1" x2="10" y2="4"></line>
                            <line x1="14" y1="1" x2="14" y2="4"></line>
                        </svg>
                        <label>پشتیبانی شبانه روزی</label>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="single-key">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-database">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                        <label>پشتیبانی رایگان 3 ماهه</label>
                    </div>
                </div>


                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="single-key">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-globe">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                        <label>معرفی بین المللی</label>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="single-key">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-map">
                            <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                            <line x1="8" y1="2" x2="8" y2="18"></line>
                            <line x1="16" y1="6" x2="16" y2="22"></line>
                        </svg>
                        <label>مشاوره و ارائه نقشه راه</label>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Explore Style Carousel -->
    <div class="key-feature-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="en-product-area">
                    <div class="container">
                        <div class="row mb--30">
                            <div class="col-12">
                                <h3 class="title">مجله</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div
                                class="banner-one-slick slick-activation-blog slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                                <!-- start single product -->
                                @foreach(\App\Models\Blog::latest()->paginate(12) as $blog)
                                    <div class="single-slide-product">
                                        <div class="product-style-one no-overlay">
                                            <div class="card-thumbnail">
                                                <a href="{{route('blog.single', $blog->title)}}">
                                                    <img style="height: 230px; width: auto" src="{{$blog->image}}" alt="{{$blog->title}}">
                                                </a>
                                            </div>
                                            <div class="product-share-wrapper">
                                                <div class="profile-share">
                                                    <a href="{{route('profile',  $blog->user->name)}}" class="avatar"
                                                       data-tooltip="{{$blog->user->name}}"><img
                                                            src="{{$blog->user->image}}" alt="{{$blog->user->name}}"></a>
                                                    <a class="more-author-text" href="{{route('profile',  $blog->user->name)}}">{{$blog->user->name}}</a>
                                                </div>
                                                <div class="share-btn share-btn-activation dropdown">
                                                    <button class="icon" type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                        <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                                             class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                                                  fill="currentColor"></path>
                                                        </svg>
                                                    </button>

                                                    <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                                        <button type="button" class="btn-setting-text share-text"
                                                                data-bs-toggle="modal" data-bs-target="#shareModal">
                                                            اشتراک گذاری
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="{{route('blog.single', $blog->title)}}"><span class="product-name">{{$blog->title}}</span></a>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- end single product -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Style Carousel  End-->

    <!-- start service area -->
    <div class="rn-service-area rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-12 mb--50">
                    <h3 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">NFT های خود را
                        ایجاد و بفروشید</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                         class="rn-service-one color-shape-7">
                        <div class="inner">
                            <div class="icon">
                                <img src="/asset/images/icons/Decision.png" alt="Decision">
                            </div>
                            <div class="subtitle">مرحله 01</div>
                            <div class="content">
                                <h4 class="title">تصمیم بگیرید</h4>
                                <p class="description">
                                    برای هرکسی سخته که کسب و کار سنتی خودشو بخواد به سمت دنیای زیبای دیجیتال بیاره. اما از ما میشنوین ارزشش رو داره!
                                </p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-left"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800"
                         class="rn-service-one color-shape-1">
                        <div class="inner">
                            <div class="icon">
                                <img src="/asset/images/icons/shape-1.png" alt="Shape">
                            </div>
                            <div class="subtitle">مرحله-02</div>
                            <div class="content">
                                <h4 class="title"><a href="#">مجموعه خود را ایجاد کنید</a></h4>
                                <p class="description">مجموعه ای عالی از قالب های زیبای وب سایت برای نیاز شما.
                                    بهترین الگوی مناسب را انتخاب کنید.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-left"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800"
                         class="rn-service-one color-shape-5">
                        <div class="inner">
                            <div class="icon">
                                <img src="/asset/images/icons/shape-5.png" alt="Shape">
                            </div>
                            <div class="subtitle">مرحله-03</div>
                            <div class="content">
                                <h4 class="title"><a href="#">NFT خود را اضافه کنید</a></h4>
                                <p class="description">ما الگو را کاملاً پاسخگو کرده ایم، بنابراین عالی به نظر می رسد
                                    همه دستگاه ها: دسکتاپ، تبلت و.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-left"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="300" data-sal-duration="800"
                         class="rn-service-one color-shape-6">
                        <div class="inner">
                            <div class="icon">
                                <img src="/asset/images/icons/shape-6.png" alt="Shape">
                            </div>
                            <div class="subtitle">مرحله-04</div>
                            <div class="content">
                                <h4 class="title"><a href="#">NFT خود را بفروشید</a></h4>
                                <p class="description">من خودم را در میان چمن‌های بلند کنار رودخانه پرت می‌کنم
                                    نزدیک NFT های زمین قرار بگیرید.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-left"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
            </div>
        </div>
    </div>
    <!-- End service area -->
    <!-- New items Start -->
    <div class="rn-new-items rn-section-gapTop">
        <div class="container">
            <div class="row mb--50 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">جدیدترین
                        موارد</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                    <div class="view-more-btn text-end text-sm-start" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <a class="btn-transparent" href="#">نمایش همه<i data-feather="arrow-left"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-01.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جان دویی"><img
                                        src="/asset/images/client/client-2.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="نیوشا"><img
                                        src="/asset/images/client/client-3.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">پیش ادعا</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 1/20</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">322</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-02.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-4.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="نینا"><img
                                        src="/asset/images/client/client-5.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="لیندا کیانی"><img
                                        src="/asset/images/client/client-6.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">سگ الماس</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 5/11</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.892wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">420</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-03.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جاستینا"><img
                                        src="/asset/images/client/client-8.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="نیوشا"><img
                                        src="/asset/images/client/client-9.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">10+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">دست شیشه</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 2/31</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.2128wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">12</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="300" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-04.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-3.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-5.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">8+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">مورگان11</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 3/16</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.265wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="350" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-05.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-2.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-7.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-9.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">15+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">اطلس</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 6/50</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">205</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
            </div>
        </div>
    </div>
    <!-- New items End -->
    <!-- top top-seller start -->
    <div class="rn-top-top-seller-area nice-selector-transparent rn-section-gapTop">
        <div class="container">
            <div class="row  mb--30">
                <div class="col-12 justify-sm-center d-flex">
                    <h3 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">بیشترین فروش
                        در</h3>
                    <select>
                        <option data-display="1 روز"> 1 روز</option>
                        <option value="1">7 روز</option>
                        <option value="2">15 روز</option>
                        <option value="4">30 روز</option>
                    </select>
                </div>
            </div>
            <div class="row justify-sm-center g-5 top-seller-list-wrapper">
                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail varified">
                                <a href="author.html"><img src="/asset/images/client/client-12.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">پینک فلوید</h6>
                                </a>
                                <span class="count-number">
                                25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail">
                                <a href="author.html"><img src="/asset/images/client/client-2.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">لینکین پارک</h6>
                                </a>
                                <span class="count-number">
                               25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail">
                                <a href="author.html"><img src="/asset/images/client/client-3.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">سوج گاردن</h6>
                                </a>
                                <span class="count-number">
                               25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail varified">
                                <a href="author.html"><img src="/asset/images/client/client-4.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">جان ویلیامز</h6>
                                </a>
                                <span class="count-number">
                               25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail">
                                <a href="author.html"><img src="/asset/images/client/client-5.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">ادل</h6>
                                </a>
                                <span class="count-number">
                             25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail varified">
                                <a href="author.html"><img src="/asset/images/client/client-6.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">ماتلیکا</h6>
                                </a>
                                <span class="count-number">
                               25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail varified">
                                <a href="author.html"><img src="/asset/images/client/client-7.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">انریکه</h6>
                                </a>
                                <span class="count-number">
                               25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail">
                                <a href="author.html"><img src="/asset/images/client/client-8.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">جی لو</h6>
                                </a>
                                <span class="count-number">
                               25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail">
                                <a href="author.html"><img src="/asset/images/client/client-9.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">یانی</h6>
                                </a>
                                <span class="count-number">
                                25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->

                <!-- start single top-seller -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-3 col-md-4 col-sm-6 top-seller-list">
                    <div class="top-seller-inner-one">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail varified">
                                <a href="author.html"><img src="/asset/images/client/client-10.png"
                                                           alt="Nft_Profile"></a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name">کاکوبند</h6>
                                </a>
                                <span class="count-number">
                                25,000 هزارتومان
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single top-seller -->
            </div>
        </div>
    </div>
    <!-- top top-seller end -->
    <!-- Start product area -->
    <div class="rn-product-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--50 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">بررسی
                        محصولات</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                    <div class="view-more-btn text-end text-sm-start" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <button class="discover-filter-button discover-filter-activation btn btn-primary">فیلتر<i
                                class="feather-filter"></i></button>
                    </div>
                </div>
            </div>

            <div class="default-exp-wrapper default-exp-expand">
                <div class="inner">
                    <div class="filter-select-option">
                        <label class="filter-leble">پسندیدن‌ها</label>
                        <select>
                            <option data-display="بیشترین پسند">بیشترین پسند</option>
                            <option value="1">کمترین پسندیده</option>
                        </select>
                    </div>

                    <div class="filter-select-option">
                        <label class="filter-leble">دسته</label>
                        <select>
                            <option data-display="دسته">دسته</option>
                            <option value="1">هنر</option>
                            <option value="1">عکس</option>
                            <option value="2">متافوره ها</option>
                            <option value="4">سیب زمینی</option>
                            <option value="4">عکس‌ها</option>
                        </select>
                    </div>

                    <div class="filter-select-option">
                        <label class="filter-leble">مجموعه ها</label>
                        <select>
                            <option data-display="مجموعه ها">مجموعه‌ها</option>
                            <option value="1">لارا فابین</option>
                            <option value="2">گل فروشی اکبر</option>
                            <option value="4">استودیو لیمو</option>
                        </select>
                    </div>

                    <div class="filter-select-option">
                        <label class="filter-leble">نوع فروش</label>
                        <select>
                            <option data-display="نوع فروش">نوع فروش</option>
                            <option value="1">قیمت ثابت</option>
                            <option value="2">حراج به موقع</option>
                            <option value="4">برای فروش نیست</option>
                            <option value="4">برای پیشنهادات باز کنید</option>
                        </select>
                    </div>

                    <div class="filter-select-option">
                        <label class="filter-leble">فیلتر قیت</label>
                        <div class="price_filter s-filter clear">
                            <form action="#" method="GET">
                                <div id="slider-range"></div>
                                <div class="slider__range--output">
                                    <div class="price__output--wrap">
                                        <div class="price--output">
                                            <span>قیمت :</span><input type="text" id="amount" readonly>
                                        </div>
                                        <div class="price--filter">
                                            <a class="btn btn-primary btn-small" href="#">فیلتر</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-01.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-2.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-3.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">سیب زمینی</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 1/20</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">322</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-02.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="علی"><img
                                        src="/asset/images/client/client-4.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="رضا"><img
                                        src="/asset/images/client/client-5.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="اکبر"><img
                                        src="/asset/images/client/client-6.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">11+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">سگ الماس</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 5/11</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.892wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">420</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-03.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="پتروس"><img
                                        src="/asset/images/client/client-7.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="حسن"><img
                                        src="/asset/images/client/client-8.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="تام"><img
                                        src="/asset/images/client/client-9.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">12+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">اوربید</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 2/31</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.2128wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">12</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="300" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-04.jpg"
                                                                alt="NFT_portfolio"></a>
                            <div class="countdown" data-date="2022-11-09">
                                <div class="countdown-container days">
                                    <span class="countdown-value">87</span>
                                    <span class="countdown-heading">روز</span>
                                </div>
                                <div class="countdown-container hours">
                                    <span class="countdown-value">23</span>
                                    <span class="countdown-heading">ساعت</span>
                                </div>
                                <div class="countdown-container minutes">
                                    <span class="countdown-value">38</span>
                                    <span class="countdown-heading">دقیقه</span>
                                </div>
                                <div class="countdown-container seconds">
                                    <span class="countdown-value">27</span>
                                    <span class="countdown-heading">ثانیه</span>
                                </div>
                            </div>
                        </div>

                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="علی"><img
                                        src="/asset/images/client/client-9.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="رضا"><img
                                        src="/asset/images/client/client-10.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="اکبر"><img
                                        src="/asset/images/client/client-11.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">13+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">مورگان</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 3/16</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.265wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="350" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-05.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="ترسا"><img
                                        src="/asset/images/client/client-8.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="شکیب"><img
                                        src="/asset/images/client/client-7.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="یعقوب"><img
                                        src="/asset/images/client/client-3.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">15+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">اطلس</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 6/50</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">205</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->

                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="400" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-06.jpg"
                                                                alt="NFT_portfolio"></a>

                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="موریس"><img
                                        src="/asset/images/client/client-8.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="سوفیا لورن"><img
                                        src="/asset/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="احمد"><img
                                        src="/asset/images/client/client-2.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">9+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">پالادین</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 1/10</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.450wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">65</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="450" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-07.jpg"
                                                                alt="NFT_portfolio"></a>
                            <div class="countdown" data-date="2022-12-09">
                                <div class="countdown-container days">
                                    <span class="countdown-value">35</span>
                                    <span class="countdown-heading">روز</span>
                                </div>
                                <div class="countdown-container hours">
                                    <span class="countdown-value">42</span>
                                    <span class="countdown-heading">ساعت</span>
                                </div>
                                <div class="countdown-container minutes">
                                    <span class="countdown-value">10</span>
                                    <span class="countdown-heading">دقیقه</span>
                                </div>
                                <div class="countdown-container seconds">
                                    <span class="countdown-value">23</span>
                                    <span class="countdown-heading">ثانیه</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="شهاب"><img
                                        src="/asset/images/client/client-6.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="المیرا"><img
                                        src="/asset/images/client/client-10.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="سکینه"><img
                                        src="/asset/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">14+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">بشقاب</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 2/22</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.311wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">56</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="500" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-10.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="تبریز"><img
                                        src="/asset/images/client/client-6.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="سونیا"><img
                                        src="/asset/images/client/client-8.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="کاظم"><img
                                        src="/asset/images/client/client-9.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">14+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>
                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>
                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">اروگان</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 2/10</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">89</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="550" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-09.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="کلیم"><img
                                        src="/asset/images/client/client-6.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جیمز"><img
                                        src="/asset/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="یحی"><img
                                        src="/asset/images/client/client-10.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">12+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">#720</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 1/1</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">502</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start single product -->
                <div data-sal="slide-up" data-sal-delay="600" data-sal-duration="800"
                     class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-one no-overlay">
                        <div class="card-thumbnail">
                            <a href="product-details.html"><img src="/asset/images/portfolio/portfolio-11.jpg"
                                                                alt="NFT_portfolio"></a>
                        </div>
                        <div class="product-share-wrapper">
                            <div class="profile-share">
                                <a href="author.html" class="avatar" data-tooltip="مارک تواین"><img
                                        src="/asset/images/client/client-1.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="شکیل اونیل"><img
                                        src="/asset/images/client/client-8.png" alt="Nft_Profile"></a>
                                <a href="author.html" class="avatar" data-tooltip="جان لی"><img
                                        src="/asset/images/client/client-7.png" alt="Nft_Profile"></a>
                                <a class="more-author-text" href="#">5+ درخواست</a>
                            </div>
                            <div class="share-btn share-btn-activation dropdown">
                                <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg viewBox="0 0 14 4" fill="none" width="16" height="16"
                                         class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>

                                <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                    <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal"
                                            data-bs-target="#shareModal">
                                        اشتراک گذاری
                                    </button>
                                    <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">
                                        گزارش
                                    </button>
                                </div>

                            </div>
                        </div>
                        <a href="product-details.html"><span class="product-name">پرتقال</span></a>
                        <span class="latest-bid">بالاترین پیشنهاد 1/1</span>
                        <div class="bid-react-area">
                            <div class="last-bid">0.244wETH</div>
                            <div class="react-area">
                                <svg viewBox="0 0 17 16" fill="none" width="16" height="16"
                                     class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                    <path
                                        d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z"
                                        stroke="currentColor" stroke-width="2"></path>
                                </svg>
                                <span class="number">308</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single product -->
            </div>
        </div>
    </div>
    <!-- end product area -->
    <!-- collection area Start -->
    <div class="rn-collection-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--50 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">مجموعه
                        برتر</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                    <div class="view-more-btn text-end text-sm-start" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <a class="btn-transparent" href="#">نمایش همه<i data-feather="arrow-left"></i></a>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800"
                     class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="product-details.html" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="/asset/images/collection/collection-lg-01.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="/asset/images/collection/collection-sm-01.jpg" alt="Nft_Profile">
                                <img src="/asset/images/collection/collection-sm-02.jpg" alt="Nft_Profile">
                                <img src="/asset/images/collection/collection-sm-03.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="/asset/images/client/client-15.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">مکعب قرمز</h6>
                                <span class="items">27 مورد</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800"
                     class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="product-details.html" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="/asset/images/collection/collection-lg-03.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="/asset/images/collection/collection-sm-04.jpg" alt="Nft_Profile">
                                <img src="/asset/images/collection/collection-sm-05.jpg" alt="Nft_Profile">
                                <img src="/asset/images/collection/collection-sm-06.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="/asset/images/client/client-12.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">سگ الماس</h6>
                                <span class="items">20 مورد</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800"
                     class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="product-details.html" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="/asset/images/collection/collection-lg-02.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="/asset/images/collection/collection-sm-07.jpg" alt="Nft_Profile">
                                <img src="/asset/images/collection/collection-sm-08.jpg" alt="Nft_Profile">
                                <img src="/asset/images/collection/collection-sm-09.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="/asset/images/client/client-13.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">مورگان 11</h6>
                                <span class="items">15 مورد</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="350" data-sal-duration="800"
                     class="col-lg-4 col-xl-3 col-md-6 col-sm -6 col-12">
                    <a href="product-details.html" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="/asset/images/collection/collection-lg-04.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="/asset/images/collection/collection-sm-10.jpg" alt="Nft_Profile">
                                <img src="/asset/images/collection/collection-sm-11.jpg" alt="Nft_Profile">
                                <img src="/asset/images/collection/collection-sm-12.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="/asset/images/client/client-14.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">پرتقال</h6>
                                <span class="items">10 مورد</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
            </div>
        </div>
    </div>
    <!-- collection area End -->
    <!-- Modal -->
    <div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i>
        </button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-header share-area">
                    <h5 class="modal-title">این NFT را به اشتراک بگذارید</h5>
                </div>
                <div class="modal-body">
                    <ul class="social-share-default">
                        <li><a href="#"><span class="icon"><i data-feather="facebook"></i></span><span
                                    class="text">فیس بوک</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="twitter"></i></span><span
                                    class="text">توییتر</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="linkedin"></i></span><span
                                    class="text">لینکداین</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="instagram"></i></span><span class="text">اینستاگرام</span>
                            </a>
                        </li>
                        <li><a href="#"><span class="icon"><i data-feather="youtube"></i></span><span
                                    class="text">یوتیوب</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="rn-popup-modal report-modal-wrapper modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i>
        </button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content report-content-wrapper">
                <div class="modal-header report-modal-header">
                    <h5 class="modal-title">چرا گزارش می دهید؟
                    </h5>
                </div>
                <div class="modal-body">
                    <p>توضیح دهید که چرا فکر می کنید این مورد باید از بازار حذف شود</p>
                    <div class="report-form-box">
                        <h6 class="title">پیام</h6>
                        <textarea name="message" placeholder="Write Problems"></textarea>
                        <div class="report-button">
                            <button type="button" class="btn btn-primary mr--10 w-auto">گزارش</button>
                            <button type="button" class="btn btn-primary-alta w-auto" data-bs-dismiss="modal">لغو
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endcomponent
