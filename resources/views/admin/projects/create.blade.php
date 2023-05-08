@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Project</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
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
                <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body row">
                        <div class="form-group col-lg-4">
                            <label class="form-label">Title:</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="form-label">Client:</label>
                            <input id="client" type="text" class="form-control @error('client') is-invalid @enderror" name="client" value="{{ old('client') }}" required autocomplete="client">
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="form-label">Web:</label>
                            <input id="web" type="url" class="form-control @error('web') is-invalid @enderror" name="web" value="{{ old('web') }}"  autocomplete="web" autofocus>
                        </div>



                        <div class="form-group col-lg-4">
                            <label for="clientLogo" class="form-label">clientLogo:</label>
                            <img src="" alt="" id="clientLogo" class="img-fluid" style="max-height: 250px">
                            <input id="clientLogo" type="file" class="form-control-file @error('clientLogo') is-invalid @enderror" name="clientLogo" >
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="image" class="form-label">featuring:</label>
                            <img src="" alt="" id="profileimage" class="img-fluid" style="max-height: 250px">
                            <input id="featuring" type="file" class="form-control-file @error('featuring') is-invalid @enderror" name="featuring" >
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="featuringMobile" class="form-label">featuring Mobile:</label>
                            <img src="" alt="" id="featuringMobile" class="img-fluid" style="max-height: 250px">
                            <input id="featuringMobile" type="file" class="form-control-file @error('featuringMobile') is-invalid @enderror" name="featuringMobile" >
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="about" class="form-label">description:</label>
                            <textarea class="ckeditor form-text" name="description" id="ckeditor" cols="30" rows="10">{{old('description')}}</textarea>
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

    <script>
        <script type="text/javascript">
            $(document).ready(function () {
            $('.ckeditor').ckeditor();
        })
            ;
    </script>

@endcomponent
