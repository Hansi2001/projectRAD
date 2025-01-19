<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">


</head>

<body>

    <section class="header">
        <a href="home.php" class="logo">CONTENTLINK</a>

        <!-- <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="events.php">events</a>
            <a href="book.php">book</a>
        </nav> -->

        <!-- New Nav Bar -->
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="events.php">events</a>
            <a href="package.php">package</a>
            <a href="login_form.php">login</a>
            

        <!--    <?php

            require_once 'config.php';

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
        -->
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>



    <!-- <section class="events">

    <h1 class="heading-title"> events </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>wedding</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>pre shoot</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>birthday</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>other events</h3>
        </div>
    </div>

</section> -->

    <section class="home-package">

        <h1 class="heading-title">Musician</h1>
        

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="ccimages/img02.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Yohani Diloka de Silva</h3>
                    <p>A contemporary sensation, Yohani is a singer and rapper who gained international fame with her viral hit 'Manike Mage Hithe.' 
                        Her unique style blends traditional Sri Lankan music with modern influences.</p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/b&s1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bathiya and Santhush (BNS)</h3>
                    <p>This dynamic duo has been at the forefront of Sri Lankan pop music, 
                        fusing Western and Eastern musical styles to create a distinctive sound that appeals to a wide audience. </p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/thushani.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Thushani Jayawardena</h3>
                    <p>A proficient violinist who has performed alongside renowned pianist Soundarie David Rodrigo. 
                        She is active on Facebook, sharing updates about her performances.  </p>
                    <a href="booking_form" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/mithini.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Mithini Dissanayake</h3>
                    <p>A professional violinist and performing artist who also holds a degree in Peace & Conflict Resolution. 
                        She shares her performances and updates on her Instagram account. </p>
                    <a href="booking_form" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/sadaru.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Sandaru Sathsara</h3>
                    <p>Sandaru's videos are mostly shows Him Singing western songs such as, Believer, It's my life and Love me 
                        like you do but are sang in Sri Lankan Version in a very bland and lazy but in a ridiculous and funny way. he sometimes upload reaction videos and remixes.
                         His most viewed video is "Its My Life | Sri Lankan Version | Sandaru Sathsara" with over 9 million views.</p>
                    <a href="booking_form" class="btn">Book Now</a>
                </div>
            </div>


    </section>






    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>quick links<h3>
                        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
                        <a href="events.php"><i class="fas fa-angle-right"></i>events</a>
            </div>


            <div class="box">
                <h3>extra links<h3>
                        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                        <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
                        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info<h3>
                        <a href="#"><i class="fas fa-envelope"></i> ccreators@gmail.com</a>
            </div>

        </div>






    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>