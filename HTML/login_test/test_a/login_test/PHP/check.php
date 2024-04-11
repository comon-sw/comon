<?php
session_start();

// MySQL 서버 연결 정보 설정
$servername = "127.0.0.1";
$username = "root";
$password = "qwe123";
$dbname = "COMON";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자로부터 입력된 아이디 값
    $newuser_id = $_POST['user_id'];

    // 아이디 중복 체크
    $sql = "SELECT * FROM user_info WHERE user_id = '$newuser_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 중복된 아이디가 있을 경우
        echo "이미 사용 중인 아이디입니다.";
    } else {
        // 중복된 아이디가 없을 경우
        echo "사용 가능한 아이디입니다.";
    }
}

$conn->close();
?>