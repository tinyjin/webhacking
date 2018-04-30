<?php

session_start();

$id = $_SESSION['id'];

if(!empty($id)) {
  echo "Hello ".$id;
}
else {
  echo "<script language='javascript'>alert('로그인 필요'); history.back(); </script>";
}

session_destory();

?>
