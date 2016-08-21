<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Work Center</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{URL::asset('plugins/materialize/css/materialize.css')}}" rel="stylesheet" media="screen,projection">
  <link href="{{URL::asset('plugins/materialize/css/style.css')}}" rel="stylesheet" media="screen,projection">
</head>
<body id="login">
  <nav class="grey darken-4 lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">
<img src="../../../img/logo.png"/>
    </a>
    <li><a href="sass.html">Iniciar Sesion</a></li>
    <li><a href="badges.html">registracion</a></li>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center orange-text"><img src="../../../img/logo.png"/></h1>
      <br>
    </div>
  </div>

<center>
  <div class="container">
        <div class="z-depth-1  grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Ingresa Tu Correo</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Ingresa Tu contraseña</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Olvidaste tu contraseña?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit'  name='btn_login' class='col s12 btn btn-large waves-effect orange darker-4'>Entrar</button>
              </div>
            </center>
          </form>
        </div>
      </div>
<center>



  <!--  Scripts-->
<script src="{{URL::asset('plugins/jquery/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::asset('plugins/materialize/js/materialize.js')}}"></script>
<script src="{{URL::asset('plugins/materialize/js/init.js')}}"></script>


  </body>
</html>
