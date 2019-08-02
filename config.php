<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','cruduser');
define('DB_PASSWORD','passwordcrud');
define('DB_NAME','crud');

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli === false){
	die("Error connecting. " . $mysqli->connect_error);
}

?>
