<?php
require_once 'AutoLoad.php';



//Si la persona esta logueada la redirijo al profile

	if ($Auth->isLogged() ) {
	header('location: profile.php');
	exit;
	}

	$registerValidator = new RegisterValidator;

	//	$errorsInRegister = [];

	// Variables para persitir
//	$name = '';
	//$email = '';
	//$countryFromPost = '';

	if ($_POST) {

		if ($DB->emailExist($_POST['email'])) {
			$registerValidator->setError ('email' , 'Ese correo ya se encuentra registrado');
		}

		// Si no hay errores en el registro
		// Cuando no hay errores guardo la imagen y los datos
		// if ( count($errorsInRegister) == 0 ) {
		if ( $registerValidator->isValid() ) {

// Guardo la imagen y obtengo el nombre aleatorio creado
		SaveImage::uploadImage ($_FILES['avatar']);
	 }

//instancio al usuario
	$user = new User ($_POST['name'], $_POST ['email'], $_POST ['country'], SaveImage::$avatarName);
	$user->setId ($DB->generateID());
	$user->setPassword($_POST['password']);

//$_POST['avatar'] = SaveImage::$avatarName;

// Guardo al usuario en el archivo JSON, y me devuelve al usuario que guardó en array
	$DB->saveUser($user);

// Al momento en que se registar vamos a mantener la sesión abierta
	setcookie('userLogedEmail', $user->getEmail(), time() + 3000);

// Logueo al usuario
	$Auth->login($theUser);
	}

		$countries = [
			'ar' => 'Argentina',
			'bo' => 'Bolivia',
			'br' => 'Brasil',
			'co' => 'Colombia',
			'cl' => 'Chile',
			'ec' => 'Ecuador',
			'pa' => 'Paraguay',
			'pe' => 'Perú',
			'uy' => 'Uruguay',
			've' => 'Venezuela',
		];

	$pageTitle = 'Register';
	require_once 'partials/head.php';

	require_once 'partials/navbar.php';
?>
<br>

<div class= "container" style= "margin-top:30px; margin-bottom:30px;">
	<div class= "row justify-content-center">
		<div class="col-md-10">
			<?php if ($_POST && $registerValidator->isValid() == false) : ?>
				<div class="alert alert-danger">
					<ul>
						<?php foreach ($registerValidator->getAllErrors() as $oneError): ?>
							<li><?php echo $oneError; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
		<?php endif; ?>

	<h2>Formulario de registro</h2>
			<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label><b>Nombre completo:</b></label>
							<input
								type="text"
								name="name"
								class="form-control <?= $registerValidator->hasError('name') ? 'is-invalid' : null ?>"
								value="<?= $registerValidator->getName(); ?>"
								>
								<div class="invalid-feedback">
          				<?= $registerValidator->hasError('name') ? $registerValidator->getError('name') : null ?>
        				</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Correo electrónico:</b></label>
								<input
									type="text"
									name="email"
									class="form-control <?= $registerValidator->hasError('email') ? 'is-invalid' : null ?>"
									value="<?= $registerValidator->getEmail(); ?>"
								>
								<div class="invalid-feedback">
          				<?= $registerValidator->hasError('email') ? $registerValidator->getError('email') : null; ?>
        				</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Contraseña:</b></label>
								<input
									type="password"
									name="password"
									class="form-control <?= $registerValidator->hasError('password') ? 'is-invalid' : null ?>">

								<div class="invalid-feedback">
          				<?= $registerValidator->hasError('password') ? $registerValidator->getError('password') : null; ?>
        				</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Repetir contraseña:</b></label>
								<input
									type="password"
									name="rePassword"
									class="form-control <?= $registerValidator->hasError('rePassword') ? 'is-invalid' : null; ?>"
								>
								<div class="invalid-feedback">
          				<?= $registerValidator->hasError('rePassword') ? $registerValidator->getError('rePassword') : null; ?>
        				</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>País de nacimiento:</b></label>
								<select
									name="country"
									class="form-control <?= $registerValidator->hasError('country') ? 'is-invalid' : null; ?>"
								>
									<option value="">Elegí un país</option>
									<?php foreach ($countries as $code => $country): ?>
										<option
											value="<?= $code ?>"
											<?= $code == $registerValidator->getCountry() ? 'selected' : null; ?>
										>
											<?= $country ?>
										</option>
									<?php endforeach; ?>
								</select>
								<div class="invalid-feedback">
          				<?= $registerValidator->hasError('country') ? $registerValidator->getError('country') : null; ?>
        				</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Imagen de perfil:</b></label>
								<div class="custom-file">
									<input
										type="file"
									 	name="avatar"
										class="custom-file-input <?= $registerValidator->hasError('avatar') ? 'is-invalid' : null; ?>"
									>
									<label class="custom-file-label">Elige una foto</label>
									<div class="invalid-feedback">
	          				<?= $registerValidator->hasError('avatar') ? $registerValidator->getError('avatar') : null; ?>
	        				</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Registrarse</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<!-- //Register-Form -->
<?php require_once 'partials/footer.php'; ?>
