@extends('layout.app')

@section('PageTitle', 'Forgot Password')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-7">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h2>Comfirm Password</h2>
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" {{ old('password') }} id="password" placeholder="password" required
                            autofocus>
                        <label for="password">Password</label>

                        @error('password')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end mt-2">
                        <button type="submit" class="btn btn-primary mx-1">Send Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
