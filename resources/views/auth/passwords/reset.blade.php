@extends('layouts.login')

@section('content')
    <div class="login-box block-aside-center">

        <form class="login-form" role="form" method="POST" action="{{ route('user::password.reset.post') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-item">Reset Password</div>

            {{ session('status') }}

            <div class="form-item{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="label"  for="email">E-Mail</label>

                <div>
                    <input id="email" type="email" class="text-box" name="email" value="{{ $email or old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="label"  for="password">Password</label>

                <div>
                    <input id="password" type="password" class="text-box" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-item{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label class="label"  for="password-confirm">Confirm Password</label>
                <div>
                    <input id="password-confirm" type="password" class="text-box" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-action clearfix">
                <input class="button-submit" type="submit" value="Reestablecer">
            </div>

        </form>

    </div>

@endsection