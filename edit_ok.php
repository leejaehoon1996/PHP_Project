<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');

$id = $_POST['id'];
$pw = $_POST['pw'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$addr = $_POST['addr'];

	if(!$pw)
	{
		echo "<script>alert('변경할 비밀번호 입력하시오');</script>"; 
		echo("<script>history.back();</script>"); 
		return;
	}   

    if(!$email)
	{
		echo "<script>alert('변경할 이메일 입력하시오');</script>"; 
		echo("<script>history.back();</script>"); 
		return;
	}

    if(!$hp)
	{
		echo "<script>alert('변경할 전화번호 입력하시오');</script>"; 
		echo("<script>history.back();</script>"); 
		return;
	}

    if(!$addr)
	{
		echo "<script>alert('변경할 주소 입력하시오');</script>"; 
		echo("<script>history.back();</script>"); 
		return;
	}

//쿼리문 실행

$update_query = "update guest set pw = '$pw', mail = '$email', ph='$hp', address='$addr' where id='$id'"; 

if($con->query($update_query)){
    echo "<script>alert('회원정보 수정이 완료되었습니다.')</script>";
    echo "<script>location.href='index_login.php';</script>";
}else{
        echo "<script>alert('회원정보 수정시 오류! 관리자에게 문의주세요.')</script>";	   
        echo "<script>location.href='./index_login.php';</script>";
}


?>