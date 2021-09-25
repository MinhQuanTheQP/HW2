<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

<div class="container-fluid">
        <div class="row search-section">
            <div class="col-12 search-box">
                <input type="text" class="input-ele" placeholder="Search for food ...">
                <a href="#" class="global-btn">Search</a>
            </div>
        </div>
        <div class="container-fluid explore-wrapper">
            <div class="row explore-section">
                <div class="col-12">
                    <h3 class="global-title">Explore Foods</h3>
                </div>
                <div class="col-4 food-item-4">
                    <div class="main">
                        <img src="images/pizza.jpg" alt=""width="100%" height="100%">
                        
                        <p>Pizza</p>
                    </div>
                </div>
                <div class="col-4 food-item-4">
                    <div class="main">
                        <img src="images/burger.jpg" alt=""width="100%" height="100%">
                        
                        <p>Burger</p>
                    </div>
                </div>
                <div class="col-4 food-item-4">
                    <div class="main">
                        <img src="images/momo.jpg" alt=""width="100%" height="100%">
                        
                        <p>Momo</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row food-section">
            <div class="col-12">
                <h3 class="global-title">Food menu</h3>
            </div>
            <div class="col-5 food-item-6">
                <div class="left">
                    <img src="images/menu-pizza.jpg" alt="">
                </div>
                <div class="right">
                    <p class="food-tile">Food title</p>
                    <p class="food-price">$2.3</p>
                    <span class="food-desc">
                        Made with Italian Sauce, chicken and organice vegetables
                    </span>
                    <a href="#" class="global-btn">Order now</a>
                </div>
            </div>
            <div class="col-5 food-item-6">
                <div class="left">
                    <img src="images/menu-burger.jpg" alt="">
                </div>
                <div class="right">
                    <p class="food-tile">Food title</p>
                    <p class="food-price">$2.3</p>
                    <span class="food-desc">
                        Made with Italian Sauce, chicken and organice vegetables
                    </span>
                    <a href="#" class="global-btn">Order now</a>
                </div>
            </div>
            <div class="col-5 food-item-6">
                <div class="left">
                    <img src="images/menu-burger.jpg" alt="">
                </div>
                <div class="right">
                    <p class="food-tile">Food title</p>
                    <p class="food-price">$2.3</p>
                    <span class="food-desc">
                        Made with Italian Sauce, chicken and organice vegetables
                    </span>
                    <a href="#" class="global-btn">Order now</a>
                </div>
            </div>
            <div class="col-5 food-item-6">
                <div class="left">
                    <img src="images/menu-pizza.jpg" alt="">
                </div>
                <div class="right">
                    <p class="food-tile">Food title</p>
                    <p class="food-price">$2.3</p>
                    <span class="food-desc">
                        Made with Italian Sauce, chicken and organice vegetables
                    </span>
                    <a href="#" class="global-btn">Order now</a>
                </div>
            </div>
            <div class="col-5 food-item-6">
                <div class="left">
                    <img src="images/menu-pizza.jpg" alt="">
                </div>
                <div class="right">
                    <p class="food-tile">Food title</p>
                    <p class="food-price">$2.3</p>
                    <span class="food-desc">
                        Made with Italian Sauce, chicken and organice vegetables
                    </span>
                    <a href="#" class="global-btn">Order now</a>
                </div>
            </div>
            <div class="col-5 food-item-6">
                <div class="left">
                    <img src="images/menu-momo.jpg" alt="">
                </div>
                <div class="right">
                    <p class="food-tile">Food title</p>
                    <p class="food-price">$2.3</p>
                    <span class="food-desc">
                        Made with Italian Sauce, chicken and organice vegetables
                    </span>
                    <a href="#" class="global-btn">Order now</a>
                </div>
            </div>

            <div class="menu-item__showMore">
                <a href="#">See All Foods</a>
            </div>
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