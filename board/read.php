<?php

#MySQL 커넥션
$host = "localhost";
$user = trim(`echo \$DB_USER`);
$password = trim(`echo \$DB_PW`);
$db = trim(`echo \$DB_NAME`);

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn) {
  die("Connection failed".mysqli_connect_error());
}

$num = $_GET['num'];

$select_query = "SELECT * from board where num='$num'";

$select_result = mysqli_query($conn, $select_query);

if($select_result) {
  $select_arr = mysqli_fetch_array($select_result);

  echo json_encode($select_arr);

}
else {
  echo "error";
}

 ?>
