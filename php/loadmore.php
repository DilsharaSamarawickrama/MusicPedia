<?php
    require("connection.php");

    $curr_Items = $_GET["current_count"];

    $sql="select * from audio limit $curr_Items,8 ";

    $result=mysqli_query($con,$sql);

    if (mysqli_num_rows($result)>0) {
        while ($row=mysqli_fetch_assoc($result)) {
            $title=$row['title'];
            $artist=$row['artist'];
            $album=$row['album'];
            $year=$row['year'];
            $lang=$row['language'];
            $type=$row['category'];

            $query="select category from category where id='$type'";

            $res=mysqli_query($con,$query);

            if (mysqli_num_rows($res)==1) {
                while ($output=mysqli_fetch_assoc($res)) {
                    $cat=$output['category'];
                }
            }

            echo '<div class="col-24  col-md-6 col-lg-3">';
                echo '<div class="single-album-area wow fadeInUp" data-wow-delay="100ms">';
                    echo '<div class="album-thumb">';
                    echo '<div class="album-info">';
                        echo "<p>$title - $artist</p>";
                    echo '</div>';
                
                        echo '<div class="flip-card">';
                            echo '<div class="flip-card-inner">';
                                echo '<div class="flip-card-front">';
                                    echo "<img class='d-block img-fluid' src='data:image/jpeg;base64,".base64_encode( $row['image'] )."'>";
                                echo '</div>';
                                echo '<div class="flip-card-back">';
                                    echo "<p>Title: $title</p>";
                                    echo "<p>Artist: $artist</p>";
                                    echo "<p>Album: $album</p>";
                                    echo "<p>Year: $year</p>";
                                    echo "<p>Language: $lang</p>";
                                    echo "<p>Category: $cat</p>";
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<br>';
                        echo '<div class="now-playing d-flex flex-wrap align-items-center justify-content-between">';
                            echo '<audio preload="auto" controls style="background-color: #ffffff;">';
                                echo '<source src="audio/'.$row['path_name'].'">';
                            echo '</audio>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }
?>