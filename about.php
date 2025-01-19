<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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
            <a href="events.php" >events</a>
            <a href="package.php">package</a>
            <a href="login_form.php">login</a>
            
<!--
            <?php

                require_once 'config.php';

                if(isset($_SESSION['user_name'])){
                    echo '
                    <span class="profile-holder profile-dropdown">
                    <i class="fa-regular fa-user"></i>
                        <div class="profile-dropdown-content">
                            <p>'.$_SESSION['user_name'].'</p>
                            <a href="user_page.php">Profile</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </span>
                    ';
                }
                else{
                    echo '
                        <a href="login_form.php">login</a>
                    ';
                }
            ?> 
-->
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>


    <div class="heading" style="background:url(ccimages/image005.jpg) no-repeat">
        <h1>about us</h1>
    </div>
    <h3> 
       <h2> ABOUT US <br></h2>
Welcome to CONTENTLINK, the ultimate destination for connecting brands, businesses, and individuals 
with talented content creators and influencers. We believe in the power of creativity and collaboration to bring 
your ideas to life and create meaningful connections with audiences worldwide.
<br><br>
<h2>Our Mission<br></h2>
Our mission is to simplify the process of discovering, booking, and collaborating with content creators across industries and niches. Whether you're looking for an influencer to amplify your brand, a skilled videographer to craft compelling visuals, or a writer to tell your story, [Your Website Name] is here to bridge the gap.
<br><br>
<h2>What We Offer</h2>
<br>• For Clients:    We provide a streamlined platform to find the perfect content creator for your project, manage bookings, and ensure seamless communication. Our secure payment system and project tracking tools give you peace of mind every step of the way.
<br>• For Creators: Showcase your talent, connect with exciting opportunities, and grow your career with access to a wide range of clients and projects. Our tools and analytics empower you to focus on what you do best—creating amazing content.
<br><br>
<h2>Why Choose Us?</h2>
<br>• Curated Talent Pool: Our platform features a diverse selection of vetted and talented creators to match your unique needs.
<br>• Transparency & Trust: We prioritize secure transactions, clear communication, and mutual respect between creators and clients.
<br>• Efficiency: Save time and resources with our intuitive tools for project management and collaboration.
<br><br>
<h2>Join Our Community</h2>
<br>Whether you're a brand looking to make an impact or a creator ready to share your skills, CONTENTLINK is your partner in success. Let’s create something extraordinary together.


    <section class="about">

        <div class="image">
            <img src="images/about1.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>we provide you a trusted and fastest sevice.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>locations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-lkr"></i>
                    <span>affoedable packages</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>trusted guide</span>
                </div>
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
                        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info<h3>
                        <a href="#"><i class="fas fa-phone"></i> 25-535-666</a>
                        <a href="#"><i class="fas fa-phone"></i> 22-333-555</a>
                        <a href="#"><i class="fas fa-envelope"></i> ccreators@gmail.com</a>
            </div>

        </div>



    </section>



    <script src="js/script.js"></script>

</body>

</html>