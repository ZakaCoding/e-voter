<?php
  session_start();
  include_once "../config.php";
  if(!isset($_POST['masuk']))
  {
    die(header("location: http://localhost/voter/v_now-vote.php"));
  }

  $id_pemilihan = $mysqli->real_escape_string($_POST['id_pemilihan']);
  $password = $mysqli->real_escape_string($_POST['password']);

  try {
    if(empty($id_pemilihan))
    {
      throw new RuntimeException("Error data id kosong");
    }

    if(empty($password))
    {
      ("Error data password kosong");
    }

    $query = $mysqli->query("SELECT * FROM `tabel_pembuat` WHERE id_vote = $id_pemilihan");

    if($query->num_rows > 0)
    {
      $data = $query->fetch_assoc();

      // Verify password
      if(!password_verify($password,$data['pass_pilihan']))
      {
        throw new RuntimeException("Password yang anda masukan salah");
      }
      else
      {
        // Extract data from pilihan
        $id_pilihan1 = $data['id_pilihan1'];
        $id_pilihan2 = $data['id_pilihan2'];

        $query = $mysqli->query("SELECT * FROM `pilihan` WHERE id_pilihan = $id_pilihan1");
        $data_pilihan1 = $query->fetch_assoc();
        $pilihan1 = $data_pilihan1['pilih']; //Nama pilihan 1
        $id1 = $data_pilihan1['id_pilihan'];

        $query2 = $mysqli->query("SELECT * FROM `pilihan` WHERE id_pilihan = $id_pilihan2");
        $data_pilihan2 = $query2->fetch_assoc();
        $pilihan2 = $data_pilihan2['pilih']; //Nama pilihan 2
        $id2 = $data_pilihan2['id_pilihan'];

        include "../v_pemilihan.php";
      }
    }
    // check password
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
