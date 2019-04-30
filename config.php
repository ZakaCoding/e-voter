<?php
  $db_password = "7cd81f88";
  // Connection to mysql db
  $mysqli = new mysqli("localhost", "root","$db_password", "database_voter");

  if($mysqli->connect_error) {
    die('Connection error('. $mysqli->connect_errno. ') ' . $mysqli->connect_error);
    $mysqli->close;
  }
