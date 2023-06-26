<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Ahmed.Com Admin Page</title>
    <link rel="stylesheet" href="css/style.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="https://www.facebook.com/profile.php?id=100076523432991&mibextid=ZbWKwL"
                    target="_blank">Al-Ahmed.Com</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="contact_btn">
                <a href="https://www.instagram.com/funnyvideosbyahmed123/">Contact Me</a>
            </div>
        </nav>

        <div class="center_content">
        <h1>Wellcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
<br>           
            <h2>Youtuber / Full Stack Developer</h2>
           
           
            <h3>Hi, <span>Admin</span></h3>

            <p>This Is An Admin Page</p>
            <a href="login_form.php" class="btn btn-outline-dark">Login</a>
            <a href="register_form.php" class="btn">Register</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
        <div class="extra_content">
            <h3 class="extra"><i>Php</i></h3>
        </div>

        <div class="social_network">
            <div class="fa_icons">
                <a href="https://www.facebook.com/?ref=homescreenpwa"><i class="fa fa-facebook-official"></i></a>
            </div>
            <div class="fa_icons">
                <a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="fa_icons">
                <a href="https://www.instagram.com/funnyvideosbyahmed123/"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="fa_icons">
                <a href="https://www.youtube.com/channel/UCKJy0qevKzAaq0GSBUfwSew"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <div class="grid_section1">
            <img src="image/grid2.png" alt="" srcset="">
        </div>
        <div class="grid_section2">
            <img src="image/grid2.png" alt="" srcset="">
        </div>
        <div class="grid_section3">
            <img src="image/grid2.png" alt="" srcset="">
        </div>
    </header>
</body>

</html>