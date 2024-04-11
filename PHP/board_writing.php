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

if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
  $newnb_file = $_FILES["file"]["name"];
} else {
  $newnb_file = NULL;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nid = $post["nid"];
  $newnb_title = $_POST["title"];
  $newnb_date = date("Y-m-d");
  $newnb_writer = $_SESSION["user_name"];
  $newnb_writing = $_POST["contents"];
  $newnb_file = $_POST["file"];
  $newselect_board = $_POST["select_board"];

  switch ($newselect_board) {
    case "nootice_borde" :
      $table_name = "nootice_borde";
      break;
    case "suggest_borde" :
      $table_name = "suggest_borde";
      break;
    case "question_borde" :
      $table_name = "question_borde";
      break;
    case "free_borde" :
      $table_name = "free_borde";
      break;
  }
}

$sql = "INSERT INTO $table_name (nid, nb_title, nb_date, nb_writer, nb_writing, nb_file) 
        VALUES ('$nid','$newnb_title', '$newnb_date', '$newnb_writer', '$newnb_writing','$newnb_file')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('새로운 게시글이 성공적으로 등록되었습니다!');
        location.href='notice_view.php'; </script>";
} else {
  echo "오류: " . $sql . "<br>" . $conn->error;
}
?>