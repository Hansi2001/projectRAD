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

        <h1 class="heading-title">Photographer</h1>
        

        <div class="box-container">


        <div class="box">
                <div class="image">
                    <img src="ccimages/danu.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Danushka Senadeera</h3>
                    <p> Capturing the finest moments of your life through the lens of an expert, Specializing in Wedding Photography, we also offer
                         photography services in Fashion, Event, and Commercial requirements.</p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/gihan.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Gihan de silva</h3>
                    <p>Gihan De Silva; a connoisseur of love and celebration. With a profound understanding of global wedding cultures, he seamlessly
                         blends personal narratives with rich traditions, creating bespoke experiences for each couple.</p>
                    <a href="booking_form" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/prabath2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Prabath Kanishka</h3>
                    <p>Specializing in pre-wedding, model, and portrait photography, Prabath Kanishka is renowned for his artistic approach and attention to detail. 
                        His work has earned him a reputation as one of Sri Lanka's top photographers. </p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/damith.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Damith Danthanarayana</h3>
                    <p>Based in Sweden, Damith Danthanarayana is a wildlife and macro photographer originally from Sri Lanka. 
                        His work showcases the intricate beauty of nature, reflecting his Sri Lankan roots. </p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/nayana.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nayanahari Abeynayake</h3>
                    <p>A freelance photographic artist and documentary photographer, Nayanahari Abeynayake is known for her impactful visual narratives that explore socio-political issues in Sri Lanka.
                         Her work has been exhibited both locally and internationally. </p>
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