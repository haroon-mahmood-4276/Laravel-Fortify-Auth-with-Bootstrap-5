@extends('layout.app')

@section('PageTitle', 'Login')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-7">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h2>Login</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            {{ old('email') }} id="email" required autofocus>
                        <label for="email">Email address or Username</label>

                        @error('email')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required id="password">
                        <label for="password">Password</label>
                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group d-flex justify-content-lg-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-2">
                        <button type="reset" class="btn btn-danger mx-1">Reset</button>
                        <button type="submit" class="btn btn-primary mx-1">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
