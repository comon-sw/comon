<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale">
    <title>게시판</title>
    <link rel="stylesheet" href="../CSS/notice.css">
</head>
<body>
    <a href="#"><li><strong>COMON 게시판</strong></li></a>
    <div class="board2_title">
        <p>
           <ul>
            <a href="#"><li>공지 게시판</li></a>
            <a href="#"><li>건의 게시판</li></a>
            <a href="#"><li>질문 게시판</li></a>
            <a href="#"><li>자유 게시판</li></a>
         </ul>
        </p>
    </div>
        <input type="button" value="로그인" id="login" onclick ="location.href='PHP/login_view.php'"/>
        <input type="button" value="회원가입" id="sign_up" onclick ="location.href='PHP/signup_view.php'"/>
        <p id="nim"><?php echo $_SESSION['name'];?>님</p>
        <input type="button" value="마이페이지" id="myPage" href="HTML/myPage.html"/>
        <input type="button" value="로그아웃" id="logout" onclick ="location.href='PHP/logout.php'"/>
    <div class="board2_wrap">
        <div class="board2_list_wrap">
            <div class="board2_list">
                <div class="top">
                    <div class="num">No.</div>
                    <div class="title">제목</div>
                    <div class="writer">글쓴이</div>
                    <div class="date">작성일</div>
                    <div class="count">조회</div>
                </div>
                <div>
                    <div class="num">5</div>
                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                    <div class="writer">재승공주</div>
                    <div class="date">2024.03.29</div>
                    <div class="count">33</div>
                </div>
                <div>
                    <div class="num">4</div>
                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                    <div class="writer">재승공주</div>
                    <div class="date">2024.03.29</div>
                    <div class="count">33</div>
                </div>
                <div>
                    <div class="num">3</div>
                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                    <div class="writer">재승공주</div>
                    <div class="date">2024.03.29</div>
                    <div class="count">33</div>
                </div>
                <div>
                    <div class="num">2</div>
                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                    <div class="writer">재승공주</div>
                    <div class="date">2024.03.29</div>
                    <div class="count">33</div>
                </div>
                <div>
                    <div class="num">1</div>
                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                    <div class="writer">재승공주</div>
                    <div class="date">2024.03.29</div>
                    <div class="count">33</div>
                </div>
            </div>
            <div class="board2_page">
                <a href="#" class="bt first"><<</a>
                <a href="#" class="bt prev"><</a>
                <a href="#" class="num">1</a>
                <a href="#" class="num">2</a>
                <a href="#" class="num">3</a>
                <a href="#" class="num">4</a>
                <a href="#" class="num">5</a>
                <a href="#" class="bt next">></a>
                <a href="#" class="bt last">>></a>
            </div>

            <div class="bt_wrap">
              <a href="#" class="on" onclick ="location.href='board_writing.php'">글쓰기</a>
            </div>
        </div>
    </div>
</body>
</html>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            const sign_upbtn = document.getElementById("sign_up");
            const loginbtn = document.getElementById("login");
            const myPagebtn = document.getElementById("myPage");
            const logoutbtn = document.getElementById("logout");
            const nimcontent = document.getElementById("nim");

            // PHP에서 세션 이메일이 설정되었는지 확인
            <?php
                $id = isset($_SESSION['id'])? $_SESSION['id']:"";
                if(!$id){ ?>
                    nimcontent.style.display = "none";
                    logoutbtn.style.display = "none";
                    myPagebtn.style.display = "none";
                    loginbtn.style.display = "lnline-block";
                    sign_upbtn.style.display = "lnline-block";
                <?php }else{ ?>
                    loginbtn.style.display = "none";
                    sign_upbtn.style.display = "none";
                    logoutbtn.style.display = "lnline-block";
                    myPagebtn.style.display = "lnline-block";
                    nimcontent.style.display = "inline-block";
                <?php } ?>
        });
</script>