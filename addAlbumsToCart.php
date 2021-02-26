<?php
	session_start();
	require("php/connection.php");
    

    $album=$_GET['album'];
    $email=$_SESSION['email'];

    $songs="select id from audio where album='$album'";

    $song=mysqli_query($con, $songs);

    if ($song) {
        while ($row=mysqli_fetch_assoc($song)) {
        	$id=$row['id'];

        	 $add="insert into cart(song_id,email) values('$id','$email')";

        	 $added=mysqli_query($con, $add);

		    if ($added) {
		        header("location:albums.php");
		    }
        }
    }
?>