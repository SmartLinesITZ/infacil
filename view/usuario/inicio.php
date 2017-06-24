<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <title>Inicio</title>
  <style type="text/css">
  body {
    background: url(../../img/fonod2.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  #contenedor{
    opacity: 0.9;
  }
  #botones{
    opacity: 1.0;
  }
  #logo{
    width:15%;
    height: 100%;
  }
  .menu{
    color:white;
  }
  </style>
</head>
<body class="grey lighten-2">
  
  <nav class="z-depth-2 #689f38 light-green darken-2" role="navigation">
    <div class="nav-wrapper container">
      <img src="../../img/logo.jpg" id="logo">
      <ul id="nav-mobile" class="right hide-on-med-and-down" class="menu">
        <li><a href="rest/create.php" class="menu"><i class="material-icons left">card_membership</i>Becas</a></li>
        <li><a href="rest/index.php" class="menu"><i class="material-icons left">school</i>Cursos</a></li>
        <li><a href="../../index.html" class="menu"><i class="material-icons left">card_giftcard</i >Premios estatales</a></li>
          <li><a href="../../index.html" class="menu"><i class="material-icons left">monetization_on</i >Financiamiento</a></li>
          <li><a href="rest/create.php" class="menu"><i class="material-icons left">person_pin</i>Mi Perfil</a></li>
          <li><a href="../../index.html" class="menu"><i class="material-icons right">directions_run</i >Cerrar sesión</a></li>

          </ul>
        </div>
      </nav>

      <br><br><br>
      <div class="container">
        <div class="row">
          <div class="col m12">
            <div class="card-panel #689f38 light-green darken-2"  id="contenedor">
              <H3 align="center" class="white-text" id="botones">Bienvenido</H3>
              <div class="row">
                <div class="col m6">
                  <a href="rest/create.php">
                    <div class="card-panel white accent-4 center">
                      <h4 class="black-text">Becas</h4>
                      <i class="material-icons center" style="font-size: 100px; color: black;">
                        card_membership</i>
                      </div>
                    </a>
                  </div>
                  <div class="col m6">
                    <a href="rest/index.php">
                      <div class="card-panel white accent-4 center">
                        <h4 class="black-text">Cursos</h4>
                        <i class="material-icons center" style="font-size: 100px; color: black;">school</i>
                      </div>
                    </a>
                  </div>
                  <div class="col m6">
                    <a href="rest/index.php">
                      <div class="card-panel white accent-4 center">
                        <h4 class="black-text">Premios estatales</h4>
                        <i class="material-icons center" style="font-size: 100px; color: black;">card_giftcard</i>
                      </div>
                    </a>
                  </div>
                  <div class="col m6">
                    <a href="rest/index.php">
                      <div class="card-panel white accent-4 center">
                        <h4 class="black-text">Financiamiento</h4>
                        <i class="material-icons center" style="font-size: 100px; color: black;">monetization_on</i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </body>
        <script type="text/javascript">
        </script>
        </html>
