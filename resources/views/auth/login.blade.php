@extends('templates.master')

@section('title')
Login
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card formed-card black">
                <div class="card-content white-text">
                    <span class="card-title">{{ __('Login') }}</span>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate form-control" name="email" value="{{ old('email') }}" required>
                                <label for="email" data-error="{{ $errors->first('email') }}">{{ __('E-Mail Address') }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <label for="password" data-error="{{ $errors->first('password') }}">{{ __('Password') }}</label>
                            </div>
                        </div>

                        <p>
                            <input type="checkbox" id="filled-in-box" class="filled-in" name="remember" checked="{{ old('remember') ? 'checked' : '' }}">
                            <label for="filled-in-box">{{ __('Remember Me') }}</label>
                        </p>
                    </form>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn waves-effect waves-light btn-large"><i class="material-icons right">arrow_forward</i>{{ __('Login') }}</button>
                    <a class="btn btn-large waves-effect waves-light" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
