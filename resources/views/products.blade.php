@extends('layout')

@include('components.navbar')
  <!-- products detail page  -->
  <section class="product-details">
    {{-- <h2> Product Details Page</h2> --}}
    <div class="small-container single-product">
      
      <div class="row">
        
        <div class="col-2">
          <img src="{{$listing->logo ? asset ( 'storage/' . $listing->logo) : asset('/images/Sun_Craft_Artistic-4.jpg')}}" width="100%" id="productImage" alt="">
        </div>
        
        <div class="col-2">

          <?php
          if(Auth::check()){
        
            $usertype = Auth::user()->usertype;
        
            if ($usertype == '1') {
        
              ?>

<button class="btn btn-primary"><a href="/admin/index"><ion-icon name="exit-outline" style="font-size: 1rem;"></ion-icon></a></button>

<?php
            }else {
              ?>
              <button class="btn btn-primary"><a href="/allProducts"><ion-icon name="exit-outline" style="font-size: 1rem;"></ion-icon></a></button>

              <?php
            }
          }
            ?>


          {{-- <button class="btn btn-primary"><a href="/allProducts"><ion-icon name="exit-outline" style="font-size: 1rem;"></ion-icon></a>Back</button> --}}

          <p>Home / Furniture /</p>

          <h1 style="font-size: 1.6rem">{{$listing->name}}</h1>

          <h4>Ksh {{$listing->amount}}</h4>

          
          
          {{-- <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button> --}}

          <h3>Category <ion-icon class="indent"></ion-icon></h3>
          <p> {{$listing->title}}</p>

          <h3>Details <ion-icon class="indent"></ion-icon></h3>
          <p> {{$listing->description}}</p>



          <div class="row">

            {{-- <form action="/cart" method="POST">
              @csrf --}}

              <?php
              // if(Auth::check()){
              ?>

              {{-- <input type="text" name="user_id" value= {{ Auth::user()->id }}>

              <input type="text" name="user_id" value= {{ Auth::user()->phoneNumber }}>

              <input type="text" name="product_id" value={{$listing->id}}>
              
              <button class="btn btn-primary">Add to Cart</button> --}}

              <?php
              // }
              ?>

            {{-- </form> --}}

          

  {{-- @auth
      
      <li>

        <a href="/buy-now"><i class="fas fa-shopping-cart"></i>
           Buy Now
        </a>

      </li>

      @else
      <li>
        <a href="/login-registration" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>Register</a>
      </li>
     
  @endauth --}}

  

  <?php
  if(Auth::check()){

    $usertype = Auth::user()->usertype;

    if ($usertype == '1') {

      ?>

      <div class="row">
          <div class="mt-4 p-2 flex space-x-6">
            <a href="/products/{{$listing->id}}/edit">
              {{-- <i class="i fa-solid fa-pencil"></i> --}}
              <button class="text-red-500"><i class="fa-solid fa-trash"></i>Edit</button>
            </a>
        </div>

          <form method="POST" action="/{{$listing->id}}">
            @csrf
            @method('DELETE')

            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
        

          </form>
        </div>

        <?php
    } 

    else {
      
      ?>

{{-- <button class="add-cart" onclick="toggle()"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon>Buy</button> --}}

<a href="/stk/push/simulation"><button>Buy Now</button></a>

<button><a href="http://localhost/pamoja/transaction.php?long_string=MTc0Mzc5fFN1bmtyYWZ0fGh0dHBzOi8vNTc2Mi0xOTctMjQ4LTI0Ni0xNDkuaW4ubmdyb2suaW8vTXBlc2FEYXJhamEvZGlyL2Nh&user_id=19">Checkout Now</a></button>

    {{-- <form action="/stk/push/simulation" method="GET">
      <button>Buy Now</button>
      
    </form> --}}
      <?php
    }
  } else {
    ?>
    <button><a href="/login-registration">Buy Now</a></button>
    <?php
  }
    ?>


        </div>
        

        </div>



      </div>
    </div>
  </section>


  @include('components.footer')


