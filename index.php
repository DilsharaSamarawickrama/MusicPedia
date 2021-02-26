<?php
    session_start();
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter']=23327847389783;
    }
    else{
        $_SESSION['counter']++;
    }

    require("php/connection.php");
    include "header.php";
?>

<link rel="stylesheet" href="css/audio.css">
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/pics/img49.png);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Largest Music Encyclopedia</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">MusicPedia<span>MusicPedia</span></h2>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/pics/img47.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Huge Varieties of</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">Music<span>Music</span></h2>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/pics/img7.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Members</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">
                                <?php
                                    echo $_SESSION['counter'];
                                ?>
                                <span>
                                    <?php
                                        echo $_SESSION['counter'];
                                    ?>
                                </span>
                            </h2>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Latest Albums Area Start ##### -->
<section class="latest-albums-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>See what’s new</p>
                    <h2>Latest Albums</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">
                    
                    <?php

                        $albums="select * from album limit 10";

                        $results=mysqli_query($con, $albums);

                        if ($results) {
                            while ($row=mysqli_fetch_assoc($results)) {
                                echo '<div class="single-album">';
                                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="">';
                                    echo '<div class="album-info">';
                                        echo '<a href="#">';
                                            echo '<h5>'.$row['album'].'</h5>';
                                        echo '</a>';
                                    echo '</div>';
                                echo '</div>';       
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Latest Albums Area End ##### -->


<!-- ##### Featured Artist Area Start ##### -->
<section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="img/bg-img/fa.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <p>See what’s new</p>
                        <h2>Latest Song</h2>
                    </div>
                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>01. Main Hit Song</p>
                        </div>
                        <audio preload="auto" controls>
                            <source src="audio/dummy-audio.mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Featured Artist Area End ##### -->

<!-- ##### Miscellaneous Area Start ##### -->
<section class="miscellaneous-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- ***** Weeks Top ***** -->
            <div class="col-12 col-lg-4">
                <div class="weeks-top-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>Top Albums</h2>
                    </div>

                    <!-- Single Top Item -->
                    <?php
                        $sql="select * from album  limit 6";

                        $result=mysqli_query($con,$sql);

                        if (mysqli_num_rows($result)>0) {
                            while ($row=mysqli_fetch_assoc($result)) {
                                $album=$row['album'];
                                echo '<div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">';
                                echo "<a href='singleAlbum.php?album=$album'>";
                                    echo '<div class="thumbnail">';
                                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="">';
                                    echo '</div>';
                                echo "</a>";
                                    echo '<div class="content-">';
                                        echo '<h6>'.$album.'</h6>';
                                    echo '</div>';
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
            </div>

            <!-- ***** New Hits Songs ***** -->
            <div class="col-12 col-lg-4">
                <div class="new-hits-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>New Hits</h2>
                    </div>


                    <?php
                        $count=0;
                        $sql="select * from audio order by id desc limit 6";

                        $result=mysqli_query($con,$sql);

                        if (mysqli_num_rows($result)>0) {
                            while ($row=mysqli_fetch_assoc($result)) {
                                $title=$row['title'];
                                $artist=$row['artist'];
                                $album=$row['album'];
                                $id=$row['id'];

                                
                                    echo '<div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">';
                                        echo '<div class="first-part d-flex align-items-center">';
                                        echo "<a href='singleSong.php?id=$id'>";
                                            echo '<div class="thumbnail">';
                                                echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="">';
                                            echo '</div>';
                                            echo "</a>";
                                            echo '<div class="content-">';
                                                echo '<h6>'.$artist.'</h6>';
                                                echo '<p style="color:black;">'.$title.'</p>';
                                            echo '</div>';

                                        echo '</div>';
                                    echo '</div>';
                                
                            }
                        }
                    ?>
                </div>
            </div>

            <!-- ***** Popular Artists ***** -->
            <div class="col-12 col-lg-4">
                <div class="popular-artists-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>Popular Artist</h2>
                    </div>

                    <!-- Single Artist -->
                    <?php
                        $sql="select * from artist limit 6";

                        $result=mysqli_query($con,$sql);

                        if (mysqli_num_rows($result)>0) {
                            while ($row=mysqli_fetch_assoc($result)) {
                                $artist=$row['artist'];
                                echo '<div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">';
                                    echo '<div class="content-">';
                                        echo '<h6>'.$artist.'</h6>';
                                    echo '</div>';
                                echo '</div>';
                            }
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Miscellaneous Area End ##### -->
    
<?php
    include ("footer.php");
?>