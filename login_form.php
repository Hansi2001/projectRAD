<?php

@include 'config.php';

if (isset($_GET["error"])) {
   $error[] = $_GET["error"];
}

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      if ($row['user_type'] == 'photographer') {

         $_SESSION['photographer_name'] = $row['name'];
         $_SESSION['photographer_id'] = $row['Id'];
         header('location:photographer_page.php');
      } elseif ($row['user_type'] == 'client') {

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_id'] = $row['Id'];
         header('location:user_page.php');
      }
   } else {
      $error[] = 'incorrect email or password!';
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
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

   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="Enter Your Email">
         <input type="password" name="password" required placeholder="Enter Your Password">
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="register_form.php">register now</a></p>
      </form>

   </div>

</body>

</html>