<?php
//데이타베이스 정보
$db_host = "localhost";
$db_user = "root";
$db_password = "qwer";
$db_name = "web_db";
$connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력
	//세션 데이터에 접근하기 위해 세션 시작
	if (!session_id()) {
		session_start();
	}
    if($_SESSION['id_check'] !=true)
	{
		echo "<script>alert('중복체크부터 실행하시오.');</script>"; 
		echo("<script>history.back();</script>"); 
		return;
	}

$name = $_POST['name'];
$joinid = $_POST['joinid'];
$pw = $_POST['pw'];
$pwr = $_POST['pwr'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$addr = $_POST['address'];

if(!$name){
    echo "<script>alert('이름를 입력하세요')</script>";
    echo "<script>history.back()</script>";
    return;
}

else if(!$joinid){
    echo "<script>alert('아이디를 입력하세요')</script>";
    echo "<script>history.back()</script>";
    return;
}

else if(!$pw){
    echo "<script>alert('비밀번호를 입력하세요');</script>";
    echo "<script>history.back();</script>";
    return;
}

else if(!$pwr){
    echo "<script>alert('비밀번호를 한번더 입력하세요');</script>";
    echo "<script>history.back();</script>";
    return;
}

else if($pw!=$pwr){
    echo "<script>alert('비밀번호가 일치하지 않습니다');</script>";
    echo "<script>history.back();</script>";
    return;
}


else if(!$email){
    echo "<script>alert('이메일을 입력하세요');</script>";
    echo "<script>history.back();</script>";
    return;
}

else if(!$hp){
    echo "<script>alert('전화번호를 입력하세요');</script>";
    echo "<script>history.back();</script>";
    return;
}

else if(!$addr){
    echo "<script>alert('주소을 입력하세요');</script>";
    echo "<script>history.back();</script>";
    return;
}


//쿼리문 실행
$query = "INSERT INTO guest(name, id, pw, mail, ph, address) values('$name', '$joinid', '$pw', '$email', '$hp', '$addr')";
$result = mysqli_query($connect, $query); 

    echo "<script>alert('회원가입완료!');</script>"; 
    echo("<script>location.href='login.php';</script>"); 
?> 


