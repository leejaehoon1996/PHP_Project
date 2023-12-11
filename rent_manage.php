<?php
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

 
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Car</title>
  
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="css/submenu1_2.css" rel="stylesheet">
   
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
  
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
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
       
<!-- contact section start -->
<div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_taital1">대여관리</h1>

         <!-- 게시판-->
<div class="submenu1_2_section3">
	<div class="container">
		
		
   <div class="email_text">
      <div class="form-group">
            <ul>
                <!-- 게시판 목록  -->
                <li>
                    <ul id ="sub1_2_ulTable">
                        <li>
                            <ul>
                                <li>임차인 이름</li>
                                <li>임차인 ID</li>
                                <li>대여차량</li>
                                <li>선택</li>
                            </ul>
                        </li>
                        <!-- 게시물이 출력될 영역 -->
                        <?php
                        $select_query = "select * FROM guest where car=car";
                        $result = $connect->query($select_query);
                        while($row = $result->fetch_assoc())
                        {
                            ?>
                            <li>
                                <ul>
                                    <li><?=$row['name']?></a></li>
                                    <li><?=$row['id']?></li>
                                    <li><?=$row['car']?></li>
                                    <li><a href="rent_info.php?idx=<?=$row['idx']?>"><input type='submit' value='들어가기'></a></li>
                                </ul>
                            </li>
                        <?php                       
                        }
                        ?> 

                    </ul>
                </li>
                
            </ul>
		</div>
   	  </div>
      <!-- 게시판영역 종료-->
	
	</div>
</div>
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
              <p class="copyright_text">Design by Distributed by ThemeWagon</p>
           </div>
        </div>
        
     </body>
     
     </html>