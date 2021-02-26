<?php
    session_start();
    require ("php/connection.php");
    include "header.php";
?>
<style type="text/css">
    ::-webkit-scrollbar{
        width: 10px;
    }

    ::-webkit-scrollbar-track{
        background: #262626;
    }

    ::-webkit-scrollbar-thumb{
        background: #888;
    }

    ::-webkit-scrollbar-thumb:hover{
        background: #555;
    }
</style>
<script type="text/javascript">
    function showAdd(){
        $('#add').show();
    }
    function hideAdd(){
        $('#add').hide();
    }
</script>

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
                <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:30rem; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; display: none;" id="add">
                    <div class="bradcumbContent">
                        <h2 style="color:White;">Uploads</h2>
                    </div>
                    <section class="contact-area mt-20 section-padding-100-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-24 col-lg-12">
                                    <div class="contact-content mb-100">
                                        
                                        <!-- <div class="contact-form-area"> -->
                                            <form action="sellAudio.php" method="POST" enctype="multipart/form-data">
                                               
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                                </div>
                                         
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="artist" placeholder="Artist">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="album" placeholder="Album">
                                                </div>
                                         
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="year" placeholder="Year">
                                                </div>
                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="lang" placeholder="Language">
                                                </div>
                                           
                                                <div class="form-group">
                                                    <select name="type"  style="width:180px;height:30px;" class="text-dark">
                                                        <option value="0" name="type">Select Category: </option>
                                                        <?php

                                                            $sql="select * from category";

                                                            $result=mysqli_query($con,$sql);


                                                            if (mysqli_num_rows($result)>0) {
                                                                while ($row=mysqli_fetch_assoc($result)) {
                                                                    echo "<option value=";
                                                                        echo $row['id'];
                                                                    echo " name='type'>";
                                                                        echo $row['category'];
                                                                    echo "</option>";
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="price" placeholder="Price">
                                                </div>

                                                <div class="form-group">
                                                     <p>Audio: </p><input type="file" name="mp3">
                                                </div>

                                                <div class="form-group">
                                                    <p>Cover Picture: </p><input type="file" name="img">
                                                </div>

                                                <button class="btn oneMusic-btn mt-15" type="submit" name="upload" onclick="hideAdd()">Upload</button>
                                                <button class="btn oneMusic-btn mt-15" type="reset" name="reset">Clear</button>
                                                 
                                            </form>
                                            
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:75em; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; ">
                    <div class="bradcumbContent">
                        <h2 style="color:White;">New Song List</h2>
                            <center><button class="btn oneMusic-btn mt-15" type="submit" name="addUser" onclick="showAdd()" style="width:15rem;">Sell New Songs</button></center>
                    </div>
                    <div class="scroll" style="overflow-x: hidden; overflow-x: auto; max-height: 50rem;">
                        <section class="contact-area mt-20 section-padding-100-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-24 col-lg-12">
                                        <div class="contact-content mb-100">
                                            <div class="row oneMusic-albums">

                                                <?php
                                                    $email=$_SESSION['email'];

                                                    $sql="SELECT * FROM `buyAudio` where email='$email'";

                                                    $result=mysqli_query($con,$sql);
                                                     if (mysqli_num_rows($result)>0) {
                                                        while ($itm=mysqli_fetch_assoc($result)) {
                                                            $title=$itm['title'];
                                                            $artist=$itm['artist'];
                                                            $price=$itm['price'];
                                                            $id=$itm['id'];
                                                            $status=$itm['status'];
                                                            
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
                                                                                 echo "<th>";
                                                                                    echo '<div class="song-name">';
                                                                                        echo '<p>Status</p>';
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
                                                                                        if ($status==0) {
                                                                                            echo "<p>Sold</p>";
                                                                                        }
                                                                                        else{
                                                                                            echo "<p>Pending</p>";
                                                                                        }
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