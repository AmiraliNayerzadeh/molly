@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Customer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers</a></li>
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
                    <h3 class="card-title">Add new Project</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('customers.update' , $customer)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body row">
                        <div class="form-group col-lg-4">
                            <label class="form-label">Name:</label>
                            <input id="customer" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$customer->name}}" required autocomplete="name" autofocus>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="form-label">CEO:</label>
                            <input id="CEO" type="text" class="form-control @error('CEO') is-invalid @enderror" name="CEO" value="{{$customer->CEO}}"  autocomplete="CEO">
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="form-label">Web:</label>
                            <input id="web" type="url" class="form-control @error('web') is-invalid @enderror" name="web" value="{{$customer->web}}"  autocomplete="web" autofocus>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="logo" class="form-label">Logo:</label>
                            <img src="{{$customer->logo}}" alt="" id="logo" class="img-fluid img-circle border" style="max-width: 250px">
                            <input id="logo" type="file" class="form-control-file @error('logo') is-invalid @enderror" name="logo" >
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="about" class="form-label">description:</label>
                            <textarea class="ckeditor form-text" name="description" id="ckeditor" cols="30" rows="10">{!! $customer->description   !!}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    
@endcomponent
