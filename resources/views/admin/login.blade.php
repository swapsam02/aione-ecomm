@extends('layouts.template')

@section('content')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto pb-3">
                            <a href="{{ route('admin.login') }}">
                                <span><img src="{{ asset('dashboard/dist/assets/images/logo-dark.png') }}" alt="" height="26"></span>
                            </a>
                        </div>
                        <h5 class="auth-title">Sign In</h5>
                        <form method="post" action="{{ route('admin.auth') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-danger btn-block" type="submit"> Log In </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection