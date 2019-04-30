<?php
  $number = "123456789";
  $number = str_shuffle($number);
  $number = substr($number,0,5);
?>
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
        <div class="col">
          <h2>Pemilih</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <form>
            <div class="form-group">
              <label for="inputEmail4">ID Pemilihan</label>
              <input type="number" class="form-control" id="inputEmail4" placeholder="Masukan ID Pemilihan" name="id_pemilihan" required>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Password</label>
              <input type="password" class="form-control" id="inputAddress2" placeholder="Type password here" required>
            </div>
            <div class="center">
              <div class="btn-gradient">
                <button type="submit" class="btn btn-default">Masuk</button>
              </div>
              <div class="btn-gradient">
                <button type="reset" class="btn btn-default" href="main.php">Batal</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-4">
          Silahkan isi form buat pilihan dengan lengkap, sehingga pemilih mendapatkan informasi yang dibutuhkan dalam menentukan pilihan.
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

    <script src="" charset="utf-8">
    $('document').ready(function() {

      // $("#idRand").on('load', function() {
      //   var random_number = Math.rand();
      //   $(this).value()
      // });
    });
    </script>
  </body>
</html>
