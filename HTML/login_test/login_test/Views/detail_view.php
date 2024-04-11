<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "qwe123";
$dbname = "COMON";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

switch ($_SESSION["select_board"]) {
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

switch ($_SESSION["$board_type"]) {
  case "nid" :
      $id = "nid";
      break;
  case "sid" :
      $id = "sid";
      break;
  case "qid" :
      $id = "qid";
      break;
  case "fid" :
      $id = "fid";
      break;
}

switch ($idVALUES) {
    case "" :
        $id = "nid";
        break;
    case "sid" :
        $id = "sid";
        break;
    case "qid" :
        $id = "qid";
        break;
    case "fid" :
        $id = "fid";
        break;
  }

$sql =  "SELECT * FROM $table_name WHERE $id = "
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" href="../CSS/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-ZLdSZAPqLYZq6qDlYRtovXwDbjh5aQt4CaYor0x4Q17Fe0JB7h+qn/lW+XU+FZAD" crossorigin="anonymous">
</head>
<body>
    <ul class="gnb">
        <a href="../index.php"><img src="https://leeskyserver.com/assets/logo.png" alt="comon" id="logo"/></a>
        
        <li><a class="gnb_menu" href="https://test.leeskyserver.com">웹페이지 실습</a></li>
        <li><a class="gnb_menu" href="https://fix.leeskyserver.com/">Fix 페이지</a></li>
        <li><a class="gnb_menu" href="https://obt.leeskyserver.com/">튜터링 페이지</a></li>
        <li><a class="gnb_menu" href="https://mail.leeskyserver.com/">메일 서버 관리 페이지</a></li>
        <li><a class="gnb_menu" href="notice_view.php">게시판</a></li>
    </ul>
    <h1 class="board_type"><?php echo $table_name?></h1>

    <div class="top_line"></div>

    <div class="title"><?php echo $row['title']?></div>

    <div class="middle">
        <div class="writer"><?php echo $row['writer']?></div>
        <div class="date"><?php echo $row['date']?></div>
        <div class="count"><?php echo $row['hits']?></div>
    </button>
    </div>
    <div class="content_wrap">
      <p><?php echo $row['writing']?></p>
    </div>
    <div class="bt_wrap">
        <a href="notice_view.php" class="list_btn">목록</a>
    </div>
</body>
</html>