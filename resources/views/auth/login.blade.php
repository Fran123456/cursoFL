@extends('layouts.appLogin')

@section('content')

<br>
<br>
<!-- WRAPPER -->
   
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                            <!--    <div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>-->
                   <h3>CURSO FL STUDIO</h3>
                                <!--<p class="lead">Accede a la administración de Sound Music</p><-->
                            </div>
                             <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                 {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">Correo:</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label">Password</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerda sesión
                                    </label>
                                </div>
                            </div>
                        </div>


                                <button type="submit" class="btn btn-primary btn-lg btn-block">Accede</button>
                                <div class="bottom">
                                <!--    <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right" style="background-image: url(assets/img/fondoreal.jpg);">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Ingresa con tus credenciales</h1>
                            <p>Es hora de disfrutar el curso</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
   
    <!-- END WRAPPER -->

@endsection
