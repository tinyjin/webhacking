<?php

session_start();

$pw = $_POST['user_pw'];
$id = $_POST['user_id'];

if($pw == 'password') {
  $_SESSION['id'] = $id;
  echo "<script language='javascript'>window.location.replace('./6.php');</script>";
}
else {
  echo "<script language='javascript'>alert('로그인 실패'); history.back();</script>";
}

?>
