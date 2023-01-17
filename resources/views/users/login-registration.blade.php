<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>

    {{-- custom css link  --}}
    <link rel="stylesheet" href="/public/assets/css/account/account.css">
    {{-- fonts  --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet">
</head>

<body>
   <div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button class="toggle-btn" type="button" onclick="login()">Log In</button>
            <button class="toggle-btn" type="button" onclick="register()">Register</button>
        </div>
        <div class="social-icons">
            <img src="/public/images/loginlogo/apple.png" alt="tw">
            <img src="/public/images/loginlogo/google.png" alt="Fb">
            <img src="/public/images/loginlogo/xiaomi.png" alt="google">
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
    
</body>

  <!-- 
    - custom js link
  -->
  <script src="/public/assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>