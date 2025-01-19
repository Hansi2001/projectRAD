<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;700&display=swap" rel="stylesheet">

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
            <a href="login_form.php">login</a>
            

          <!--  <?php

                require_once 'config.php';

                if(isset($_SESSION['user_name'])){
                    echo '
                    <span class="profile-holder profile-dropdown">
                    <i class="fa-regular fa-user"></i>
                        <div class="profile-dropdown-content">
                            <p>'.$_SESSION['user_name'].'</p>
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


    <section class="packages">

        <!-- <h1 class="heading-title">Most Pupolar</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src ="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Platinum</h3>
                <p>Make your day memorable</p>
                <a href="book.php" class="btn">book</a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src ="images/img-2.jpg" alt="">
        </div>
        <div class="content">
            <h3>Gold</h3>
            <p>Make your day memorable</p>
            <a href="book.php" class="btn">book</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src ="images/img-3.jpg" alt="">
        </div>
        <div class="content">
            <h3>Silver</h3>
            <p>Make your day memorable</p>
            <a href="book.php" class="btn">book</a>
        </div>
    </div>

    <div class="load-more"><span class=""btn>load more</span></div> -->
    <!-- 
        *
        *   Social Media
        *
     -->
    <h3>Social Media</h3>

        <div class="flexbox">
            <div class="flexcard flexcardDiamond">
                <div class="flexcardNumber flexcardNumberDiamond">01</div>
                <div class="flex flexcardTitle">Diamond</div>
                <div class="flex flexcardText">Full-Day Service(8–10 hours),Professional Video Shooting and editing(5 videos,up to 15 minutes each),Engagement Boost,Thumbnail Designs(5 premium designs),Price:Starting from $1500.<br><br></div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardGold">
                <div class="flexcardNumber flexcardNumberGold">02</div>
                <div class="flex flexcardTitle">Gold</div>
                <div class="flex flexcardText">Half-Day Service(4–6 hours),Video Shooting and Editing(3 videos,up to 10 minutes each),Thumbnail Designs(3 designs),Short-Form Content Creation(5 TikTok/Instagram Reels),Price: Starting from $1000.<br><br>
</div>
                <div class="flex flexcardImg">
                   <!-- <button class="btn">SELECT</button> -->
                   <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardSilver">
                <div class="flexcardNumber flexcardNumberSilver">03</div>
                <div class="flex flexcardTitle">Silver</div>
                <div class="flex flexcardText">3-Hour Service,Basic Video Shooting and Editing (1 video,up to 5 minutes),Thumbnail Design (1 design),Short-Form Content Creation (3 TikTok/Instagram Reels),Price: Starting from $600.<br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardBronze">
                <div class="flexcardNumber flexcardNumberBronze">04</div>
                <div class="flex flexcardTitle">Bronze</div>
                <div class="flex flexcardText">2-Hour Service,Basic Video Shooting and Editing (1 video, up to 3 minutes),Short-Form Content Creation (1 TikTok/Instagram Reel),Price: Starting from $400<br><br><br><br></div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
        </div>

        


    <!-- 
        *
        *   Celebrity
        *
     -->
     <br><br><br><br>
    <h3>Celebrity</h3>

        <div class="flexbox">
            <div class="flexcard flexcardDiamond">
                <div class="flexcardNumber flexcardNumberDiamond">01</div>
                <div class="flex flexcardTitle">Diamond</div>
                <div class="flex flexcardText">Full-Day Service (8–10 hours),High-End Photoshoot with Professional Lighting(50 photos),Event Coverage,Social Media Optimization,Personal Branding Services,Live Streaming Setup,Price: Starting from $5000.<br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardGold">
                <div class="flexcardNumber flexcardNumberGold">02</div>
                <div class="flex flexcardTitle">Gold</div>
                <div class="flex flexcardText">Half-Day Service (4–6 hours),Photoshoot with Professional Editing (30 photos),Video Shooting for Social Media,Event Coverage for a Specific Event,Price: Starting from $3000.<br><br><br><br></div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardSilver">
                <div class="flexcardNumber flexcardNumberSilver">03</div>
                <div class="flex flexcardTitle">Silver</div>
                <div class="flex flexcardText">3-Hour Service,Basic Photoshoot (20 photos),Video Shooting for a Single Purpose (1 video up to 5 minutes),Social Media Post Design (3 custom posts),Price: Starting from $1500.<br><br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardBronze">
                <div class="flexcardNumber flexcardNumberBronze">04</div>
                <div class="flex flexcardTitle">Bronze</div>
                <div class="flex flexcardText">2-Hour Service,Photoshoot with Light Editing (10 photos),Short Video Clip (1 video up to 3 minutes),Social Media Caption Assistance for One Post,Price: Starting from $1000.<br><br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
        </div>

    <!-- 
        *
        *   Musician
        *
     -->
     <br><br><br>
    
    <h3>Musician</h3>

        <div class="flexbox">
            <div class="flexcard flexcardDiamond">
                <div class="flexcardNumber flexcardNumberDiamond">01</div>
                <div class="flex flexcardTitle">Diamond</div>
                <div class="flex flexcardText">Full-Day Service(8–10 hours),Live Performance Recording with professional equipment,Studio Session Recording,Music Video Production (1 video, up to 10 minutes),Event Coverage for Live Gigs or Concerts,Price: Starting from $5000.
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardGold">
                <div class="flexcardNumber flexcardNumberGold">02</div>
                <div class="flex flexcardTitle">Gold</div>
                <div class="flex flexcardText">Half-Day Service (4–6 hours),Studio Session Recording (up to 3 songs),Live Performance Recording,Short Music Video Production (1 video, up to 5 minutes),Social Media Content Creation (3 promotional clips),Price: Starting from $3000.
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardSilver">
                <div class="flexcardNumber flexcardNumberSilver">03</div>
                <div class="flex flexcardTitle">Silver</div>
                <div class="flex flexcardText">3-Hour Service,Studio Session Recording (1 song),Short Music Video Clip (1 video, up to 2 minutes),Social Media Post Creation (2 posts),Price: Starting from $1500.<br><br><br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardBronze">
                <div class="flexcardNumber flexcardNumberBronze">04</div>
                <div class="flex flexcardTitle">Bronze</div>
                <div class="flex flexcardText"> 2-Hour Service,Live Performance Audio Recording (1 track),Social Media Snippet Creation (1 clip),Price: Starting from $800 <br><br><br><br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
        </div>

    <!-- 
        *
        *   Photographer
        *
     -->
<br><br><br><br>
    <h3>Photographer</h3>

        <div class="flexbox">
            <div class="flexcard flexcardDiamond">
                <div class="flexcardNumber flexcardNumberDiamond">01</div>
                <div class="flex flexcardTitle">Diamond</div>
                <div class="flex flexcardText">Full-Day Service (8–10 hours),Event Photography (100+ edited photos),Fashion Shoot with Studio Setup,Drone Coverage for Aerial Shots,Social Media Gallery Creation,Photo Album Design and Delivery,Price: Starting from $5000.
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardGold">
                <div class="flexcardNumber flexcardNumberGold">02</div>
                <div class="flex flexcardTitle">Gold</div>
                <div class="flex flexcardText">Half-Day Service (4–6 hours),Event Photography (50+ edited photos),Nature Photography Session (1–2 locations),Fashion Shoot with Basic Setup,Price: Starting from $3000.<br><br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardSilver">
                <div class="flexcardNumber flexcardNumberSilver">03</div>
                <div class="flex flexcardTitle">Silver</div>
                <div class="flex flexcardText">3-Hour Service,Event Photography (30 edited photos),Basic Nature Photography (1 location),Fashion Portrait Session (1 outfit change),Price: Starting from $1500.<br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
                </div>
            </div>
            <div class="flexcard flexcardBronze">
                <div class="flexcardNumber flexcardNumberBronze">04</div>
                <div class="flex flexcardTitle">Bronze</div>
                <div class="flex flexcardText">2-Hour ServiceBasic Event Photography (10 edited photos),Portrait Shots (outdoor),Price: Starting from $800.<br><br><br><br><br>
</div>
                <div class="flex flexcardImg">
                    <a href="booking_form.php" class="btn">select</a>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>