<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');

	$idx = $_GET['idx'];
	
	$del_sql = "delete from car where idx='$idx'";

	if($con->query($del_sql)){
		echo "<script>alert('정삭적으로 삭제 되었습니다.')</script>";
		echo "<script>location.href='./indexmanage.php';</script>";
	}else{
			echo "<script>alert('삭제 시 오류! 관리자에게 문의주세요.')</script>";	   
			echo "<script>location.href='./cardel.php';</script>";
	}
    
?> 

