<?php
//세션 데이터에 접근하기 위해 세션 시작
if (!session_id()) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="ko" >
<head>
  <meta charset="UTF-8">
  <title>로그인</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form"action="loginrent_ok.php" method="post">
    <p>
    <input type="text" id="id" name="id" placeholder="아이디"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="pw" name="pw" placeholder="비밀번호"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>아직 회원이 아니신가요? <a href="join.php">회원가입</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>

