<?php
    session_start();

    require("php/connection.php");
    include "header.php";
?>

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>See what’s new</p>
        <h2>Latest Albums</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Album Catagory Area Start ##### -->
<section class="album-catagory section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                   <form action="albums.php" method="POST" style="width: 100%;">
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
                 $sql="select * from album";
            }
            elseif (isset($_POST['a'])) {
                 $sql="SELECT * FROM `album` where album like 'a%'";
            }
            elseif (isset($_POST['b'])) {
                 $sql="SELECT * FROM `album` where album like 'b%'";
            }
            elseif (isset($_POST['c'])) {
                 $sql="SELECT * FROM `album` where album like 'c%'";
            }
            elseif (isset($_POST['d'])) {
                 $sql="SELECT * FROM `album` where album like 'd%'";
            }
            elseif (isset($_POST['e'])) {
                 $sql="SELECT * FROM `album` where album like 'e%'";
            }
            elseif (isset($_POST['f'])) {
                 $sql="SELECT * FROM `album` where album like 'f%'";
            }
            elseif (isset($_POST['g'])) {
                 $sql="SELECT * FROM `album` where album like 'g%'";
            }
            elseif (isset($_POST['h'])) {
                 $sql="SELECT * FROM `album` where album like 'h%'";
            }
            elseif (isset($_POST['i'])) {
                 $sql="SELECT * FROM `album` where album like 'i%'";
            }
            elseif (isset($_POST['j'])) {
                 $sql="SELECT * FROM `album` where album like 'j%'";
            }
            elseif (isset($_POST['k'])) {
                 $sql="SELECT * FROM `album` where album like 'k%'";
            }
            elseif (isset($_POST['l'])) {
                 $sql="SELECT * FROM `album` where album like 'l%'";
            }
            elseif (isset($_POST['m'])) {
                 $sql="SELECT * FROM `album` where album like 'm%'";
            }
            elseif (isset($_POST['n'])) {
                 $sql="SELECT * FROM `album` where album like 'n%'";
            }
            elseif (isset($_POST['o'])) {
                 $sql="SELECT * FROM `album` where album like 'o%'";
            }
            elseif (isset($_POST['p'])) {
                 $sql="SELECT * FROM `album` where album like 'p%'";
            }
            elseif (isset($_POST['q'])) {
                 $sql="SELECT * FROM `album` where album like 'q%'";
            }
            elseif (isset($_POST['r'])) {
                 $sql="SELECT * FROM `album` where album like 'r%'";
            }
            elseif (isset($_POST['s'])) {
                 $sql="SELECT * FROM `album` where album like 's%'";
            }
            elseif (isset($_POST['t'])) {
                 $sql="SELECT * FROM `album` where album like 't%'";
            }
            elseif (isset($_POST['u'])) {
                 $sql="SELECT * FROM `album` where album like 'u%'";
            }
            elseif (isset($_POST['v'])) {
                 $sql="SELECT * FROM `album` where album like 'v%'";
            }
            elseif (isset($_POST['w'])) {
                 $sql="SELECT * FROM `album` where album like 'w%'";
            }
            elseif (isset($_POST['x'])) {
                 $sql="SELECT * FROM `album` where album like 'x%'";
            }
            elseif (isset($_POST['y'])) {
                 $sql="SELECT * FROM `album` where album like 'y%'";
            }
            elseif (isset($_POST['z'])) {
                 $sql="SELECT * FROM `album` where album like 'z%'";
            }
            else{
                $sql="SELECT * FROM `album`";
            }

            $result=mysqli_query($con,$sql);

            if (mysqli_num_rows($result)>0) {
                while ($row=mysqli_fetch_assoc($result)) {
                    $album=$row['album'];

                    #Single Song
                    echo '<div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item $title">';
                        echo '<div class="single-album">';
                            echo "<img class='d-block img-fluid' src='data:image/jpeg;base64,".base64_encode( $row['image'] )."'>";
                            echo '<div class="album-info">';
                                echo "<a href='singleAlbum.php?album=$album'>";
                                    echo '<h5>'.$album.'</h5>';
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

        <div class="row">
            <div class="col-12">
                <div class="load-more-btn text-center">
                    <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
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