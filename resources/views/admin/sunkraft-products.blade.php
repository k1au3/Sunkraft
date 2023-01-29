<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Products</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
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
    </style>
    <!-- Custom styles for this template -->
    <link href="/public/assets/css/adminstyle/dashboard.css" rel="stylesheet">

</head>
<body>
  <section class="navv">
    <div class="logo">
      <h3>SunKraft</h3>
    </div>

    <button class="user">
      <a href="#logout"><ion-icon name="person"></ion-icon></a>
    </button>
  </section>

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

          <div class="row">
            <div class="col-10">
              <h2 class="titl">Product List</h2>
            </div>
            <div class="col-2">
              <a href="#" class="btn btn-primary btn-sm">Add Product</a>
            </div>
          </div>
          
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Category</th>
                  <th>Brand</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="product_list">
                <!-- <tr>
                  <td>1</td>
                  <td>ABC</td>
                  <td>FDGR.JPG</td>
                  <td>122</td>
                  <td>bedroom</td>
                  <td><a class="btn btn-sm btn-info"></a><a class="btn btn-sm btn-danger">Delete</a></td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
        


  <!--
    end
  -->

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="./js/dashboard.js"></script>
  <script src="/public/assets/admin-js/products.js"></script>
</body>
</html>