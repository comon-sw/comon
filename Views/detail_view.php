<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" href="../CSS/detail.css">
</head>
<body>
    <ul class="gnb">
        <a href="../index.php"><img src="https://leeskyserver.com/assets/logo.png" alt="comon" id="logo"/></a>
        
        <li><a class="gnb_menu" href="https://test.leeskyserver.com">웹페이지 실습</a></li>
        <li><a class="gnb_menu" href="https://fix.leeskyserver.com/">Fix 페이지</a></li>
        <li><a class="gnb_menu" href="https://obt.leeskyserver.com/">튜터링 페이지</a></li>
        <li><a class="gnb_menu" href="https://mail.leeskyserver.com/">메일 서버 관리 페이지</a></li>
        <li><a class="gnb_menu" href="PHP/notice_view.php">게시판</a></li>
      </ul>
    <div class="detail_list">
            <div class="top">
                <div class="title">글 제목은 여따가</div>
            </div>
    </div>
    <div class="middle">
    <div class="writer">작성자</div>
    <div class="date">작성일</div>
    <div class="count">조회</div>
    </div>
    <button id="likeButton" class="heart-button" onclick="toggleLike()">
        <span class="heart-icon" id="heartIcon">&#x2661;</span>
        <span id="likeCount">0</span>
    </button>
    <div class="bt_wrap">
        <a href="/HTML/board2.html" class="list_btn">목록</a>
    </div>

    <div class="comment-box">
        <div class="comment-form">
            <h2>댓글 남기기</h2>
            <form action="submit_comment.php" method="post">
                <textarea name="comment" placeholder="댓글을 입력하세요"></textarea><br>
                <input type="submit" value="댓글 남기기">
            </form>
        </div>
        <ul class="comment-list">
        </ul>
    </div>
    <script>
        document.getElementById('commentForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var comment = document.getElementById('commentInput').value;
            var url = window.location.href;
            var newUrl = url + '?comment=' + encodeURIComponent(comment);

            window.history.pushState({ path: newUrl }, '', newUrl);

            document.getElementById('commentInput').value = '';
        });
    </script>
</body>
</html>