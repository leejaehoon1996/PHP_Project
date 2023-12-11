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


  $idx = $_GET['idx'];
  
  $query = "select * from car where idx ='$idx'"; 
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
                 <div class="logo"><a href="indexmanage.php"><h1 style="color: white; font-size: 45px;">Rent Car</h1></a></div>
               <?php }else{ ?>
                  <div class="logo"><a href="index.html"><h1 style="color: white; font-size: 45px;">Rent Car</h1></a></div>
               <?php } ?>

                 <div class="menu_main">
                    <ul>
                        
                    <?php if($_SESSION['login_check']==true){ ?>	
                           <li class="active"><a href="indexmanage.php">Home</a></li>
                        <?php }else{ ?>
                            <li class="active"><a href="index.html">Home</a></li>
                        <?php } ?>
                        <?php if($_SESSION['login_check']==true){ ?>	
                           <li><a href="show_manage.php">차량소개</a></li>
                        <?php }else{ ?> 
                           <li><a href="show.php">차량소개</a></li>
                        <?php } ?>
                       <?php if($_SESSION['login_check']==true){ ?>	
                       <li><a href="managecar.php">차량추가</a></li>
                       <?php }else{ ?> 
                       <li><a href="login.php">차량추가</a></li>
                       <?php } ?>
                       <?php if($_SESSION['login_check']==true){ ?>	
                       <li><a href="show_del.php">차량삭제</a></li>
                       <?php }else{ ?> 
                       <li><a href="login.php">차량삭제</a></li>
                       <?php } ?>
                       <?php if($_SESSION['login_check']==true){ ?>
                       <li><a href="rent_manage.php">대여차량관리</a></li>
                       <?php }else{ ?> 
                        <li><a href="login.php">대여차량관리</a></li>
                        <?php } ?>

                    </ul>
                 </div>
              </div>
           </div>
        </div>
   <!-- header section end -->

   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
      <h1 class="services_taital">차량삭제 </h1>

         <div class="email_text">
            <div class="form-group">
             <img src="./upload/<?php echo $row['filename']?>" class="services_img1"><br>
               <label style="font-size:20px">삭제할 차종 : </label><label style="font-size:20px"><?php echo $row['name']?></label>
            </div>
            <div class="form-group">
               <label style="font-size:20px">삭제할 차종 가격 : </label><label style="font-size:20px"><?php echo $row['price']?>원</label>
            </div>
            
            </div>
            <input type="hidden" id="idx" name="idx" value="<?php echo $row['idx']?>">
            <input type="button" class="send_btn2" value="삭제하기" onclick="location.href='/cardel_ok.php?idx=<?=$idx?>'";>
         </div>
         
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