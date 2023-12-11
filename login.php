
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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/login.css">


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
                 
              </div>
           </div>
        </div>
       
        <!-- partial:index.partial.html -->
        <div id="login-form-wrap">
        <h2 style="font-size:40px">Login</h2>
        <form id="login-form" action="login_ok.php" method="post">
            <p>
            <input type="text" id="id" name="id" placeholder="아이디"><span></span><span></span></i>
            </p>
            <p>
            <input type="password" id="pw" name="pw" placeholder="비밀번호"><span></span><span></span></i>
            </p>
            <p>
            <input type="submit" id="login" value="Login">
            </p>
        </form>
        <div id="create-account-wrap">
            <p>아직 회원이 아니신가요? <a href="join.php">회원가입</a><p>
        </div><!--create-account-wrap-->
        </div><!--login-form-wrap-->
        <!-- partial -->

        <!-- footer section start -->
        <div class="footer_section layout_padding">
           <div class="container">
              
              <div class="location_main">
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