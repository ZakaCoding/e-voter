<?php
  if(!isset($_POTS['']))
  if(isset($_GET['pilihan']) && isset($_GET['id_vote']))
  {
    if(!empty($_GET['pilihan']) && !empty($_GET['id_vote']))
    {
      include_once("../config.php");
      $nomor = $_GET['no'];

      if($nomor == 1)
      {
        $id = $_GET['pilihan'];
        $vote = $_GET['id_vote'];
        $query = $mysqli->query("SELECT total_pilih1 FROM `tabel_pembuat` WHERE id_pilihan1 = $id");
        $data = $query->fetch_assoc();
        $count = $data['total_pilih1'] + 1;
        $query = $mysqli->query("UPDATE `tabel_pembuat` SET total_pilih1 = $count WHERE id_vote = $vote");
      }
      else if($nomor == 2)
      {
        $id = $_GET['pilihan'];
        $vote = $_GET['id_vote'];
        $query = $mysqli->query("SELECT total_pilih2 FROM `tabel_pembuat` WHERE id_vote = $vote");
        $data = $query->fetch_assoc();
        $count = $data['total_pilih2'] + 1;
        $query = $mysqli->query("UPDATE `tabel_pembuat` SET total_pilih2 = $count WHERE id_vote = $vote");
      }

      if(!$query) {
        echo "Gagal Pemilihan system error";
      }
      else
      {
        include_once "../v_statistic.php?id_vote=$vote";
      }
    }
  }
  else
  {
    include_once "../v_statistic.php";
  }
