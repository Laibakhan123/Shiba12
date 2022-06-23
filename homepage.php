<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/home.js" defer></script>
  </head>
  <body>
    <header class="header">
      <a href="homepage.html"> <img src="images/echte logo.png" class="logo" /> </a>
      <nav class="navbar">
        <ul>
          <li><a href="homepage.html">Home</a></li>
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
              <li><a href="evenementen.html">Evementen</a></li>
              <li><a href="artiest.html">Artiesten</a></li>
              <li><a href="details.html">Details</a></li>
            </ul>
          </li>
          <li><a href="contact.html">contact</a></li>
          <li>
            <a href="#">account</a>
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
        <div id = "admin-btn" class="fa fa-user icon"></div>
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
    <section class="home">
      <div
        class="slide active"
        style="background: url(images/slideshow\ 2.jpg) no-repeat"
      >
        <div class="content">
          <span>Evenement</span>
          <h3>Shiba solo Q</h3>
          <a href="evenementen.html" class="btn">Meer evenementen</a>
        </div>
      </div>

      <div class="slide" style="background: url(images/shiba.jpg) no-repeat">
        <div class="content">
          <span>Evenement</span>
          <h3>Shiba king of the air</h3>
          <a href="evenementen.html" class="btn">Meer evenementen</a>
        </div>
      </div>

      <div class="slide" style="background: url(images/event2.png) no-repeat">
        <div class="content">
          <span>Evenement</span>
          <h3>BC ONE E-BATTLE</h3>
          <a href="evenementen.html" class="btn">Meer evenementen</a>
        </div>
      </div>

      <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
      <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>
    </section>
    <section class="banner">
      <div class="box">
        <img src="images/lemonnn.png" alt="" />
        <div class="content">
          <span>Aanbieding</span>
          <h3>50% korting</h3>
          <a href="producten.html" class="btn1">Koop nu</a>
        </div>
      </div>

      <div class="box">
        <img src="images/lychee.png" alt="" />
        <div class="content">
          <span>Aanbieding</span>
          <h3>50% korting</h3>
          <a href="producten.html" class="btn1">Koop nu</a>
        </div>
      </div>

      <div class="box">
        <img src="images/blueberryyy.png" alt="" />
        <div class="content">
          <span>Aanbieding</span>
          <h3>50% korting</h3>
          <a href="producten.html" class="btn1">Koop nu</a>
        </div>
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
          <a href="https://nl-nl.facebook.com/shiba">
            <i class="fab fa-facebook-f"></i> facebook
          </a>
          <a href="https://twitter.com/shiba">
            <i class="fab fa-twitter"></i> twitter
          </a>
          <a href="https://twitter.com/shiba">
            <i class="fab fa-instagram"></i> instagram
          </a>
          <a href="https://nl.pinterest.com/shiba">
            <i class="fab fa-pinterest"></i> pinterest
          </a>
          <a href="https://www.linkedin.com/login/nl">
            <i class="fab fa-linkedin"></i> linkedin
          </a>
          <a href="https://github.com/Laibakhan123/Shiba12.git">
            <i class="fab fa-github"></i> github
          </a>
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
