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
                                <h2>Songs</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Form Area -->
                 <?php
                    include "upload_form.php";
                ?>   
                <!-- Upload Form Area -->
            </div>

            <div class="row">
            <!-- Songs List Area -->                                    
            <?php
                include "audio.php";
            ?>               
            <!-- Songs List Area -->
            
            </div>
        </div>
    </section>
</section>
<!-- ##### Songs End ##### -->

<?php
    include ("footer.php");
?>