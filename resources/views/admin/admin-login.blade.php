@extends('layout')

@include('components.navbar')

   <div class="mainn">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button class="toggle-btn" type="button" onclick="login()">Admin Log In</button>
            <button class="toggle-btn" type="button" onclick="register()">Admin Register</button>
        </div>
        <div class="social-icons">
            <img src="/loginlogo/apple.png" alt="tw">
            <img src="/loginlogo/google.png" alt="Fb">
            <img src="/loginlogo/xiaomi.png" alt="google">
        </div>
        <form id="login" class="input-group" action="/authenticate" method="POST">
          @csrf

          {{-- <div class="form-group first">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            @error('name')
              <p class="text-red-500 text-xl mt-1">{{$message}}</p>
            @enderror
          </div> --}}
            
            {{-- <input type="text" class="input-field" placeholder="Username" id="name" name="name" value="{{old('name')}}" required>
            @error('name')
              <p class="text-red-500 text-xl mt-1">{{$message}}</p>
            @enderror
            
            better email authetication rather than username
            --}} 

            {{--
              changes: add email input
              --}}
            
            <input type="email" class="input-field" placeholder="email" id="email" name="email" required>

            <input type="password" class="input-field" placeholder="enter pasword" id="password" name="password" required>
            @error('password')
              <p class="text-red-500 text-l mt-1">{{$message}}</p>
            @enderror

            {{-- <label for="check">Remember me</label> --}}
            {{-- <input type="checkbox" class="check-boxx" id="check"> --}}
            
            <button class="submit-btn" type="submit">Log In</button>
        </form>

        <form id="register" class="input-group" action="/admin" method="POST">
          @csrf

          {{-- <div class="input-field">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="name">

            @error('name')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

          </div> --}}

          <input type="text" class="input-field" placeholder="Username" id="username" name="name">
          <input type="email" class="input-field" placeholder="email" id="email" name="email" required>
          <input type="text" class="input-field" placeholder="Phone Number" id="phoneNumber" name="phoneNumber" required>
          <input type="password" class="input-field" placeholder="Enter Password" required id="password" name="password">
          <input type="password" class="input-field" placeholder="Confirm Password" required id="password_confirmation" name="password_confirmation">
          
          
          <button class="submit-btn" type="submit">Register</button>
          
      </form>
    </div>
    
  </div> 

<script>
  var usrLogin = document.getElementById("login");
  var usrRegister = document.getElementById("register");
  var btns = document.getElementById("btn");
    
  function register(){ 
    
    usrLogin.style.left = "-400px";
    usrRegister.style.left = "50px";
    btns.style.left = "110px"
    
    }

  function login(){
    usrLogin.style.left = "50px";
    usrRegister.style.left = "450px";
    btns.style.left = "0px"
  }
</script>
