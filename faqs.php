<?php
require_once 'AutoLoad.php';


	$pageTitle = 'Home';
	require_once 'partials/head.php';
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dande Lion - Faqs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css?family=Rancho');</style>
    <link rel="stylesheet" href="css/styles-nuevo.css">
    <title>Acerca de Nosotros</title>
  </head>

  <body>

		<header>
			<?php require_once 'partials/navbar.php';?>
		</header>

	      <!--<div class="container-fluid">
      <header class="row main-header align-items-center">
       logo: buscar imagen para logo
    <div class="col-1">
        <img src="images/logo.jpg" alt="logotipo" class="logo" width="60px" height="80px">
        </div>
        <div class="col-6">
          <a href="#" class="toggle-nav">
            <span class="ion-navicon-round"></span>
          </a>
          <nav class="main-nav">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="about.php">Sobre Nosotros</a></li>
            </ul>
          </nav>
        </div>-->

            <!-- formularios para login <div class="col-5 login">
              <button type="button" class="btn btn-light btn-lg">Mi Cuenta</button>
              <button type="button" class="btn btn-light btn-lg">Registrarse</button>
              <button type="button" class="btn btn-light btn-lg">Iniciar Sesión</button>
            </div>-->



        <title>Dande Lion - Acerca de Nosotros</title>

     <div id="body">
       <div class="abajo">

       <div class="título">
           <p class="título"> ¿Cómo funciona? </p>
         </div>

         <div class="info">
           <p class="info"> Es simple. En nuestro navegador vas a elegir los intereses de la persona a la que quieras regalarle algo. La página te va a buscar todos los potenciales regalos que coincidan con los intereses que marcaste. Una vez elegido el regalo que querés, rellenás el casillero de dirección de la persona y listo! Tu regalo estará listo para ser entregado. </p>
       </div>

     </div>
     <div class="abajo">

     <div class="título">
         <p class="título"> ¿Cuánto demora en llegar mi regalo? </p>
       </div>

       <div class="info">
         <p class="info"> La demora de entrega puede variar de acuerdo a tu domicilio.</p>
     </div>

   </div>
   <div class="abajo">

   <div class="título">
       <p class="título"> ¿Qué métodos de envíos puedo usar? </p>
     </div>

     <div class="info">
       <p class="info"> El tipo de envío depende de la empresa con la que hayas contratado. Cada marca tiene sus propios métodos de envío. Lo importante es que siempre llega a tu casa!</p>
   </div>

 </div>
   </div>

   <!-- footer -->
     <?php require_once 'partials/footer.php'; ?>
  </body>
</html>
