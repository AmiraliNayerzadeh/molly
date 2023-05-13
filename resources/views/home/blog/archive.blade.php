@component('.home.layout.contetnt')
    <!-- BLOG POSTS LISTING
			============================================= -->
    <section id="blog-page" class="bg-snow wide-50 inner-page-hero blog-page-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title title-02 mb-85">
                        <h2 class="h2-xs">مجله مولی</h2>
                    </div>
                </div>
            </div>


            <!-- FEATURED POST -->
            @foreach(\App\Models\Blog::inRandomOrder()->limit(1)->get() as $random)
                <div class="rel blog-post-wide featured-post">
                    <div class="row d-flex align-items-center">

                        <!-- Featured Badge -->
                        <div class="featured-badge ico-25 bg-whitesmoke yellow-color">
                            <span class="flaticon-star-1"></span>
                        </div>

                        <!-- BLOG POST IMAGE -->
                        <div class="col-lg-7 blog-post-img">
                            <div class="hover-overlay">
                                <a href="{{route('blog.single', $random->slug)}}">
                                    <img class="img-fluid" src="{{$random->image}}" alt="{{$random->title}}"/>
                                </a>
                                <div class="item-overlay"></div>
                            </div>
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="col-lg-5 blog-post-txt">

                            <!-- Post Tag -->
                            <p class="p-md post-tag">{{jdate($random->created_at)->ago()}}</p>

                            <!-- Post Link -->
                            <h5 class="h5-xl">
                                <a href="{{route('blog.single', $random->slug)}}">{{$random->title}}</a>
                            </h5>


                            <!-- Post Meta -->
                            @foreach($random->categories as $category)
                                <div class="post-meta"><p class="p-md">{{$category->name}}</p></div>
                            @endforeach


                        </div>    <!-- END BLOG POST TEXT -->

                    </div>   <!-- End row -->
                </div>    <!-- END FEATURED POST -->
        @endforeach

        <!-- POSTS WRAPPER -->
            <div class="posts-wrapper">


                <!-- BLOG POSTS CATEGORY -->
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="h5-lg posts-category">آخرین مقالات</h5>
                    </div>
                </div>


                <!-- BLOG POSTS -->
                <div class="row">
                    <div class="col gallery-items-list">
                        <div class="masonry-wrap grid-loaded">

                        @foreach($blog as $blogs)
                            <!-- BLOG POST #1 -->
                                <div class="blog-3-post masonry-image">
                                    <!-- BLOG POST IMAGE -->
                                    <div class="blog-post-img">
                                        <div class="hover-overlay">
                                            <a href="{{route('blog.single', $blogs->slug)}}">
                                                <img class="img-fluid" src="{{$blogs->image}}" alt="{{$blogs->title}}"/>
                                            </a>
                                            <div class="item-overlay"></div>
                                        </div>
                                    </div>

                                    <!-- BLOG POST TEXT -->
                                    <div class="blog-post-txt">

                                        <!-- Post Tag -->
                                        <p class="p-md post-tag">{{jdate($blogs->created_at)->ago()}}</p>

                                        <!-- Post Link -->
                                        <h5 class="h5-md">
                                            <a href="{{route('blog.single', $blogs->slug)}}">
                                                {{$blogs->title}}
                                            </a>
                                        </h5>
                                        <!-- Post Meta -->
                                        @foreach($blogs->categories as $category)
                                            <div class="post-meta"><p class="p-md">{{$category->name}}</p></div>
                                        @endforeach

                                    </div>    <!-- END BLOG POST TEXT -->
                                </div>    <!-- END BLOG POST #1 -->
                            @endforeach
                        </div>
                    </div>
                </div>    <!-- END BLOG POSTS -->


            </div>    <!-- END POSTS WRAPPER -->


        </div>     <!-- End container -->
    </section>    <!-- END BLOG POSTS LISTING -->




    <!-- PAGE PAGINATION
    ============================================= -->
    <div class="bg-snow pb-100 page-pagination division">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        {{$blog->render()}}
                    </nav>
                </div>
            </div>  <!-- End row -->
        </div> <!-- End container -->
    </div>    <!-- END PAGE PAGINATION -->


    @include('.home.component.mail')


@endcomponent
