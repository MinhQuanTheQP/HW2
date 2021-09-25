<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="order.css">
    
</head>
<body>
<script src="js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
        <img src="images/logo.png">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Foods</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="order-form">
        <h3 class="global-title">Fill this form to confirm your order</h3>
        <div class="form-top">
            <div class="top-left">
                <img src="images/menu-pizza.jpg" alt="" class="left-img">
            </div>
            <div class="top-right">
                <h3 class="right-title">Food title</h3>
                <span class="right-price">$2.3</span>
                <span class="right-price">Quantity</span>
                <div class="right-quantity">
                    <input type="number" value="1" class="quantity-select" />
                </div>
            </div>
        </div>
        <div class="form-bottom">
            <form action="" class="form-group">
                <label for="">Full name</label>
                <input placeholder="Enter your name..." type="text" class="form-input">
                <label for="">Phone number</label>
                <input placeholder="Enter your phone..." type="text" class="form-input">
                <label for="">Email</label>
                <input placeholder="Enter your email..." type="text" class="form-input">
                <label for="">Address</label>
                <textarea name="" placeholder="Enter your address..." id="" cols="30" rows="10"></textarea>
                <button>Confirm Order</button>
            </form>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row logo-brand">
                <img src="images/facebook.png" alt="">
                <img src="images/instagram.png" alt="">
                <img src="images/twitter.png" alt="">
            </div>
        </div>
    </footer>

    <div class="no-copy">
        All rights reserved. Designed by <span>MinhQuanTheQP</span>
    </div>
</body>
</html>