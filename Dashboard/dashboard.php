<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom border-dark">
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-danger fw-bolder" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-danger fw-bolder" href="admin.php">Admin</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-danger fw-bolder" href="category.php">Category</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-danger fw-bolder" href="food.php">Food</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-danger fw-bolder" href="order.php">Order</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-danger fw-bolder" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-gray-light ">
    <div class="p-5 ">
      <h2 class="px-5 mx-4 fw-bolder">
        Dashboard
      </h2>
    </div>
    <div class="container p-4 pb-5">
      <div class="row gx-4 pb-5">
        <div class="col">
          <div class="p-5 border bg-light ">
            <h3 class="mb-3 fw-bolder text-center">
              4
            </h3>
            <h6 class="text-center">
              Categories
            </h6>
          </div>
        </div>
        <div class="col">
          <div class="p-5 border bg-light ">
            <h3 class="mb-3 fw-bolder text-center">
              6
            </h3>
            <h6 class="text-center">
              Foods
            </h6>
          </div>
        </div>
        <div class="col">
          <div class="p-5 border bg-light ">
            <h3 class="mb-3 fw-bolder text-center">
              3
            </h3>
            <h6 class="text-center">
              Total Order
            </h6>
          </div>
        </div>
        <div class="col">
          <div class="p-5 border bg-light ">
            <h3 class="mb-3 fw-bolder text-center">
              $36.00
            </h3>
            <h6 class="text-center">
              Revenue Generated
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="text-center p-2 mb-2 bg-danger text-white">2020 All rights reserved. Food House. Developed By . MinhQuanTheQP</div>
</body>
</html>