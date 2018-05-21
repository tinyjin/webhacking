<?php
session_start();

$title = $_POST['title'];
$content = $_POST['content'];

#MySQL 커넥션
$host = "localhost";
$user = trim(`echo \$DB_USER`);
$password = trim(`echo \$DB_PW`);
$db = trim(`echo \$DB_NAME`);

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn) {
  die("Connection failed".mysqli_connect_error());
}

#보드 업로드
function uploadBoard($title, $content) {

  global $conn;

  $id = $_SESSION['id'];

  $select_query = "SELECT id, name from user where id='$id'";

  $select_result = mysqli_query($conn, $select_query);

  if(!$select_result) {
    return 2;
  }

  $select_arr = mysqli_fetch_array($select_result);

  $name = $select_arr['name'];

  $insert_query = "INSERT INTO board(title, content, user_id, name) values('$title', '$content', '$id', '$name')";


  if(mysqli_query($conn, $insert_query)) {
    return 1;
  }

  return 0;
}

$upload_result = uploadBoard($title, $content);

echo $upload_result;

 ?>
