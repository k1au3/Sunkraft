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


{{-- Products --}}

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
            <div class="row">

            <div class="row">

        

@foreach ($listings as $listing)
        
          <div class="product-box bed bedroom" >
            <a href="/products/{{$listing['id']}}">
              <img src="{{$listing->logo ? asset ( 'storage/' . $listing->logo) : asset('/images/Sun_Craft_Artistic-17.jpg')}}" alt="" class="product-img" width="300" height="300" loading="lazy" >
            </a>
            <h2 class="product-title">{{$listing['name']}}</h2>
            <span class="price">${{$listing['amount']}}</span>
            <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>
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


</body>