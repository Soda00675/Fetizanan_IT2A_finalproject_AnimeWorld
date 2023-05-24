<?php
$videoBg = "images/bg1.webm";
$bg = "images/bg2.jpg";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=[device-width], initial-scale=1.0" />
    <title><?php echo "One Piece"?></title>

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

   <section class="sub-header">
    <nav>

      <!---<video class="background-video" muted autoplay loop src="<?php echo $videoBg; ?>"></video>--->
      <img class="background-video" src="<?php echo $bg; ?>" style="height: 50%;"/>
      <img src="<?php echo $Logo; ?>" alt="logo" />
      <div class="nav-links" id="nav-links">
        <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

        <ul>
          <li><a href="main.php"><?php echo "HOME"?></a></li>
          <li><a href="#"><?php echo "ABOUT"?></a></li>
          <li><a href="blog.php"><?php echo "BLOG"?></a></li>
          <li><a href="contact.php"><?php echo "CONTACT"?></a></li>
        <li class="dropdown"><a><span><?php echo "COFFEE GALERY"?></span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a class="nav-link scrollto" href="#"><?php echo "Home"?></a></li>
            <li><a class="nav-link scrollto" href="about.php"><?php echo "About"?></a></li>
            <li><a class="nav-link scrollto" href="feature.php"><?php echo "Features"?></a></li>
            <li><a class="nav-link scrollto" href="bots.php"><?php echo "Our-Bots"?></a></li>
            <li><a class="nav-link scrollto" href="team.php"><?php echo "Team"?></a></li>
            <li><a class="nav-link scrollto" href="faq.php"><?php echo "F.A.Q"?></a></li>
            <li><a class="nav-link scrollto" href="#footer"><?php echo "Footer"?></a></li>
          </ul>
        </li>
        </ul>
        
      </div>
      <i class="nav-icons fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1><?php echo "About us"?></h1>
    
  </section>


    <!---- content-->
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1><?php echo "ONE PIECE"?></h1>
                <p>
                <?php echo "
                    Welcome to the official One Piece website!
                     We are the ultimate destination for fans 
                     of the One Piece anime and manga series 
                     created by Eiichiro Oda. Our mission is 
                     to bring fans together, provide the latest
                      news and updates, and offer a comprehensive
                      resource for all things One Piece. With a 
                      passionate team of dedicated fans, we strive
                       to create an inclusive community where fans can 
                       immerse themselves in the captivating world of 
                       Monkey D. Luffy and his Straw Hat Pirates. Join us as we
                        celebrate the adventure, friendship, and dreams that 
                        define One Piece. Explore our website, engage with the 
                        community, and let the grand adventure continue!"?>
                </p>
                    <a href="" class="hero-btn black-btn"><?php echo "EXPLORE NOW"?></a>
            </div>
            <div class="about-col">
                <img src="images/banner.jpg">
            </div>
        </div>

    </section>
    
    <!-----FOOTER----->
    <section class="footer">
      <h4><?php echo "About Us"?></h4>
      <p>
      <?php echo "
        Welcome to the official One Piece website! We are dedicated to providing 
        fans with the latest news, updates, and in-depth information about the 
        incredible world of One Piece.<br> Our passionate team of fans is committed 
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
