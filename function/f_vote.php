<?php
  include_once "../config.php";
  session_start();

  if(!isset($_POST['vote_save']))
  {
    die(header("location: http://localhost/voter"));
  }

  // get data form input
  $subject = $mysqli->real_escape_string($_POST['subjek']);
  $desc = $mysqli->real_escape_string($_POST['desc']);
  $pilih1 = $mysqli->real_escape_string($_POST['pilih1']);
  $pilih2 = $mysqli->real_escape_string($_POST['pilih2']);

  $pwd = $mysqli->real_escape_string($_POST['pwdroom']);
  $date_vote = $mysqli->real_escape_string(strtotime($_POST['tglpilih']));
  $date_voteExpr = $mysqli->real_escape_string($_POST['tglexpr']);

  // Photo file

  // Function trigger_error
  function triggerERROR($_errCode)
  {
    $_SESSION['error'] = [
      "error_code" => $_errCode
    ];
    die(header("location: http://localhost/voter/v_admin.php?menu=buat-pilihan"));
  }

  // Trigger error
  try {
    if(empty($subject))
    {
      // throw new RuntimeException("ERR_SUBJECT_EMPTY");
      die("this One");
    }

    if(empty($desc))
    {
      // throw new RuntimeException("ERR_DESC_EMPTY");
      die("this 2");
    }

    if (empty($pilih1) || empty($pilih2)) {
      // throw new RuntimeException("ERR_VOTE_EMPTY");
      die("this 3");
    }

    if(empty($pwd))
    {
      // throw new RuntimeException("ERR_PWD_EMPTY");
      die("this 4");
    }

    if(empty($date_vote))
    {
      // throw new RuntimeException("ERR_VOTE_DATE_EMPTY");
      die("this 5");
    }

    if(empty($date_voteExpr))
    {
      // throw new RuntimeException("ERR_VOTE_EXPR_EMPTY");
      die("this 6");
    }
  } catch (\Exception $e) {
    $errCode = $e->getMessage();
    triggerERROR($errCode);
  }

  // Store data to database
  $id1 = "123456789";
  $id1 = str_shuffle($id1);
  $id1 = substr($id1,0,5);

  $id2 = "123456789";
  $id2 = str_shuffle($id2);
  $id2 = substr($id2,0,5);

  $insert = $mysqli->query("INSERT INTO `pilihan` VALUES($id1,'$pilih1',NULL,NULL), ($id2,'$pilih2',NULL, NULL)");

  if($insert)
  {
    // ID for voter
    $id = "123456789";
    $id = str_shuffle($id);
    $id = substr($id,0,5);

    // ID from pilihan
    $admin = $_SESSION['admin']['id_admin'];
    // Convert data to time mysql
    $date_vote = date("Y-m-d",$date_vote);

    // Hash password vote
    $pwd_hash = password_hash($pwd,PASSWORD_DEFAULT);

    // Store data to database table pembuat_pilihan
    $query = "INSERT INTO `tabel_pembuat` VALUES($id,$id1, $id2,$admin,'$subject','$desc','$pwd_hash','$date_vote','$date_voteExpr',0,0)";

    if(!$mysqli->query($query))
    {
      echo "Failed " . $mysqli->error;
    }
    else
    {
      echo
      die(header("location: http://localhost/voter/v_admin.php?menu=vote"));
    }
  }
  else
  {
    echo "failed " . $mysqli->error;
  }
