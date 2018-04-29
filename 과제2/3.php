<?php

$id = $_POST['user_id'];
$pw = $_POST['user_pw'];

if($id == admin) {
  echo "Hello, Admin : ".$pw;
}
else {
  echo "Bye";
}


?>
