<?php
	require "php/connection.php";

    $id=$_GET['id'];

    $del="DELETE FROM `user` WHERE id='$id'";

    $deleted=mysqli_query($con, $del);

    if ($deleted) {
        header("location:users.php");
    }
    
?>