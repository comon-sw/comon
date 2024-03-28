<?php
  session_start();
  if( isset( $_SESSION[ 'id' ] ) ) {
    $login_session = TRUE;
  }
?>
<input type="submit" value="로그인" id="login" onclick ="location.href='HTML/login.html'">
<input type="submit" value="회원가입" id="sign_up" onclick ="location.href='HTML/signup.html'">