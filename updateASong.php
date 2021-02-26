<?php
	require("php/connection.php");

    if (isset($_POST['update'])) {
        $title=$_POST['title'];
        $artist=$_POST['artist'];
        $album=$_POST['album'];
        $year=$_POST['year'];
        $price=$_POST['price'];
        $id=$_POST['id'];

        $sql="update audio set title='$title', artist='$artist', album='$album', year='$year', price='$price' where id='$id'";

        $result=mysqli_query($con, $sql);

        if ($result) {
            header("location:songsAdmin.php");
        }
    }
?>