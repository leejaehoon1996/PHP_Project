<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');
	//세션 데이터에 접근하기 위해 세션 시작
	if (!session_id()) {
		session_start();
	}

    $id=$_SESSION['id'];
    $carname = $_GET['carname'];
    $price = $_GET['price'];
	$year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];

	if($month=="선택하세요"){
        echo "<script>alert('대여할 월을 선택하세요');</script>"; 
		echo("<script>history.back();</script>");
		return; 
    }
    else if($day=="선택하세요"){
        echo "<script>alert('대여할 일을 선택하세요');</script>"; 
		echo("<script>history.back();</script>");
		return; 
    }

	$idCheck =false;
    $query = "select * from guest where id = '$id'and rent='Y'";
    $result = $con->query($query);
    while($row = $result->fetch_row())
     {
        $idCheck =true;
                
     }

     if($idCheck == true)
     {
        echo "<script>alert('이미차량 대여중!');</script>"; 
		echo("<script>history.back();</script>"); 
		return;
     }
     else{

		//세션 변수 등록
		$_SESSION['id_check'] = true;
		echo "<script>alert('대여 완료');</script>"; 
		echo("<script>index_login.html</script>"); 
   
     }


    $update_query = "update guest set car='$carname', price='$price', month='$month', day='$day', rent='Y' where id='$id'"; 

    if($con->query($update_query)){
		echo "<script>alert('대여가 완료되었습니다.')</script>";
		echo "<script>location.href='./index_login.php';</script>";
	}else{
			echo "<script>alert('글 수정시 오류! 관리자에게 문의주세요.')</script>";	   
			echo "<script>location.href='./rent.php';</script>";
	}

?>
