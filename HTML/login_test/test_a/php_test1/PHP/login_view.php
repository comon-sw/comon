<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoMon 서버 - 로그인 페이지</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
  <div id="box">
    <p>로그인</p>
      <div>
        <form action="login.php" method="post" class="login-form">   <!--action 주소 넣기-->
          <input type="text" class="login" name="id" placeholder="ID">
          <input type="password" class="login" name="pw" placeholder="PASSWORD">
          <input type="submit" id="submit" value="로그인">

          <input type="button" value="아이디  |" id="findid" class="find" 
          onclick="window.open('findID_view.php','_blank','width=450, height=500, top=170, left=170')">
          <input type="button" value="비밀번호 찾기" id="findpw" class="find" 
          onclick="window.open('findPW_view.php','_blank','width=450, height=500, top=170, left=170')">
        </form>
      </div>
  </div>
</body>
</html>