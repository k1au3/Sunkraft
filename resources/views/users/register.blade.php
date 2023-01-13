{{-- @extends('components.layout')

@section('content') --}}

{{-- @include('components.header') --}}

    <div class="max-w-lg mx-auto mt-24">
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 static">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>


            <form action="/users" method="POST">
              @csrf
              
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="name">

                @error('name')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

              </div>
              <div class="form-group first">
                <label for="phoneNumber">Phone Number/ Email</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">

                @error('phoneNumber')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">

                @error('password')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password_confirmation"> 
                
                @error('password_confirmation')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

              </div>

              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Register" class="btn btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>

              <span class="d-block text-left my-4 text-muted">&mdash; Already Registered? &mdash;</span>
              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    </div>
{{-- @endsection --}}