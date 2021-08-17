@extends('layout.app')

@section('PageTitle', 'Dashboard')

@section('content')
<p>{{ auth()->user() }}</p>

<div class="row d-flex justify-content-center">
    <div class="col-md-7">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h2>2FA</h2>
            </div>
            <div class="card-body">

                @if (auth()->user()->two_factor_secret)
                    <p>You have enabled Two factor Auth</p>
                    <form method="POST" action="{{ route('two-factor.disable') }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary mx-1">Disable 2FA</button>
                    </form>
                @else
                    <p>You have not enabled Two factor Auth</p>
                    <form method="POST" action="{{ route('two-factor.enable') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary mx-1">Enable 2FA</button>
                    </form>
                @endif



                @if (session('status') == 'two-factor-authentication-enabled')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        Two factor authentication has been enabled.
                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                        <br>
                        <br>
                        <br>
                        <div>
                            <ul>
                                @foreach (auth()->user()->recoveryCodes() as $code)
                                    <li>{{ $code }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <a href="{{ route('two-factor.login') }}" class="btn btn-primary mx-1">Next</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection
