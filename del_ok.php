<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');

	$id = $_GET['id']; 
	$pw = $_POST['pw'];       
	
	$del_sql = "delete from guest where id='$id' and pw='$pw';";

	if($con->query($del_sql)){
		echo "<script>alert('정삭적으로 탈퇴 되었습니다.')</script>";
		echo "<script>location.href='./index.html';</script>";
	}else{
			echo "<script>alert('삭제 시 오류! 관리자에게 문의주세요.')</script>";	   
			echo "<script>location.href='./index_login.php';</script>";
	}
    
?> 

