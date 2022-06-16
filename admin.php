<?php
$error="";
if (isset ($_POST['submit'])) {
if (!empty($_POST [ 'username']) && !empty($_POST['password'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$user="admin";
$pass ="admin";
if ($username == $user && $password==$pass) {
session_start();
$_SESSION['ingelogd'] = true;
header ("Location: homepage.html");
}
}  else {
$error= "Username & password zijn verplicht";
}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/home.js" defer></script>
  </head>
  <body>
    <header class="header">
      <a href="home.html"> <img src="images/echte logo.png" class="logo" /> </a>
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
            <a href="#">pages +</a>
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
      <h1>account</h1>
      <p><a href="homepage.html">home</a> >> login</p>
    </section>

    <section class="login-form">
      <form action="">
        <h3>user login</h3>
        <div class="inputBox">
          <span class="fas fa-user"></span>
          <input type="text" name="" placeholder="enter username" id="" />
        </div>
        <div class="inputBox">
          <span class="fas fa-lock"></span>
          <input
            type="password"
            name=""
            placeholder="enter your password"
            id=""
          />
        </div>
        <input type="submit" value="sign in" class="btn" />
        <div class="flex">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me">remember me</label>
          <a href="#">forgot password?</a>
        </div>
        <a href="register.html" class="btn">create an account</a>
      </form>
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

        <div class="box">
          <h3>newsletter</h3>
          <p>subscribe for latest updates</p>
          <form action="">
            <input type="email" placeholder="enter your email" />
            <input type="submit" value="subscribe" class="btn1" />
          </form>
        </div>
      </div>
      <div class="copyright">
        copyright <span>SHIBA</span> | all rights reserved
      </div>
    </section>
  </body>
</html>
