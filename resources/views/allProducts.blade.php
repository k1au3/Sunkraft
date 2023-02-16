@extends('layout')

@include('components.navbar')

      <section style="z-index: 0" class="section product" id="product" aria-label="product">
        <div class="container" style="margin-top: 20px">

          <div class="title-wrapper">
            <h4 class="h5 section-title"> <a href="/allProducts" class="logo">All Products</a></h4>

            <?php
            if(Auth::check()){
            $usertype = Auth::user()->usertype;
            
            if ($usertype == '1') {
            
              ?>
            <h5><a href="/">Home</a></h5>

            <h5><a href="/create">Add / Create Product</a></h5>

            <?php
            }
          }
            ?>


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
            <div class="row">

            <div class="row">

        

@foreach ($listings as $listing)
        
          <div style="z-index: 0" class="product-box bed bedroom cont" id="blur">
            <a href="/products/{{$listing['id']}}">
              <img style="" src="{{$listing->logo ? asset ( 'storage/' . $listing->logo) : asset('/images/Sun_Craft_Artistic-4.jpg')}}" alt="" class="product-img" width="300" height="300" loading="lazy" >
            </a>
            <h5 style="font-size: 1rem" class="product-title">{{$listing['name']}}</h5>
            <span class="price">Ksh {{$listing['amount']}}</span>
            <button class="add-cart" onclick="toggle()"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
          </div>

          <div style="z-index: 999" class="pop" id="popup" >
              <a href="/products/{{$listing['id']}}">
                <img style="" src="{{$listing->logo ? asset ( 'storage/' . $listing->logo) : asset('/images/Sun_Craft_Artistic-4.jpg')}}" alt="" class="product-img" width="300" height="300" loading="lazy" >
              </a>

              <div class="preview">

                <h3>{{$listing->name}}</h3>
                {{-- <div class="stars">
                  <ion-icon  name="star"></ion-icon>
                  <ion-icon  name="star"></ion-icon>
                  <ion-icon  name="star"></ion-icon>
                  <ion-icon  name="star"></ion-icon>
                  <ion-icon  name="star"></ion-icon>
                  
                </div> --}}
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, iusto?</p> --}}
                <p>{{$listing['description']}}</p>
                <div class="price">Ksh {{$listing->amount}}</div>
                <div class="buttons">
                    <a href="#" class="buy" onclick="toggle()">back</a>
                    <a href="/stk/push/simulation" class="c">checkout</a>
                </div>
            </div>
            
        </div>
@endforeach
</div>

<div class="row">

<div class="mt-6 p-4">
  {{$listings->links()}}
</div>
</div>
</div>

          </ul>

          
          
        </div>
      </section>


<!-- @include('components.footer') -->

{{-- cart popup toggle js 
   --}}
<script>
    function toggle(){
       var blur = document.getElementById('blur');
       blur.classList.toggle('active');
       var popup = document.getElementById('popup');
       popup.classList.toggle('active');
   }
</script>

