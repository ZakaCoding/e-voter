<?php
  session_start();

  if(isset($_POST['login']))
  {
    die(header("v_login.php"));
  }

  include_once "config.php";

  $username_id = $mysqli->real_escape_string($_POST['userid']);
  $password = $mysqli->real_escape_string($_POST['pwd']);

  $query = $mysqli->query("SELECT * FROM `tabel_admin` WHERE username = '$username_id' LIMIT 1");

  if($query->num_rows == 1)
  {
    // check password is true
    $user = $query->fetch_assoc();

    if(!password_verify($password,$user['password']))
    {
      die(header("location: v_login.php"));
    }

    // Create session login
    $_SESSION['admin'] = [
      "login" => true,
      "id_admin" => $user['id_admin'],
      "name" => $user['nama']
    ];

    header("location: http://localhost/voter/v_admin.php");
  }
  else
  {
    header("location : http://localhost/voter");
  }
?>
