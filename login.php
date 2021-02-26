<?php
    require("php/connection.php");

    session_start();

    if (isset($_POST['submit'])) {
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];

        $pwd=md5($pwd);

        if ($email==null || $pwd==null) {
            $msg="Please fill all the fields!";
            echo "<script type='text/javascript'>alert('$msg')</script>";
        }
        else{
            $sql="select * from user where email='$email' AND password='$pwd'";

            $results=mysqli_query($con,$sql);

            if ($results) {
                if (mysqli_num_rows($results)>0) {
                    $record=mysqli_fetch_assoc($results);
                    $_SESSION=$record;

                    header("location:index.php");
                }
            }
        }

    }

    mysqli_close($con);

    include "header.php";
?>
    
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">

            <section class="newsletter-testimonials-area">
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-slides-content text-center">
                                        <h2 data-animation="fadeInUp" data-delay="300ms">Connect With Us<span>Connect With Us</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- ##### Login Area Start ##### -->
                        <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:25rem;box-shadow: 10px 10px 10px #0000f3;background-color:background: -webkit-linear-gradient(to right, #000000, #000000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8;">
                            <!---->
                            <section class="contact-area mt-20 section-padding-100-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-24 col-lg-12">
                                            <div class="contact-content mb-100" style="opacity: 2.0;">
                                                <div class="bradcumbContent">
                                                    <h2 style="color:White;">Login</h2>
                                                </div>
                                                <!-- Contact Form Area -->
                                                <div class="contact-form-area">
                                                    <form action="login.php" method="POST">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Your E-mail">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="pwd" placeholder="Password">
                                                        </div>
                                                        <div>
                                                            <a href="signup.php" style="color: #ffffff;">Create an Account</a>
                                                        </div>
                                                        <button class="btn oneMusic-btn mt-30" type="submit" name="submit">Login</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- ##### Login Area End ##### -->
                </div>
            </section>

            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/pics/img47.jpg);"></div>

             <div class="container" style="background-color:background: -webkit-linear-gradient(to right, #0000f5, #262626);background: linear-gradient(to right, #0000f5, #262626); opacity: 0.7;">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center" style="opacity: 2.0;">
                            <h2 data-animation="fadeInUp" data-delay="300ms">Beethoven<span>Beethoven</span></h2>
                            <center>
                            <h6 data-animation="fadeInUp" data-delay="100ms" style="letter-spacing: 2px;">"Music Can Change The World"</h6>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<?php
    include ("footer.php");
?>