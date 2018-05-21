<?php
session_start();

$id = $_POST['id'];
$pw = $_POST['pw'];

#MySQL 커넥션
$host = "localhost";
$user = trim(`echo \$DB_USER`);
$password = trim(`echo \$DB_PW`);
$db = trim(`echo \$DB_NAME`);

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn) {
  die("Connection failed".mysqli_connect_error());
}

# 로그인 여부 확인
function loginCheck() {

  $session_id = $_SESSION['id'];

  if (isset($session_id)) {
    echo "이미 로그인 되어있습니다. id: $session_id <br>";
    echo "<input type=\"button\" value=\"로그아웃\" onclick=\"location.href='logout.php'\"/>";

    return True;
  }

  return False;
}

# 로그인 성공 함수
function successLogin($id, $name) {

  echo "<h2>Success Login</h2><br>";
  echo $name."님 환영합니다.";
  $_SESSION['id'] = $id;
}

# 계정 존재 여부 확인
function existAccount($id, $pw) {
  global $conn;

  $select_query = "SELECT id, pw, name FROM user where id='$id' and pw='$pw'";

  $result = mysqli_query($conn, $select_query);

  $row = mysqli_fetch_array($result);

  if(isset($row['id'])) {

    successLogin($row['id'], $row['name']);

    return True;
  }

  return False;
}

#######메인 코드######

if(loginCheck()) {

}
else if (!empty($id) && !empty($pw)) {

  if(!existAccount($id, $pw)) {
    echo "<script>alert('계정 정보가 존재하지 않습니다.'); history.back();</script>";
  }

}
else {
  echo "<script>alert('입력 정보가 올바르지 않습니다.'); history.back();</script>";
}

mysqli_close($conn);

?>
<meta http-equiv='refresh' content='0;url=index.html'>
