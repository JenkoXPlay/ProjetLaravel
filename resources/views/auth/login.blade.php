@extends('layouts.app')

@section('content')
<div class="container centered">
    <div class="titleContent">{{ __('Login') }}</div>

    <br />

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <label for="email">{{ __('E-Mail Address') }}</label>
        <br />

        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputHype" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <br />

        <label for="password">{{ __('Password') }}</label>
        <br />

        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} inputHype" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <br />


        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <br />


        <button type="submit" class="btnHype">
            {{ __('Login') }}
        </button>

        <br /><br />

        @if (Route::has('password.request'))
            <a class="linkLogin" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

    </form>
</div>
@endsection
