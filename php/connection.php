<?php
	$host="localhost";
	$user="root";
	$pwd="";
	$database="musicpedia";

	$con=mysqli_connect($host, $user, $pwd, $database);

	if (!$con) {
		die("Error");
	}
?>