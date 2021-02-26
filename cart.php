<?php
	session_start();
	require("php/connection.php");
    include "header.php";
?>

<script type="text/javascript">
    function showPay(){
        $('#pay').show();
    }
    function hidePay(){
        $('#pay').hide();
    }
</script>

<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/pics/img4.jpg);">
    <div class="bradcumbContent">
        <p>Cart</p>
        <h2>Buy Songs</h2>
    </div>
</section>
    <!-- ##### Breadcumb Area End ##### -->

<!-- ##### Album Catagory Area Start ##### -->
<section class="album-catagory section-padding-100-0">
    <div class="container">
    	<div class="row oneMusic-albums">
	            <?php
	            	$email=$_SESSION['email'];
	            	$amount=0;

	            	$ids="select * from cart where email='$email' && status=0";

	            	$result=mysqli_query($con,$ids);

	            	if ($result) {
	            		while ($row=mysqli_fetch_assoc($result)) {
	            			$id=$row['song_id'];

	            			$items="select * from audio where id='$id'";

	            			$res=mysqli_query($con,$items);

	            			if ($res) {
	            				 while ($itm=mysqli_fetch_assoc($res)) {
            				 	 	$title=$itm['title'];
                        			$artist=$itm['artist'];
                        			$price=$itm['price'];
                        			$id=$itm['id'];

                        			$amount=$amount+$price;
                        			
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
                                                                echo "<a href='removeItems.php?id=$id'><button class='btn oneMusic-btn mt-15' type='submit' name='remove'>Remove</button></a>";
                                                            echo '</div>';
                                                        echo "</th>";
                                                    echo "</tr>";
                                                echo "</table>";

                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
	            				 }
	            			}
	            		}

	            		$_SESSION['amount']=$amount;
	            	}

                    echo '<div class="song-play-area">';
                        echo "<table style='width:100%;text-align:center;'>";
                    		if ($amount==0) {
                                echo "<tr>";
                                    echo "<th>";
                                        echo '<div class="song-name">';
                                            echo '<h6 style="color:white;">Cart is Empty</h6>';
                                        echo '</div>';
                                    echo "</th>";
                                echo "</tr>";
                    		}
                    		else
                    		{
                                echo "<tr>";
                                    echo "<th>";
                                        echo '<div class="song-name">';
                                            echo '<h6 style="color:white;">Amount: '.$amount.'$</h6>';
                                        echo '</div>';
                                    echo "</th>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<th>";
                                        echo '<div class="song-name">';
                                            echo "<button class='btn oneMusic-btn mt-15' type='submit' name='checkout' onclick='showPay()'>Checkout</button>";
                                        echo '</div>';
                                    echo "</th>";
                                echo "</tr>";
                    		}
                        echo "</table>";
                    echo "</div>";
	            ?>


            <?php
                include "payments.php";
            ?>

        </div>
    </div>
</section>

<?php
	include "footer.php";
?>