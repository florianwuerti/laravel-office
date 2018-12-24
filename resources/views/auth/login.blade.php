@extends('layouts.main')

@section('title', '')
@section('pageClass', 'login')


@section('content')
    <div class="container">
        <div class="login_box">
            <div class="login__headline">
                <h1 class="login__headline--h1">{{ config('app.name') }}</h1>
                <h2 class="login__headline--h2">Dein Office</h2>
            </div>

            @if (count($errors) > 0)
                <div class="alert">Die Anmeldung ist fehlgeschlagen.<br>Versuchen Sie es nochmals.</div>
            @endif

            <div class="login_form">
                <form id="login-form" class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form_group">
                        <label for="email">{{ __('E-Mail-Adresse') }}</label>
                        <input type="email" class="field-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="beispiel@meine-firma.ch">
                        @if ($errors->has('email'))
                            <small id="emailHelp" class="invalid-feedback" role="alert">{{ $errors->first('email') }}</small>
                        @endif
                    </div>
                    <div class="form_group">
                        <label for="password">{{ __('Passwort') }}</label>
                        <input type="password" id="inputPassword" class="field-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="******">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-dark" type="submit">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                        <div class="forgot_password">
                            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Passwort vergessen?') }}</a>
                        </div>
                    @endif
                    <div class="separator"></div>
                    <div class="sign_up_box">
                        <div>Haben Sie noch kein Laravel-Office-Konto?</div>
                        <div>
                            <a href="{{ route('register') }}">Jetzt kostenlos anmelden!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection