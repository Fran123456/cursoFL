<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->


    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/chartist/css/chartist-custom.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />


<style media="screen">
.auth-box .right {
    background-image: url(assets/img/fondoreal.jpg);
}
.auth-box .right .overlay {
    position: absolute;
    top: 0;
    display: block;
    width: 100%;
    height: 100%;
    background: rgba(99, 140, 160, 0.44);
}

.body{
    background-color: black;
}

.navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 22px;
    line-height: 40px;
}
</style>

    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/vendor/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('assets/scripts/klorofil-common.js')}}"></script>

</head>
<body>
  
   <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="{{ url('/') }}"><img src="{{asset('assets/img/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                
               
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                        <li>
                            <a href="{{route('login')}}">Ingresa</a>
                        </li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/perfil/pvz2.png')}}" class="img-circle" alt="Avatar"> <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('perfil')}}" ><i class="lnr lnr-user"></i>Perfil</a></li>
                                <li> 
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="lnr lnr-exit"></i> Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="{{route('home')}}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Novedades</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-file" aria-hidden="true"></i>
                              </i> <span>Materiales extra</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html" class="">Librerias</a></li>
                                    <li><a href="page-login.html" class="">Remixes</a></li>
                                    <li><a href="page-lockscreen.html" class="">Otros</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#subPage2" data-toggle="collapse" class="collapsed"><i class="fa fa-level-up" aria-hidden="true"></i>
                              </i> <span>Niveles</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPage2" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html" class="">Generalidades</a></li>
                                    <li><a href="page-login.html" class="">Nivel básico 1</a></li>
                                    <li><a href="page-lockscreen.html" class="">Nivel básico 2</a></li>
                                    <li><a href="page-lockscreen.html" class="">Nivel intermedio 1</a></li>
                                    <li><a href="page-lockscreen.html" class="">Nivel intermedio 2</a></li>
                                    <li><a href="page-lockscreen.html" class="">Avanzado</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        @endguest
        <br>
        <div class="main">
        @yield('content')
        <br>
        </div>
        <footer>

            <div class="container-fluid">
                <br>
                <p class="copyright">&copy; 2018 <a href="https://www.facebook.com/fran.navas.96" target="_blank">Desarrollado por Francisco Navas</a>. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    

  
</body>
</html>
