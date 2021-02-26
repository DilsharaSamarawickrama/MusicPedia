<?php
	session_start();
    require("php/connection.php");
	$_SESSION['id']=$_GET['id'];

	if (isset($_SESSION['id'])) {
		header("location:updatingSong.php");
	}
?>