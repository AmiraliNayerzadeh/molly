@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create New Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('blogs.index')}}">Blogs</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Blog</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body row">
                        <section class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title:</label>
                                        <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}" placeholder="Enter the title of your article" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="title">Description:</label>
                                        <textarea class="ckeditor form-control" name="description" id="description" cols="30" rows="10">{!! old('description') !!}</textarea>
                                    </div>



                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <span class="card-title">
                                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                                        Category:
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label" for="category">sellect</label>
                                        <select class="form-control form-select" name="category" id="category">
                                            <option selected disabled>Chose your category</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </section>

{{--                        right section--}}
                        <section class="col-lg-3">

{{--                            featuring image--}}
                            <div class="card">
                                <div class="card-header">
                                    <span class="card-title">featuring image</span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="card-img">
                                            <img class="img-fluid rounded" src="{{asset('/images/Admin/GetArticleImage.png')}}" alt="GetArticleImage">
                                        </div>
                                        <label class="form-label" for="image"></label>
                                        <input class="form-control-file" type="file" name="image" id="image">
                                    </div>
                                </div>
                            </div>
{{--                           End featuring image--}}

{{--                            SEO--}}
                            <div class="card">
                                <div class="card-header">
                                    <span class="card-title">SEO Option</span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label" for="meta_keyword">KeyWord:</label>
                                        <input class="form-control" type="text" name="meta_keyword" id="meta_keyword" placeholder="Separate by , ">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="meta_title">Meta Title:</label>
                                        <input class="form-control" type="text" name="meta_title" id="meta_title">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="meta_description">meta Description:</label>
                                        <textarea class="form-control" name="meta_description" id="meta_description" cols="30" rows="5"></textarea>
                                    </div>
                               </div>
                            </div>
{{--                           End SEO--}}

                            {{--                            Publish Box--}}
                            <div class="card">
                                <div class="card-header">
                                    <span class="card-title">Publish Option</span>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                        {{auth()->user()->name}}
                                    </div>

                                    <div>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{Carbon\Carbon::now()}}
                                    </div>

                                    <div>
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                        status:
                                        <bdi class="badge badge-info">Not yet created</bdi>
                                    </div>
                                </div>
                                <div class="card-footer row">
                                    <div class="col">
                                        <button class="btn btn-success" name="status" value="1" type="submit">publish</button>
                                    </div>

                                    <div class="col">
                                        <button class="btn btn-light " name="status" value="0" type="submit">draft</button>
                                    </div>

                                </div>

                            </div>
                            {{--                           End Publish Box--}}
                        </section>
                    </div>
                </form>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <script>
        <script type="text/javascript">
            $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    </script>

@endcomponent
