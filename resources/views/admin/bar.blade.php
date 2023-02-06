@extends('layout')


<section class="navv">
  <div class="logo">
    <h3>ADMIN</h3>
  </div>

<div class="container">
    <div class="row">


    </div>

      <header class="header" data-header>
    <div class="container">

      <a href="/admin/admin-panel" class="logo">ADMIN</a>


      <li>
        <a href="/create" class="hover:text-laravel">Add products</a>
      </li>




      <div class="header-action">

        <a href="/login-registration">
          <div class="dropdown">
            <button class="dropdown-button header-action-btn" aria-label="user"><ion-icon name="person-outline" aria-hidden="true"></ion-icon></button>
            <div class="dropdown-content">
              @auth
                <p>{{auth()->user()->name}}</p>
                <p>john.doe@example.com</p>
                <p><a href="#">Edit Profile</a></p>
                <form action="/logout" class="inline" method="POST">
                  @csrf
                  <button type="submit">Log Out</button>
                </form>
                
              @else
                <a href="/login-registration"><p>Register/ Login</p></a>
                <p>john.doe@example.com</p>
                <p><a href="#">Edit Profile</a></p>
                <p><a href="#">Log Out</a></p>
              @endauth

            </div>
          </div>
        
        </a>

        
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




</div>

  {{-- <button class="user">
    <a href="#logout"><ion-icon name="person"></ion-icon></a>
  </button> --}}
</section>