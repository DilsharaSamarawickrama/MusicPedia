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
    function showComment(){
        $('#cmnt').show();
    }
</script>

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>See what’s new</p>
        <h2>Single Song</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Album Catagory Area Start ##### -->
<section class="album-catagory section-padding-100-0">
    <div class="container">
    	<div class="row oneMusic-albums">
            <?php
            	$id=$_GET['id'];

                $_SESSION['song_id']=$id;

                $items="select * from audio where id='$id'";

                $res=mysqli_query($con,$items);

                if ($res) {
                     while ($itm=mysqli_fetch_assoc($res)) {
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
                                             if (isset($_SESSION['email'])) {
                                                 
                                             }
                                             else{
                                                echo "<th>";
                                                    echo '<div class="song-name">';
                                                        echo '<p>To Buy</p>';
                                                    echo '</div>';
                                                 echo "</th>";
                                             }
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
                                                if (isset($_SESSION['email']) && $_SESSION['type'] == 'Customer') {
                                                    echo '<div class="song-name">';
                                                        echo "<a href='addToCart.php?id=$id'><button class='btn oneMusic-btn mt-15' type='submit' name='add'>Add To Cart</button></a>";
                                                    echo '</div>';
                                                }
                                            echo "</th>";
                                        echo "</tr>";
                                    echo "</table>";

                                echo '</div>';
                            echo '</div>';
                        echo '</div>';

                        if (!isset($_SESSION['email'])) {
                            echo '<div class="song-play-area">';
                                echo "<table style='width:100%;text-align:center;'>";
                                    echo "<tr>";
                                        echo "<th>";
                                            echo '<div class="song-name">';
                                                echo "<a href='login.php'><button class='btn oneMusic-btn mt-15' type='submit' name='add'>Login to Your Account</button></a>";
                                                echo "<button class='btn oneMusic-btn mt-15' type='submit' name='addAlbum' onclick='showPay()'>Buy Now</button>";
                                            echo '</div>';
                                        echo "<th>";
                                    echo "</tr>";
                                echo "</table>";
                            echo '</div>';
                        }
                    }
                }

                
            ?>

            <style type="text/css">
    input[type=text] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    td{
        padding: 5px 5px 5px 5px;
    }
</style>

<?php
    if (isset($_SESSION['email']) && $_SESSION['type'] == 'Customer') {
        echo '<div class="col-12">';
                echo '<table width="100%" >';
                    echo '<form action="comment.php" method="post">';
                        echo '<tr>';
                            echo '<td>';
                                $id=$_SESSION['song_id'];
                                echo "<input type='text' name='cmt' placeholder='Type a Comment...'>";
                            echo '</td>';
                            echo '<td>';
                                echo "<button class='btn oneMusic-btn mt-10' type='submit' name='pst'>Post</button>";
                            echo '</td>';
                        echo '</tr>';
                    echo '</form>';
                    echo '<tr>';
                        echo '<th style="text-align: center;" colspan="2">';
                            echo "<button class='btn oneMusic-btn mt-10' type='submit' onclick='showComment()'>View Other Comments</button>";
                        echo '</th>';
                    echo '</tr>';
                echo '</table>';
            
        echo '</div>';
    }
?>
        </div>
    </div>

    <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:30rem; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; display: none;" id="pay">
    <section class="contact-area mt-20 section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-24 col-lg-12">
                    <div class="contact-content mb-100">
                        <div class="bradcumbContent">
                            <h2 style="color:White; ">Payment</h2>
                        </div>
                        <form method="POST" >
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <th>Accepted Cards:</th> 
                                        <th><img src="img/icons/visa.png"></th>
                                        <th><img src="img/icons/master.png"></th>
                                        <th><img src="img/icons/amex.png"></th>
                                        <th><img src="img/icons/discover.png"></th>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name on Card">
                            </div>
                     
                            <div class="form-group">
                                <input type="text" class="form-control" name="ccn" placeholder="Credit Card Number">
                            </div>
                        
                            <div class="form-group">
                                <input type="text" class="form-control" name="expMonth" placeholder="Exp Month">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="cvv" placeholder="CVV">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="expYear" placeholder="Expire Year">
                            </div>

                            <button class="btn oneMusic-btn mt-15" type="submit" name="pay">Pay Now</button>
                            <button class="btn oneMusic-btn mt-15" type="submit" name="cancel">Cancel</button>
                        </form>

                        <?php
                            if (isset($_POST['pay'])) {
                                $name=$_POST['name'];
                                $ccn=$_POST['ccn'];
                                $exm=$_POST['expMonth'];
                                $exy=$_POST['expYear'];
                                $amount=$_SESSION['amount'];
                                $email=$_SESSION['email'];
                                $msg="";
                                $date=date("d-m-Y");

                                if ($name==null || $email==null || $exm==null || $exy==null) {
                                    echo "Please fill all the fields!";
                                }
                                else{
                                    $sql="insert into sales(date, email, amount) values('$date', '$email', '$amount')";
                                    $res=mysqli_query($con, $sql);

                                    $sql1="update cart set status=1 where email='$email'";
                                    $res1=mysqli_query($con, $sql1);

                                    echo "Success!";

                                    if ($res && $res1) {
                                        header("location:albums.php");
                                    }
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</section>

<section class="album-catagory section-padding-100-0">
    <div class="container">
        <div class="row oneMusic-albums">
            <?php
                include ("otherComments.php");
            ?>
        </div>
    </div>
</section>

<?php
    include ("footer.php");
?>