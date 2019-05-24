<nav class="navbar navbar-expand-lg">
	<img src="images/logo.jpg" alt="logotipo" class="logo" width="60px" height="80px">
		<h1 style="margin:20px" class="titulo-del-logo">Dandelion</h1>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div style="margin:20px" class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
				<li class="nav-item"><a class="nav-link" href="about.php">Sobre Nosotros</a></li>
				<li class="nav-item"><a class="nav-link" href="faqs.php">Preguntas Frecuentes</a></li>
			</ul>
			<ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
							<?php if ( !isLogged() ) : ?>
								<li class="nav-item"><a class="nav-link" href="register.php">Registrarse</a></li>
								<li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesion</a></li>
							<?php else: ?>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="data/avatars/<?= $_SESSION['userLoged']['avatar']; ?>" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 5px;">
										<?= $_SESSION['userLoged']['name'] ?>
									</a>
									<div class="dropdown-menu" aria-labelledby="dropNavBar">
										<a class="dropdown-item" href="profile.php">Mi perfil</a>
										<a class="dropdown-item" href="logout.php">Salir</a>
									</div>
								</li>
							<?php endif ?>
						</ul>

		<div class="login">
		<!--	<form class="register-form" action="registro-php" method="post">
				<button style="margin:10px" type="submit" class="btn btn-light btn btn-md">Registrarse</button>
			</form>
			<button style="margin:10px" type="button" class="btn btn-light btn btn-md">Iniciar Sesión</button>
		</div> -->
	</div>
</nav>
