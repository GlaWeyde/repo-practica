<?php
class RegisterValidator extends Validator
{
  private $name;
  private $email;
  private $password;
  private $rePassword;
  private $country;
  private $avatar;

  public function __construct ()
  {
    $this->name = isset ($_POST['name']) ? trim($_POST['name']) : null;
    $this->email = isset ($_POST['email']) ? trim($_POST['email']) : null;
    $this->password = isset ($_POST['password']) ? trim($_POST['password']) : null;
    $this->rePassword = isset ($_POST['rePassword']) ? trim($_POST['rePassword']) : null;
    $this->country = isset ($_POST['country']) ? trim($_POST['country']) : null;
    $this->avatar = isset ($_FILES['avatar']) ? ($_FILES['avatar']) : null;
  }

public function isValid()
{
  // Si está vació el atributo: $name
  if ( empty($this->name) ) {
    $this->setError ('name', 'El campo nombre no puede estar vacío');
  }
  elseif ( !preg_match('/^[a-zA-Z -]+$/ ', $this->name) ) {
    $this->setErrors ('name' , 'El campo nombre no puede contener numeros');
  }

  // Si está vació el atributo: $email
  if ( empty($this->email) ) {
    $this->setError ('email', 'El campo email es obligatorio');
  } elseif ( !filter_var($this->email, FILTER_VALIDATE_EMAIL) ) { // Si el atributo $email NO es un formato de email válido
    $this->setError('email', 'Introducí un formato de email válido');

//  } elseif ( emailExist($this->email) ) { // Si el email ya existe, es porque alguien ya se registró con el mismo
  //  $this->setErrors ('email' , 'Ese correo ya está registrado');
  }

// Si está vacio el atributo: $password
  if ( empty($this->password) ) {
    $this->setError ('password' , 'El campo contraseña es obligatorio');
  } elseif (strlen ($this->password) < 5) {
    $this->setError('password' , "La contraseña debe tener al menos 5 carateres");
  } elseif ( !preg_match("/DH/", $this->password) ) {
    $this->setError ('password' , "La contraseña debe contener las letras DH");
  }

  // Si está vació el atributo: $rePassword
  if ( empty($this->rePassword) ) {
    $errors['rePassword'] = 'El campo repetir password es obligatorio';
    $this->setError ('rePassword', 'El campo repetir contraseña es obligatorio');
  } elseif ($this->password != $this->rePassword) { // Si el valor de los atributos $password y $rePassword son distintos
    $this->setError('password', 'Las contraseñas no coinciden');
    $this->setError('rePassword' , 'Las contraseñas no coinciden');
  }

// Si el atributo country esta vacio
  if ( empty ($this->country)) {
    $this->setError('country' , 'Eligí un país');
  }


// Si no cargaron ningún archivo
  if ( $this->avatar['error'] != UPLOAD_ERR_OK ) {
    $this->setError('avatar' , 'Subí una imagen');
  } else {
// Si cargaron algún archivo, obtengo su extensión
    $ext = pathinfo($this->avatar['name'], PATHINFO_EXTENSION);

    // Si la extesión del archivo que cargaron NO está en mi array de formatos permitidos
    if ( !in_array($ext, ALLOWED_IMAGE_FORMATS) ) {
      $this->setError('avatar' , 'Los formatos permitidos son JPG, PNG y GIF');
    }
  }

// retorno los errores ara ver si todo es valido
  return empty ($this->getAllErrors());
}
public function getName ()
  {
   return $this->name;
  }
public function getEmail ()
  {
   return $this->email;
  }
public function getCountry ()
  {
    return $this->country;
  }

}
 ?>
