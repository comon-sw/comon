<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoMon 서버 - 메인 페이지</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://leeskyserver.com/assets/logo.png">
    <link rel="stylesheet" href="./style.css">
    <?php
    include 'PHP/header.php';
    include 'PHP/login.php';
    ?>
</head>

<body>
  <?php require_once("PHP/header.php"); ?>
  <img src="https://leeskyserver.com/assets/logo.png" alt="" id="logo">
    <ul class="gnb">
      <li><a href="/htmlclass/index.html">웹페이지 실습</a></li>
      <li><a href="https://fix.leeskyserver.com/">Fix 페이지</a></li>
      <li><a href="https://obt.leeskyserver.com/">튜터링 페이지</a></li>
      <li><a href="https://mail.leeskyserver.com/">메일 서버 관리 페이지</a></li>
      <li><a href="">게시판</a></li>
    </ul>
</body>
</html>