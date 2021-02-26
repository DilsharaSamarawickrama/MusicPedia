<?php
	require ("php/connection.php");

	$id=$_GET['id'];

	$sql1="select * from buyAudio where id='$id'";

	$result=mysqli_query($con,$sql1);
    
    if (mysqli_num_rows($result)>0) {
        while ($itm=mysqli_fetch_assoc($result)) {
        	$title=$itm['title'];
        	$image=$itm['image'];
            $artist=$itm['artist'];
            $album=$itm['album'];
            $year=$itm['year'];
            $lang=$itm['language'];
            $cat=$itm['category'];
            $path=$itm['path_name'];
            $price=$itm['price'];

            $sql="insert into audio(title, image, artist, album, year, language, category, path_name, price) values('$title', '$image', '$artist', '$album', '$year', '$lang', '$cat', '$path', '$price')";

            

            $res=mysqli_query($con,$sql);

            if ($res) {
                 header("location:newSong.php");
            }
        }
    }
?>