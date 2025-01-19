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

        <h1 class="heading-title">Events</h1>
        <h2>Discover and connect with extraordinary talent across diverse fields through our curated events. Whether
             you’re looking for a vibrant social media influencer, a renowned celebrity, a talented musician,
             or a skilled photographer, our Events page is your gateway to creativity and inspiration.</h2><br><br><br>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="ccimages/socialmedia.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Social Media</h3>
                    <p>Stay ahead of the trends with events featuring top influencers and digital creators who 
                        shape the online world. From engaging live sessions to hands-on workshops, 
                        these events are perfect for learning, collaboration, and growth in the digital space.</p>
                    <a href="social_media.php" class="btn">continue</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/celebrity2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Celebrity</h3>
                    <p>Meet iconic personalities and household names at exclusive celebrity events. Whether it’s a meet-and-greet, 
                        a keynote speech, or a red-carpet appearance, these events bring you closer to the stars.</p>
                    <a href="celebrity.php" class="btn">continue</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/mucisian.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Musician</h3>
                    <p>Celebrate the power of music through unforgettable performances, intimate concerts, and workshops 
                        hosted by talented musicians. From budding artists to renowned performers, our music events are sure to inspire.</p>
                    <a href="musician.php" class="btn">continue</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/image002.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Photographer</h3>
                    <p>Dive into the world of visual storytelling with events designed for photography enthusiasts. Attend exhibitions, 
                        skill-building workshops, or live shoots hosted by accomplished photographers and capture moments like a pro.</p>
                    <a href="photographer.php" class="btn">Continue</a>
                </div>
            </div>


    </section>

<h1>Why Attend Our Events?</h1><br><br>
<h2>
•	Connect directly with top talent in your field.<br>
•	Learn, collaborate, and grow your network.<br>
•	Stay inspired by industry leaders and experts.<br><br>
</h2>
<h1>Join the Excitement</h1><br>
<h2>Browse our events by category, book your spot, and unlock new opportunities to create, collaborate, and shine.
</h2>




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