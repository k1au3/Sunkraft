@extends('layout')

@include('components.navbar')
  <!-- products detail page  -->

  <section class="product-details">
    <h2> Product Details</h2>
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="{{$listing->logo ? asset ( 'storage/' . $listing->logo) : asset('/images/Sun_Craft_Artistic-17.jpg')}}" width="100%" id="productImage" alt="">
        </div>
        <div class="col-2">

          <p>Home / Furniture</p>

          <h1>{{$listing->name}}</h1>

          <h4>${{$listing->amount}}</h4>

          <input type="number" value="{{$listing->quantity}}" class="cart-quantity">
          
          <button class="add-cart"><ion-icon name="bag-handle-outline"  aria-hidden="true"></ion-icon></button>

          <h3>Category <ion-icon class="indent"></ion-icon></h3>
          <p> {{$listing->title}}</p>

          <h3>Details <ion-icon class="indent"></ion-icon></h3>
          <p> {{$listing->description}}</p>

          <div class="row">
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

        </div>
        

        </div>



      </div>
    </div>
  </section>


  @include('components.footer')
