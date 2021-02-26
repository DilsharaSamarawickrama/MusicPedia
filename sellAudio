<?php
    session_start();

    require("php/connection.php");

    if (isset($_POST['upload'])) {
        $title=$_POST['title'];
        $artist=$_POST['artist'];
        $album=$_POST['album'];
        $year=$_POST['year'];
        $lang=$_POST['lang'];
        $type=$_POST['type'];
        $price=$_POST['price'];
        $img=addslashes(file_get_contents($_FILES['img']['tmp_name']));
        $email=$_SESSION['email'];

        $path="audio\\";

        $target_path=$path.basename($_FILES['mp3']['name']);

        if ($title==null || $artist==null || $album==null || $year==0 || $lang==null || $type==0 || $img==null || $price==0) {
            echo "<p>Please fill all the fields!</p>";
        }
        else
        {
            move_uploaded_file($_FILES['mp3']['tmp_name'], $target_path);

            $pname=$_FILES['mp3']['name'];

            $sql="insert into buyAudio(title, image, artist, album, year, language, category, path_name, price, status, email) values('$title', '$img', '$artist', '$album', '$year', '$lang', '$type', '$pname', '$price', 1, '$email')";

            $result=mysqli_query($con,$sql);

            if ($result) {
                 header("location:sellSongs.php");
            }


        }
    }
?>