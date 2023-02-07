@extends('admin.layout')


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
              <a class="nav-link"  href="/admin/index">
                <ion-icon name="home"></ion-icon>
                Dashboard 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/orders">
                <ion-icon name="document"></ion-icon>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/products">
                <ion-icon name="cart"></ion-icon>
                Products
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/admin/category">
                <ion-icon name="file-tray-stacked"></ion-icon>
                Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/customers">
                <ion-icon name="people"></ion-icon>
                Customers<span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
  
         
        </div>
      </nav>
  
    </div>
  </div>
  

  
