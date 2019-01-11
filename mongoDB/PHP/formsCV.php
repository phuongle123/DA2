
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forms CV</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
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
            <?php
          include('connect_chuyen_nghanh.php');
          foreach ($data as $document ) {
            ?>

          <li><a href="danhmuccv.php?id=<?php echo $document["ten_chuyen_nghanh"]?>"><?php echo $document["ten_chuyen_nghanh"]; ?></a></li> 
          <?php
          }
          
          ?>
           </ul>
          </li>
        </ul>
      </div>
    <div id="content">
    <center style="font-size:30px"><p>THÔNG TIN ĐĂNG KÝ</p></center>
    <!-- form start here-->
    <form method="POST" action="register.php" enctype="multipart/from-data" >
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name ="email">
      </div>
      <div class="form-group">
        <label for="pass">Nhập mật khẩu:</label>
        <input type="password" class="form-control" name="pass">
      </div>
    	<div class="form-group">
    		<label for="ho_ten">Họ và tên:</label>
    		<input type="text" class="form-control"  name="ho_ten">
    	</div>
    	<div class="row" style="width: 895px">
        <div class="col" style="width: 455px">
          <label for="ngay_sinh">Ngày sinh:</label>
          <input type="text" class="form-control" name="ngay_sinh">
        </div>
        <div class="phone" style="width: 440px">
          <label for="phone">Phone:</label>
            <input type="text" class="form-control" name="phone">
        </div>
      </div>
    	<div class="form-group">
    		<label for="dia_chi">Địa chỉ:</label>
    		<input type="text" class="form-control" name="dia_chi">
   		</div>
      <div class="form-group">
        <label for="quoc_tich">Quốc tịch:</label>
        <input type="text" class="form-control" name="quoc_tich">
      </div>
      <label for="">Chuyên nghành:</label>
      <select class="custom-select" name="ten_chuyen_nghanh">
        <option value=" ">Chọn chuyên nghành...</option>
         <?php
        include('connect_chuyen_nghanh.php');
        if($collection->count()>0)
        {
          $data = $collection->find();
          foreach ($data as $document){
            if($document['ten_chuyen_nghanh'] ==$ten){
            
            ?>
            <option value="<?php echo $document['ten_chuyen_nghanh'] ?>" selected="selected"><?php echo $document['ten_chuyen_nghanh'] ?></option>
            <?php 
            }else{
              ?>
              <option value="<?php echo $document['ten_chuyen_nghanh'] ?>"><?php echo $document['ten_chuyen_nghanh'] ?></option>
              <?php
            }
          }
          }else{
              ?>
        <option value=" ">Chọn chuyên nghành...</option>
        <?php
      }
      ?>
    </select>
		<div class="form-group">
        <label for="gioi_thieu">Giới thiệu:</label>
        <textarea class="form-control"  rows="3" name ="gioi_thieu"></textarea>
    </div>
    <div class="form-group">
        <label for="muc_tieu">Mục tiêu:</label>
        <textarea class="form-control"  rows="3"  name ="muc_tieu"></textarea>
    </div>
		<div class="form-group">
  			<label for="kinh_nghiem">Kinh nghiệm:</label>
  			<textarea class="form-control"  rows="3"  name ="kinh_nghiem"></textarea>
		</div>
      <label class="col-md-12" for="file">Chọn hình ảnh:</label>
       <div class="col-md-12" >
        <input type="file"  name = "hinh_anh" id="hinh_anh" class="form-control input-md">
      </div>
  		<p></p>
    	<center>
          <button type="submit" class="btn btn-primary" name ="register" value="register">Cập nhật</button>
          <button type="reset" class="btn btn-primary" name="Reset" value="Reset">Reset</button>
      </center>
  </form>
  
  <!-- end form -->
  
     </div>

    <footer>
     <p>© Copyright by Kai Trần - Sky Lê</p>
     </footer>
   </div>
    

</body>
</html>

