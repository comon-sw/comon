<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
session_start();
$host = '121.139.20.242';
$user = 'root';
$pw = 'qwe123';
$db_name = 'COMON';
$conn = mysqli_connect($host, $user, $pw, $db_name);
$signup_id = $_POST['user_id'];
$signup_pass = $_POST['user_pw'];
$signup_email = $_POST['user_email'];
$sql = "INSERT INTO member VALUES ('$signup_id', '$signup_pass', '$signup_email')";

if ($signup_id == "" || $signup_email == "" || $signup_pass == "") {
   echo '<script>alert("비어있는 항목이 있습니다.");</script>';
   echo '<script>history.back();</script>';
}

else {
   mysqli_query($conn, $sql);
   echo '<script>alert("회원 가입이 완료되었습니다.");</script>';
   echo "<script>location.replace('login.php');</script>";
}
?>