<?php




class DbJson extends DB
	{
		private $dbName;
		public function __construct($dataBaseName)
		{
			$this->dbName = $dataBaseName;
		}

  public function generateID ()
  {
    // Traigo a todos los usuarios
    $allUsers = $this->getAllUsers();

    // Si el conteo del array de usuarios es igual a cero
    if ( count($allUsers) == 0 ) {
      return 1;
    }

    // Si el conteo del array de usuarios es superior a cero, obtengo el último usuario registrado
    $lastUser = array_pop($allUsers);

    // Retorno el ID del último usuario registrado + 1
    return $lastUser['id'] + 1;
  }

  public function getAllUsers(){
    // Obtengo el contenido del archivo JSON
		$fileContent = file_get_contents(USERS_JSON_PATH . $this->dbName);

		// Decodifico el JSON a un array asociativo, importante el "true"
		$allUsers = json_decode($fileContent, true);

		// Retorno el array de usuarios
		return $allUsers;
  }

	$servername = "mysql:host=localhost;db_name=myecommerce;port=3306";
	$username = "root";
	$password = "root";
	//creo la conexion con la base de datos
	try {
	    $conex = new PDO($servername, $username, $password);
	} catch (PDOException $e) {
	    echo $e; exit;
	}
	$query2 = $conex->query('SELECT * FROM usuarios');
	$resultado = $query2->fetchAll(PDO::FETCH_ASSOC);
	var_dump($resultado);
	exit;

  public function saveUser(User $oneUser){
 // Obtengo todos los usuarios
    $allUsers = $this->getAllUsers();

		// Trimeamos los valores que vinieron por $_POST
		$_POST['name'] = trim($_POST['name']);
		$_POST['email'] = trim($_POST['email']);
		// Hasheo el password del usuario
		$_POST['password'] = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
		// Genero el ID y lo guardo en una posición de $_POST llamada "id"
		$_POST['id'] = generateID();
		// Elimino de $_POST la posición "rePassword" ya que no me interesa guardar este dato en mi DB (Data Base)
		unset($_POST['rePassword']);
		$finalImg = saveImage();
		$nombre = $_POST['name'];
		$email= $_POST['email'];
		$password = $_POST ['password'];
		// $sql = "INSERT INTO usuarios ('nombre', 'e-mail', 'contraseña', 'avatar') VALUES ($nombre, $email, $password, $finalImg)";
	$sql = "INSERT INTO usuarios VALUES (default, '$nombre', null, '$email', '$password', '$finalImg')";
		$query = $conex->prepare($sql);
		$query->execute();
		var_dump($query);
		exit;
		// Retorno al usuario que acabo de guardar para poder tenerlo listo y loguearlo
		return $finalUser;


    // En la última posición del array de usuarios, inserto al usuario nuevo
    //$allUsers[] = $oneUser->getDataInArray();

    // Guardo todos los usuarios de vuelta en el JSON
  //  file_put_contents(USERS_JSON_PATH . $this->dbName, json_encode($allUsers));

    // Retorno al usuario que acabo de guardar para poder tenerlo listo y loguearlo
    //return $this->finalUser;
}

  public function emailExist($email){
    // Traigo a todos los usuarios
    $allUsers = $this->getAllUsers();

// Recorro el array de usuarios
    foreach ($allUsers as $oneUser) {
// Si la posición "email" del usuario en la iteración coincide con el email que pasé como parámetro
      if ($oneUser['email'] == $email) {
        return true;
      }

		}
// Si termino de recorrer el array y no se encontró al email que pasé como parámetro
    return false;
  }

  public function getUserByEmail($email){
			// Obtengo a todos los usuarios
			$allUsers = $this->getAllUsers();
			// Recorro el array de usuarios
			foreach ($allUsers as $oneUser) {
				// Si la posición email del usuario de esa iteración es igual al email que me pasan por parámetro
				if ($oneUser['email'] == $email) {
					// Instanciamos un Usuario
					$theUser = new User($oneUser['name'], $oneUser['email'], $oneUser['country'], $oneUser['avatar'], $oneUser['password']);
					$theUser->setId($oneUser['id']);
					return $theUser;
				}
			}
		}
	}
