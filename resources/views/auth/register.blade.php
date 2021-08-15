@extends('layout.app')

@section('PageTitle', 'Register')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-7">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h2>Register</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" id="name" placeholder="Name" required autofocus>
                                <label for="name">Name</label>

                                @error('name')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="username" class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" id="username" placeholder="Username"
                                    required autofocus>
                                <label for="username">Username</label>

                                @error('username')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Email" id="email" required
                                    autofocus>
                                <label for="email">Email address</label>

                                @error('email')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" id="password_confirmation-"
                                    placeholder="Confirm Password">
                                <label for="password_confirmation">Confirm Password</label>
                                @error('password_confirmation')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
