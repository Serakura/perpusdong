@extends('layout.public')

@section('content')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" href="{{ route('signup.action') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="nama" id="nama"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email" id="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user"
                                    id="password" name="password" placeholder="Password">
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                                Register Account
                            </button>
                            
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/login">Dah punya akun? Login dong!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
