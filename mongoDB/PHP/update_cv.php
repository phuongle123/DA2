<?php session_start(); ?>
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
      </header>
   <div id="nav">
        <ul>
          <li>
            <a href="index.php">
              <i class="fa fa-home" style="font-size:25px"></i>
             HOME</a>
          </li>
          <li><a href="#">CHUYÊN NGÀNH</a>
           <ul class="sub-nav">
            <?php
          include('connect_chuyen_nghanh.php');
          foreach ($data as $document ) {
            ?>

          <li><a href="chuyen_nghanh.php?id=<?php echo $document["ten_chuyen_nghanh"]?>"><?php echo $document["ten_chuyen_nghanh"]; ?></a></li> 
          <?php
          }
          
          ?>
           </ul>
           <?php 
                    if (isset($_SESSION['email']) && $_SESSION['email']){
                      // $parts=explode('@',$_SESSION['email']);
                        echo '<li ><a href="#">'.$_SESSION['email'].'</a>
                                <ul class="sub-nav" > 
                                  <li>
                                    <a href="../hien_thi_thong_tin.php?email='.$_SESSION['email'].'">Trang cá nhân</a>                                    
                                  </li>
                                  <li>
                                    <a href="logout.php"  >Đăng xuất</a>
                                  </li>
                                    
                                </ul>
                              </li>';
                    }
                    ?>
      </div>
    <div id="content">
      <?php

          $mongo = new Mongo();
              $db = $mongo->do_an_2;
              $collection = $db->thong_tin_cv;

              $email = $_GET["email"];
              $condition = array("email" => ($email));
              if($collection->count($condition)==1){
              $document = $collection->findOne($condition);
            }
            $ten=$document['ten_chuyen_nghanh']
          ?>
    <center style="font-size:30px"><p>THÔNG TIN ĐĂNG KÝ</p></center>
    <!-- form start here-->
    <form method="POST" method="POST" action="xuly_update.php" enctype="multipart/from-data" >
      <div class="form-group">
        <label for="ho_ten">Họ và tên:</label>
        <input type="text" class="form-control"  name="ho_ten" value="<?php echo $document['ho_ten'];?>">
      </div>
    	<div class="row" style="width: 895px">
        <div class="col" style="width: 455px">
          <label for="ngay_sinh">Ngày sinh:</label>
          <input type="text" class="form-control" name="ngay_sinh" value="<?php echo $document['ngay_sinh'];?>">
        </div>
        <div class="phone" style="width: 440px">
          <label for="phone">Phone:</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $document['phone'];?>">
        </div>
      </div>
    	<div class="form-group">
    		<label for="dia_chi">Địa chỉ:</label>
    		<input type="text" class="form-control" name="dia_chi" value="<?php echo $document['dia_chi'];?>">
   		</div>
      <div class="form-group">
        <label for="quoc_tich">Quốc tịch:</label>
        <input type="text" class="form-control" name="quoc_tich" value="<?php echo $document['quoc_tich'];?>">
      </div>

		<div class="form-group">
        <label for="gioi_thieu">Giới thiệu:</label>
        <textarea class="form-control"  rows="3" name ="gioi_thieu"><?php echo $document['gioi_thieu']?></textarea>
    </div>
    <div class="form-group">
        <label for="muc_tieu">Mục tiêu:</label>
        <textarea class="form-control"  rows="3"  name ="muc_tieu" ><?php echo $document['muc_tieu']?></textarea>
    </div>
		<div class="form-group">
  			<label for="kinh_nghiem">Kinh nghiệm:</label>
  			<textarea class="form-control"  rows="3"  name ="kinh_nghiem" ><?php echo $document['kinh_nghiem']?></textarea>
		</div>
  		
       <label for="">Chuyên nghành:</label>
      <select class="custom-select" name="ten_chuyen_nghanh" >
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
    <p></p>
    	<center>
          <button type="submit" class="btn btn-primary" name ="luu" value="register">Cập nhật</button>
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

