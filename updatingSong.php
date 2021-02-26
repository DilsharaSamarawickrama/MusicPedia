<?php
    session_start();
    require("php/connection.php");
    include "header.php";
?>

<!-- ##### Songs Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/pics/img48.jpg);">
    <section class="newsletter-testimonials-area">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading white">
                                <p>Editable</p>
                                <h2>Uptading Songs</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Form Area -->
                
                <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:30rem; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8;">
                    <div class="bradcumbContent">
                        <h2 style="color:White;">Uploads</h2>
                    </div>
                    <section class="contact-area mt-20 section-padding-100-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-24 col-lg-12">
                                    <div class="contact-content mb-100">
                                        <form action='updateASong.php' method='POST' enctype='multipart/form-data'>
                                            <?php
                                                $id=$_GET['id'];
                                                $title="NULL";
                                                $artist="NULL";
                                                $album="NULL";
                                                $price=0;
                                                $year=0;
                                                $cat=0;
                                                $lang="NULL";

                                                $items="select * from audio where id='$id'";

                                                $res=mysqli_query($con,$items);

                                                if ($res) {
                                                    while ($itm=mysqli_fetch_assoc($res)) {
                                                        $title=$itm['title'];
                                                        $artist=$itm['artist'];
                                                        $album=$itm['album'];
                                                        $price=$itm['price'];
                                                        $year=$itm['year'];
                                                        $cat=$itm['category'];
                                                        $lang=$itm['language'];
                                                        $id=$itm['id'];
                                                    }    
                                                }

                                                echo "<div class='form-group'>";
                                                    echo "<input type='text' class='form-control' name='id' placeholder='$id'>";
                                                echo "</div>";

                                                echo "<div class='form-group'>";
                                                    echo "<input type='text' class='form-control' name='title' placeholder='$title'>";
                                                echo "</div>";
                                         
                                                echo "<div class='form-group'>";
                                                    echo "<input type='text' class='form-control' name='artist' placeholder='$artist'>";
                                                echo "</div>";
                                            
                                                echo "<div class='form-group'>";
                                                    echo "<input type='text' class='form-control' name='album' placeholder='$album'>";
                                                echo "</div>";
                                         
                                                echo "<div class='form-group'>";
                                                    echo "<input type='text' class='form-control' name='year' placeholder='$year'>";
                                                echo "</div>";
                            
                                                echo "<div class='form-group'>";
                                                    echo "<input type='text' class='form-control' name='lang' placeholder='$lang'>";
                                                echo "</div>";
                                           
                                                echo "<div class='form-group'>";
                                                    echo "<input type='text' class='form-control' name='price' placeholder='$price'>";
                                                echo "</div>";

                                                echo "<button class='btn oneMusic-btn mt-15' type='submit' name='update'>Update</button>";

                                                echo "<button class='btn oneMusic-btn mt-15' type='reset' name='reset'>Clear</button>";
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</section>
        <!-- ##### Songs End ##### -->

<?php
    include "footer.php";
?>