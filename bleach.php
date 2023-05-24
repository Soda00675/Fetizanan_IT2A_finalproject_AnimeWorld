<?php
$banner = "images/bleach/banner.jpg";
$bleach01 = "images/bleach/bleach01.png";
$bleach02 = "images/bleach/bleach02.jpg";
$bleach03 = "images/bleach/bleach03.jpg";
$bleach04 = "images/bleach/bleach04.jpg";
$bleach05 = "images/bleach/bleach05.jpg";
$bleach06 = "images/bleach/bleach06.gif";
$bleach07 = "images/bleach/bleach07.gif";
$bleach08 = "images/bleach/bleach08.jpg";
$bleach09 = "images/bleach/bleach09.jpg";
$bleach10 = "images/bleach/bleach10.jpg";
$bleach11 = "images/bleach/bleach11.gif";
$bleach12 = "images/bleach/bleach12.jpg";
$bleach13 = "images/bleach/bleach13.jpg";
$bleach14 = "images/bleach/bleach14.gif";
$bleach15 = "images/bleach/bleach15.gif";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=[device-width], initial-scale=1.0" />
    <title>One Piece</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="script/style1.css" />

    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"
    ></script>
  </head>

  <body>
    
    <!------ HEADER ------->

    <section class="header1">
      <nav>

        <!---<video class="background-video" muted autoplay loop src="<?php echo $videoBg; ?>"></video>--->
        <img class="background-video" src="<?php echo $banner; ?>"style="height: 25%;"/>
        <img src="<?php echo $Logo; ?>" alt="logo" />
        <div class="nav-links" id="nav-links">
          <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

          <ul>
            <li><a href="#"><?php echo "HOME"?></a></li>
            <li><a href="about.php"><?php echo "ABOUT"?></a></li>
            <li><a href="blog.php"><?php echo "BLOG"?></a></li>
            <li><a href="contact.php"><?php echo "CONTACT"?></a></li>
          <li class="dropdown"><a><span><?php echo "MENU"?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#"><?php echo "Breakfast"?></a></li>
              <li><a class="nav-link scrollto" href="about.php"><?php echo "Hot Coffee"?></a></li>
              <li><a class="nav-link scrollto" href="feature.php"><?php echo "Cake"?></a></li>
              <li><a class="nav-link scrollto" href="bots.php"><?php echo "Salad"?></a></li>
              <li><a class="nav-link scrollto" href="team.php"><?php echo "Chicken"?></a></li>
              <li><a class="nav-link scrollto" href="faq.php"><?php echo "Iced Coffee"?></a></li>
              <li><a class="nav-link scrollto" href="#footer"><?php echo "Wine"?></a></li>
              <li><a class="nav-link scrollto" href="#footer"><?php echo "Burger"?></a></li>
            </ul>
          </li>
          </ul>
          
        </div>
        <i class="nav-icons fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1 style="text-align: center; padding-top: 40px">Bleach Photo gallery</h1>
    </section>

    <!----- Lesson ----->
    <div class="gallery">
      <img src="<?php echo $bleach01; ?>">
      <img src="<?php echo $bleach02; ?>">
      <img src="<?php echo $bleach03; ?>">
      <img src="<?php echo $bleach04; ?>">
      <img src="<?php echo $bleach05; ?>">
      <img src="<?php echo $bleach06; ?>">
      <img src="<?php echo $bleach07; ?>">
      <img src="<?php echo $bleach08; ?>">
      <img src="<?php echo $bleach09; ?>">
      <img src="<?php echo $bleach10; ?>">
      <img src="<?php echo $bleach11; ?>">
      <img src="<?php echo $bleach12; ?>">
      <img src="<?php echo $bleach13; ?>">
      <img src="<?php echo $bleach14; ?>">
      <img src="<?php echo $bleach15; ?>">
    </div>

    <!-- CTA -->
    <section class="cta">
      <h1 style="color: black">
      <?php echo "IF I GET REINCARNATED...<br />I WANNA BECOME A CLAM"?>
      </h1>
      <a href="#" class="hero-btn1"><?php echo "HOME"?></a>
    </section>

    <!-----FOOTER----->
    <section class="footer">
      <h4><?php echo "About Us"?></h4>
      <p>
      <?php echo 
        "Welcome to the official One Piece website! We are dedicated to providing 
        fans with the latest news, updates, and in-depth information about the 
        incredible world of One Piece. <br>Our passionate team of fans is committed 
        to creating a vibrant community where fans can connect, engage, and 
        celebrate the adventures of Monkey D. Luffy and the Straw Hat Pirates.
        <br>
        Contact Us:<br>
        Email: info@onepiecewebsite.com<br>
        Phone: +63-XXX-XXXX-XXX <br>"?>
      </p>
      <div class="icons">
        <a href="https://www.facebook.com/onepieceofficial/"><i class="icons-items fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/OnePieceAnimeUS"><i class="icons-items fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/onepiece_staff/?hl=en"><i class="icons-items fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCdAHaWcKdpbT5XkN2Er6BUQ"><i class="icons-items fab fa-youtube"></i></a>
      </div>
      
    </section>

    <script src="index.js"></script>
  </body>
</html>