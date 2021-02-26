<?php
	require "php/connection.php";

    $id=$_GET['id'];

    $del="DELETE FROM `cart` WHERE song_id='$id'";

    $deleted=mysqli_query($con, $del);

    if ($deleted) {
        header("location:cart.php");
    }  
?>