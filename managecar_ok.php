<?php 
    session_start(); // 세션시작
    //데이타베이스 정보
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "qwer";
    $db_name = "web_db";
    $connect = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
    if ($connect->connect_errno) { die('Connection Error : '.$connect->connect_error); } // 오류가 있으면 오류 메세지 출력

    //form에서 전달받은 POST 데이타
    
    $car = $_POST['car'];
    $price = $_POST['price'];

    //아이디 공백체크
    if($car==null){
        echo "<script>alert('차종을 입력하시오.')</script>";
        echo "<script>history.back()</script>";
        return;
    }
    //비번 공백체크
    else if($price==null){
        echo "<script>alert('가격를 입력하시오.')</script>";
        echo "<script>history.back()</script>";
        return;
    }

//var_dump($_FILES);
$path = './upload/';
$uploadPath = $path.basename($_FILES['b_file']['name']);    
if(move_uploaded_file($_FILES['b_file']['tmp_name'], $uploadPath))
	{
		echo "파일 업로드 성공";
	}

$file_name = $_FILES['b_file']['name'];

//쿼리문 실행
$query = "INSERT INTO car(name, price, filename) values('$car', '$price', '$file_name')";
$result = mysqli_query($connect, $query); 


if($result == false){
    echo "<script>alert('저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의주세요')</script>";
    //echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의주세요';
    echo "<script>history.back()</script>";
    error_log(mysqli_error($connect));
}

else{
    echo "<script>alert('작성 완료')</script>";
     //echo '성공했습니다. <a href = "login.php">로그인하기..</a>';
    echo "<script>location.href='indexmanage.php'</script>";
}

?>