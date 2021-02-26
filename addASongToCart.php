<?php
	session_start();
	require("php/connection.php");
    

    $id=$_GET['id'];
    $email=$_SESSION['email'];

    $add="insert into cart(song_id,email) values('$id','$email')";

    $added=mysqli_query($con, $add);

    if ($added) {
        header("location:albums.php");
    }
?>