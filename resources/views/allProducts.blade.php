@extends('layout')

{{-- @include('components.navbar') --}}



      <section class="section product" id="product" aria-label="product">
        <div class="container">

          <div class="title-wrapper">
            <h4 class="h5 section-title"> <a href="/" class="logo">Popular Products</a></h4>

            <h5><a href="/create">Add / Create Product</a></h5>


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
        
          <div class="product-box bed bedroom">
            <a href="/products/{{$listing['id']}}">
              <img src="{{$listing->logo ? asset ( 'storage/' . $listing->logo) : asset('/images/Sun_Craft_Artistic-4.jpg')}}" alt="" class="product-img" width="300" height="300" loading="lazy" >
            </a>
            <h5 class="product-title">{{$listing['name']}}</h5>
            <span class="price">${{$listing['amount']}}</span>
            <button class="add-cart" ><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
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


@include('components.footer')
