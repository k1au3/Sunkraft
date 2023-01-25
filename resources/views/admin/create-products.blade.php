
@extends('layout')


  {{-- <style>
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
  </style> --}}

  {{-- <link href="/public/assets/css/adminstyle/dashboard.css" rel="stylesheet"> --}}

  {{-- <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/"> --}}

  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

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
                      <label>Product Qty</label>
                      <input type="number" name="product_qty" class="form-control" placeholder="Enter Product Quantity">
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
                              <label>Product Keywords <small>(eg: bedroom, cool interiors, dining set)</small></label>
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

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="/public/assets/admin-js/dashboard.js"></script>
  <script src="/public/assets/admin-js/products.js"></script> --}}
