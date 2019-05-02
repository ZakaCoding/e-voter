<?php
  $number = "123456789";
  $number = str_shuffle($number);
  $number = substr($number,0,5);
  
  include_once "config.php";

  // Select Data from tabel pembuat
  $id = $_SESSION['admin']['id_admin'];
  $query = $mysqli->query("SELECT * FROM `tabel_pembuat` WHERE id_admin IN(SELECT id_admin FROM `tabel_admin` WHERE id_admin = $id)");
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost/voter/v_admin.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tabel pilihan</li>
  </ol>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Pilihan</th>
      <th scope="col">Subjek</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Tanggal Pemilihan</th>
      <th scope="col">Tanggal Berakhir</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if($query->num_rows > 0)
      {
        $i = 1;
        while($data = $query->fetch_assoc()) :
      ?>
      <tr>
        <th scope="row"><?= $i; ?></th>
        <th scope="row"><?= $data['id_vote']; ?></th>
        <td><?= $data['subjek']; ?></td>
        <td><?= $data['deskripsi']; ?></td>
        <td><?= $data['tgl_pilih']; ?></td>
        <td><?= $data['tgl_akhir']; ?></td>
      </tr>
      <?php
        $i++;
        endwhile;
      }
      else
      {
        echo "DATA NOT FOUND";
      }
    ?>
  </tbody>
</table>
