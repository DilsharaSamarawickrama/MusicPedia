<?php
    session_start();

    require("php/connection.php");
    include "header.php";
?>

<script type="text/javascript">
    function loadDoc() {
      var current_count,total_count;
        //get the values to be sent to the server.
         current_count = document.getElementById("currItems").innerHTML;
        
         total_count   = document.getElementById("totItems").innerHTML;
        
        
            //modern browsers
            var xhttp = new XMLHttpRequest();
        

        xhttp.onreadystatechange = function() {
          if (xhttp.readyState == 4 && xhttp.status == 200) {
              $("#product-container").append(xhttp.responseText);
              new_count = parseInt(current_count)+6;
              document.getElementById("currItems").innerHTML = new_count;
              
              //check if all products are displayed
              if(new_count >= total_count){
                  //then hide load more button
                  $('#loadmore').hide();
              }
          }
        };

        //sends the request to the server
        xhttp.open("GET", "loadMore.php?current_count="+current_count, true);
        xhttp.send();
    }
  </script>

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>See what’s new</p>
        <h2>Latest Songs</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Album Catagory Area Start ##### -->
<section class="album-catagory section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                   <form action="songs.php" method="POST" style="width: 100%;">
                    <table style="width: 100%;">
                        <tr>
                            <td>
                               <button name="all" class="btn btn-dark btn-sm">Browse All</button> 
                            </td>
                            <td>
                                <button name="a" class="btn btn-dark btn-sm">A</button>
                            </td>
                            <td>
                                <button name="b" class="btn btn-dark btn-sm">B</button>
                            </td>
                            <td>
                                <button name="c" class="btn btn-dark btn-sm">C</button>
                            </td>
                            <td>
                                <button name="d" class="btn btn-dark btn-sm">D</button>
                            </td>
                            <td>
                                <button name="e" class="btn btn-dark btn-sm">E</button>
                            </td>
                            <td>
                                <button name="f" class="btn btn-dark btn-sm">F</button>
                            </td>
                            <td>
                                <button name="g" class="btn btn-dark btn-sm">G</button>
                            </td>
                            <td>
                                <button name="h" class="btn btn-dark btn-sm">H</button>
                            </td>
                            <td>
                                <button name="i" class="btn btn-dark btn-sm">I</button>
                            </td>
                            <td>
                                <button name="j" class="btn btn-dark btn-sm">J</button>
                            </td>
                            <td>
                                <button name="k" class="btn btn-dark btn-sm">K</button>
                            </td>
                            <td>
                                <button name="l" class="btn btn-dark btn-sm">L</button>
                            </td>
                            <td>
                                <button name="m" class="btn btn-dark btn-sm">M</button>
                            </td>
                            <td>
                                <button name="n" class="btn btn-dark btn-sm">N</button>
                            </td>
                            <td>
                                <button name="o" class="btn btn-dark btn-sm">O</button>
                            </td>
                            <td>
                                <button name="p" class="btn btn-dark btn-sm">P</button>
                            </td>
                            <td>
                                <button name="q" class="btn btn-dark btn-sm">Q</button>
                            </td>
                            <td>
                                <button name="r" class="btn btn-dark btn-sm">R</button>
                            </td>
                            <td>
                                <button name="s" class="btn btn-dark btn-sm">S</button>
                            </td>
                            <td>
                                <button name="t" class="btn btn-dark btn-sm">T</button>
                            </td>
                            <td>
                                <button name="u" class="btn btn-dark btn-sm">U</button>
                            </td>
                            <td>
                                <button name="v" class="btn btn-dark btn-sm">V</button>
                            </td>
                            <td>
                                <button name="w" class="btn btn-dark btn-sm">W</button>
                            </td>
                            <td>
                                <button name="x" class="btn btn-dark btn-sm">X</button>
                            </td>
                            <td>
                                <button name="y" class="btn btn-dark btn-sm">Y</button>
                            </td>
                            <td>
                                <button name="z" class="btn btn-dark btn-sm">Z</button>
                            </td>
                        </tr>
                    </table>
                   </form>
                </div>
            </div>
        </div>

        <div class="row oneMusic-albums">

        <?php
            $count=0;
            if (isset($_POST['all'])) {
                 $sql="select * from audio";
            }
            elseif (isset($_POST['a'])) {
                 $sql="SELECT * FROM `audio` where title like 'a%'";
            }
            elseif (isset($_POST['b'])) {
                 $sql="SELECT * FROM `audio` where title like 'b%'";
            }
            elseif (isset($_POST['c'])) {
                 $sql="SELECT * FROM `audio` where title like 'c%'";
            }
            elseif (isset($_POST['d'])) {
                 $sql="SELECT * FROM `audio` where title like 'd%'";
            }
            elseif (isset($_POST['e'])) {
                 $sql="SELECT * FROM `audio` where title like 'e%'";
            }
            elseif (isset($_POST['f'])) {
                 $sql="SELECT * FROM `audio` where title like 'f%'";
            }
            elseif (isset($_POST['g'])) {
                 $sql="SELECT * FROM `audio` where title like 'g%'";
            }
            elseif (isset($_POST['h'])) {
                 $sql="SELECT * FROM `audio` where title like 'h%'";
            }
            elseif (isset($_POST['i'])) {
                 $sql="SELECT * FROM `audio` where title like 'i%'";
            }
            elseif (isset($_POST['j'])) {
                 $sql="SELECT * FROM `audio` where title like 'j%'";
            }
            elseif (isset($_POST['k'])) {
                 $sql="SELECT * FROM `audio` where title like 'k%'";
            }
            elseif (isset($_POST['l'])) {
                 $sql="SELECT * FROM `audio` where title like 'l%'";
            }
            elseif (isset($_POST['m'])) {
                 $sql="SELECT * FROM `audio` where title like 'm%'";
            }
            elseif (isset($_POST['n'])) {
                 $sql="SELECT * FROM `audio` where title like 'n%'";
            }
            elseif (isset($_POST['o'])) {
                 $sql="SELECT * FROM `audio` where title like 'o%'";
            }
            elseif (isset($_POST['p'])) {
                 $sql="SELECT * FROM `audio` where title like 'p%'";
            }
            elseif (isset($_POST['q'])) {
                 $sql="SELECT * FROM `audio` where title like 'q%'";
            }
            elseif (isset($_POST['r'])) {
                 $sql="SELECT * FROM `audio` where title like 'r%'";
            }
            elseif (isset($_POST['s'])) {
                 $sql="SELECT * FROM `audio` where title like 's%'";
            }
            elseif (isset($_POST['t'])) {
                 $sql="SELECT * FROM `audio` where title like 't%'";
            }
            elseif (isset($_POST['u'])) {
                 $sql="SELECT * FROM `audio` where title like 'u%'";
            }
            elseif (isset($_POST['v'])) {
                 $sql="SELECT * FROM `audio` where title like 'v%'";
            }
            elseif (isset($_POST['w'])) {
                 $sql="SELECT * FROM `audio` where title like 'w%'";
            }
            elseif (isset($_POST['x'])) {
                 $sql="SELECT * FROM `audio` where title like 'x%'";
            }
            elseif (isset($_POST['y'])) {
                 $sql="SELECT * FROM `audio` where title like 'y%'";
            }
            elseif (isset($_POST['z'])) {
                 $sql="SELECT * FROM `audio` where title like 'z%'";
            }
            else{
                $sql="SELECT * FROM `audio`";
            }
            
            $result=mysqli_query($con,$sql);

            if (mysqli_num_rows($result)>0) {
                while ($itm=mysqli_fetch_assoc($result)) {
                    $title=$itm['title'];
                    $id=$itm['id'];

                    #Single Song
                    echo '<div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item $title">';
                        echo '<div class="single-album">';
                            echo "<img class='d-block img-fluid' src='data:image/jpeg;base64,".base64_encode( $itm['image'] )."'>";
                            echo '<div class="album-info">';
                                echo "<a href='singleSong.php?id=$id'>";
                                    echo '<h5>'.$title.'</h5>';
                                echo '</a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            }
        ?>        

        </div>
    </div>
</section>
<!-- ##### Album Catagory Area End ##### -->

     <?php
              
              //get the total audio count
              $query = "SELECT COUNT(`id`) AS count FROM audio";
              $result = mysqli_query($con,$query);
              $num =mysqli_fetch_assoc($result);
              $count=$num;
              
              ?>
              
              <span id="currItems" style="display:none;" >6</span>
              <span id="totItems" style="display:none;" ><?php echo $count; ?></span>

        <div class="row">
            <div class="col-12">
                <div class="load-more-btn text-center">
                    <a href="#" class="btn oneMusic-btn" onclick="loadDoc()" id="loadmore">Load More <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Buy Now Area End ##### -->

<!--
<div class="add-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="adds">
                    <a href="#"><img src="img/bg-img/add3.gif" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!-- 
<div class="one-music-songs-area mb-70">
    <div class="container">
        <div class="row">

            ##Single Song
            <div class="col-12">
                <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                    <div class="song-thumbnail">
                        <img src="img/bg-img/s1.jpg" alt="">
                    </div>
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
</div>
-->

<?php
    include ("footer.php");
?>