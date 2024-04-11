<?php
session_start();
// 데이터베이스 연결 정보
$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "qwe123"; // $dbpassword = "1111";   
$dbname = "gommoddi";

$fail = "로그인에 실패 하셨습니다";

// 데이터베이스 연결
$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname); //데이터 베이스 연결 정보를 이용해서 데이터베이스 접속을 conn에 저장
if ($conn->connect_error) {  //conn으로 접속시 에러가 나면 에러메세지 출력
    die("데이터베이스 연결 실패: " . $conn->connect_error); 
}

// 로그인 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") { //post형식으로 데이터를 받아왔는지 비교 맞으면 sql문으로 연결시도
    // 사용자로부터 입력받은 아이디와 비밀번호
    $email = $_POST["email"];
    $login_pw = $_POST["password"];

    // 입력된 아이디와 비밀번호를 데이터베이스에서 확인
    $sql = "SELECT * FROM MyLogin WHERE email = '$email' and login_pw = '$login_pw'"; //$sql = "SELECT * FROM Mylogin WHERE email = '$email' and login_pw(데이터베이스 비밀번호 컬럼) = '$login_pw'";
    $result = $conn->query($sql); // 데이터 베이스에서 query(요청, 실행)를 실행하기 위한 코드

    
    if ($result->num_rows > 0) { //sql로 데이터베이스 조회 값이 있으면 성공 //     if ($result->num_rows > 0) { sql로 데이터베이스 조회 값이 있으면
        $row = $result->fetch_assoc();
        $_SESSION["name"] = $row["name"];
        $_SESSION["email"] = $email;

        usleep(300000);  //0.3초 후 이동
        header("Location:loginOk.php");
        

        function isMobileDevice() {
            $userAgent = $_SERVER["HTTP_USER_AGENT"];
            $mobileDevices = array("Android", "iPhone", "iPad", "BlackBerry", "Windows Phone");
            return preg_match("/" . implode("|", $mobileDevices) . "/i", $userAgent);
        }

        if (isMobileDevice()) {
            header("Location: ../mobile/index.php"); // 모바일 버전으로 이동
        } else {
            header("Location: loginOk.php"); // 컴퓨터 버전으로 이동
        }
    } else {
        // 로그인 실패
        echo '<div style="font-size : 30px; display : flex; justify-content: center; align-items: center; margin-top: 50px">'. $fail . '</div>';
    }
}

$conn->close(); // sql 종료
?>

