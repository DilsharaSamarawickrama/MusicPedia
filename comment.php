<?php
	require("php/connection.php");
	session_start();

    if (isset($_POST['pst'])) {
        $cmt=$_POST['cmt'];

        $id=1;

        if (isset($_SESSION['email'])) {
            $name=$_SESSION['name'];
            $email=$_SESSION['email'];

            $sql="insert into comment(songId, comment, name, email) values('$id', '$cmt', '$name', '$email')";
        }
        else{
            $name="Unknown";
            $email="Unknown";
            $sql="insert into comment(songId, comment, name, email) values('$id', '$cmt', '$name', '$email')";
        }

        $result=mysqli_query($con, $sql);

        if ($result) {
            header("location:songs.php");
        }
    }
?>