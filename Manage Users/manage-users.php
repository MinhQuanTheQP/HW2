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
      <h2 class="px-5  fw-bolder">
        Manage Users
      </h2>
    </div>
    <div class="px-5 mx-4 pb-5">
        <button class="btn btn-primary px-3 mx-4" type="submit">Add New User</button>
    </div>
    
    
  <div class="table-responsive px-5 mx-5 pb-5">
    <table class="table table-sm table-borderless">
      <thead>
        <tr class="border-bottom">
          <th scope="col">S.N.</th>
          <th scope="col">Full Name</th>
          <th scope="col">User Name</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Arsenio Leach</td>
          <td>toduwaxobi</td>
          <td>
          <button class="btn btn-primary"> Change Password </button> 
          <button class="btn btn-success"> Update Admin </button>
          <button class="btn btn-danger"> Delete Admin </button>
          </td>   
        </tr>

        <tr>
          <th scope="row">2</th>
          <td>Sasha Mendez</td>
          <td>goxemyde</td>
          <td>
            <button class="btn btn-primary"> Change Password </button> 
            <button class="btn btn-success"> Update Admin </button>
            <button class="btn btn-danger"> Delete Admin </button>
            </td>   
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Vijay Thapa</td>
          <td>vijaythapa</td>
          <td>
            <button class="btn btn-primary"> Change Password </button> 
            <button class="btn btn-success"> Update Admin </button>
            <button class="btn btn-danger"> Delete Admin </button>
            </td>   
        </tr>

        <tr>
          <th scope="row">4</th>
          <td>Admin</td>
          <td>admin</td>
          <td>
            <button class="btn btn-primary"> Change Password </button> 
            <button class="btn btn-success"> Update Admin </button>
            <button class="btn btn-danger"> Delete Admin </button>
            </td>   
        </tr>
      </tbody>
    </table>
    </div>
  </div>

    <div class="text-center p-2 mb-2 bg-danger text-white">2020 All rights reserved. Food House. Developed By . MinhQuanTheQP</div>
    
</body>
</html>
