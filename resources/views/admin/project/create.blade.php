@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Users</h1>
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
                    <h3 class="card-title">add new User</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body row">
                        <div class="form-group col-lg-4">
                            <label class="form-label">Username:</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="form-label">email:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>

                        <div class="form-group col-lg-4">
                            <label class="form-label">Phone number:</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus>
                        </div>


                        <div class="form-group col-lg-4">
                            <label for="instagram" class="form-label">instagram:</label>
                            <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}"  autocomplete="instagram">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="twitter" class="form-label">twitter:</label>
                            <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') }}"  autocomplete="twitter">
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="linkedin" class="form-label">linkedin:</label>
                            <input id="linkedin" type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ old('linkedin') }}"  autocomplete="linkedin">
                        </div>


                        <div class="form-group col-lg-6">
                            <label class="form-label">Password:</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">Confirm Password:</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>


                        <div class="form-group col-lg-6">
                            <label for="image" class="form-label">image:</label>
                            <img src="" alt="" id="profileimage" class="img-fluid" style="max-height: 250px">
                            <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" >
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="banner" class="form-label">banner:</label>
                            <img src="" alt="" id="bannerimage" class="img-fluid" style="max-height: 250px">
                            <input id="banner" type="file" class="form-control-file @error('banner') is-invalid @enderror" name="banner" >
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="about" class="form-label">About:</label>
                            <textarea class="ckeditor form-text" name="about" id="" cols="30" rows="10">{{old('about')}}</textarea>
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
