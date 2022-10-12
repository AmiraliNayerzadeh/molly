@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banner List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Banner</a></li>
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
                    <h3 class="card-title">Banner Table</h3>
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
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ui as $uis)
                        <tr>
                            <td>{{$uis->id}}</td>
                            <td><img class="img-fluid rounded-circle" style="max-height: 250px" src="{{$uis->image}}"></td>
                            <td>{{$uis->name}}</td>
                            <td>
                                <a class="btn btn-group text-primary" href="{{route('Ui.edit' , $uis)}}">
                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                </a>

                                <form class="d-inline text-danger" action="{{route('Ui.destroy' , $uis)}}" method="post">
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
                    {{$ui->render()}}
                </div>

            </div>
        </div>
    </div>

@endcomponent
