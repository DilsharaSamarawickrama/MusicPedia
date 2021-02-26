<?php
    require("php/connection.php");

    session_start();

    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pwd1=$_POST['pwd1'];
        $pwd2=$_POST['pwd2'];
        $type=$_POST['type'];

        $pwd=md5($pwd);

        if ($name!=null && $email!=null && $pwd1!=null && $pwd2!=null && $pwd1==$pwd2 && ($type=="Customer" || $type=="Singer")) {
            $pwd=md5($pwd1);
            $sql="insert into user(name,email,password,type) values('$name','$email','$pwd','$type')";

            $results=mysqli_query($con,$sql);

            if ($results) {
                header("location:login.php");
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
                                        <h2 data-animation="fadeInUp" data-delay="300ms" style="font-size: 50px;">Join with Us<span>Join with Us</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- ##### Login Area Start ##### -->
                        <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:25rem;box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8;">
                            <!---->
                            <section class="contact-area mt-20 section-padding-100-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-24 col-lg-12">
                                            <div class="contact-content mb-100" style="opacity: 2.0;">
                                                <div class="bradcumbContent">
                                                    <h2 style="color:White;">Create an Account</h2>
                                                </div>
                                                <!-- Contact Form Area -->
                                                <div class="contact-form-area">
                                                    <form  method="POST">
                                                        <div class="form-group">
                                                            <input type="name" class="form-control" name="name" placeholder="Your Name" id="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Your E-mail" id="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="type"  style="width:180px;height:30px;" class="text-dark" id="type">
                                                                <option name="type" id="type">Select Category: </option>
                                                                <option value="Singer" name='type' id="type">Singer</option>
                                                                <option value="Customer" name='type' id="type">Customer</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="pwd1" placeholder="Password" id="pwd1">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="pwd2" placeholder="Re-Enter Password" id="pwd2">
                                                        </div>
                                                        <div>
                                                            <a href="login.php" style="color: #ffffff;">Already Have an Account</a>
                                                        </div>
                                                        <button class="btn oneMusic-btn mt-30" type="submit" name="submit" onclick="validate()">Create</button>
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
                </div>
            </section>

            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/pics/img7.jpg);"></div>

            <div class="container" style="background-color: background: -webkit-linear-gradient(to right, #262626, #dc143c);background: linear-gradient(to right, #262626, #dc143c); opacity: 0.5">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center" style="opacity: 2.0;">
                            <h2 data-animation="fadeInUp" data-delay="300ms">Micheal Jackson<span>Micheal Jackson</span></h2>
                            <center>
                            <h6 data-animation="fadeInUp" data-delay="100ms" style="letter-spacing: 2px;">"To live is to be musical, starting with the blood dancing in your veins.<br> Everything living has a rhythm.<br> Do you feel your music?"</h6>
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