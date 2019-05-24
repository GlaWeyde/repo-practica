<?php
	require_once 'register-login-controller.php';

	$pageTitle = 'Home';
	require_once 'partials/head.php';
?>

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
