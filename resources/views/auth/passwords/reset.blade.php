<!DOCTYPE html>
<html>

<head>
    <title>SISORTO - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- end of global level css -->
    <link href="{{asset('vendors/iCheck/css/square/blue.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet" />
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="css/pages/login.css" />
    <!-- end of page level css -->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <div id="wrapper">
                        <div class="animate form">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}
                                <h3 class="black_bg">
                                    <img src="{{asset('img/logo.png')}}" width="290px" alt="SISORTO">
                                    <br>Recuperar senha</h3>
                                <p>
                                    Digite seu endereço de e-mail abaixo e nós enviaremos um link de senha de reinicialização especial para sua caixa de entrada.
                                </p>
                                <div class="form-group">
                                    <label style="margin-bottom:0;" for="username2" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Your email
                                    </label>
                                    <input id="username2" name="username2" placeholder="your@mail.com" />
                                </div>
                                <p class="login button reset_button">
                                    <input type="submit" value="Reset Password" class="btn btn-raised btn-success btn-block" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="btn btn-raised btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <script src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/iCheck/js/icheck.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/pages/login.js')}}" type="text/javascript"></script>
</body>

</html>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
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
