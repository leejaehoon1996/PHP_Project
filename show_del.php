<?php
if (!session_id()) {
	session_start();
  }

    $con = mysqli_connect("localhost", "root", "qwer", "web_db");
    mysqli_query($con,'SET NAMES utf8'); 

?>

<!DOCTYPE html>
<html lang="ok">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <!-- site metas -->
   <title>Services</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
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
   
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">차량삭제</h1>
         <p class="services_text">차량데이터를 삭제할 수 있습니다.</p>
         <div class="services_section_2">
            <div class="row">
			<?php
				$query = "SELECT * FROM car ORDER BY idx DESC"; 
				$result = $con->query($query);
				while ($row = $result->fetch_assoc()) {
			?>
               <div class="col-md-4">
                  <div><img src="./upload/<?php echo $row['filename']?>" class="services_img"></div>
				  <div style="font-size:20px";><?php echo $row["name"] ?></div>
         		<div style="font-size:20px";><?php echo $row["price"] ?>원</div>
                  <div class="btn_main"><a href="cardel.php?idx=<?=$row['idx']?>">차량데이터 삭제</a></div>
               </div>
            <?php
			}
			?>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
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
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>