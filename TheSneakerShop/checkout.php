<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheSneakerShop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="assets\css\style.css">
</head>

<?php session_start(); ?>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
      <a class="nav-home" href="home.php" role="button">
        <h2 class="home">TheSneakerShop</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="account.php">User</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Checkout</h2>
        <hr class="mx-auto">
    </div>

    <?php 

          if($_SERVER['REQUEST_METHOD']=='POST')
          {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $addr = $_POST['address'];
            $price = $_SESSION['price'];
            $pname = $_SESSION['pname'];

            $con = new mysqli('localhost','root','','php_project');
            $stmt="INSERT INTO `orders` ( `user_name`, `user_email`, `user_phone`, `user_address`, `order_cost`, `order_status`, `product_name` ) VALUES ( '$name', '$email', '$phone', '$addr', '$price', 'On hold', '$pname')";
            $result=mysqli_query($con,$stmt);

            if($result)
            {
              header('Location:success.php');
            }
            else
            {
              echo "Order failed!";
            }
            
          }
          ?>

    <div class="mx-auto container">
        <form id="checkout-form" method="POST">
            <div class="form-group checkout-small-element">
                <label>Username</label>
                <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required/>
            </div>
            <div class="form-group checkout-small-element">
                <label>E-mail</label>
                <input type="text" class="form-control" id="checkout-email" name="email" placeholder="E-mail" required/>
            </div>
            <div class="form-group checkout-small-element">
                <label>Phone</label>
                <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required/>
            </div>
            <div class="form-group checkout-small-element">
                <label>City</label>
                <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required/>
            </div>
            <div class="form-group checkout-large-element">
                <label>Address</label>
                <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required/>
            </div>
            <div class="form-group checkout-btn-container">
                <input type="submit" class="btn" id="checkout-btn" value="Place Order"/>
            </div>
        </form>
    </div>
  </section>


  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our giveaways</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-20">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control"/>
                <br>Enter E-mail ID Here
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          All the participants in the giveaway of the Air Jordan 1's and Panda Dunks Low will recieve a mail to the given email id.
          <br>Every participant should share our website on their Facebook, Instagram and Twitter accounts 
          <br>in order to have the maximum chance at winning.
          <br>Make sure you tag us in your posts !!!   
        </p>
      </section>
      <!-- Section: Text -->
  
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">TheSneakerShop.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>