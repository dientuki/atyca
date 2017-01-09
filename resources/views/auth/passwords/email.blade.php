@extends('layouts.login')

@section('content')
    <div class="login-box block-aside-center">

        <form class="login-form" role="form" method="POST" action="{{ route('user::password.email') }}">
            {{ csrf_field() }}

            <div class="form-item">Reset Password</div>

            {{ session('status') }}

            <div class="form-item{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="label"  for="email">E-Mail</label>

                <div>
                    <input id="email" type="email" class="text-box" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-action clearfix">
                <input class="button-submit" type="submit" value="Resetear">
            </div>

        </form>

    </div>

@endsection
