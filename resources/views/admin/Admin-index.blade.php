@extends('layout')

@include('admin.admin-index')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!--
        links
    -->
    <link rel="stylesheet" href="/public/assets/css/adminstyle/dashboard.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



   <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            
        }

        a{
        text-decoration: none;
        }
        li{
            list-style-type: none;
        }
        .fa-trash-alt,.fa-pencil-alt{
        color: #fff;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /* nav  */
      .navvbar{
        padding: 1.3rem;
        background-color: #f2f2f2;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0;
      }
      .navvbar a{
        font-size: 2rem;
        font-weight: bolder;
        text-decoration: none;
        color: rgb(66, 39, 4);
      }
      .navvbar .naav{
        display: flex;
        /* flex-direction: column; */
        gap: 3rem;
      }
      .navvbar .naav a{
        font-size: 1rem;
        font-weight: bold;
      }
      .navvbar .naav a:hover{
        color: rgb(219, 156, 73);
        transition: .5s;
      }
      .navvbar .prof button{
        outline: none;
        border: none;
      }
      .navvbar .prof button a{
        font-size: 1.5rem;
      }
      .navvbar .prof button a:hover{
        color: rgb(240, 170, 78);
        transition: .5s;
      }
      
    </style>

</head>
<body>

  <header class="navvbar">
    <a href="#">SunKraft</a>
    <nav class="naav">
      <a href="/resources/views/index.blade.php">Home</a>
      <a href="/resources/views/allProducts.blade.php">Products</a>
    </nav>
    <div class="prof">
      <button><a href=""><ion-icon name="person"></ion-icon> </a></button>
    </div>
  </header>


    <div class="container-fluid">
      <div class="row">
            
        <!--
            sidebar
        -->

        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
      
                <li class="nav-item">
                  <a class="nav-link"  href="Admin-index.blade.php">
                    <ion-icon name="home"></ion-icon>
                    Dashboard <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#orders.blade.php">
                    <ion-icon name="document"></ion-icon>
                    Orders
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.blade.php">
                    <ion-icon name="cart"></ion-icon>
                    Products
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="category.blade.php">
                    <ion-icon name="file-tray-stacked"></ion-icon>
                    Categories
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="customers-index.blade.php">
                    <ion-icon name="people"></ion-icon>
                    Customers
                  </a>
                </li>
              </ul>
      
             
            </div>
          </nav>
      
      
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-1">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Hello</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                  <span data-feather="calendar"></span>
                  This week
                </button>
              </div>
            </div>
          

          <!--
            sidebar end
          -->

            <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

            <h2 class="titl">logged in accounts</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody id="admin_list">
                    <!-- <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                    </tr> -->
                </tbody>
                </table>
            </div>
         </main>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="./js/dashboard.js"></script>
    <script type="text/javascript" src="/public/assets/admin-js/admin.js"></script>

    
    
</body>
</html>