<?php

  session_start();
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  if($userid == "") {
    echo "<h2> Validation failed: User ID missing! </h2>";
  } else if($password == "") {
    echo "<h2> Validation failed: Password is missing! </h2>";
  }
  
  else if(strlen($password)<8) {
      echo "<h2> Validation failed: Password must be at least 8 characters long! </h2>";
  } else if((substr_count($password,'@')<1) && (substr_count($password,'#')<1) && (substr_count($password,'$')<1) && (substr_count($password,'%')<1)) {
      echo "<h2> Validation failed: Password must contain at least one special character (@, #, $, %) </h2>";
  } else {
      if(['usertype'] == 'admin') {
        header('location: ../views/adminhome.php');
      } else {
        $_SESSION['user'];
        header('location: ../views/user home.php');
      }
  }

?>