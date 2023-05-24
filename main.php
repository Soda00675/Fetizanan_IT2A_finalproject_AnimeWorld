<?php
$videoBg = "images/bg.webm";
$OpLogo = "images/LG.png";
$Logo = "images/LOGO4.png";
$bg = "images/bg2.jpg";

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

    <section class="header">
      <nav>

       <video class="background-video" muted autoplay loop src="<?php echo $videoBg; ?>"></video>
         <!---<img class="background-video" src="<?php echo $bg; ?>"/>--->
        <img src="<?php echo $Logo; ?>" alt="logo" />
        <div class="nav-links" id="nav-links">
          <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          <li class="dropdown"><a><span>MENU</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="naruto.php"><?php echo "NARUTO"?></a></li>
              <li><a class="nav-link scrollto" href="op.php"><?php echo "ONE PIECE"?></a></li>
              <li><a class="nav-link scrollto" href="feature.php"><?php echo "DEMON SLAYER"?></a></li>
              <li><a class="nav-link scrollto" href="bleach.php"><?php echo "BLEACH"?></a></li>
              <li><a class="nav-link scrollto" href="team.php"><?php echo "HUNTER X HUNTER"?></a></li>
              <li><a class="nav-link scrollto" href="faq.php"><?php echo "DRAGON BALL"?></a></li>
              <li><a class="nav-link scrollto" href="#footer"><?php echo "Blue Lock"?></a></li>
              <li><a class="nav-link scrollto" href="#footer"><?php echo "Lookism"?></a></li>
            </ul>
          </li>
          </ul>
          
        </div>
        <i class="nav-icons fa fa-bars" onclick="showMenu()"></i>
      </nav>

      <div class="text-box">
        
      <a href="index.php"><img src="<?php echo $OpLogo; ?>" alt="logo" /></a>
        <p>
          <?php echo " “Power isnt determined by your size, but the size of your heart and dreams!” "?>
        </p>
        <a href="login.php" class="hero-btn"><?php echo "LOG IN"?></a>
      </div>
    </section>

    <!----- Lesson ----->

    <section class="lesson">
      <h1><?php echo "Life Lesson One Piece Has to Offer"?></h1>
      <p><?php echo "One Piece is not just anime but also a source of inspiration and learning."?></p>

      <div class="row">
        <div class="lesson-col">
          <h3><?php echo "Follow your dreams"?></h3>
          <p>
          <?php echo 
            "One of the primary themes of One Piece is following your dreams. 
            The main character, Monkey D. Luffy, sets out to become the Pirate 
            King, and he never gives up on his dream, no matter what obstacles
             he faces. This is an important lesson for everyone to follow their
             dreams, even if it seems impossible or difficult." ?>
          </p>
        </div>

        <div class="lesson-col1">
          <h3><?php echo "The importance of friendship"?></h3>
          <p>
          <?php echo 
            "Another lesson in One Piece is the importance of friendship. 
            Luffy's crew is made up of people from all different backgrounds,
             and they all work together to achieve their goals. The crew 
             supports each other through thick and thin, and they are willing 
             to risk their lives for one another. This is a powerful message 
             about the value of true friendship."?>
          </p>
        </div>

        <div class="lesson-col2">
          <h3><?php echo "The consequences of power"?></h3>
          <p>
          <?php echo 
            "One Piece also explores the consequences of power. The series 
            shows how those in positions of power can become corrupted 
            by it, and how it can be used to oppress others. This is an 
            important lesson about the responsibility that comes with 
            power and the importance of using it wisely."?>
        </div>
      </div>
    </section>



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