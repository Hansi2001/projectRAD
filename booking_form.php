

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event Details</title>

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
            <a href="login_form.php">login</a>
           

        <!--    <?php
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

    <div class="form-container">

        <form action="" method="post">
            <h3>Please Enter Your Event Details</h3>
            <?php
            if (isset($_GET["event"])) {
                $event = $_GET['event'];
                echo "<p>Event Type</p>";
                echo "<h3>" . $event . "</h3>";
            }
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="event_name" required placeholder="Event Name">

            <input type="text" name="event_date" required placeholder="Event Date and Time" onfocus="(this.type='date')">

            <input type="text" name="event_location" required placeholder="Event Location">

            <input type="text" name="event_start_time" required placeholder="Event Start Time" onfocus="(this.type='time')">

            <textarea name="event_details" placeholder="Additional Details (Optional)" id="" cols="30" rows="5"></textarea>

            <select name="event_package" id="">
                <option value="1">Package 1: Diamond</option>
                <option value="2">Package 2: Gold</option>
                <option value="3">Package 3: Silver</option>
                <option value="4">Package 4: Bronze</option>
            </select>

            <p><a href="package.php">Click Here</a> to get details about packages <a href="package.php"><i class="fa-solid fa-circle-info"></i></a></p>

            <input type="submit" name="submit" value="Continue" class="form-btn">
        </form>

    </div>

</body>

</html>