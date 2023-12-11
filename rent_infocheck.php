<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');

	$id = $_GET['id'];
	$ph = $_GET['ph'];

	$update_query = "update guest set ph='$ph', check='확인' where id='$id'"; 

	if($con->query($update_query)){
		echo "<script>alert('글 수정이 완료되었습니다.')</script>";
		echo "<script>location.href='rent_manage.php';</script>";
	}else{
			echo "<script>alert('글 수정시 오류! 관리자에게 문의주세요.')</script>";	   
			echo "<script>location.href='indexmanage.php';</script>";
	}
    
?> 
