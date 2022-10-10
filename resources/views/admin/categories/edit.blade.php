@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create New Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categories</a></li>
                        <li class="breadcrumb-item active">{{$category->name}}</li>
                        <li class="breadcrumb-item active">Edit</li>
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
                    <h3 class="card-title">Edit Category <bdo class="badge badge-success">{{$category->name}}</bdo></h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('categories.update' , $category)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <section class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Title:</label>
                                        <input class="form-control" type="text" name="name" id="name"
                                               value="{{$category->name}}" placeholder="Enter the title of your article" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="title">Description: <small>optional</small>
                                        </label>
                                        <textarea class="ckeditor form-control" name="description" id="description" cols="30" rows="10">{!! $category->description !!}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <span class="card-title">
                                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                                        Parent:
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label" for="parent">select</label>
                                        <select class="form-control form-select" name="parent" id="parent">
                                            <option {{$category->parent === 0 ? 'selected' : ''}} value="0">This is
                                                Parent Category
                                            </option>
                                            @foreach(\App\Models\Category::all()->where('parent' , 0) as $categoryy)
                                                <option
                                                    {{$category->parent === $categoryy->id ? 'selected' : ''}} value="{{$categoryy->id}}">{{$categoryy->name}}</option>
                                                @foreach(\App\Models\Category::all()->where('parent' , $categoryy->id) as $SECcategory)
                                                    <option
                                                        {{$category->parent === $SECcategory->id ? 'selected' : ''}} value="{{$SECcategory->id}}">
                                                        -- {{$SECcategory->name}}</option>
                                                    -- {{$SECcategory->name}}</option>
                                                @endforeach
                                            @endforeach
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
                                            @if($category->image)
                                                <img class="img-fluid rounded"
                                                     src="{{$category->image}}"
                                                     alt="GetArticleImage">

                                            @else
                                                <img class="img-fluid rounded"
                                                     src="{{asset('/images/Admin/GetArticleImage.png')}}"
                                                     alt="GetArticleImage">
                                            @endif
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
                                        <input class="form-control" type="text" name="meta_keyword" id="meta_keyword"
                                               value="{{$category->meta_keyword}}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="meta_title">Meta Title:</label>
                                        <input class="form-control" type="text" name="meta_title" id="meta_title" value="{{$category->meta_title}}">
                                    </div>

                                    <div class=" form-group">
                                        <label class="form-label" for="meta_description">meta Description:</label>
                                        <textarea class="form-control" name="meta_description" id="meta_description"
                                                  cols="30" rows="5">
                                            {!! $category->meta_description!!}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            {{--                           End SEO--}}
                        </section>

                    <div class=" card-footer">
                        <button class="btn btn-success" type="submit">Register category</button>
                    </div>

                    </section>

                </form>
                {{--                card--}}
            </div>
            {{--        col-12--}}
        </div>
        {{--        row--}}
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

@endcomponent
