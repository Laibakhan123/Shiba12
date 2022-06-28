<?php
  $connect= new mysqli("localhost" , "root" , "" , "energy");
  if($connect->connect_error){
    die("connection failed : ".$conn->connect_error);
  }

  $artiesten = $connect->query("SELECT artiest_id, naam FROM artiesten");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artiest</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/home.js" defer></script>
  </head>
  <body>
    <header class="header">
      <a href="homepage.html">
        <img src="images/echte logo.png" class="logo" />
      </a>
      <nav class="navbar">
        <ul>
          <li><a href="homepage.html">home</a></li>
          <li>
            <a href="#">Producten+</a>
            <ul>
              <li><a href="producten.html">Product</a></li>
              <li><a href="ingrediënten.html">Ingrediënten</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Events +</a>
            <ul>
              <li><a href="evenementen.html">Evenementen</a></li>
              <li><a href="artiest.html">Artiest</a></li>
              <li><a href="details.html">Details</a></li>
            </ul>
          </li>
          <li><a href="contact.html">contact</a></li>
          <li>
            <a href="#">account +</a>
            <ul>
              <li><a href="login.html">login</a></li>
              <li><a href="register.html">register</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="shoppingcart.html" class="fas fa-shopping-cart"></a>
      </div>

      <form action="" class="search-form">
        <input
          type="search"
          name=""
          placeholder="search here..."
          id="search-box"
        />
        <label for="search-box" class="fas fa-search"></label>
      </form>
    </header>

    <section class="heading">
      <h1>Artiesten</h1>
      <p><a href="home.html">home</a> >> artiesten</p>
    </section>

    <section class="blogs">
      <div class="box-container">

        <?php while($artiest = $artiesten->fetch_assoc()) { ?>

          <div class="box">
            <div class="image">
              <img
                src="images/artiesten/<?php echo $artiest['artiest_id']; ?>.jpg"
                alt=""
              />
            </div>
            <div class="content">
              <h3><?php echo $artiest['naam']; ?></h3>
              <p>
                Lipa werd in 1995 geboren in het Verenigd Koninkrijk. Haar ouders
                zijn Albanezen die in de jaren 90 gevlucht waren uit Kosovo. In
                2015 maakte ze haar debuutsingle "New Love". Haar tweede single
                "Be the One" haalde de hitlijsten in Nederland, België,
                Zwitserland, Oostenrijk en Bulgarije.
              </p>
              <a href="details.html" class="btn1">read more</a>
              <div class="icons">
                <a href="#"> <i class="fas fa-clock"></i> 13 juni, 2022 </a>
                <a href="#"> <i class="fas fa-user"></i> by admin </a>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
    </section>

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
          <a href="producten.html">
            <i class="fas fa-angle-right"></i> products</a
          >
          <a href="evenementen.html">
            <i class="fas fa-angle-right"></i> Evenementen</a
          >
          <a href="artiest.html">
            <i class="fas fa-angle-right"></i> Artiesten</a
          >
          <a href="contact.html"> <i class="fas fa-angle-right"></i> contact</a>
          <a href="login.html"> <i class="fas fa-angle-right"></i> login</a>
          <a href="register.html">
            <i class="fas fa-angle-right"></i> register</a
          >
          <a href="shoppingcart.html">
            <i class="fas fa-angle-right"></i> cart</a
          >
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#"> <i class="fas fa-angle-right"></i> my account </a>
          <a href="#"> <i class="fas fa-angle-right"></i> my order </a>
          <a href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
          <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
          <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>
      </div>
      <div class="copyright">
        copyright <span>SHIBA</span> | all rights reserved
      </div>
    </section>
  </body>
</html>
