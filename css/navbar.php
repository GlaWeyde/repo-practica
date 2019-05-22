<?php
	require_once 'register-login-controller.php';

	$pageTitle = 'Home';
	require_once 'partials/head.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles-nuevo.css">
		<style>@import url('https://fonts.googleapis.com/css?family=Baloo+Bhai');</style>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">

  </head>


<body>

	<header>
		<nav class="navbar navbar-expand-lg">
		  <img src="images/logo.jpg" alt="logotipo" class="logo" width="60px" height="80px">
				<h1 style="margin:20px" class="titulo-del-logo">Dandelion</h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div style="margin:20px" class="collapse navbar-collapse" id="navbarText">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">About</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Preguntas Frecuentes</a>
			      </li>
			    </ul>

				<!--<div class="login">
					<form class="register-form" action="registro-php" method="post">
						<button style="margin:10px" type="submit" class="btn btn-light btn btn-md">Registrarse</button>
					</form>
					<button style="margin:10px" type="button" class="btn btn-light btn btn-md">Iniciar Sesión</button>
				</div>
		  </div>
		</nav>
	</header>
<!-- acá arranca el banner carrousel-->


<div class="bs-example">
<div class="row">
	<div class="col-12">


			<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Carousel indicators -->
							<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<!-- Wrapper for carousel items -->
							<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="absolute-div">
											<div class="carousel-caption">
												<h2 class="textito">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
											</div>
										</div>
											<img class="d-block w-100" src="images/foto1.jpg" alt="First Slide">
									</div>
									<div class="carousel-item">
											<img src="images/foto2.jpg" alt="Second Slide">
									</div>
									<div class="carousel-item">
											<img src="images/foto3.jpg" alt="Third Slide">
									</div>
							</div>
							<!-- Carousel controls -->
							<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
									<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#myCarousel" data-slide="next">
									<span class="carousel-control-next-icon"></span>
							</a>
					</div>
			</div>
		</div>
	</div>




<!-- footer -->
	<div class="card text-center">
	<div class="card-body">
		<h5 class="card-title">Contacto: <br> <img src="images/envelope.png" alt="e-mail"> dandelion@gmail.com <br> <img src="images/phone-call.png" alt="telefono"> (011) 4456-8756 <br> <img src="images/placeholder.png" alt="ubicacion"> Armenia 2387, Palermo </h5>
		<p class="card-text">Somos una empresa que busca ayudar a regalar. Confia en nosotros!</p>
		<a href="#" class="btn btn-light"> Mirá los intereses!</a>
	</div>
	<div class="card-footer text-muted">
	</div>
	</div>

  <?php require_once 'partials/footer.php'; ?>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</div>
</body>
</html>
