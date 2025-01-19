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

        <h1 class="heading-title">Celebrity</h1>
        

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="ccimages/dusheni.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Dusheni Miyurangi</h3>
                    <p>A talented actress, Dusheni has been part of several acclaimed projects. 
                        She stars in the 2024 romantic drama Sihina Nelum Mal, directed by Shameera Rangana Naotunna.</p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/umali01.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Umali Thilakarathne</h3>
                    <p>Umali has been recognized for her strong performances in various films. 
                        She plays a pivotal role in Sihina Nelum Mal, further establishing her reputation in the industry.</p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/nethmi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nethmi Nisheka Roshel Rogers</h3>
                    <p>Nethmi is an emerging actress known for her roles in productions like Adaraneeya Prarthana (2022) and Kambili (2024). 
                        She is recognized for her talent and potential in the Sri Lankan entertainment industry.</p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/sanga.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kumar Sangakkara</h3>
                    <p>A former cricketer, Sangakkara is widely regarded as one of the greatest batsmen in the history of cricket.
                         He has been a pivotal figure in Sri Lanka's cricketing success over the years.</p>
                    <a href="booking_form.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="ccimages/susa.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Susanthika Jayasinghe</h3>
                    <p>A distinguished sprinter, Jayasinghe has represented Sri Lanka in multiple Olympic Games and World Championships. 
                        She secured a silver medal in the 200 meters at the 2000 Sydney Olympics. </p>
                    <a href="booking_form.php" class="btn">Book Now</a>
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