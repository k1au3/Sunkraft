<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>

    <style>
      /* Add wooden background and font styling */
      body {
        background-image: url("https://www.example.com/wood-background.jpg");
        font-family: Arial, sans-serif;
      }

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
        font-size: 1rem;
        font-weight: bold;
        gap: 3rem;
      }
      .nav a:hover{
        color: rgb(211, 127, 18);
        transition: .5s;
      }

      /* Add styles for the customer details section */
     
      /* Center and style the main container */
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }

      /* Style the order details header */
      h1 {
        color: #5a5a5a;
        text-align: center;
        font-size: 36px;
        margin-bottom: 50px;
      }

      /* Style the order details table */
      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 50px;
      }

      /* Style the table headers */
      th {
        background-color: #bdbdbd;
        color: white;
        padding: 15px;
      }

      /* Style the table cells */
      td {
        border: 1px solid #bdbdbd;
        padding: 15px;
        text-align: left;
      }

      /* Style the status indicator */
      .status {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 5px;
        margin-right: 10px;
      }

      /* Style the pending status indicator */
      .pending {
        background-color: #ffc107;
      }

      /* Style the cleared status indicator */
      .cleared {
        background-color: #4caf50;
      }

      /* Responsive styling for smaller screens */
      @media (max-width: 768px) {
        .container {
          padding: 25px;
        }

        h1 {
          font-size: 28px;
          margin-bottom: 25px;
        }

        th,
        td {
          padding: 10px;
        }
      }
    </style>
  </head>
  <body>
    <header class="navbar">
        <a href="#">SunKraft</a>
        <nav class="nav">
          <a href="/resources/views/index.blade.php">Home</a>
          <a href="/resources/views/allProducts.blade.php">Products</a>
        </nav>
      </header>
    <div class="container">
      <h1>Order Details</h1>
      <table>
        <tr>
          <th>Order Date</th>
          <td id="orderDate"></td>
        </tr>
        <tr>
          <th>Full Name</th>
          <td id="fullName"></td>
        </tr>
        <tr>
          <th>Phone Number</th>
          <td id="phoneNumber"></td>
        </tr>
        <tr>
          <th>Email</th>
          <td id="email"></td>
        </tr>
        <tr>
          <th>Home Address</th>
          <td id="homeAddress"></td>
        </tr>
        <tr>
            <th>Billing Address</th>
            <td id="billingAddress"></td>
        </tr>
        <tr>
            <th>Order ID</th>
            <td id="orderId"></td>
        </tr>
        <tr>
            <th>Product Name</th>
            <td id="productName"></td>
        </tr>
        <tr>
            <th>Price</th>
            <td id="price"></td>
        </tr>
        <tr>
            <th>Quantity</th>
            <td id="quantity"></td>
        </tr>
        <tr>
            <th>Order Total</th>
            <td id="orderTotal"></td>
        </tr>
        <tr>
            <th>Status</th>
            <td id="status">
              <span class="status pending"></span>Pending
            </td>
        </tr>
    </table>
    </div>
      
      <script>
        // Get the order details from the server or database
        const orderDetails = {
          orderDate: "2023-02-06",
          fullName: "John Doe",
          phoneNumber: "+2541123456",
          email: "johndoe@example.com",
          homeAddress: "1234 Tom Mboya st, Eldoret",
          billingAddress: "1234 Tom Mboya st, Eldoret",
          orderId: "A1B2C3D4E5",
          productName: "Wooden Chair",
          price: "$100",
          quantity: "2",
          orderTotal: "$200",
          status: "pending"
        };
      
        // Update the HTML with the order details
        document.getElementById("orderDate").innerHTML = orderDetails.orderDate;
        document.getElementById("fullName").innerHTML = orderDetails.fullName;
        document.getElementById("phoneNumber").innerHTML = orderDetails.phoneNumber;
        document.getElementById("email").innerHTML = orderDetails.email;
        document.getElementById("homeAddress").innerHTML = orderDetails.homeAddress;
        document.getElementById("billingAddress").innerHTML = orderDetails.billingAddress;
        document.getElementById("orderId").innerHTML = orderDetails.orderId;
        document.getElementById("productName").innerHTML = orderDetails.productName;
        document.getElementById("price").innerHTML = orderDetails.price;
        document.getElementById("quantity").innerHTML = orderDetails.quantity;
        document.getElementById("orderTotal").innerHTML = orderDetails.orderTotal;
      
        // Update the status indicator
        const statusIndicator = document.getElementsByClassName("status")[0];
        if (orderDetails.status === "pending") {
          statusIndicator.classList.add("pending");
        } else if (orderDetails.status === "cleared") {
          statusIndicator.classList.add("cleared");
        }
      </script>
      

</body>
</html>