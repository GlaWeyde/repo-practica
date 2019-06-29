<?php
require_once 'config.php';
require_once 'clases/Validator.php';
require_once 'clases/RegisterValidator.php';
require_once 'clases/LoginValidator.php';
require_once 'clases/SaveImage.php';
require_once 'clases/User.php';
require_once 'clases/DB.php';
require_once 'clases/DBJson.php';
require_once 'clases/Auth.php';


$DB = new DBJson ('users.json');
$Auth = new Auth($DB);
