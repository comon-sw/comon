<?php
session_start();

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "zlawlstjr";
$dbname = "gommoddi";

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname); 
if ($conn->connect_error) {  
    die("데이터베이스 연결 실패: " . $conn->connect_error); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $login_pw = $_POST["password"];
    $num = $_POST["num"];

    $sql = "INSERT INTO MyLogin (name, email, login_pw, num) VALUES ('$name', '$email', '$login_pw', '$num')";                     
    if ($conn->query($sql) === TRUE) {
        // 회원가입이 성공했을 때 출력
        echo '<script type="text/javascript">alert("회원 가입에 성공 하셨습니다!");</script>';
        echo '<meta http-equiv="refresh" content="0;url=../computer/index.php">';
        exit; // 이후 코드 실행 방지를 위해 exit 사용
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>