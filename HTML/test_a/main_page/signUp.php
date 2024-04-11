<!--?php
session_start();

$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "qwe123";
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
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
        exit; // 이후 코드 실행 방지를 위해 exit 사용
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); -->

<?php
session_start();

$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "qwe123";
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

    // 중복 이메일 검사
    $check_email_sql = "SELECT * FROM MyLogin WHERE email = '$email'";
    $result_email = $conn->query($check_email_sql);
    if ($result_email->num_rows > 0) {
        // 이미 사용 중인 이메일인 경우
        echo '<script type="text/javascript">alert("이미 사용 중인 이메일입니다.");</script>';
        echo '<meta http-equiv="refresh" content="0;url=login.php">'; // 회원가입 페이지로 이동
        exit;
    }

    // 중복 num 검사
    $check_num_sql = "SELECT * FROM MyLogin WHERE num = '$num'";
    $result_num = $conn->query($check_num_sql);
    if ($result_num->num_rows > 0) {
        // 이미 사용 중인 num인 경우
        echo '<script type="text/javascript">alert("이미 사용 중인 전화번호입니다.");</script>';
        echo '<meta http-equiv="refresh" content="0;url=login.php">'; // 회원가입 페이지로 이동
        exit;
    }

    // 중복 검사를 통과한 경우, 새로운 회원 등록
    $insert_sql = "INSERT INTO MyLogin (name, email, login_pw, num) VALUES ('$name', '$email', '$login_pw', '$num')";                     
    if ($conn->query($insert_sql) === TRUE) {
        // 회원가입이 성공했을 때 출력
        echo '<script type="text/javascript">alert("회원 가입에 성공 하셨습니다!");</script>';
        echo '<meta http-equiv="refresh" content="0;url=login.php">';
        exit; // 이후 코드 실행 방지를 위해 exit 사용
    } else {
        echo "오류: " . $insert_sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
