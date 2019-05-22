<?php
	require_once 'register-login-controller.php';

	$pageTitle = 'Home';
	require_once 'partials/head.php';
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dande Lion - About</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css?family=Rancho');</style>
    <link rel="stylesheet" href="styles-nuevo.css">

  </head>
  <body>
  	<header>

			<?php require_once 'partials/navbar.php'; ?>
  <!--  <div class="container-fluid">
      <header class="row main-header align-items-center">
        logo: buscar imagen para logo -->
        <!--<div class="col-1">
            <img src="images/logo.jpg" alt="logotipo" class="logo" width="60px" height="80px">
        </div>
        <div class="col-2">
          <h1 class="titulo-del-logo">Dandelion</h1>
        </div>
        <div class="col-5">
          <a href="#" class="toggle-nav">
            <span class="ion-navicon-round"></span>
          </a>
          <nav class="main-nav">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="faqs.php">Preguntas Frecuentes</a></li>
            </ul>
          </nav>
        </div> -->

            <!-- formularios para login -->
         <!--<div class="col-4 login">
            <button type="button" class="btn btn-light btn btn-lg">Registrarse</button>
            <button type="button" class="btn btn-light btn btn-lg">Iniciar Sesión</button>
          </div> -->
      </header>

  <br>

  <div class="sobre-nosotros">
  <p class="letra-about">  En Dandelion creemos que dar un regalo es un arte y es la mejor forma de demostrar el afecto por la persona que queremos, es por eso que creamos un sitio donde a través de una simple búsqueda por intereses se puede encontrar el regalo perfecto. Así de simple, como cuando soplamos un Diente de León.
  </p>
</div>

    <div class="row video align-items-center">

      <div class="col-12">

      <video src="videos/Morethan.mp4" poster="morethan.mp4" controls>
      </video>
      </div>

    </div>

    <?php require_once 'partials/footer.php'; ?>
  </body>
</html>
