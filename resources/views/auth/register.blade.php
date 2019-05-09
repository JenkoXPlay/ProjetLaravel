@extends('layouts.app')

@section('content')
<div class="container centered">

    <div class="titleContent">{{ __('Register') }}</div>

    <br />


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">{{ __('Name') }}</label>
        <br />


        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} inputHype" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        <br />

        <label for="email">{{ __('E-Mail Address') }}</label>
        <br />

        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputHype" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <br />

        <label for="password" >{{ __('Password') }}</label>
        <br />

        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} inputHype" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <br />

        <label for="password-confirm" >{{ __('Confirm Password') }}</label>
        <br />

        <input id="password-confirm" type="password" class="form-control inputHype" name="password_confirmation" required>
        <br /><br />

        <button type="submit" class="btnHype">
            {{ __('Register') }}
        </button>

    </form>

</div>
@endsection
