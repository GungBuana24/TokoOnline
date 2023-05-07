
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>OnlineShop</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">BACK</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="btn-group" role="group" aria-label="Basic example">
</div>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center mb-2">L O G I N</h1>
                <a href="register.php" class="regis"><p>not have a account? register now!</p></a>
            </div>
            <div class="card-text">
            <form action="SignIn.php" method="post"onSubmit="return validasi()">
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email"id="email" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass"id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" value="login"class="btn btn-primary">Login</button>
</form>
            </div>
        </div>
    </div>
</body>
</html>