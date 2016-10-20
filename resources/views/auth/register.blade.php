@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('app.RegisterUser')}}</div>
                <div class="panel-body">
                    <a href="{{url('/login')}}">{{trans('app.IhaveAccount')}}</a>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{route('facebookLogin')}}">
                                <img src="/images/facebook-login.png" class="facebook-login">
                            </a>
                            <hr>
                        </div>
                    </div>


                    <form id="register-form" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <label class="form-label control-label">{{trans('app.Name')}}</label>
                                <input id="name" type="text" class="form-control"
                                       placeholder="{{trans('app.NamePlaceholder')}}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <label class="control-label form-label">{{trans('app.Email')}}</label>
                                <input id="email" type="email" class="form-control"
                                       placeholder="{{trans('app.EmailPlaceholder')}}" name="email" value="{{ old('email') }}" required>

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

                                <input id="password" type="password"
                                       placeholder="{{trans('app.PasswordPlaceholder')}}" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <div class="col-md-8 col-md-offset-2">
                                <label for="password-confirm" class="form-label control-label">{{trans('app.PasswordConfirmation')}}</label>

                                <input id="password-confirm" type="password"
                                       placeholder="{{trans('app.PasswordConfirmationPlaceholder')}}" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="icheckbox text-center">
                                    <input id="terms" type="checkbox" name="terms">
                                    <label class="form-label control-label" for="terms"> {{trans('app.Terms')}} </label>
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <br>
                                <button type="submit" class="btn btn-block btn-create btn-lg ">
                                    {{trans('buttons.Register')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('javascript')

    <script>
        jQuery(document).ready(function(){
            jQuery('#terms').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });

            jQuery('#register-form').submit(function(event){
                if(!$('#terms').is(':checked')){
                    toastr.warning('{{trans('app.AceptTerms')}}', 'Términos y condiciones');
                    event.preventDefault();
                    console.log('accept terms');
                }
                return ;
            })

        });
    </script>

@endsection