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
                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                        </div>
                        <form class="user" href="{{ route('login.action') }}" method="POST" >
                            @csrf
                            <div class="form-group mb-3">
                                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="Email Address">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control form-control-user"
                                    id="password" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Login
                            </button>
                            
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/signup">Gapunya akun? Daftar dong!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
