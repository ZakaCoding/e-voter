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
    <input type="number" id="idRand" name="id_rand" value="<?= $number; ?>" disabled>
  </div>
</div>
<div class="row">
  <div class="col-sm-8">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Subjek</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Subjek">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Deskripsi</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Deskripsi">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Pilihan 1</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Pilihan 1">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Upload gambar</label>
          <input type="file" class="form-control-file" id="inputPassword4">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Pilihan 2</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Pilihan 2">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Upload gambar</label>
          <input type="file" class="form-control-file" id="inputPassword4">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Password</label>
        <input type="password" class="form-control" id="inputAddress2" placeholder="Type password here">
      </div>
      <div class="form-row">
        <div class="form-group col-sm-6">
          <label for="expr1">Tanggal Pemilihan</label>
          <input type="date" class="form-control" id="expr1" name="" value="">
        </div>
        <div class="form-group col-sm-6">
          <label for="expr2">Tanggal Berakhir</label>
          <input type="date" class="form-control" id="expr2" name="" value="">
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
          <a class="btn btn-default" href="main.php">Simpan</a>
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
