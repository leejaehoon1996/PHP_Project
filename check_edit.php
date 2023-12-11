<?php
    session_start(); // 세션시작
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


  $id = $_SESSION['id'];
  
  $query = "select * from guest where id ='$id'"; 
  $result = mysqli_query($connect, $query); 
  $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="ko">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
<!-- script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
  
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
           <div class="header_main">
              
              <div class="container-fluid">
              <?php if($_SESSION['login_check']==true){ ?>	
                 <div class="logo"><a href="index_login.php"><h1 style="color: white; font-size: 45px;">Rent Car</h1></a></div>
               <?php }else{ ?>
                  <div class="logo"><a href="index.html"><h1 style="color: white; font-size: 45px;">Rent Car</h1></a></div>
               <?php } ?>

                 <div class="menu_main">
                    <ul>
                        
                  <?php if($_SESSION['login_check']==true){ ?>	
                     <li class="active"><a href="index_login.php">Home</a></li>
                  <?php }else{ ?>
                      <li class="active"><a href="index.html">Home</a></li>
                  <?php } ?>
                  <?php if($_SESSION['login_check']==true){ ?>	
                     <li><a href="show_login.php">차량소개</a></li>
                  <?php }else{ ?> 
                     <li><a href="show.php">차량소개</a></li>
                  <?php } ?>
                  <?php if($_SESSION['login_check']==true){ ?>	
                     <li><a href="show_login.php">1일 차량대여</a></li>
                  <?php }else{ ?> 
                       <li><a href="show.php">1일 차량대여</a></li>
                  <?php } ?>

                  <?php if($_SESSION['login_check']==true){ ?>	
                       <li><a href="check.php">대여확인</a></li>
                  <?php }else{ ?> 
                        <li><a href="login.php">대여확인</a></li>
                  <?php } ?>
                  <?php if($_SESSION['login_check']==true){ ?>	
                       <li><a href="use_login.php">이용안내</a></li>
                  <?php }else{ ?> 
                        <li><a href="use.php">이용안내</a></li>
                  <?php } ?>
                 </div>
              </div>
           </div>
        </div>
   <!-- header section end -->



   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_taital">대여날짜 수정</h1>

         <form method="POST" action="checkedit_ok.php?id=<?=$row['id']?>">

         
               <label>비밀번호 입력</label>
               <input type="password" class="email-bt" name="pw" ><br>

               <label for="nickname" style="font-size:17px">빌리는 날짜 : </label>
            <select id="year" name="year">
                <option>2023</option>
            </select>년
            <select id="month" name="month">
                <option>선택하세요</option>
            </select>월
            <select id="day" name="day">
                <option>선택하세요</option>
            </select>일
            <div class="col-xs-12 col-md-6">
            <input type="hidden" id="id" name="id" value="<?php echo $row['id']?>">
            <input type="submit" class="send_btn" value="수정하기">
            </div>
            
         
         
         </form>
         
      </div>
   </div>

   <!-- contact section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         
         <div class="location_main">
		 <?php if($_SESSION['login_check']==true){ ?>
                  <a href="logout.php" style="color:white; font-size : 20px;">로그아웃</a><br><br>
               <?php }else{ ?>
                  <a href="login.php" style="color:white; font-size : 20px;">로그인</a><br><br>
               <?php } ?>
               <?php if($_SESSION['login_check']==true){ ?>
                  <a href="edit.php" style="color:white; font-size : 20px;">회원정보수정</a>
               <?php }else{ ?>  
               <?php } ?>
         </div>
         
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">Design by Free html Templates Distributed by ThemeWagon</p>
      </div>
   </div>
   
</body>

</html>

<script>
                $(document).ready(
                function () {
                    for (var i = 8; i < 13; i++) {
                        $('#month').append('<option value="' + i + '">' + i + '</option>');
                    }
                    for (var i = 1; i < 32; i++) {
                        $('#day').append('<option value="' + i + '">' + i + '</option>');
                    }
                }
                );
            </script>