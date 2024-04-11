<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale">
    <title>게시판</title>
    <link rel="stylesheet" href="../CSS/notice.css">
</head>
<body>
    <a href="../index.php"><li><strong>COMON 게시판</strong></li></a>
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
        <input type="button" value="로그인" id="login" onclick ="location.href='login_view.php'"/>
        <input type="button" value="회원가입" id="sign_up" onclick ="location.href='signup_view.php'"/>
        <p id="nim"><?php echo $_SESSION['name'];?>님</p>
        <input type="button" value="마이페이지" id="myPage" href="myPage.html"/>
        <input type="button" value="로그아웃" id="logout" onclick ="location.href='logout.php'"/>
    <table class=middle>
        <thead>
            <tr align=center>
                <th width=70>No.</th>
                <th width=300>제목</th>
                <th width=120>작성자</th>
                <th width=120>작성일</th>
                <th width=70>조회수</th>
            </tr>
       </thead>
        <?php
            $conn = mysqli_connect('127.0.0.1', 'root', 'qwe123', 'COMON');
            
            $sql = "SELECT * FROM nootice_borde ORDER BY nb_no DESC limit 0,5";
            $res = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($res)){
        ?>
            <tbody>
                <tr align=center>
                    <td><?php echo $row['nb_no'];?></td>
                    <td><a href="view.php?id=<?=$row['nb_no']?>"><?php echo $row['nb_title'];?></a></td>
                    <td><?php echo $row['nb_writer'];?></td>
                    <td><?php echo $row['nb_date'];?></td>
                    <td><?php echo $row['nb_hits'];?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
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