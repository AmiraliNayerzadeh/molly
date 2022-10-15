@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create New Banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('Ui.index')}}">Banners</a></li>
                        <li class="breadcrumb-item active">{{$Ui->name}}</li>
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
                    <h3 class="card-title">Edit Banner</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('Ui.update', $Ui)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <img class="img-fluid" style="max-height: 300px" src="{{$Ui->image}}" alt="{{$Ui->alt}}">

                    <div class="card-body row">
                        <div class="col-lg-6">
                            <label class="form-label" for="name">Name:</label>
                            <input class="form-control form-control-lg" type="text" name="name" value="{{$Ui->name}}" id="name" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="image">image:</label>
                            <input class="form-control-file" type="file" name="image"  id="image">
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="alt">alt:</label>
                            <input class="form-control form-control-lg" type="text" name="alt" value="{{$Ui->alt}}" id="alt">
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Create Banner</button>
                    </div>
                </form>

            </div>
            <!-- /.card -->
        </div>
    </div>


@endcomponent
