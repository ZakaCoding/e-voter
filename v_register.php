<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="style.css">

    <title>E-VOTER</title>
  </head>
  <body>
    <header class="head-main">
      <br>
      <!-- Logo -->
      <img src="asset/logo.png" alt="" class="logo">
    </header>
    <div class="spacer">

    </div>
    <main class="container">
      <div class="row">
        <div class="center">
          <div class="card login-body">
            <div class="card-body">
              <form action="f_register.php" method="post">
                <div class="form-group">
                  <label for="input1">Username</label>
                  <input class="form-control" id="input1" type="text" name="username" value="" placeholder="Enter username here">
                </div>
                <div class="form-group">
                  <label for="input1">Name</label>
                  <input class="form-control" id="input1" type="text" name="name" value="" placeholder="Enter your name here">
                </div>
                <div class="form-group">
                  <label for="input2">Password</label>
                  <input class="form-control" id="input2" type="password" name="pwd" value="" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">Register</button>
                <small>Don't have account ? <a href="v_login.php">Login</a></small>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="spacer">

    </div>
    <br><br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
