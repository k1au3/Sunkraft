<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Edit</title>
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

          <div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="edit-product-form" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" name="e_product_name" class="form-control" placeholder="Enter Product Name">
                        </div>
                      </div>
                     
                      <div class="col-12">
                        <div class="form-group">
                          <label>Category Name</label>
                          <select class="form-control category_list" name="e_category_id">
                            <option value="">Select Category</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label>Product Description</label>
                          <textarea class="form-control" name="e_product_desc" placeholder="Enter product desc"></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label>Product Qty</label>
                          <input type="number" name="e_product_qty" class="form-control" placeholder="Enter Product Quantity">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label>Product Price</label>
                          <input type="number" name="e_product_price" class="form-control" placeholder="Enter Product Price">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
                          <input type="text" name="e_product_keywords" class="form-control" placeholder="Enter Product Keywords">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                          <input type="file" name="e_product_image" class="form-control">
                          <img src="../product_images/1.0x0.jpg" class="img-fluid" width="50">
                        </div>
                      </div>
                      <input type="hidden" name="pid">
                      <input type="hidden" name="edit_product" value="1">
                      <div class="col-12">
                        <button type="button" class="btn btn-primary submit-edit-product">Add Product</button>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>
    </div>
  </div>
        

    
  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="/public/assets/admin-js/dashboard.js"></script>
  <script src="/public/assets/admin-js/products.js"></script>
</body>
</html>