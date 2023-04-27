@component('.home.layout.contetnt')

    <!-- PROJECTS-1
			============================================= -->
    <section id="projects-1" class="wide-50 inner-page-hero projects-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="section-title title-01 mb-80">
                        <!-- Title -->
                        <h2 class="h2-md">پروژه ها توسعه داده شده توسط مولی </h2>
                    </div>
                </div>
            </div>


            <!-- PROJECTS-1 WRAPPER -->
            <div class="row">
                <div class="col gallery-items-list">
                    <div class="masonry-wrap grid-loaded">

                    @foreach($project as $projects)
                        <!-- PROJECT #1 -->
                            <div class="project-details masonry-image">

                                <!-- Image -->
                                <div class="project-preview rel">
                                    <div class="hover-overlay">
                                        <a href="{{route('project.single' , $projects)}}">
                                            <img class="img-fluid" src="{{$projects->featuring}}"
                                                 alt="{{$projects->title}}"/>
                                        </a>
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="project-txt">
                                    <!-- Link -->
                                    <h5 class="h5-lg">
                                        <a href="{{route('project.single' , $projects)}}">
                                            {{$projects->title}}
                                        </a>
                                    </h5>
                                </div>

                            </div>
                            <!-- END PROJECT #1 -->
                        @endforeach


                    </div>
                </div>
            </div>    <!-- END PROJECTS-1 WRAPPER -->


        </div>       <!-- End container -->
    </section>    <!-- END PROJECTS-1 -->




    <!-- PAGE PAGINATION
    ============================================= -->
    <div class="pb-100 page-pagination division">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        {{$project->render()}}
                    </nav>
                </div>
            </div>  <!-- End row -->
        </div> <!-- End container -->
    </div>    <!-- END PAGE PAGINATION -->




    <!-- CALL TO ACTION-3
    ============================================= -->
    @include('home.component.moshavere')
    <!-- END CALL TO ACTION-3 -->



@endcomponent
