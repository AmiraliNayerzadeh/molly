@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Categories</a></li>
                        <li class="breadcrumb-item active">All</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Table</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                   placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($categories->where('parent' , 0) as $category)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header text-bold">
                                    {{$category->name}}

                                    <a class="btn text-primary" href="{{route('categories.edit',$category)}}">
                                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                                    </a>

                                    <form class="d-inline" action="{{route('categories.destroy' ,$category)}}"
                                          method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn text-danger" type="submit">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="card-body">
                                    <ul>
                                        @foreach(\App\Models\Category::all()->where('parent' , $category->id) as $sec)
                                            <li class="my-2">
                                                {{$sec->name}}
                                                <a class="btn text-primary" href="{{route('categories.edit',$sec)}}">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                </a>
                                                <form class="d-inline" action="{{route('categories.destroy' ,$sec)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn text-danger" type="submit">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </li>
                                            {{--                                        thr category--}}
                                            @foreach(\App\Models\Category::all()->where('parent' , $sec->id) as $thr)
                                                <li class="mx-3 my-2">
                                                    {{$thr->name}}
                                                    <a class="btn text-primary"
                                                       href="{{route('categories.edit',$thr)}}">
                                                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    </a>

                                                    <form class="d-inline"
                                                          action="{{route('categories.destroy' ,$thr)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn text-danger" type="submit">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            @endforeach

                                            @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="card-footer">
                    {{$categories->render()}}
                </div>

            </div>
        </div>
    </div>

@endcomponent
