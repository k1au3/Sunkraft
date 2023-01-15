
    {{-- <x-card class="max-w-lg mx-auto mt-24"> --}}
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4 mt-5">
              <h3>Sign In</h3>
              {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
            </div>

      <form action="/users/authenticate" method="POST">
              @csrf
              <div class="form-group first">
                <label for="name">Username</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                @error('name')
                  <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                @enderror
              </div>


              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                  <p class="text-red-500 text-xl mt-1">{{$message}}</p>
                @enderror
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">
             

              <div class="form-group row">
                <div class="mr-5 justify-content-center">
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
                </div>

                <div>
              <span class="d-block text-left my-4 text-muted">&mdash; New Here? &mdash;</span>

             
              
              <div class="social-login">

                 <a href="/register" >Sign Up here</a>
               
              </div>
              </div>
              </div>

              

      </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
