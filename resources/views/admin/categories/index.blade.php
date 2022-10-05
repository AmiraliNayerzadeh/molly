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
                <div class="card-body">
                    <ul>
                        @foreach($categories->where('parent' , 0) as $category)
                            <li class="my-2 text-bold">{{$category->name}}</li>
                            @foreach($categories->where('parent' , $category->id) as $secCat)
                                <li class="my-2 mx-3">{{$secCat->name}}</li>


                                @foreach($categories->where('parent' , $secCat->id) as $thrCat)
                                    <li class="my-2 mx-5">
                                        {{$thrCat->name}}
                                        <a class="btn btn-group" href="{{route('categories.edit' ,$thrCat )}}"><i class="fa fa-folder-open" aria-hidden="true"></i></a>

                                        <form action="{{route('categories.destroy' , $thrCat)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn" type="submit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </li>
                                @endforeach

                            @endforeach

                        @endforeach
                    </ul>
                </div>
                <div class="card-footer">
                    {{$categories->render()}}
                </div>

            </div>
        </div>
    </div>

@endcomponent
