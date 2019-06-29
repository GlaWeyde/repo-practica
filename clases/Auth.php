<?php

class Auth
{

  public function __construct(DB $DB)
  {
    session_start();
    // Si está la cookie almacenada y si NO está logueda la persona:
    if ( isset($_COOKIE['userLogedEmail']) && !$this->isLogged() ) {
      // Busco al usuario por el email que tengo almacenado en la cookie
      $theUser = $DB->getUserByEmail($_COOKIE['userLogedEmail']);

      // Guardo en sesión al usuario que busqué anteriormente
      $_SESSION['userLoged'] = $theUser;
    }
  }

  public function login(User $theUser) {
// Guardo en sesión al usuario que recibo por parámetro OBJETO de tipo USUARIO
    $_SESSION['userLoged'] = $theUser;

// Redirecciono al perfil del usuario
  header('location: profile.php');
    exit; // Siempre, después de una redirección se recomienda hacer un exit.
  }


// Función para saber si está logueado la/el usuaria/o
  public function isLogged() {
// El return devuelve true o false, según lo que retorne la función isset()
    return isset($_SESSION['userLoged']);
  }
}
