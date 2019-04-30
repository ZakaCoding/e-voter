<?php
  include_once "config.php";

  if(!isset($_POST['register']))
  {
    header("location: v_login.php");
  }

  $username = $mysqli->real_escape_string($_POST['username']);
  $name = $mysqli->real_escape_string($_POST['name']);
  $pwd = $mysqli->real_escape_string($_POST['pwd']);

  // Check disable empty
  if(empty($username))
  {
    die(header("location: v_login.php?error=username-empty"));
  }
  if(empty($name))
  {
    die(header("location: v_login.php?error=name-empty"));
  }
  if(empty($pwd))
  {
    die(header("location: v_login.php?error=password-empty"));
  }

  // Create hash password
  $randID = str_shuffle("1234567890");
  $randID = substr($randID,0,6);
  $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
  $query = $mysqli->query("INSERT INTO `tabel_admin` VALUES ('$randID', '$username', '$name', '$pwdHash')");

  if($query)
  {
    die("Success create account");
  }
  else
  {
    die("SOMETHING error($mysqli->error)");
    $mysqli->close;
  }
