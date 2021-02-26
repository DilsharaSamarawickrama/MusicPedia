<?php

    require ("php/connection.php");

    $count=0;
    if (isset($_POST['all'])) {
         $sql="select * from audio order by id desc";
    }
    elseif (isset($_POST['a'])) {
         $sql="SELECT * FROM `audio` where title like 'a%'";
    }
    elseif (isset($_POST['b'])) {
         $sql="SELECT * FROM `audio` where title like 'b%'";
    }
    elseif (isset($_POST['c'])) {
         $sql="SELECT * FROM `audio` where title like 'c%'";
    }
    elseif (isset($_POST['d'])) {
         $sql="SELECT * FROM `audio` where title like 'd%'";
    }
    elseif (isset($_POST['e'])) {
         $sql="SELECT * FROM `audio` where title like 'e%'";
    }
    elseif (isset($_POST['f'])) {
         $sql="SELECT * FROM `audio` where title like 'f%'";
    }
    elseif (isset($_POST['g'])) {
         $sql="SELECT * FROM `audio` where title like 'g%'";
    }
    elseif (isset($_POST['h'])) {
         $sql="SELECT * FROM `audio` where title like 'h%'";
    }
    elseif (isset($_POST['i'])) {
         $sql="SELECT * FROM `audio` where title like 'i%'";
    }
    elseif (isset($_POST['j'])) {
         $sql="SELECT * FROM `audio` where title like 'j%'";
    }
    elseif (isset($_POST['k'])) {
         $sql="SELECT * FROM `audio` where title like 'k%'";
    }
    elseif (isset($_POST['l'])) {
         $sql="SELECT * FROM `audio` where title like 'l%'";
    }
    elseif (isset($_POST['m'])) {
         $sql="SELECT * FROM `audio` where title like 'm%'";
    }
    elseif (isset($_POST['n'])) {
         $sql="SELECT * FROM `audio` where title like 'n%'";
    }
    elseif (isset($_POST['o'])) {
         $sql="SELECT * FROM `audio` where title like 'o%'";
    }
    elseif (isset($_POST['p'])) {
         $sql="SELECT * FROM `audio` where title like 'p%'";
    }
    elseif (isset($_POST['q'])) {
         $sql="SELECT * FROM `audio` where title like 'q%'";
    }
    elseif (isset($_POST['r'])) {
         $sql="SELECT * FROM `audio` where title like 'r%'";
    }
    elseif (isset($_POST['s'])) {
         $sql="SELECT * FROM `audio` where title like 's%'";
    }
    elseif (isset($_POST['t'])) {
         $sql="SELECT * FROM `audio` where title like 't%'";
    }
    elseif (isset($_POST['u'])) {
         $sql="SELECT * FROM `audio` where title like 'u%'";
    }
    elseif (isset($_POST['v'])) {
         $sql="SELECT * FROM `audio` where title like 'v%'";
    }
    elseif (isset($_POST['w'])) {
         $sql="SELECT * FROM `audio` where title like 'w%'";
    }
    elseif (isset($_POST['x'])) {
         $sql="SELECT * FROM `audio` where title like 'x%'";
    }
    elseif (isset($_POST['y'])) {
         $sql="SELECT * FROM `audio` where title like 'y%'";
    }
    elseif (isset($_POST['z'])) {
         $sql="SELECT * FROM `audio` where title like 'z%'";
    }
    else{
        $sql="SELECT * FROM `audio` order by id desc";
    }
    
    $result=mysqli_query($con,$sql);
     if (mysqli_num_rows($result)>0) {
        while ($itm=mysqli_fetch_assoc($result)) {
            $title=$itm['title'];
            $artist=$itm['artist'];
            $price=$itm['price'];
            $id=$itm['id'];
            
             echo '<div class="col-12">';
                echo '<div class="single-song-area mb-30 d-flex flex-wrap align-items-end">';
                    echo '<div class="song-thumbnail">';
                        echo "<img src='data:image/jpeg;base64,".base64_encode( $itm['image'] )."'>";
                    echo '</div>';
                    echo '<div class="song-play-area">';

                        echo "<table style='width:100%;text-align:center;'>";
                            echo "<tr>";
                                echo "<th>";
                                    echo '<div class="song-name">';
                                        echo '<p>Title</p>';
                                    echo '</div>';
                                 echo "</th>";
                                  echo "<th>";
                                    echo '<div class="song-name">';
                                        echo '<p>Artist</p>';
                                    echo '</div>';
                                 echo "</th>";
                                  echo "<th>";
                                    echo '<div class="song-name">';
                                        echo '<p>Song</p>';
                                    echo '</div>';
                                 echo "</th>";
                                  echo "<th>";
                                    echo '<div class="song-name">';
                                        echo '<p>Price</p>';
                                    echo '</div>';
                                 echo "</th>";
                                 if (isset($_SESSION['email'])) {
                                     
                                 }
                                 else{
                                    echo "<th>";
                                        echo '<div class="song-name">';
                                            echo '<p>To Buy</p>';
                                        echo '</div>';
                                     echo "</th>";
                                 }
                            echo "</tr>";

                             echo "<tr>";
                                 echo "<th>";
                                    echo '<div class="song-name">';
                                        echo '<p>'.$title.'</p>';
                                    echo '</div>';
                                 echo "</th>";
                                 echo "<th>";
                                    echo '<div class="song-name">';
                                        echo '<p>'.$artist.'</p>';
                                    echo '</div>';
                                 echo "</th>";
                                echo "<th>";
                                     echo '<audio preload="auto" controls >';
                                        echo '<source src="audio/'.$itm['path_name'].'">';
                                    echo '</audio>';
                                echo "</th>";
                                echo "<th>";
                                    echo '<div class="song-name">';
                                        echo '<p>'.$price.'$</p>';
                                    echo '</div>';
                                echo "</th>";
                                echo "<th>";
                                    echo '<div class="song-name">';
                                        echo "<a href='updatingSong.php?id=$id'><button class='btn-search oneMusic-btn mt-15' name='update'>Update</button></a>";
                                    echo '</div>';
                                echo "</th>";
                                echo "<th>";
                                    echo '<div class="song-name">';
                                        echo "<a href='delete.php?id=$id'><button class='btn-search oneMusic-btn mt-15' type='submit' name='delete'>Delete</button></a>";
                                    echo '</div>';
                                echo "</th>";
                            echo "</tr>";
                        echo "</table>";

                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }
?>