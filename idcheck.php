<?php
    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8');

		//세션 시작
		session_start();

    $id = $_GET['id'];   
    
    
    if($id=="")
    {
      echo "<script>alert('아이디를 입력하시오.');</script>"; 
      echo("<script>history.back();</script>");
      return; 
    }
	  $idCheck =false;
    $query = "select * from guest where id = '$id'";
    $result = $con->query($query);
    while($row = $result->fetch_row())
     {
        $idCheck =true;
                
     }

     if($idCheck == true)
     {
        echo "<script>alert('아이디가 중복됩니다!');</script>"; 
		echo("<script>history.back();</script>"); 
    return;
       
     }
     else{

		//세션 변수 등록
		$_SESSION['id_check'] = true;
		echo "<script>alert('가입 가능한 아이디입니다.');</script>"; 
		echo("<script>history.back();</script>"); 
   
     }

?> 