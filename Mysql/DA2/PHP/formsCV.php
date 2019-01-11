
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forms CV</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="javascript"  >
    $('#register').click(function(){
      var email = $('#email').val();
      var pass = $('#pass').val();
      var ho_ten = $('#ho_ten').val();
      var ngay_sinh = $('#ngay_sinh').val();
      var phone = $('#phone').val();
      var dia_chi = $('#dia_chi').val();
      var gioi_thieu = $('#gioi_thieu').val();
      var muc_tieu = $('#muc_tieu').val();
      var kinh_nghiem = $('#kinh_nghiem').val();
      $.ajax({
        url:'register.php',
        type:'post',
        dataType: 'json',
        data:{
          email:email,
          pass:pass,
          ho_ten:ho_ten,
          ngay_sinh:ngay_sinh,
          phone:phone,
          dia_chi:dia_chi,
          gioi_thieu:gioi_thieu,
          muc_tieu:muc_tieu,
          kinh_nghiem:kinh_nghiem
        },
        success: function(result){
          if(result==1)
            $('#result').html ='email da ton tai';
          if(result==2)
            $('#result').html ='them thanh cong';
        }
      });
    });
  </script>
</head>

<body>
	
	 <div id="menu">
        <header>
          <div class="logo">
            <a href="home.php"><img src="../image/logo-cv-cntt.png" height="100px"/></a>
          </div>
          <div class="menu"> 
              <a href="login.php">Đăng Nhập</a>
          </div>
      </header>
   <div id="nav">
        <ul>
          <li>
            <a href="home.php">
              <i class="fa fa-home" style="font-size:25px"></i>
             HOME</a>
          </li>
          <li><a href="#">CHUYÊN NGÀNH</a>
           <ul class="sub-nav">
             <li><a href="#">Kỹ thuật phần mềm</a></li>
              <li><a href="#">Khoa học máy tính</a></li>
              <li><a href="#">Hệ thống thông tin</a></li>
           </ul>
          </li>
        </ul>
      </div>
    <div id="content">
    <center style="font-size:30px"><p>THÔNG TIN ĐĂNG KÝ</p></center>
    <!-- form start here-->
    <form method="post" enctype="multipart/from-data">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id ="email" name ="email">
      </div>
      <div class="form-group">
        <label for="pass">Nhập mật khẩu:</label>
        <input type="pass" class="form-control"  id="pass" name="pass">
      </div>
    	<div class="form-group">
    		<label for="ho_ten">Họ và tên:</label>
    		<input type="text" class="form-control"  id="ho_ten" name="ho_ten">
    	</div>
    	<div class="row" style="width: 895px">
        <div class="col" style="width: 455px">
          <label for="ngay_sinh">Ngày sinh:</label>
          <input type="date" class="form-control"  id="ngay_sinh" name="ngay_sinh">
        </div>
        <div class="phone" style="width: 440px">
          <label for="phone">Phone:</label>
            <input type="text" class="form-control"  id="phone" name="phone">
        </div>
      </div>
    	<div class="form-group">
    		<label for="dia_chi">Địa chỉ:</label>
    		<input type="text" class="form-control"  id="dia_chi" name="dia_chi">
   		</div>
		<div class="form-group">
        <label for="gioi_thieu">Giới thiệu:</label>
        <textarea class="form-control"  rows="3" id ="gioi_thieu" name ="gioi_thieu"></textarea>
    </div>
    <div class="form-group">
        <label for="muc_tieu">Mục tiêu:</label>
        <textarea class="form-control"  rows="3" id ="muc_tieu" name ="muc_tieu"></textarea>
    </div>
		<div class="form-group">
  			<label for="kinh_nghiem">Kinh nghiệm:</label>
  			<textarea class="form-control"  rows="3" id ="kinh_nghiem" name ="kinh_nghiem"></textarea>
		</div>
  		<p></p>
    	<center>
          <button type="button" class="btn btn-primary" id="register" value="register">Cập nhật</button>
          <button type="reset" class="btn btn-primary" id="Reset" value="Reset">Reset</button>
      </center>
  </form>
  <div id="result"> </div>
  
  <!-- end form -->
  
     </div>
    <footer>
     <p>© Copyright by Kai Trần - Sky Lê</p>
     </footer>
     </div>

</body>
</html>

