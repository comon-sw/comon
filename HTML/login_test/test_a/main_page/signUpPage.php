<!DOCTYPE html>
<html>
<head>
<title>Seok 페이지 회원가입</title>
<style>

html{
    
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.container h2 {
    text-align: center;
}

.container form {
    margin-top: 20px;
}

.container label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.container input[type="email"],
.container input[type="text"],
.container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

    .container input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #0070c3;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
</style>

    <script>
        function validateForm() {
            var name = document.forms["signupForm"]["name"].value;
            var email = document.forms["signupForm"]["email"].value;
            var password = document.forms["signupForm"]["password"].value;
            var confirmPassword = document.forms["signupForm"]["confirm_password"].value;
            var phoneNumber = document.forms["signupForm"]["num"].value;

            // 이름 검사
            if (name.length < 2) {
                alert("이름은 2자 이상 입력해야 합니다.");
                return false;
            }

            // 아이디(이메일) 검사
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                alert("유효한 이메일 주소를 입력해야 합니다.");
                return false;
            }

            // 비밀번호 검사
            if (password.length < 8) {
                alert("비밀번호는 최소 8자 이상이어야 합니다.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("비밀번호와 비밀번호 확인이 일치하지 않습니다.");
                return false;
            }

            // 전화번호 검사
            if (phoneNumber.length < 11) {
                alert("전화번호는 11자 이상 입력해야 합니다.");
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Seok Page 회원가입</h2>
        <form name="signupForm" action="signUp.php" onsubmit="return validateForm()" method="POST">
            <label for="name">이름:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">아이디(이메일):</label>
            <input type="email" id="email" name="email" required>

            <label for="password">비밀번호:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">비밀번호 재확인:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="num">전화번호:</label>
            <input type="text" id="num" name="num" required>

            <input type="submit" value="회원가입">
        </form>
    </div>


</body>
</html>