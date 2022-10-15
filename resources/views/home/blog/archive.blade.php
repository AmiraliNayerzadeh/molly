@component('.home.layout.contetnt')



    <!-- start page title area -->
    <div class="rn-breadcrumb-inner ptb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h5 class="title text-center text-md-end">وبلاگ ما</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-list">
                        <li class="item"><a href="/">خانه</a></li>
                        <li class="separator"><i class="feather-chevron-left"></i></li>
                        <li class="item current">مجله</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title area -->

    <div class="rn-blog-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
            @foreach($blog as $blogs)
                <!-- start single blog -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal="slide-up" data-sal-delay="150"
                         data-sal-duration="800">
                        <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                            <div class="inner">

                                <div class="thumbnail">
                                    <a href="{{route('blog.single', $blogs->title)}}">
                                        <img src="{{$blogs->image}}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            @foreach($blogs->categories as $category)
                                            <a href="#">{{$category->name}} / </a>
                                            @endforeach
                                        </div>

                                        <div class="product-share-wrapper">
                                            <div class="profile-share" >
                                                <a href="{{route('profile',  $blogs->user->name)}}" class="avatar"
                                                   data-tooltip="{{$blogs->user->name}}"><img
                                                        src="{{$blogs->user->image}}" alt="{{$blogs->user->name}}"></a>
                                                <a class="more-author-text"
                                                   href="{{route('profile',  $blogs->user->name)}}">{{$blogs->user->name}}</a>
                                            </div>
                                        </div>


                                    </div>
                                    <h4 class="title"><a href="{{route('blog.single', $blogs->title)}}">{{$blogs->title}}
                                            <i class="feather-arrow-up-left"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single blog -->
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <nav class="pagination-wrapper" aria-label="Page navigation example">
                        {{$blog->render()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>




    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

@endcomponent
