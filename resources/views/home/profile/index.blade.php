@component('.home.layout.contetnt')

    <div class="rn-author-bg-area bg_image ptb--150" style=" background-image: url({{$user->banner}});">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <div class="rn-author-area mb--30 mt_dec--120">
        <div class="container">
            <div class="row padding-tb-50 align-items-center d-flex">
                <div class="col-lg-12">
                    <div class="author-wrapper">
                        <div class="author-inner">
                            <div class="user-thumbnail">
                                <img src="{{$user->image}}" alt="">
                            </div>
                            <div class="rn-author-info-content">
                                <h1 class="title">{{$user->name}}</h1>
                                @if($user->twitter)
                                    <a href="https://twitter.com/{{$user->twitter}}" class="social-follw">
                                        <i data-feather="twitter"></i>
                                        <span class="user-name">{{$user->twitter}}</span>
                                    </a>
                                @endif

                                @if($user->instagram)
                                    <a href="https://www.instagram.com/{{$user->instagram}}" class="social-follw">
                                        <i data-feather="instagram"></i>
                                        <span class="user-name">{{$user->instagram}}</span>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rn-authore-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-wrapper-one">
                        <nav class="tab-button-one">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">درباره {{$user->name }}
                                </button>

                                <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">نوشته ها
                                </button>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="tab-content rn-bid-content" id="nav-tabContent">

                <div class="tab-pane row g-5 d-flex fade show active" id="nav-profile" role="tabpanel"
                     aria-labelledby="nav-profile-tab">
                    <div class="news-details ">
                        {!! $user->about !!}
                    </div>
                </div>


                <div class="tab-pane row g-5 d-flex fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <!-- start single product -->
                    @foreach(\App\Models\Blog::all()->where('user_id','==' , $user->id) as $blog)
                        <div class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-one no-overlay with-placeBid">
                                <div class="card-thumbnail">
                                    <a href="{{route('blog.single' , $blog->title)}}">
                                        <img src="{{$blog->image}}" alt="{{$blog->name}}">
                                    </a>
                                 </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="{{route('profile',  $blog->user->name)}}" class="avatar" data-tooltip="{{$user->name}}"><img
                                                src="{{$user->image}}" alt="{{$user->name}}"></a>
                                        <a class="more-author-text" href="{{route('profile',  $blog->user->name)}}">{{$user->name}}</a>
                                    </div>
                                </div>
                                <h4>
                                    <a href="{{route('blog.single' , $blog->title)}}"><span class="product-name">{{$blog->title}}</span></a>
                                </h4>
                            </div>
                        </div>
                @endforeach
                <!-- end single product -->
                </div>

            </div>
        </div>
    </div>

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
    <!-- Start Top To Bottom Area  -->
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

@endcomponent


