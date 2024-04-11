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
    // 사용자로부터 입력된 회원가입 정보
    $newuser_id = $_POST['user_id'];
    $newuser_pw = $_POST['user_pw'];
    $newuser_pwr = $_POST['user_pw_r'];
    $newuser_name = $_POST['user_name'];
    $newuser_gender = $_POST['user_gender'];
    $newuser_brith = $_POST['user_brith'];
    $newuser_email = $_POST['user_email'];
    $newuser_phone = $_POST['user_phone'];
    
    // 이메일 중복 체크
    $error_message = checkEmail($conn, $newuser_email);
    if ($error_message != "") {
        // 중복된 이메일이 있을 경우 에러 메시지를 출력하고 회원가입을 진행하지 않음
        echo "<script>alert('$error_message');
        location.href='signup_view.php';
        </script>";
    } else {
        // 중복된 이메일이 없을 경우 회원가입을 진행
        $sql = "INSERT INTO user_info (user_id,user_pw,user_pw_r,user_name,user_gender,user_brith,user_email,user_phone)
        VALUES ('$newuser_id', '$newuser_pw','$newuser_pwr','$newuser_name','$newuser_gender','$newuser_brith','$newuser_email','$newuser_phone')";
         if ($conn->query($sql) === TRUE) {
            // 회원가입이 성공했을 때 출력
            echo "<script>alert('회원가입에 성공 하셨습니다!');
            location.href='login_view.php';
            </script>";
            exit; // 이후 코드 실행 방지를 위해 exit 사용
        } else {
            echo "오류: " . $sql . "<br>" . $conn->error;
        }
    }
}

function checkEmail($conn, $newuser_email) {  //이메일 중복 체크
    $sql = "SELECT * FROM user_info WHERE user_email = '$newuser_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return "이미 사용 중인 이메일입니다.";
    }
}

$conn->close();
?>