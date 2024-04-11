<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoMon 서버 - 게시판 글쓰기 페이지</title>
    <link rel="stylesheet" href="../CSS/board_writing.css">
</head>
<body>
  <h1>게시판 글쓰기</h1>
  <article class="select_board">
    <button class="header">게시판 선택</button>
    <ul class="select_contents">
      <li><button type="button">공지 게시판</button></li>
      <li><button type="button">건의 게시판</button></li>
      <li><button type="button">질문 게시판</button></li>
      <li><button type="button">자유 게시판</button></li>
    </ul>
  </article>
  <label for="title">제목</label>
  <input type="text" name="title">
  <label for="contents">내용</label>
  <textarea name="contents" id="contents" cols="30" rows="10" placeholder="내용을 입력하세요"></textarea>
  <input type="file">

  <script>
    const button = document.querySelector('.header');
    const list = document.querySelector('.select_contents');

    button.addEventListener('click', function() {
      if (list.style.display === 'block') {
        list.style.display = 'none';
      } else {
        list.style.display = 'block';
      }
  });

    const liButtons = document.querySelectorAll('.select_contents button');
    
    liButtons.forEach(function(liButton) {
    liButton.addEventListener('click', function() {
      button.textContent = this.textContent;
      list.style.display = 'none';
    });
  });
  </script>
</body>
</html>