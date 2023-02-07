@extends('admin.layout')

@include('admin.bar')

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
