{{-- @extends('layout') --}}

{{-- Navbar --}}


  <header class="header" data-header>
    <div class="container">

      {{-- <div class="input-wrapper">
        <input type="search" name="search" placeholder="Search Anything..." class="input-field">

        <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
      </div> --}}

      <a href="/" class="logo">SunKraft</a>

      <form action="/">
        
        <div class="input-wrapper">
          {{-- <ion-icon name="search-outline" aria-hidden="true"></ion-icon> --}}
          <input 
            type="text"
            name="search"
            class="input-field"
            placeholder="Search Product ..."
            >
            <div class="input-wrapper">
              <button 
                  type="submit"
                  class="text-white"
              >
              {{-- <ion-icon name="search-outline" aria-hidden="true"></ion-icon> --}}
            </button>
            </div>
        </div>
       

      </form>
      

      <li>
        <a href="/allProducts" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>Products</a>
      </li>

      @auth
      <li>
        <span class="font-bold uppercase">
          Welcome {{auth()->user()->name}}
        </span>
      </li>
      <li>
        <a href="/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>Manage Listings</a>
      </li>
      <form action="/logout" class="inline" method="POST">
        @csrf
        <button type="submit"><i class="fa-solid fa-door-closed"></i> Logout</button>
      </form>
      @else
      {{-- <li>
        <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>Register</a>
      </li>
      <li>
        <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
      </li> --}}
      @endauth


      <div class="header-action">

        <a href="/login-registration">
        <button class="header-action-btn" aria-label="user">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>
        </a>

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
