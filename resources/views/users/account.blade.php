<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Settings</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <script src="../../js/jquery2.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="/public/assets/js/main.js"></script>
    <link rel="stylesheet" href="/public/assets/css/cart-style.css">
    <style>
      /* Add your CSS styles here */

      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #f2f2f2;
      }

      .navbar a {
        text-decoration: none;
        color: rgb(63, 37, 3);
        margin-right: 20px;
        font-size: 2.5rem;
        font-weight: bolder;
      }
      .nav{
        gap: 3rem;
      }
      .nav a{
        font-size: 2rem;
        font-weight: bold;
        gap: 3rem;
      }
      .nav a:hover{
        color: rgb(211, 127, 18);
        transition: .5s;
      }

      /* Add styles for the customer details section */
      .customer-details {
        padding: 20px;
      }
      .customer-details h2{
        text-align: center;
        font-size: 2rem;
      }
      .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
      }

      form {
        width: 60%;
        margin: 4rem auto;
        text-align: left;
        padding: 30px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        font-size: 14px;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
      }

      input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #3e8e41;
      }

      #errorMessage {
        color: red;
        margin-bottom: 20px;
      }
      /* Add media query for responsive design */
    @media (max-width: 767px) {
        .navbar {
          flex-direction: column;
          align-items: flex-start;
        }

        .navbar a {
          margin-right: 0;
          margin-bottom: 10px;
        }
      }
    </style>
  </head>
  <body>
    <!-- <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">	
        <div class="navbar-header">
          <a href="#" class="navbar-brand">SunKraft</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="#index.blade.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
          <li><a href="#products.blade.php"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
        </ul>
      </div>
    </div> -->

    <!-- Add navbar -->
    <header class="navbar">
      <a href="#">SunKraft</a>
      <nav class="nav">
        <a href="/resources/views/index.blade.php">Home</a>
        <a href="/resources/views/allProducts.blade.php">Products</a>
      </nav>
    </header>
    <section class="customer-details">
      <h2>Account Settings</h2>
      <form>
        <div class="form-group">
          <label for="fullName">Full Name:</label>
          <input type="text" id="fullName" />
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" />
        </div>

        <div class="form-group">
          <label for="streetAddress">Street Address:</label>
          <input type="text" id="streetAddress" />

        </div>

        <div class="form-group">
          <label for="phoneNumber">Phone Number:</label>
          <input type="text" id="phoneNumber" />
        </div>

        <div class="form-group">
          <label for="billingAddress">Billing Address:</label>
          <input type="text" id="billingAddress" />
        </div>

        <div class="form-group">
          <h3>Change Password</h3>
          <label for="currentPassword">Current Password:</label>
          <input type="password" id="currentPassword" />
        </div>

        <div class="form-group">
          <label for="newPassword">New Password:</label>
          <input type="password" id="newPassword" />
        </div>

        <div class="form-group">
          <label for="confirmPassword">Confirm Password:</label>
          <input type="password" id="confirmPassword" />
        </div>

        <div class="form-group">
          <input type="submit" value="Update Information" />
          <p id="errorMessage"></p>
        </div>
      
    </form>
  </section>

    <script>
      // Get form elements
      const form = document.querySelector("form");
      const fullNameInput = document.getElementById("fullName");
      const emailInput = document.getElementById("email");
      const streetAddressInput = document.getElementById("streetAddress");
      const phoneNumberInput = document.getElementById("phoneNumber");
      const billingAddressInput = document.getElementById("billingAddress");
      const currentPasswordInput = document.getElementById("currentPassword");
      const newPasswordInput = document.getElementById("newPassword");
      const confirmPasswordInput = document.getElementById("confirmPassword");
      const errorMessage = document.getElementById("errorMessage");

      // Add submit event listener to form
      form.addEventListener("submit", e => {
        e.preventDefault();

        // Get user inputs
        const fullName = fullNameInput.value;
        const email = emailInput.value;
        const streetAddress = streetAddressInput.value;
        const phoneNumber = phoneNumberInput.value;
        const billingAddress = billingAddressInput.value;
        const currentPassword = currentPasswordInput.value;
        const newPassword = newPasswordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        // Validate inputs
        if (!fullName || !email || !streetAddress || !phoneNumber || !billingAddress || !currentPassword || !newPassword || !confirmPassword) {
          errorMessage.textContent = "All fields are required.";
          return;
        }

        if (newPassword !== confirmPassword) {
          errorMessage.textContent = "New password and confirm password must match.";
          return;
        }

        // Make API call to update user information
        /*fetch("api url", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({
            fullName,
            email,
            streetAddress,
            phoneNumber,
            billingAddress,
            currentPassword,
            newPassword
          })
        })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              errorMessage.textContent = "User information updated successfully.";
            } else {
              errorMessage.textContent = data.message;
            }
          })
          .catch(error => {
            console.error(error);
            errorMessage.textContent = "There was a problem updating user information.";
          });
      });
    </script>*/

    // ion icon 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
