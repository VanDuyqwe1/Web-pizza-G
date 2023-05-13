<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/resources/css/loginadmin.css">
  <title>Tomato's Pizza</title>
  <style>
    .btn-color {
      background-color: #0e1c36;
      color: #fff;
      height: 50px;
      width: 100px;

    }

    .profile-image-pic {
      height: 200px;
      width: 200px;
      object-fit: cover;

    }

    .text-center {
      display: flex;
      justify-content: center;
    }


    .cardbody-color {
      background-color: #ebf2fa;
    }

    a {
      text-decoration: none;
    }

    h1 {
      text-align: center;

    }

    input{
      height: 50px;
      width: 200px;
      border: #0e1c36;
    }
  </style>
</head>

<body>
  <div class="container ">
    <div class="row">
      <div class="col-md-6  ">
        <h1 class="text-center text-dark mt-5 ">Login Admin</h1>
        <div class="card">

          <form class="card-body cardbody-color p-lg-5 t" id="admin-login" method="POST" action="/admin/login">
            @csrf

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile"><br>

            </div>
            <div class="text-center">
            <input type="text" name="email" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Email"><br>

            </div>
            <div class="text-center">
            <input type="password" name="password" class="form-control" id="password" placeholder="password"><br>


            </div>
            <div class="text-center">
            <div class="text-center"><button type="submit" class="btn btn-color px-15 mb-15 w-100">Login</button></div>


            </div>



          </form>
        </div>

      </div>
    </div>
  </div>
</body>

</html>