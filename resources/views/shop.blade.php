<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
        <link rel="icon" href="images/favicon.ico" />
        
     <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         
         {{-- favicon   --}}
        <link rel="shortcut icon" href="/public/favicon.svg" type="image/svg+xml">

          {{-- custom css link --}}
        <link rel="stylesheet" href="/public/assets/css/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet">
</head>


<body>
    <!-- 
        header
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

            </div>
        </div>
    </header>


    <!-- 
        main shop content
    -->

    

    








    <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">SunKraft</a>

          <ul>

            <li class="footer-list-item">
              <ion-icon name="location-sharp" aria-hidden="true"></ion-icon>

              <address class="address">
                SunCraft, Eldoret, Kenya 2023
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
          &copy; 2023 All Rights Reserved by <a href="#" class="copyright-link">SunKraft</a>.
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




        

</body>
</html>