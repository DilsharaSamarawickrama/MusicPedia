<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="MusicPedia">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Title -->
    <title>MusicPedia</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
   
    <script src="js/validating.js"></script>

</head>

<body>

<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="oneMusic-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                    <!-- Nav brand -->
                    <a href="index.php" class="nav-brand"><img src="img/icons/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <?php
                                    if (isset($_SESSION['email'])  && $_SESSION['type']=="Admin") {
                                        echo "<li><a href='songsAdmin.php'>Songs</a></li>";
                                        echo "<li><a href='users.php'>User</a></li>";
                                        echo "<li><a href='newSongs.php'>New Songs</a></li>";
                                        echo "<li><a href='inqueries.php'>Inqueries</a></li>";
                                    }
                                    elseif (isset($_SESSION['email'])  && $_SESSION['type']=="Singer") {
                                        echo "<li><a href='sellSongs.php'>Sell Songs</a></li>";
                                        echo "<li><a href='albums.php'>Add Album</a></li>";
                                        echo "<li><a href='contact.php'>Contact</a></li>";
                                    }
                                    else {
                                        echo "<li><a href='songs.php'>Songs</a></li>";
                                        echo "<li><a href='albums.php'>Albums</a></li>";
                                        echo "<li><a href='contact.php'>Contact</a></li>";
                                    }
                                ?>
                                
                            </ul>

                            <!-- Login/logout, Cart Button & User name-->
                            <div class="login-register-cart-button d-flex align-items-center">
                                <!-- Login/Logout -->
                                <?php
                                    if (isset($_SESSION['email'])) {
                                        echo "<div class='login-register-btn mr-50'>";
                                            echo "<a href='logout.php' id='logout'><img src='img/icons/logout.png'></a>";
                                        echo "</div>";
                                    }
                                    else{
                                        echo "<div class='login-register-btn mr-50'>";
                                            echo "<a href='login.php' id='login'><img src='img/icons/login.png'></a>";
                                        echo "</div>";
                                    }
                                ?>
                                <!-- Cart Button -->
                                <?php
                                    if (isset($_SESSION['email']) && $_SESSION['type']!="Admin" && $_SESSION['type']!="Singer") {

                                        $count=0;
                                        $email=$_SESSION['email'];
                                        $sql="select count(id) as count from cart where email='$email' && status=0";

                                        $res=mysqli_query($con,$sql);

                                        if ($res) {
                                            while ($row=mysqli_fetch_assoc($res)) {
                                                $count=$row['count'];
                                            }
                                        }

                                        echo "<div class='cart-btn'>";
                                            echo "<a href='cart.php'><p><img src='img/icons/cart.png'> <span class='quantity'>$count</span></p></a>";
                                        echo "</div>";
                                    }
                                ?>

                                <!--User name-->
                                <div class="user">
                                    <?php
                                        if (isset($_SESSION['email'])) {
                                             echo "<pre><h6 style='color:white;'>   ".$_SESSION['name']."</h6></pre>";
                                        }
                                        else{
                                            echo "<pre><h6 style='color:white;'>       Guest</h6></pre>";
                                        }
                                    ?>
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
