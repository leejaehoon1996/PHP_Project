<?php
if (!session_id()) {
	session_start();
  }

    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8'); 

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
                       <li><a href="contact.html">이용안내</a></li>

                    </ul>
                 </div>
              </div>
           </div>
        </div>
        <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">이용안내 </h1>
         <p class="services_text">렌트시 이용안내 & 렌트시 알아야 할 사항</p>
            <hr>
         <p style="font-size:20px; font-weight:bold; color: green;">렌트카 대여 조건 및 운전자격 </p>
<p>+ 승용, SUV : 만26세이상 ㅣ 2종보통면허이상 ㅣ 운전경력1년이상</p>

<p>+ 운전면허증 필수지참(제2운전자 동일)</p>
<p>+ 운전 미숙자 대여불가</p>
<p>+ 외국인 및 교포, 만 65세초과 운전자는 국내 운전면허증을 소지 할 경우 또는 운전면허소지 한 내국인 연대보증인(제2운전자)이 있을 경우 대여 가능</p>
<p>+ 운전면허 적성 검사 유효 기간이 대여 기간 이상이어야 렌트 가능합니다.</p>
<p>+ 만 26세 미만 차량 대여시 1만원 추가됩니다.</p>
<p>+ 24시간 기준 약정주행거리는 300km 이며 초과시 1km당 150원 과금됩니다.</p>
<br>

<p style="font-size:20px; font-weight:bold; color: green;"> 반납시 연료량</p>
<p>+ 차량반납 시 연료양은 인수받으실 때의 연료량과 동일하게 채워진 후 반납</p>
<p>+ 연료량 미달 시 추가금이 발생</p>
<p>+ 휘발유 및 경유 : 1칸(총8칸, 1/8칸) 당 20,000원</p>
<p style="text-indent:10px; font-weight:bold; color: red;"> ※ 연료 남을 경우 환급 불가</p>
<br>

<p style="font-size:20px; font-weight:bold; color: green;"> 반납 시간 초과 안내</p>
<p>+ 반납 시간 초과 : 추가요금 발생(현장결제)</p>
<p style="text-indent:20px;">- 승용 : 1시간 5,000원</p>
<p style="text-indent:20px;">- 승합, SUV : 1시간 10,000원</p>
<p>+ 추가 이용 시간은 24시간 이용 가능하며, 이후는 1일 연장 됩니다.</p>
<p>+ 운전면허증 필수 지참(경찰청 운전면허증 진위여부 조회)</p>
<p>+ 이용당일 NO SHOW → 취소 및 환불 불가.</p>
<p>+ 운행 중 발생하는 교통 법규 위반, 단독사고는 임차인의 귀책입니다.</p>
<p>+ 차 대 차 사고 외 단독 사고 차량 고장 / 파손 부분은 대여자가 원래 상태로 복원해야 하며 휴차료, 감가상각비가 청구될 수 있습니다.</p>
<p style="text-indent:10px; font-weight:bold; color: red;"> ※ 출고 후 임차인의 과실 or 관리 부주의(밧데리 방전, 키 분실등)로 발생 현장 출동 서비스 요청 시 비용 고객 부담</p>
<p>+차내 흡연으로 인한 악취 발생 시, 스팀 세차 비용(20만원)이 부과됩니다.</p>


       </div>
      </div>
        <!-- footer section start -->
        <div class="footer_section layout_padding">
           <div class="container">
              
              <div class="location_main">
                  <a href="login.php" style="color:white; font-size : 20px;">로그인</a>
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