@extends('layout')


   <div class="hero">
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
        <form id="login" class="input-group">
            
            <input type="email" class="input-field" placeholder="email" required>
            <input type="text" class="input-field" placeholder="enter pasword" required>
            <label for="check">Remember me</label>
            <input type="checkbox" class="check-boxx" id="check">
            
            <button class="submit-btn" type="submit">Log In</button>
        </form>

        <form id="register" class="input-group">
           <input type="text" class="input-field" placeholder="Full Name"> 
          <input type="email" class="input-field" placeholder="email" required>
          <input type="text" class="input-field" placeholder="enter Pasword" required>
          <label for="check">I agree to the T/Cs</label>
          <input type="checkbox" class="check-box" id="check">
          
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
