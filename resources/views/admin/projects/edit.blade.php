@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Project</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('projects.index')}}">Edit</a></li>
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
                    <h3 class="card-title">Edit {{$project->title}} Project</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('projects.update' , $project)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body row">
                        <div class="form-group col-lg-4">
                            <label class="form-label">Title:</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$project->title}}" required autocomplete="title" autofocus>

                        </div>

                        <div class="form-group col-lg-4">
                            <label class="form-label">Client:</label>
                            <input id="client" type="text" class="form-control @error('client') is-invalid @enderror" name="client" value="{{$project->client}}" required autocomplete="client">
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="form-label">Web:</label>
                            <input id="web" type="url" class="form-control @error('web') is-invalid @enderror" name="web" value="{{ $project->web }}"  autocomplete="web" autofocus>
                        </div>



                        <div class="form-group col-lg-4">
                            <label for="clientLogo" class="form-label">clientLogo:</label>
                            <input id="clientLogo" type="file" class="form-control-file @error('clientLogo') is-invalid @enderror" name="clientLogo" >
                            <img src="{{$project->clientLogo}}"  id="clientLogo" class="img-fluid" style="max-width: 250px">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="image" class="form-label">featuring:</label>
                            <input id="featuring" type="file" class="form-control-file @error('featuring') is-invalid @enderror" name="featuring" >
                            <img src="{{$project->featuring}}"  id="clientLogo" class="img-fluid" style="max-width: 250px">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="featuringMobile" class="form-label">featuring Mobile:</label>
                            <input id="featuringMobile" type="file" class="form-control-file @error('featuringMobile') is-invalid @enderror" name="featuringMobile" >
                            <img src="{{$project->featuringMobile}}"  id="clientLogo" class="img-fluid" style="max-width: 250px">

                        </div>

                        <div class="form-group col-lg-12">
                            <label for="about" class="form-label">description:</label>
                            <textarea class="ckeditor form-text" name="description" id="ckeditor" cols="30" rows="10">{{$project->description}}</textarea>
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
