<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/adminlte/images/insginias.ico" type="image/ico" />
        <title>Novedades Maritex</title>
        <!-- Bootstrap -->
        <link href="/adminlte/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="/adminlte/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="/adminlte/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Select2 -->
        <link rel="stylesheet" href="/adminlte/vendors/select2/bootstrap-select.min.css">
        <!-- Datatables -->
        <link href="/adminlte/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="/adminlte/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="/adminlte/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="/adminlte/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="/adminlte/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="/adminlte/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="/adminlte/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- Bootstrap Colorpicker -->
        <link href="/adminlte/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="/adminlte/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="/adminlte/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="{{ URL::to('/home') }}" class="site_title"><i class="fa fa-university"></i>
                                <span>Noveds Maritex</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="{{ auth()->user()->user_image_route }}{{ auth()->user()->user_image_name }}"
                                    alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>
                                    @if (auth()->user()->role_id == 1)
                                        Administrador
                                    @elseif(auth()->user()->role_id == 2)
                                        Editor
                                    @elseif(auth()->user()->role_id == 3)
                                        Jefe
                                    @elseif(auth()->user()->role_id == 4)
                                        Empleado
                                    @else
                                        Invitado
                                    @endif
                                </span>
                                <h2>{{ auth()->user()->user_name }}</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    @if (Auth::user()->role_id == 1)
                                        <li><a><i class="fa fa-user"></i> Gestión<span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="{{ route('permissions.index') }}">Permisos</a></li>
                                                <li><a href="{{ route('roles.index') }}">Roles</a></li>
                                                <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                    @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3)
                                        <li><a><i class="fa fa-edit"></i> Administración<span
                                                    class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="{{ route('customers.index') }}">Cliente</a></li>
                                                <li><a href="{{ route('suppliers.index') }}">Proveedor</a></li>
                                                <li><a href="{{ route('employees.index') }}">Empleado</a></li>
                                                <li><a href="{{ route('shippers.index') }}">Transporte</a></li>
                                                <li><a>Mercadería<span class="fa fa-chevron-down"></span></a>
                                                    <ul class="nav child_menu">
                                                        <li class="sub_menu"><a href="{{ route('categories.index') }}">Categoría</a></li>
                                                        <li class="sub_menu"><a href="{{ route('sizes.index') }}">Talla</a></li>
                                                        <li class="sub_menu"><a href="{{ route('colors.index') }}">Color</a></li>
                                                        <li class="sub_menu"><a href="{{ route('products.index') }}">Ropa</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                    <li><a><i class="fa fa-tasks"></i> Funciones<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{ route('flows.index') }}">Caja</a></li>
                                            <li><a href="{{ route('sales.index') }}">Ventas</a></li>
                                            @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3)
                                                <li><a href="#">Pedidos</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Salir" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                <form id="logout-forms" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="user-profile dropdown-toggle" id="navbarDropdown"
                                            class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" v-pre>
                                            <img src="{{ auth()->user()->user_image_route }}{{ auth()->user()->user_image_name }}"
                                                alt="">
                                            {{ Auth::user()->user_name }} <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('profile.index') }}"> Perfil</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Salir') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                @yield('titulo')
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        @yield('contenido')
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Novedades Maritex Admin Template by BIGZERO
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="/adminlte/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/adminlte/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="/adminlte/vendors/fastclick/lib/fastclick.js"></script>
        <!-- Select2 -->
        <script src="/adminlte/vendors/select2/bootstrap-select.min.js"></script>
        <!-- jQuery Smart Wizard -->
        <script src="/adminlte/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
        <!-- NProgress -->
        <script src="/adminlte/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="/adminlte/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- morris.js -->
        <script src="/adminlte/vendors/raphael/raphael.min.js"></script>
        <script src="/adminlte/vendors/morris.js/morris.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="/adminlte/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- Bootstrap Colorpicker -->
        <script src="/adminlte/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- iCheck -->
        <script src="/adminlte/vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="/adminlte/vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="/adminlte/vendors/Flot/jquery.flot.js"></script>
        <script src="/adminlte/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="/adminlte/vendors/Flot/jquery.flot.time.js"></script>
        <script src="/adminlte/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="/adminlte/vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="/adminlte/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="/adminlte/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="/adminlte/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="/adminlte/vendors/DateJS/build/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="/adminlte/vendors/moment/min/moment.min.js"></script>
        <script src="/adminlte/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- jQuery Tags Input -->
	<script src="/adminlte/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
        <!-- Datatables -->
        <script src="/adminlte/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/adminlte/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="/adminlte/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <!-- Switchery -->
        <script src="/adminlte/vendors/switchery/dist/switchery.min.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="/adminlte/build/js/custom.min.js"></script>
        <!-- Custom Imports Theme Scripts -->
        <script src="{{asset('js/own/color_add.js')}}"></script>
        
        <script src="{{asset('js/own/size_add.js')}}"></script>

        <script src="{{asset('js/own/select_product.js')}}"></script>
        
        <script>
            function timeFunctionLong(input) {
                setTimeout(function() {
                    input.type = 'text';
                }, 60000);
            }
        </script>
    </body>
</html>
