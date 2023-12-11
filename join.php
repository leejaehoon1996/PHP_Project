
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

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

    
 <body>
        <!-- header section start -->
        <div class="header_section">
           <div class="header_main">
              <div class="container-fluid">
                 <div class="logo"><a href="index.html"><h1 style="color: white; font-size: 45px;">Rent Car</h1></a></div>
                 
              </div>
           </div>
        </div>
       
        <div class="container">
    <div class="input-form-backgroud row">
      <div class="input-form col-md-12 mx-auto">
        <h4 class="mb-3">회원가입</h4>
        <form method="POST" action="join_ok.php">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name">이름</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="" value="">
              <div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="nickname">아이디</label>
              <input type="text" class="form-control" id="joinid" name="joinid" placeholder="" value=""> 
              <div>
              </div><input type="button" value="중복체크" onclick="idcheck()">
            </div>
          <div class="col-md-6 mb-3">
              <label for="nickname">비밀번호</label>
              <input type="password" class="form-control" name="pw" placeholder="" value="">
              <div>
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="nickname">비밀번호 확인</label>
              <input type="password" class="form-control" name="pwr" placeholder="" value="">
              <div>
              </div>
            </div>
          </div>


          <div class="mb-3">
            <label for="email">이메일</label>
            <input type="email" class="form-control" name="email" placeholder="you@example.com">
            <div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">전화번호</label>
            <input type="text" class="form-control" name="hp" placeholder="010-0000-0000">
            <div>
            </div>
          </div>

          <div class="mb-3">
            <label for="address">주소</label>
            <input type="text" class="form-control" name="address" placeholder="서울특별시 강남구">
            <div>
            </div>
          </div>
        
          
          <hr class="mb-4">
          <div class="mb-4"></div>
          <input type="submit" class="btn btn-primary btn-lg btn-block" value="가입하기">&nbsp;
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function idcheck() {
		var id = document.getElementById('joinid').value;		
		location.href="idcheck.php?id="+id;
    //alert(name);
    }  
  </script>


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