<?php
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


                    </ul>
                 </div>
              </div>
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
               <?php if($_SESSION['login_check']==true){ ?>
                  <a href="edit.php" style="color:white; font-size : 20px;">회원정보수정</a>
               <?php }else{ ?>  
               <?php } ?>
               
               <br>
                 <br>
                 <div class="call_text"><img src="images/call-icon.png"></div>
                 <div class="call_text">Call 010-0000-0000</div><br><br>
                 <div class="call_text"><img src="images/mail-icon.png"></div>
                 <div class="call_text">lee@naver.com</div><br><br>
                  
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