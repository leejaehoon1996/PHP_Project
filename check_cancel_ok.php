<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');

$id = $_POST['id'];
$pw = $_POST['pw'];
	if(!$pw)
	{
		echo "<script>alert('비밀번호 입력하시오');</script>"; 
		echo("<script>history.back();</script>"); 
		return;
	}   


//쿼리문 실행

$update_query = "update guest set car=null, price = null, month=null, day=null, rent=null where id='$id'"; 

if($con->query($update_query)){
    echo "<script>alert('회원정보 수정이 완료되었습니다.')</script>";
    echo "<script>location.href='index_login.php';</script>";
}else{
        echo "<script>alert('회원정보 수정시 오류! 관리자에게 문의주세요.')</script>";	   
        echo "<script>location.href='./index_login.php';</script>";
}


?>