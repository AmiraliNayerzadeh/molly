@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customers List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Counseling</a></li>
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
                    <h3 class="card-title">Counseling Table</h3>
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
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Mail</th>
                            <th>Web Address</th>
                            <th>Description</th>
                            <th>Change Status</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($counseling as $counselings)
                            <tr>
                                <td>{{$counselings->id}}</td>
                                <td>{{$counselings->status}}</td>
                                <td>{{$counselings->name}}</td>
                                <td>
                                    <a href="tel:{{$counselings->phone}}"> {{$counselings->phone}}</a>
                                </td>

                                <td>
                                    @if($counselings->email)
                                        <a href="mailto: {{$counselings->email}}">{{$counselings->email}}</a>
                                    @else
                                        not entered
                                    @endif

                                </td>

                                <td>
                                    @if($counselings->email)
                                        <a href="{{$counselings->web}}">{{$counselings->web}}</a>
                                    @else
                                        not entered
                                    @endif
                                </td>

                                <td>
                                @if($counselings->description)
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-light" data-toggle="modal"
                                                data-target="#id{{$counselings->id}}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="id{{$counselings->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">description</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{$counselings->description}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        not entered
                                    @endif

                                </td>


                                <td>
                                    <form action="{{route('counseling.update' , $counselings)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-sm btn-success" type="submit" name="status" value="New">
                                            New
                                        </button>
                                        <button class="btn btn-sm btn-primary" type="submit" name="status"
                                                value="Pending">Pending
                                        </button>
                                        <button class="btn btn-sm btn-danger" type="submit" name="status"
                                                value="canceled">canceled
                                        </button>
                                        <button class="btn btn-sm btn-secondary" type="submit" name="status"
                                                value="Completed">
                                            Completed
                                        </button>
                                    </form>
                                </td>

                                <td>
                                    <form action="{{route('counseling.destroy' , $counselings)}}" method="post">
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
