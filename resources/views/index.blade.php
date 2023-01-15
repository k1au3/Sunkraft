@extends('layout')

@include('components.navbar')

@include('components.hero')

@include('allProducts')

@include('components.blog')

@include('components.newsletter')

@include('components.footer')


  <!-- 
    - #BACK TO TOP
  -->

  {{-- <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a> --}}





  <!-- 
    - custom js link
  -->
  <script src="/public/assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

