@component('.home.layout.contetnt')

    <!-- SINGLE PROJECT-1
			============================================= -->
    <section id="project-1" class="bg-snow wide-60 inner-page-hero single-project division">
        <div class="container">
            <div class="row">
                <!-- PROJECT DISCRIPTION -->
                <div class="col-lg-10 offset-lg-1">
                    <div class="project-description">
                        <!-- PROJECT TITLE -->
                        <div class="project-title">

                            <!-- Title -->
                            <h2 class="h2-xl">
                                {{$project->title}}
                            </h2>

                            <!-- Project Data -->
                            <p class="p-xl project-data">
                                <span>
                                    <img style="max-width: 10rem" src="{{$project->clientLogo}}" alt="" srcset="">
                                </span>
                                <span>{{jdate($project->created_at)}}</span>
                                <span><a href="{{$project->web}}" class="pink-color">{{$project->web}}</a></span>
                            </p>

                        </div>


                        <!-- PROJECT TEXT -->
                        <div class="project-txt">

                            <!-- Image -->
                            <div class="project-inner-img mb-50">
                                <img class="img-fluid" src="{{$project->featuring}}" alt="project-preview" />
                            </div>

                            <!-- Text -->
                            {!! $project->description !!}

                            <div class="project-inner-img mb-50">
                                <img class="img-fluid" src="{{$project->featuringMobile}}" alt="project-preview" />
                            </div>

                        </div>	<!-- END PROJECT TEXT -->


                        <!-- MORE PROJECTS BUTTON -->
                        <div class="more-projects text-end">
                            <a href="{{route('project.index')}}"><h3 class="h3-md txt-400">مشاهده همه پروژه ها</h3></a>
                        </div>


                    </div>
                </div>	<!-- END PROJECT DISCRIPTION -->


            </div>	  <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END SINGLE PROJECT-1 -->



@endcomponent