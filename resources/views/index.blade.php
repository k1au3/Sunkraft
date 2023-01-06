<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" />

    
        <title>Sunkraft</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         
         {{-- favicon   --}}
         <link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml">

          {{-- custom css link --}}
         <link rel="stylesheet" href="/assets/css/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet">

         <link rel="preload" as="image" href="/images/hero-product-1.jpg">
         <link rel="preload" as="image" href="/images/hero-product-2.jpg">
         <link rel="preload" as="image" href="/images/hero-product-3.jpg">
         <link rel="preload" as="image" href="/images/hero-product-4.jpg">
         <link rel="preload" as="image" href="/images/hero-product-5.jpg">
    
         <link rel="preload" as="image" href="./images/Sun_Craft_Artistic-1.jpg">
</head>

<body>

      <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="input-wrapper">
        <input type="search" name="search" placeholder="Search Anything..." class="input-field">

        <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
      </div>

      <a href="#" class="logo">SunKraft</a>

      <div class="header-action">

        <button class="header-action-btn" aria-label="user">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="header-action-btn" aria-label="favorite list">
          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

        <button class="header-action-btn" id="cart-icon" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true" id="cart-icon"></ion-icon>

          <!-- <span class="btn-badge">0</span> -->
        </button>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

        <!-- Cart -->
        <div class="cart"> 
          <h2 class="cart-title">Shopping Cart</h2>
          <!-- content  -->
          <div class="cart-content">
            
            
          </div>
          <!-- total -->
          <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">$0</div>
          </div>
          <!-- buy button  -->
          <a href="#/templates/payment.html"><button class="btn-buy" type="button">Checkout</button>
            <!-- cart close  -->
            <button id="close-cart"><ion-icon name="exit"></ion-icon></button></a>
        </div>

      </div>

    </div>
  </header>





  <!-- 
    - #SIDEBAR
  -->

  <div class="sidebar" data-navbar>

    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
      <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
    </button>

    <div class="wrapper">

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Language</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">English</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Kiswahili</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Other</a>
        </li>

      </ul>

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Currency</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">KSH- Kenya Shillngs</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">USD- US Dollar</a>
        </li>

      

      </ul>

    </div>

    <nav class="navbar">
      <ul class="navbar-list">

        <li class="navbar-item">
          <a href="#home" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li class="navbar-item">
          <a href="#about" class="navbar-link" data-nav-link>About</a>
        </li>

        <li class="navbar-item">
          <a href="#product" class="navbar-link" data-nav-link>Shop</a>
        </li>

        <li class="navbar-item">
          <a href="#blog" class="navbar-link" data-nav-link>Blogs</a>
        </li>

      </ul>
    </nav>

    <ul class="contact-list">

      <li>
        <p class="contact-list-title">Contact Us</p>
      </li>

      <li class="contact-item">
        <address class="address">
          Along Nairobi Highway <br> Next to Shell Petrol Station Near Rupa's Mall<br>, 30100, Eldoret, Kenya
        </address>
      </li>

      <li class="contact-item">
        <a href="mailto:sunkraftdesigners@gmail.com" class="contact-link">sunkraftdesigners@gmail.com</a>
      </li>

      <li class="contact-item">
        <a href="tel:+254722319617" class="contact-link">(254) 722319617</a>
      </li>

    </ul>

    <div class="social-wrapper">

      <p class="social-list-title">Follow US On Socials</p>

      <ul class="social-list">

        <li>
          <a href="https://facebook.com/sunkraft" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="https://twitter.com/sunkraft" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="https://instagram.com/sunkraft" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

      </ul>

    </div>

  </div>

  <div class="overlay" data-overlay data-nav-toggler></div>

  
  <main>
    <article>

      {{-- Hero --}}

      <section class="section hero" id="home" aria-label="home">
        <div class="container">

          <ul class="hero-list">

            <li>
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 285; --height: 396;">
                  <img src="./assets/img/decor/9.jpg" loading="lazy" width="285" height="396" alt="Art Deco Home"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" style="color: #fff ;" class="card-title">Art Deco Home</a>
                  </h3>

                  <p style="color: #fff;" class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2" href="/products">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 568; --height: 389;">
                  <img src="./images/Sun_Craft_Artistic-1.jpg" loading="lazy"  width="568" height="389" alt="Bed"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Bed</a>
                  </h3>

                  <p class="card-text">Furniture</p>
                </div>

              </div>
            </li>

            <li>
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 285; --height: 396;">
                  <img src="./assets/sunkraft/SAM_1388.JPG" width="285" height="396" loading="lazy" alt="Vase Of Flowers"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Diner</a>
                  </h3>

                  <p class="card-text">Furniture</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 580; --height: 213;">
                  <img src="./assets/sunkraft/SAM_1452.JPG" loading="lazy" width="580" height="213" alt="Wood Eggs"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Tables & Stools</a>
                  </h3>

                  <p class="card-text">Furniture</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 580; --height: 213;">
                  <img src="./assets/sunkraft/hero-product-5.jpg" width="580" height="213" alt="Table Wood Pine"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Table Wood Pine</a>
                  </h3>

                  <p class="card-text">Furniture</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <h2 class="section-title">SunKraft Store</h2>

          <p class="section-text">
            When you start with a portrait and search for a pure form, a clear volume, through successive eliminations,
            you arrive
            inevitably at the egg. Likewise, starting with the egg and following the same process in reverse, one
            finishes with the
            portrait.
          </p>

          <div class="about-card">
            <figure class="card-banner img-holder" style="--width: 1170; --height: 450;">
              <img src="./assets/img/logo/IMG_20221209_113231.jpg" width="1170" height="450" loading="lazy" alt="Woodex promo"
                class="img-cover">
            </figure>

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play-circle-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

        </div>
      </section>





      <!-- 
        - #PRODUCTS
      -->

      <section class="section product" id="product" aria-label="product">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Popular Products</h2>

            <ul class="filter-btn-list">

              <li class="filter-btn-item">
                <button class="filter-btn active" data-filter-btn="all">All Products</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="bedroom">Bedroom</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="livingroom">Living Room </button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="diningroom">Dining Room</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="other">other</button>
              </li>

            </ul>
          </div>

          
          <!-- products  -->

        
          <ul class="shop-content product-list" data-filter="all">

        <a href="/products">
          <li class="product-box bed bedroom" >
            <img src="/images/Sun_Craft_Artistic-2.jpg" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Bed</h2>
            <span class="price">$50</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>
        </a>

          <li class="product-box livingroom">
            <img src="/images/Sun_Craft_Artistic-3.jpg" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Helen Chair</h2>
            <span class="price">$30</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box livingroom">
            <img src="/images/Sun_Craft_Artistic-4.jpg" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Arm Chair</h2>
            <span class="price">$23</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box other">
            <img src="/images/Sun_Craft_Artistic-5.jpg" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Wall Decor</h2>
            <span class="price">$17</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
        </li>

          <li class="product-box livingroom">
            <img src="/images/Sun_Craft_Artistic-6.jpg" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Sofa</h2>
            <span class="price">$50</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box other">
            <img src="/images/Sun_Craft_Artistic-7.jpg" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Wall Decor</h2>
            <span class="price">$16</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box diningroom">
            <img src="/assets/sunkraft/SAM_1397.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Diner</h2>
            <span class="price">$40</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box other bedroom">
            <img src="/assets/sunkraft/SAM_1368.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Bed</h2>
            <span class="price">50</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box other">
            <img src="/assets/img/decor/3.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Wall Decor</h2>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          

          <li class="product-box livingroom">
            <img src="/assets/sunkraft/SAM_1413.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Wing Chair</h2>
            <span class="price">$20</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          

          <li class="product-box livingroom">
            <img src="/assets/sunkraft/SAM_1447.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">sofa</h2>
            <span class="price">$50</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          

          <li class="product-box livingroom">
            <img src="/assets/sunkraft/SAM_1436.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Green Velvet Sofa</h2>
            <span class="price">50</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box bedroom">
            <img src="/assets/sunkraft/SAM_1420.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Night Stand</h2>
            <span class="price">50</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box livingroom">
            <img src="/assets/sunkraft/SAM_1445.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Bohemian Upholstered chair</h2>
            <span class="price">$25</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box other">
            <img src="/assets/img/decor/4.JPG" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Squirrel Decor</h2>
            <span class="price">$20</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>

          <li class="product-box other">
            <img src="/assets/img/mirror.jpg" alt="" class="product-img" width="300" height="300" loading="lazy" >
            <h2 class="product-title">Wall Mirror</h2>
            <span class="price">$27</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </li>


          </ul>
          

         
          
        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Explore our blog</h2>

            <a href="#" class="btn-link">
              <span class="span">View All</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/img/decor/10.jpg" width="374" height="243" loading="lazy"
                    alt="Unique products that will impress your home in 2022." class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Unique products that will impress your home in 2022.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-27">November 12, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/sunkraft/SAM_1386.JPG" width="374" height="243" loading="lazy"
                    alt="Wooden stools" class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Stools</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-25">November 25, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">Furniture</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="#fixed" width="374" height="243" loading="lazy"
                    alt="staff-required" class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Meet Our staff @SUNCRAFT</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-18">November 18, 2022</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">Staff</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <div class="card-content">
              <h2 class="h2 section-title">Our Newsletter</h2>

              <p class="section-text">
                Subscribe our newsletter and get discount 50% off
              </p>
            </div>

            <form action="" class="card-form">
              <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

              <button type="submit" class="newsletter-btn" aria-label="subscribe">
                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>
            </form>

          </div>

        </div>
      </section>

    </article>
  </main>

    <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">SunCraft</a>

          <ul>

            <li class="footer-list-item">
              <ion-icon name="location-sharp" aria-hidden="true"></ion-icon>

              <address class="address">
                SunCraft, Eldoret, Kenya 2022
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-sharp" aria-hidden="true"></ion-icon>

              <a href="tel:+254722319617" class="footer-link">(254) 722 319 617</a>
            </li>

            <li>
              <ul class="social-list">

                <li>
                  <a href="https://facebook.com/sunkraft" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://twitter.com/sunkraft" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://instagram.com/sunkraft" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help & Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help & Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Returns & Refunds</a>
          </li>

          <li>
            <a href="#" class="footer-link">Online Stores</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About Us</p>
          </li>

          <li>
            <a href="#about" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">What We Do</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ Page</a>
          </li>

          <li>
            <a href="#footer" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Newsletter</p>

          <form action="mailto:sunkraftdesigners@gmail.com" class="footer-form">
            <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

            <button type="submit" class="footer-form-btn">
              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <div class="wrapper">

            <a href="#" class="footer-link">Term & Condition</a>
            <a href="#" class="footer-link">Policy</a>
            <a href="https://maps.app.goo.gl/3EhumYjTapfXvkj98" class="footer-link">Map</a>

          </div>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2022 All Rights Reserved by <a href="#" class="copyright-link">SunKraft</a>.
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="/public/assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




        

    {{-- <main>
        @yield('content')
        
    </main> --}}


</body>

</html>