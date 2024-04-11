<?php
session_start();

$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "qwe123";
$dbname = "COMON";

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname); 
if ($conn->connect_error) {  
    die("데이터베이스 연결 실패: " . $conn->connect_error); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST['id'];
    $userpass = $_POST['pw'];

    $sql = "SELECT * FROM user_info WHERE user_id = '$username' and user_pw = '$userpass'";                     
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["id"] = $username;
        $_SESSION["name"] = $row["user_name"];
        
        header("Location: ../index.php");
        exit; // 이후 코드 실행 방지를 위해 exit 사용
    } else {
        echo "<script>alert('아이디 혹은 비밀번호가 맞지 않습니다.');
        location.href='../PHP/login_view.php'
        </script>";
        exit;
    }
}

$_SESSION['user_id'] = $user_id;

if(isset($_SESSION['user_id'])) {
    // 사용자가 로그인한 상태라면 이 페이지를 계속 진행합니다.
} else {
    // 사용자가 로그인하지 않은 상태라면 로그인 페이지로 리다이렉트합니다.
    header("Location: login.php");
    exit;
}

$conn->close();
?>