<?php
	require "php/connection.php";

    $id=$_GET['id'];

    $del="DELETE FROM `audio` WHERE id='$id'";

    $deleted=mysqli_query($con, $del);

    if ($deleted) {
        header("location:songsAdmin.php");
    }
    
?>