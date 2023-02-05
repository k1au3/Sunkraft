<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Category</title>

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

  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SunKraft</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      
      <a class="nav-link" href="#admin dropdown"><ion-icon name="person-circle-outline"></ion-icon></a>
            
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      
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
                Customers<span class="sr-only">(current)</span>
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

        <div class="row">
          <div class="col-10">
              <h2 class="titl">Manage Category</h2>
          </div>
          <div class="col-2">
              <a href="#" data-toggle="modal" data-target="#add_category_modal" class="btn btn-primary btn-sm">Add Category</a>
          </div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="category_list">
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



<!-- Modal -->
<div class="modal fade" id="add_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-category-form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="cat_title" class="form-control" placeholder="Enter category Name">
                    </div>
                </div>
                <input type="hidden" name="add_category" value="1">
                <div class="col-12">
                    <button type="button" class="btn btn-primary add-category">Add Category</button>
                </div>
            </div>
            
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<!--Edit category Modal -->
<div class="modal fade" id="edit_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-category-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <input type="hidden" name="cat_id">
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="e_cat_title" class="form-control" placeholder="Enter category Name">
              </div>
            </div>
            <input type="hidden" name="edit_category" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary edit-category-btn">Update Category</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="./js/dashboard.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



<script type="text/javascript" src="/public/assets/admin-js/categories.js"></script>
    
            
</body>
</html>