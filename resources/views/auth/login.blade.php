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
                        <div id="login" class="animate form">
                            <form action="{{url('login')}}" id="authentication" method="post">
                            {!! csrf_field() !!}
                                <h3 class="black_bg">
                                    <img src="{{asset('img/logo.png')}}" width="290px" alt="SISORTO">
                                    <br>Faça seu login para acessar o sistema</h3>
                                <div class="form-group ">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <label style="margin-bottom:0;" for="email1" class="uname control-label"> <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> E-mail
                                    </label>
                                    <input id="email1" name="email" placeholder="E-mail" value="" />
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <label style="margin-bottom:0;" for="password" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Senha
                                    </label>
                                    <input type="password" id="password" name="password" placeholder="Enter a password" />
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="remember-me" id="remember-me" value="remember-me" class="square-blue" /> Lembra
                                    </label>
                                </div>
                                <p class="login button">
                                    <input type="submit" value="Entrar" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="{{url('password/reset')}}" class="btn btn-responsive botton-alignment btn-warning btn-sm">Esqueceu a senha?
                                    </a>
                                    <a href="{{url('registrar')}}" id="signup" class="btn btn-responsive botton-alignment btn-success btn-sm pull-right">Cadastre-se
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
