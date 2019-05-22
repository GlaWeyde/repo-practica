<?php
	require_once 'register-login-controller.php';

	$pageTitle = 'Inicio';
	require_once 'partials/head.php';
?>

<?php require_once 'partials/navbar.php'; ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dandelion - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css?family=Rancho');</style>
		<link rel="stylesheet" href="css/styles-nuevo.css">
    <style>
    .carousel{
        background: #2f4357;
        margin-top: 20px;
    }
    .carousel-item{
        text-align: center;
        min-height: 140px; /* Prevent carousel from being distorted if for some reason image doesn't load */
    }
    .bs-example{
    	margin: 20px;
    }
    </style>
  </head>

  <body>

		<header>

	<?php require_once 'partials/navbar.php'; ?>

		</header>

            <!-- acá arranca el banner con carrousel -->
      <div class="bs-example">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="col-12">

                    <!-- Carousel indicators -->
           <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/foto1.jpg" alt="First Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="images/foto2.jpg" alt="Second Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="images/foto3.jpg" alt="Third Slide">
                        </div>
												<div class="carousel-item">
                            <img src="images/foto4.jpg" alt="Fourth Slide">
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

						<ul>
                  <li><a href="about.php">Sobre Nosotros</a></li>
                  <li><a href="faqs.php">Preguntas Frecuentes</a></li>
                </ul>

			<?php require_once 'partials/footer.php'; ?>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  </body>
</html>
