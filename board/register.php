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

#이미 가입되어있는지 확인
function isRegisterUser($user_id) {

  global $conn;

  $select_query = "SELECT id from user where id='$user_id'";
  $select_result = mysqli_query($conn, $select_query);
  $select_id = mysqli_fetch_array($select_result)['id'];

  if (isset($select_id)) {
    return True;
  }

  return False;
}

#유저 회원가입
function registerUser($user_id, $user_pw, $user_name) {

  global $conn;

  $insert_query = "INSERT into user(id,pw,name) values('$user_id', '$user_pw', '$user_name')";

  if(mysqli_query($conn, $insert_query))
    echo "$user_name : 회원가입이 완료되었습니다.";
  else
    echo "ERROR!";

}

$id = $_POST['id']; //아이디
$pw = $_POST['pw']; //비밀번호
$name = $_POST['name']; //닉네임


######메인코드######

if( !isRegisterUser($id) && !empty($id) && !empty($pw) ) {
  registerUser($id, $pw, $name);
}
else {
  echo "<script>alert('Error: 아이디 또는 비밀번호를 확인해주세요!'); history.back();</script>";
}

mysqli_close($conn);

 ?>
 <meta http-equiv='refresh' content='0;url=index.html'>
