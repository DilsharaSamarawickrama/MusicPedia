<?php
    session_start();
    require ("php/connection.php");
    include "header.php";
?>

<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/pics/img48.jpg);">
    <section class="newsletter-testimonials-area">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading white">
                                <p>Editable</p>
                                <h2>Songs</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:75em; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; ">
                    <div class="bradcumbContent">
                        <h2 style="color:White;">New Song List</h2>
                    </div>
                    <div class="scroll" style="overflow-x: hidden; overflow-x: auto; max-height: 50rem;">
                        <section class="contact-area mt-20 section-padding-100-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-24 col-lg-12">
                                        <div class="contact-content mb-100">
                                            <div class="row oneMusic-albums">

                                                <?php
                                                    $sql="SELECT * FROM `buyAudio` order by id desc";

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
                                                                                        echo "<a href='buyNewSongs.php?id=$id'><button class='btn-search oneMusic-btn mt-15' name='buy'>Buy</button></a>";
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

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<?php
    include "footer.php";
?>