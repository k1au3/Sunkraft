<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="public/favicon/favicon.ico" />

    
        <title>Sunkraft</title>

        <!-- Fonts -->

        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet"> --}}

         {{-- favicon   --}}

         <link rel="shortcut icon" href="public/favicon/favicon.svg" type="image/svg+xml">

          {{-- custom css link --}}

         <link rel="stylesheet" href="/assets/css/style.css">

        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet"> --}}
{{-- 
         <link rel="preload" as="image" href="/images/hero-product-1.jpg">
         <link rel="preload" as="image" href="/images/hero-product-2.jpg">
         <link rel="preload" as="image" href="/images/hero-product-3.jpg">
         <link rel="preload" as="image" href="/images/hero-product-4.jpg">
         <link rel="preload" as="image" href="/images/hero-product-5.jpg">
         <link rel="preload" as="image" href="./images/Sun_Craft_Artistic-1.jpg"> --}}

{{-- USER LOGIN AND REGISTER --}}

         {{-- <link rel="stylesheet" href="/assets/css/account/account.css">
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
               rel="stylesheet"> --}}

          
               {{-- custom js link --}}


  <script src="/assets/js/script.js" defer></script>

     {{-- ionicon link --}}

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




     {{-- Create Products --}}
     <!-- Custom styles for this template -->
    <link href="/assets/css/adminstyle/dashboard.css" rel="stylesheet">

    
          
</head>

<body>


    <main>
        @yield('content')
    </main>

    <x-flash-message/>

</body>