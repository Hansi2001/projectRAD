<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="style.css">


</head>

<body>

    <section class="header">
        <a href="home.php" class="logo">CONTENTLINK</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="events.php">events</a>
            <a href="package.php">package</a>
            


          <?php
            if (isset($_SESSION['user_name'])) {
                echo '
                    <span class="profile-holder profile-dropdown">
                    <i class="fa-regular fa-user"></i>
                        <div class="profile-dropdown-content">
                            <p>' . $_SESSION['user_name'] . '</p>
                            <a href="user_page.php">Profile</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </span>
                    ';
            } else {
                echo '
                        <a href="login_form.php">login</a>
                    ';
            }
            ?>
            
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(ccimages/image03.jpg) no-repeat">
                    <div class="content">
                        <h3>Find and book the best content creators easily.</h3>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(ccimages/img06.jpg) no-repeat">
                    <div class="content">
                        <span></span>
                        <h3>a photograph keeps a moment from running away</h3>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(ccimages/img01.jpg) no-repeat">
                    <div class="content">
                        <span></span>
                        <h3>A beautiful life is a collection of unforgettable moments.</h3>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(ccimages/celebrity2.jpg) no-repeat">
                    <div class="content">
                        <span></span>
                        <h3>let photograph to have and to hold....</h3>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>


    <section class="home-about">

        </secion>


        <section class="home-package">

            <h1 class="heading-title">Events</h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="ccimages/socialmedia.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Social Media</h3>
                        <p>Youtubers , Tiktokers , vloggers , Entertainars </p>
                        <a href="events.php" class="btn">book now</a>
                    </div>
                </div>


                <div class="box">
                    <div class="image">
                        <img src="ccimages/celebrity2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Celebrity</h3>
                        <p>Actors/Actresses , TV Personalities , Athletes</p>
                        <a href="events.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="ccimages/mucisian.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Musician</h3>
                        <p>Singers , Instrumentalists , Bands , Artists </p>
                        <a href="events.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="ccimages/image002.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Photographer</h3>
                        <p>Event Photographers, Nature Photographers , Fashion Photograpers </p>
                        <a href="events.php" class="btn">book now</a>
                    </div>
                </div>

            </div>

            <section class="home-package">

                <h1 class="heading-title">Packages</h1>

                <div class="box-container">

                    <div class="box">
                        <div class="image">
                            <img src="ccimages/diamond1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>package 1</h3>
                            <p>diamond package</p>
                            <a href="package.php" class="btn">book now</a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="ccimages/gold1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>package 2</h3>
                            <p>gold package</p>
                            <a href="package.php" class="btn">book now</a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="ccimages/silver1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>package 3</h3>
                            <p>silver package</p>
                            <a href="package.php" class="btn">book now</a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="ccimages/bronze1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>package 4</h3>
                            <p>bronze package</p>
                            <a href="package.php" class="btn">book now</a>
                        </div>
                    </div>
                </div>

                <div class="load-more"> <a href="package.php" class="btn">load more</a></div>

            </section>






            <section class="footer">

                <div class="box-container">
                    <div class="box">
                        <h3>quick links</h3>
                        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
                        <a href="events.php"><i class="fas fa-angle-right"></i>events</a>
                    </div>


                    <div class="box">
                        <h3>extra links</h3>
                        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
                    </div>

                    <div class="box">
                        <h3>contact info</h3>
                        <a href="#"><i class="fas fa-envelope"></i> ccreators@gmail.com</a>
                    </div>

                </div>






            </section>

            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

            <script src="script.js"></script>

</body>

</html>