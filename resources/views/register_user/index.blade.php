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
<body id="register">
  <nav class="grey darken-4 lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="../../../img/logo.png"/></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Iniciar Sesion</a></li>
                    <li><a href="badges.html">registracion</a></li>
                </ul>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
    </div>
  </div>

<center>
  <div class="container">
        <div class="z-depth-1  grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
          <h2> ! Registrar !</h2>
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" required id="first_name" type="text" class="validate"> <label for="first_name">Nombres</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" required class="validate"> <label for="last_name">Apellidos</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" required class="validate"> <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" required class="validate"> <label for="password">Password</label>
                </div>
            </div>

            <div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                    Registrame! <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
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
