<?php
  $number = "123456789";
  $number = str_shuffle($number);
  $number = substr($number,0,5);
?>
<div class="row">
  <div class="col">
    <h2>Buat Pilihan</h2>
  </div>
  <div class="col">
    <label for="idRand"><h2>ID</h2></label>
    <input type="number" id="idRand" value="<?= $number; ?>" disabled>
  </div>
</div>
<div class="row">
  <div class="col-sm-8">
    <form method="post" action="function/f_vote.php">
      <input type="number" id="idRand" name="id_rand" value="<?= $number; ?>" disabled hidden>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Subjek</label>
          <input type="text" class="form-control" id="inputEmail4" name="subjek" placeholder="Subjek">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Deskripsi</label>
          <input type="text" class="form-control" id="inputPassword4" name="desc" placeholder="Deskripsi">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Pilihan 1</label>
          <input type="text" class="form-control" id="inputEmail4" name="pilih1" placeholder="Pilihan 1">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Upload gambar</label>
          <input type="file" class="form-control-file" name="photo1" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Pilihan 2</label>
          <input type="text" class="form-control" id="inputEmail4" name="pilih2" placeholder="Pilihan 2">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Upload gambar</label>
          <input type="file" class="form-control-file" name="photo2" id="inputPassword4">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Password</label>
        <input type="password" class="form-control" id="inputAddress2" name="pwdroom" placeholder="Type password here">
      </div>
      <div class="form-row">
        <div class="form-group col-sm-6">
          <label for="expr1">Tanggal Pemilihan</label>
          <input type="date" class="form-control" id="expr1" name="tglpilih" value="">
        </div>
        <div class="form-group col-sm-6">
          <label for="expr2">Tanggal Berakhir</label>
          <input type="date" class="form-control" id="expr2" name="tglexpr" value="">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            saya menyetujui terms of service
          </label>
        </div>
      </div>
      <div class="center">
        <div class="btn-gradient">
          <button type="submit" class="btn btn-default" name="vote_save">Simpan</button>
        </div>
        <div class="btn-gradient">
          <button type="reset" class="btn btn-default" href="main.php">Batal</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-sm-4">
    Silahkan isi form buat pilihan dengan lengkap, sehingga pemilih mendapatkan informasi yang dibutuhkan dalam menentukan pilihan.
    <a href="http://localhost/voter/v_admin.php?menu=vote" class="btn btn-primary">Data pilihan</a>
  </div>
</div>
<?php session_unset("error"); ?>
