<?php
	require_once 'AutoLoad.php';

	$pageTitle = 'Inicio';
	require_once 'partials/head.php';
?>
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



      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<?php require_once 'partials/footer.php'; ?>
  </body>
</html>
