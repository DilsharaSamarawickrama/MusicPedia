<?php
    require ("php/connection.php");
?>
<link rel="stylesheet" href="css/audio.css">
<link href="search.css" rel="stylesheet" />
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
    <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:75em; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; ">
    <div class="bradcumbContent">
        <h2 style="color:White;">Song List</h2>
    </div>
    <center><button class="btn oneMusic-btn mt-15" type="submit" name="addUser" onclick="showAdd()" style="width:15rem;">Add New Songs</button></center>
    <div class="scroll" style="overflow-x: hidden; overflow-x: auto; max-height: 50rem;">
        <section class="contact-area mt-20 section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-lg-12">
                        <div class="contact-content mb-100">
                            

                            <div class="row">
                                <div class="col-12">
                                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                                       <form action="songsAdmin.php" method="POST" style="width: 100%;">
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

                            <?php include ("searchSong.php")?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>