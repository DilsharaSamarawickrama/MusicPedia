<?php
    session_start();
    require("php/connection.php");
    include "header.php";
?>
<link href="search.css" rel="stylesheet" />

<!-- ##### Users Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/pics/img48.jpg);">
    <section class="newsletter-testimonials-area">
        <div class="container">
            <div class="row">
			    <div class="container">
			        <div class="row">
			            <div class="col-12">
			                <div class="section-heading white">
			                    <p>User Inqueries</p>
			                    <h2>Respond</h2>
			                </div>
			            </div>
			        </div>
				</div>

	            <!-- Users -->
	             <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:75em; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; ">
		            <div class="scroll" style="overflow-x: hidden; overflow-x: auto; max-height: 50rem;">
		                <section class="contact-area mt-20 section-padding-100-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-24 col-lg-12">
                                        <div class="contact-content mb-100">

                                        	<?php
                                                
                                                $sql="select * from message";

                                                $result=mysqli_query($con,$sql);

                                                if (mysqli_num_rows($result)>0) {
                                                    while ($row=mysqli_fetch_assoc($result)) {
                                                        $name=$row['name'];
                                                        $email=$row['email'];
                                                        $sub=$row['subject'];
                                                        $msg=$row['message'];

                                                        echo '<div class="col-24">';
                                                            echo '<div class="single-song-area mb-30 d-flex flex-wrap align-items-end">';
                                                                
                                                                echo '<div class="song-play-area">';

                                                                    echo "<table style='width:100%;'>";
                                                                        echo "<tr>";
                                                                              echo "<th>";
                                                                                echo '<div class="song-name">';
                                                                                    echo '<h6 style="color:white;">'.$sub.'</h6>';
                                                                                echo '</div>';
                                                                             echo "</th>";
                                                                        echo "</tr>";

                                                                        echo "<tr>";
                                                                            echo "<th>";
                                                                                echo '<div class="song-name">';
                                                                                    echo '<p>'.$msg.'</p>';
                                                                                echo '</div>';
                                                                            echo "</th>";
                                                                        echo "</tr>";

                                                                        echo "<tr>";
                                                                            echo "<th>";
                                                                                echo '<div class="song-name">';
                                                                                    echo '<p><i>'.$name.': '.$email.'</i></p>';
                                                                                echo '</div>';
                                                                            echo "</th>";

                                                                             echo "<th>";
                                                                                echo '<div class="song-name">';
                                                                                    echo '<button class="btn oneMusic-btn mt-15" type="submit" name="res">Respond</button>';
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
                        </section>
                    </div>
	            </div>
	            <!-- Users -->

	        </div>
	    </div>
	</section>
</section>

<?php
    include "footer.php";
?>