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
        <a href="home.php" class="logo">THE PHOTOGRAPHER</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <!-- <a href="photographer.php">photographer</a> -->
            <a href="events.php">events</a>
            <a href="package.php">package</a>
            <!-- <a href="book.php">book</a> -->

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

    <!-- <section class="header">
        <a href="home.php" class="logo">The Photographer.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="photographer.php">photographer</a>
            <a href="package.php">package</a>
            <a href="events.php">events</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section> -->







    <div class="heading" style="background:url('image/book-now.jpg') no-repeat">
        <h1>book now</h1>
    </div>


    <!-- <section class="booking">
        <h1 class"heading-title">book your photographer!</h1>

        <form action="book_form.php" method="post" class="book-form"></form>

        <div class="flex">
            <div class="inputBox">
                <span>name: </span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email: </span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone: </span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>location: </span>
                <input type="text" placeholder="enter your location" name="location">
            </div>
            <div class="inputBox">
                <span>date: </span>
                <input type="date" name="date">
            </div>
            <div class="inputBox">
                <span>time: </span>
                <input type="time" name="time">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section> -->

    <section class="home-package">

        <h1 class="heading-title">Photographers</h1>

        <div class="box-container">

            <?php
            require_once 'config.php';
            $event_id;
            if (isset($_GET["event"])) {
                $event_id = $_GET["event"];
            }

            if (isset($_POST['submit'])) {
                $photographer = $_POST['photographer'];
                $add_photo = "UPDATE event_table SET event_photographer = '$photographer' WHERE event_id = '$event_id'";
                // echo $add_photo;
                if (mysqli_query($conn, $add_photo)) {
                    header("location:user_events.php");
                } else {
                    echo "Something went wrong!!!";
                }
            }

            $get_pg = "SELECT * FROM user_form WHERE user_type = 'photographer'";

            $result = mysqli_query($conn, $get_pg);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="box">
                    <div class="image">
                        <img src="image/profile.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>' . $row["name"] . '</h3>
                        <p class="photographer_details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid cupiditate perspiciatis nulla animi quas totam, commodi delectus reiciendis expedita neque quos incidunt quidem, iure necessitatibus.</p>
                        <form action="" method = "POST">
                            <input type="text" name="photographer" value="' . $row['Id'] . '" hidden>
                            <input class="btn" type="submit" name = "submit" value="Select">
                        </form>
                    </div>
                    </div>
                    ';
                }
            }

            ?>

            <!-- <div class="box">
                <div class="image">
                    <img src="image/profile.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Photographer Name</h3>
                    <p class="photographer_details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid cupiditate perspiciatis nulla animi quas totam, commodi delectus reiciendis expedita neque quos incidunt quidem, iure necessitatibus.</p>
                    <form action="">
                        <input type="text" name="photographer" value="1">
                        <input type="submit" value="Select">
                    </form>
                    <a href="book.php" class="btn">Select</a>
                </div>
            </div> -->
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
                        <a href="#"><i class="fas fa-envelope"></i> photographer@gmail.com</a>
            </div>

        </div>






    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>