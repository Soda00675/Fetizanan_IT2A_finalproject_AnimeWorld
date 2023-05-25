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

   <section class="sub-header">
    <nav>

      <!---<video class="background-video" muted autoplay loop src="<?php echo $videoBg; ?>"></video>--->
      <img class="background-video" src="<?php echo $bg; ?>" style="height: 50%;"/>
      <img src="<?php echo $Logo; ?>" alt="logo" />
      <div class="nav-links" id="nav-links">
        <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

        <ul>
          <li><a href="main.php"><?php echo "HOME"?></a></li>
          <li><a href="about.php"><?php echo "ABOUT"?></a></li>
          <li><a href="#"><?php echo "BLOG"?></a></li>
          <li><a href="contact.php"><?php echo "CONTACT"?></a></li>
        <li class="dropdown"><a><span><?php echo "COFFEE GALERY"?></span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a class="nav-link scrollto" href="naruto.php"><?php echo "NARUTO"?></a></li>
              <li><a class="nav-link scrollto" href="op.php"><?php echo "ONE PIECE"?></a></li>
              <li><a class="nav-link scrollto" href="ds.php"><?php echo "DEMON SLAYER"?></a></li>
              <li><a class="nav-link scrollto" href="bleach.php"><?php echo "BLEACH"?></a></li>
              <li><a class="nav-link scrollto" href="hxh.php"><?php echo "HUNTER X HUNTER"?></a></li>
              <li><a class="nav-link scrollto" href="dragonBall.php"><?php echo "DRAGON BALL"?></a></li>
              <li><a class="nav-link scrollto" href="blueLock.php"><?php echo "Blue Lock"?></a></li>
              <li><a class="nav-link scrollto" href="lookism.php"><?php echo "Lookism"?></a></li>
              <li><a class="nav-link scrollto" href="index.php"><?php echo "LOGOUT"?></a></li>
          </ul>
        </li>
        </ul>
        
      </div>
      <i class="nav-icons fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1><?php echo "Blog"?></h1>
  </section>

    <!---- content-->
    <section class="Contact">
      <div class="row">
          <div class="blog-col">
              <h1><?php echo "ONE PIECE BLOG"?></h1>
              <p>
              <?php echo "
                One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. 
                It follows the adventures of Monkey D. Luffy, a young pirate with the ability
                 to stretch his body like rubber after eating a mysterious fruit called the
                  Devil Fruit. Luffy's ultimate goal is to find the One Piece, a legendary 
                  treasure left by the Pirate King, Gol D. Roger, which would grant him the 
                  title of the Pirate King. <br> <br>

                The story begins with Luffy setting out on a journey to assemble a crew and sail 
                the Grand Line, a dangerous and unpredictable sea where the world's greatest 
                treasures and most powerful pirates await. Along the way, Luffy encounters numerous 
                allies and enemies, each with their own unique abilities and motivations. His crew,
                known as the Straw Hat Pirates, consists of diverse characters with distinct 
                personalities and skills. <br> <br>
                
                Throughout the series, Luffy and his crew face formidable foes, explore strange and 
                factions, such as the Marines, the World Government, and other pirate crews, including 
                the fearsome Yonko (Four Emperors). The world of One Piece is richly developed, with
                intricate political landscapes, complex histories, and deep character backstories.<br> <br>
                
                One Piece is known for its compelling storytelling, humor, action-packed sequences, and 
                themes of friendship, dreams, and adventure. It has gained a massive international 
                following since its serialization in 1997 and has become one of the best-selling manga 
                series of all time. The anime adaptation of One Piece has been running since 1999 and 
                has garnered a dedicated fan base.<br> <br>
                
                The story of One Piece is divided into various story arcs, each introducing new locations, 
                characters, and plot developments. Some notable arcs include the East Blue Saga,
                 the Alabasta Saga, the Water 7 Saga, the Dressrosa Saga, and the Whole Cake Island 
                 Saga. As of my knowledge cutoff in September 2021, the series had over 1,100 chapters 
                 and continues to captivate fans with its ongoing narrative.<br> <br>
                
                Please note that since my knowledge is based on information available until September 2021, 
                there may have been new developments or arcs in the series since then. To stay updated on 
                the latest One Piece content, I recommend checking official sources such as the manga or 
                anime releases, news outlets, or dedicated One Piece websites and forums."?>
              </p>
                  <a href="" class="hero-btn black-btn"><?php echo "EXPLORE NOW"?></a>
          </div>
          <div class="blog-col">
              <img src="images/g5.png">
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
