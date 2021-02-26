<?php
    $sql="select * from comment order by id desc limit 10";

    $res=mysqli_query($con,$sql);
    
    echo '<div class="col-12" style="display:none;" id="cmnt">';
        if ($res) {
            while ($result=mysqli_fetch_assoc($res)) {
                $cmt=$result['comment'];
                $name=$result['name'];
                $email=$result['email'];

                echo '<div class="single-song-area mb-30 d-flex flex-wrap align-items-end">';
                    echo '<div class="song-play-area">';
                        echo "<table style='width:100%;'>";
                            echo "<tr>";
                                echo "<td>";
                                    echo '<div class="song-name">';
                                        echo '<p><i><b>'.$name.': '.$email.'</b></i></p>';
                                        echo '<p>'.$cmt.'</p>';
                                    echo '</div>';
                                echo "</td>";
                            echo "</tr>";
                        echo "</table>";
                    echo "</div>";
                echo "</div>";
    
            }
        }
    echo "</div>";       
?>