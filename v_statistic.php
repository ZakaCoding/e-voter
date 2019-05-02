<?php
  include_once "config.php";
  if(isset($_GET['id_vote']))
  {
    $id_vote = $_GET['id_vote'];
    $query = $mysqli->query("SELECT * FROM `tabel_pembuat` WHERE id_vote = $id_vote");
    $data  = $query->fetch_assoc();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../style.css">
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
          <h2>Pilihan</h2>
        </div>
        <div class="col">
          <label for="idRand"><h2>ID</h2></label>
          <input type="number" id="idRand" value="<?= $data['id_vote']; ?>" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <h3>SUBJEK</h3>
          <p><?= $data['subjek'] ?></p>
          <h3>Deskripsi</h3>
          <p>
          <?= $data['deskripsi']; ?></p>
          <form method="post" action="function/f_vote.php">
            <div class="row">
              <div class="col">
                <a class="a-vote" href="#"><?= $data['id_pilihan1']; ?></a>
                <b>Data sura : <?= $data['total_pilih1']; ?></b>
              </div>
              <div class="col">
                <a class="a-vote" href="#"><?= $data['id_pilihan2']; ?></a>
                <b>Data sura : <?= $data['total_pilih2']; ?></b>
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-4">
          Silahkan isi form buat pilihan dengan lengkap, sehingga pemilih mendapatkan informasi yang dibutuhkan dalam menentukan pilihan.
        </div>
      </div>
    </main>
  </body>
</html>
