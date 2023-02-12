@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Projects</a></li>
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
                    <h3 class="card-title">Project Table</h3>
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
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Client</th>
                            <th>Web Address</th>
                            <th>Edit User</th>
                            <th>Delete User</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($project as $projects)
                        <tr>
                            <td>{{$projects->id}}</td>
                            <td>{{$projects->title}}</td>
                            <td>{{$projects->client}}</td>
                            <td><a href="{{$projects->web}}">{{$projects->web}}</a></td>
                            <td>
                                <a href="{{route('projects.edit',['project' => $projects])}}" >
                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route('projects.destroy' , $projects)}}" method="post">
                                    @csrf
                                    @method('DELETE')
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
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
