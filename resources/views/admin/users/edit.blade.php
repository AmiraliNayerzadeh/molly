@component('.admin.layout.contetnt')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
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
                    <h3 class="card-title">Edit User</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('users.update' , $user)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="card-body row">
                        <div class="form-group col-lg-6">
                            <label class="form-label">Username:</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{$user->name ? $user->name : old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">email:</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required autocomplete="email">
                        </div>


                        <div class="form-group col-lg-6">
                            <label class="form-label">Password:</label>
                            <input id="password" type="password" class="form-control" name="password"  autocomplete="new-password">
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label">Confirm Password:</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
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
