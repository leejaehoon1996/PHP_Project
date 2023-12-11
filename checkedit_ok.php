<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');
	//세션 데이터에 접근하기 위해 세션 시작
	if (!session_id()) {
		session_start();
	}

    $id=$_GET['id'];
    $pw=$_POST['pw'];
    $month = $_POST['month'];
    $day = $_POST['day'];

    if(!$pw){
        echo "<script>alert('비밀번호를 입력하세요');</script>"; 
		echo("<script>history.back();</script>");
		return; 
    }

	else if($month=="선택하세요"){
        echo "<script>alert('변경할 월을 선택하세요');</script>"; 
		echo("<script>history.back();</script>");
		return; 
    }
    else if($day=="선택하세요"){
        echo "<script>alert('변경할 일을 선택하세요');</script>"; 
		echo("<script>history.back();</script>");
		return; 
    }

    $update_query = "update guest set month='$month', day='$day' where id='$id' and pw='$pw'"; 

    if($con->query($update_query)){
		echo "<script>alert('대여가 완료되었습니다.')</script>";
		echo "<script>location.href='./check.php';</script>";
	}else{
			echo "<script>alert('글 수정시 오류! 관리자에게 문의주세요.')</script>";	   
			echo "<script>location.href='./rent.php';</script>";
	}

?>
