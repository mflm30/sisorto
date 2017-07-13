<!DOCTYPE html>
<html>

<head>
    <title>SISORTO - Recuperar senha</title>
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
                            <form id="reset_pw" autocomplete="on" class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <h3 class="black_bg">
                                    <img src="{{asset('img/logo.png')}}" width="290px" alt="SISORTO">
                                    <br>Recuperar senha</h3>
                                <p>
                                    Digite seu endereço de e-mail abaixo e nós enviaremos um link de senha de reinicialização especial para sua caixa de entrada.
                                </p>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <label style="margin-bottom:0;" for="username2" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Seu e-mail
                                    </label>
                                    <input id="username2" name="email" placeholder="your@mail.com" value="{{ old('email') }}" />
                                </div>
                                <p class="login button reset_button">
                                    <input type="submit" value="Recuperar senha" class="btn btn-raised btn-success btn-block" />
                                </p>
                                <p class="change_link">
                                    <a href="{{url('login')}}" class="btn btn-raised btn-responsive botton-alignment btn-warning btn-sm to_register">Voltar
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
