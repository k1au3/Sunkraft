@extends('admin.layout')

@include('admin.bar')

  
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
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
      <a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Add Product</a>
    </div>
  </div>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Image</th>
          <th>Price</th>
          <th>Quantity</th>
          {{-- <th>Category</th> --}}
          <th>Edit</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="product_list">
        
          @foreach ($listings as $listing)
          <tr>
            <td>{{$listing['id']}}</td>
            {{-- <td>{{$listing['name']}}</td> --}}
            <td><a href="/products/{{$listing['id']}}">
              <img src="{{$listing->logo ? asset ( 'storage/' . $listing->logo) : asset('/images/Sun_Craft_Artistic-4.jpg')}}" alt="" class="product-img" width="100" height="100" loading="lazy" ></a>
            </td>
            <td>{{$listing['name']}}</td>
            <td>{{$listing['amount']}}</td>
            <td>{{$listing['quantity']}}</td>
            {{-- <td>{{$listing['description']}}</td> --}}
            <td>
              <a href="/products/{{$listing->id}}/edit">
                {{-- <i class="i fa-solid fa-pencil"></i> --}}
                <button class="text-red-500"><i class="fa-solid fa-trash"></i><i class="i fa-solid fa-pencil"></i></button>
              </a>
            </td>
            <td><a class="btn">
              {{-- <ion-icon name="trash"></ion-icon> --}}
              <form method="POST" action="/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><ion-icon name="trash"></ion-icon></button>
              </form>
            </a></td>
          </tr>
          @endforeach
        
      </tbody>
    </table>
  </div>
</main>
</div>
</div>



<!-- Add Product start -->
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
    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf

      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
          </div>
        </div>
        
        <div class="col-12">
          <div class="form-group">
            <label>Category Name</label>
            <select class="form-control category_list" name="title">
              <option value="">Select Category</option>
              <option value="">Dining</option>
              <option value="">Bed room</option>
            </select>
          </div>
        </div>
        
        <div class="col-12">
          <div class="form-group">
            <label>Product Qty</label>
            <input type="number" name="quantity" class="form-control" placeholder="Enter Product Quantity">
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label>Product Price</label>
            <input type="number" name="amount" class="form-control" placeholder="Enter Product Price">
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" name="description" placeholder="Enter product desc"></textarea>
          </div>
        </div>
        {{-- <div class="col-12">
          <div class="form-group">
            <label>Product Keywords <small>(eg: bedroom, dining table, curtains)</small></label>
            <input type="text" name="product_keywords" class="form-control" placeholder="Enter Product Keywords">
          </div>
        </div> --}}
        <div class="col-12">
          <div class="form-group">
            <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
            <input type="file" name="logo" class="form-control">
          </div>
        </div>
        {{-- <input type="hidden" name="add_product" value="1"> --}}
        <div class="col-12">
          {{-- <button type="button" class="btn btn-primary add-product">Add Product</button> --}}
          <button
                        class="btn btn-primary add-product"
                    >
                        Create Product
                    </button>
        </div>
      </div>
      
    </form>
  </div>
</div>
</div>
</div>
<!-- Add Product end -->

<!-- Edit Product start -->
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
            <label>Product Keywords <small>(eg: bedroom, diningtable, aesthetic interiors)</small></label>
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
<!-- Edit Products end -->