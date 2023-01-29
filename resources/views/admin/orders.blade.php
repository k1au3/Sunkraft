<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>

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
    </style>
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
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#orders.blade.php">
                  <ion-icon name="document"></ion-icon>
                  Orders <span class="sr-only">(current)</span>
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
    
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
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

      
            <div class="row">
                <div class="col-10">
                    <h2 class="titl">Customers</h2>
                </div>
            </div>
            
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Order #</th>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Trx Id</th>
                    <th>Payment Status</th>
                  </tr>
                </thead>
                <tbody id="customer_order_list">
                 
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>
      
      
      
      <!-- Modal -->
      <div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="add-product-form" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-12">
                          <div class="form-group">
                              <label>Product Name</label>
                              <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                          </div>
                      </div>
                     
                      <div class="col-12">
                          <div class="form-group">
                              <label>Category Name</label>
                              <select class="form-control category_list" name="category_id">
                                  <option value="">Select Category</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                              <label>Product Description</label>
                              <textarea class="form-control" name="product_desc" placeholder="Enter product desc"></textarea>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                              <label>Product Price</label>
                              <input type="number" name="product_price" class="form-control" placeholder="Enter Product Price">
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                              <label>Product Keywords <small>(eg: bed, dining room, aestheti c interior )</small></label>
                              <input type="text" name="product_keywords" class="form-control" placeholder="Enter Product Keywords">
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                              <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                              <input type="file" name="product_image" class="form-control">
                          </div>
                      </div>
                      <input type="hidden" name="add_product" value="1">
                      <div class="col-12">
                          <button type="button" class="btn btn-primary add-product">Add Product</button>
                      </div>
                  </div>
                  
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      
      
      <!--
        footer
      -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="./js/dashboard.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
      
      
    <script type="text/javascript" src="/public/assets/admin-js/customers.js"></script>
    
</body>
</html>