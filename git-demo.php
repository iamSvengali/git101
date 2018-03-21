<?php

// Creates an SQL Database connection
function CONNECT($server, $user, $password, $database){

	$connection = new mysqli($server, $user, $password, $database); // establishes connection
	if ($connection->connect_error) die($cn->connect_error); // tests connection

	return $connection;

}

?>