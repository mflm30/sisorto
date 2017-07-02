<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SisOrto - {{$title}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    @stack('style')
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="skin-josh">
    <header class="header">
        <a href="{{url('/')}}" class="logo">
            <img src="{{url('img/logo.png')}}" alt="Logo" height="80%">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('img/user.png')}}" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>Usuario<span><i class="caret"></i></span></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header bg-light-blue">
                                <img src="{{url('img/user.png')}}" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                                <p class="topprofiletext">Usuario</p>
                            </li>
                            <li>
                                <a href="view_user.html">
                                    <i class="livicon" data-name="user" data-s="18"></i> Meu Perfil
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="adduser.html">
                                    <i class="livicon" data-name="gears" data-s="18"></i> Permissões
                                </a>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i> Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{url('logout')}}">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i> Sair
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar sidebar-nav">
                    <div class="clearfix"></div>

                    <ul id="menu" class="page-sidebar-menu">
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="rocket" data-size="18" data-c="#418bca" data-hc="#418bca" data-loop="true"></i>
                                <span class="title">Produtos</span><span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{url('produtos/adicionar')}}">
                                        <i class="fa fa-angle-double-right"></i> Adicionar Produto
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('produtos')}}">
                                        <i class="fa fa-angle-double-right"></i> Lista de Produtos
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="user" data-size="18" data-c="#418bca" data-hc="#418bca" data-loop="true"></i>
                                <span class="title">Usuarios</span><span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{url('usuarios/adicionar')}}">
                                        <i class="fa fa-angle-double-right"></i> Adicionar Usuário
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('usuarios')}}">
                                        <i class="fa fa-angle-double-right"></i> Lista de Usuários
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#418bca" data-hc="#418bca" data-loop="true"></i>
                                <span class="title">Clientes</span><span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{url('clientes/adicionar')}}">
                                        <i class="fa fa-angle-double-right"></i> Adicionar Cliente
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('clientes')}}">
                                        <i class="fa fa-angle-double-right"></i> Lista de Clientes
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="calculator" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
                                <span class="title">Orçamentos</span><span class="fa arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
                                <span class="title">Consignações</span><span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_builder.html">
                                        <i class="fa fa-angle-double-right"></i> Fixas
                                    </a>
                                </li>
                                <li>
                                    <a href="form_builder.html">
                                        <i class="fa fa-angle-double-right"></i> Caixa Pronta
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="truck" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
                                <span class="title">Pedidos</span><span class="fa arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="globe" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
                                <span class="title">NF-e</span><span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_builder.html">
                                        <i class="fa fa-angle-double-right"></i> Saída
                                    </a>
                                </li>
                                <li>
                                    <a href="form_builder.html">
                                        <i class="fa fa-angle-double-right"></i> Devolução
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="money" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
                                <span class="title">Caixa</span><span class="fa arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="truck" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Fornecedores</span><span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_builder.html">
                                        <i class="fa fa-angle-double-right"></i> Fornecedores
                                    </a>
                                </li>
                                <li>
                                    <a href="form_builder.html">
                                        <i class="fa fa-angle-double-right"></i> Pedidos
                                    </a>
                                </li>
                                <li>
                                    <a href="form_builder.html">
                                        <i class="fa fa-angle-double-right"></i> Entradas
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="money" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Contas a Pagar</span><span class="fa arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('logout')}}">
                                <i class="livicon" data-name="sign-out" data-size="18" data-c="#FFF" data-hc="#FFF" data-loop="true"></i>
                                <span class="title">Sair</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </aside>
        <aside class="right-side">
            <section class="content-header">
                <h1>{{$title}}</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Home
                        </a>
                    </li>
                </ol>
            </section>
            <div class="row">
                <div class="col-xs-12">
                    @yield('content')
                </div>
            </div>
        </aside>
    </div>
    <script src="{{url('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
    @stack('scripts')

</body>

</html>
