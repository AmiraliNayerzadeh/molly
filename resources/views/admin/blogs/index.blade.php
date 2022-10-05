@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blogs List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Blogs</a></li>
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
                    <h3 class="card-title">Blogs Table</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th style="width: 20px">Picture</th>
                            <th>Title</th>
                            <th>author</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blog as $blogs)
                        <tr>
                            <td>{{$blogs->id}}</td>
                            <td><img class="img-fluid rounded-circle" src="{{$blogs->image}}"></td>
                            <td>{{$blogs->title}}</td>
                            <td>{{$blogs->user->name}}</td>
                            <td>
                                @if($blogs->status == 0)
                                <bdi class="badge badge-info">Draft</bdi>
                                @elseif($blogs->status == 1)
                                    <bdi class="badge badge-success">published</bdi>
                                @else
                                    Unknown
                                @endif
                            </td>
                            <td>
                                <a href="{{route('blogs.edit' , $blogs)}}">
                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                </a>

                                <form action="{{route('blogs.destroy' , $blogs)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn" type="submit">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{$blog->render()}}
                </div>

            </div>
        </div>
    </div>

@endcomponent
