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
                <form action="{{route('users.store')}}" method="post">
                    @csrf
                    <div class="card-body row">
                        <div class="form-group col-lg-6">
                            <label class="form-label">Username:</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">email:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>


                        <div class="form-group col-lg-6">
                            <label class="form-label">Password:</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">Confirm Password:</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
