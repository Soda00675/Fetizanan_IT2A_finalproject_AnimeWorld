<?php
$banner = "images/ds/banner.jpg";
$ds01 = "images/ds/ds01.gif";
$ds02 = "images/ds/ds02.gif";
$ds03 = "images/ds/ds03.gif";
$ds04 = "images/ds/ds04.jpg";
$ds05 = "images/ds/ds05.jpg";
$ds06 = "images/ds/ds06.png";
$ds07 = "images/ds/ds07.jpg";
$ds08 = "images/ds/ds08.gif";
$ds09 = "images/ds/ds09.jpg";
$ds10 = "images/ds/ds10.jpg";
$ds11 = "images/ds/ds11.jpg";
$ds12 = "images/ds/ds12.jpg";
$ds13 = "images/ds/ds13.jpg";
$ds14 = "images/ds/ds14.jpg";
$ds15 = "images/ds/ds15.jpg";
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
      <h1 style="text-align: center; padding-top: 40px">Naruto Photo gallery</h1>
    </section>

    <!----- Lesson ----->
    <div class="gallery">
      <img src="<?php echo $nr01; ?>">
      <img src="<?php echo $nr02; ?>">
      <img src="<?php echo $nr03; ?>">
      <img src="<?php echo $nr04; ?>">
      <img src="<?php echo $nr05; ?>">
      <img src="<?php echo $nr06; ?>">
      <img src="<?php echo $nr07; ?>">
      <img src="<?php echo $nr08; ?>">
      <img src="<?php echo $nr09; ?>">
      <img src="<?php echo $nr10; ?>">
      <img src="<?php echo $nr11; ?>">
      <img src="<?php echo $nr12; ?>">
      <img src="<?php echo $nr13; ?>">
      <img src="<?php echo $nr14; ?>">
      <img src="<?php echo $nr15; ?>">
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