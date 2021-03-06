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
                <a class="a-vote" href="http://localhost/voter/function/f_pilih_now.php?pilihan=<?= $id1; ?>&id_vote=<?= $data['id_vote'] ?>&no=1"><?= $pilihan1; ?></a>
              </div>
              <div class="col">
                <a class="a-vote" href="http://localhost/voter/function/f_pilih_now.php?pilihan=<?= $id2; ?>&id_vote=<?= $data['id_vote'] ?>&no=2"><?= $pilihan2; ?></a>
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
