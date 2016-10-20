@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('app.Login')}}</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{route('facebookLogin')}}">
                                <img src="/images/facebook-login.png" class="facebook-login">
                            </a>
                            <hr>
                        </div>
                    </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-8 col-md-offset-2">
                                <label for="email" class="form-label control-label">{{trans('app.Email')}}</label>
                                <input id="email" type="email" placeholder="{{trans('app.EmailPlaceholder')}}"
                                       class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <label for="password" class="form-label control-label">{{trans('app.Password')}}</label>

                                <input id="password" type="password" placeholder="{{trans('app.PasswordPlaceholder')}}"
                                       class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group hidden">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> {{trans('app.RememberMe')}}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-create btn-block btn-lg">
                                    {{trans('buttons.Login')}}
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    {{trans('app.ForgotYourPassword')}}
                                </a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
