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

$num = $_GET['num'] * 30;


$select_query = "SELECT * FROM board Limit $num, 30";

$select_result = mysqli_query($conn, $select_query);

$rows = array();

while($row = mysqli_fetch_array($select_result)) {
  $rows[] = $row;
}

echo json_encode($rows);
?>
