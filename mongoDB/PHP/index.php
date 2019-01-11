<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trang chủ</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	 <div id="menu">
      	<header>
        	<div class="logo">
        		<a href="home.php"><img src="../image/logo-cv-cntt.png" height="100px"/></a>
        	</div>
        	<div class="menu">
          
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
    <div class="CV">
      <p><i class="fa fa-address-card-o" style="font-size:24px"></i> CV mới cập nhật</p>
    </div>
    <div class="CVcapnhat">
      <table class="table table-hover">
      <tbody>
        <?php
        $mongo = new Mongo();
        $db = $mongo->do_an_2;
        $collection = $db->thong_tin_cv;
        $i=1;
        if ($collection->count()>0){
          $row = $collection->find()->sort(array('_id' => -1));
          foreach ($row as $document) {
            ?>
            <tr>
              <td><a href="../ThongtinCV.php?id=<?php echo $document["_id"]; ?>"><?php echo '<img  src="../'.$document["hinh_anh"].'"  align="middle" class="rounded-circle" width="100px" height="100px"' ?></a></td>
              <td><a href="../ThongtinCV.php?id=<?php echo $document["_id"]; ?>"><br><br><?php echo $document["ho_ten"]; ?></a></td>
              <td><a href="../ThongtinCV.php?id=<?php echo $document["_id"]; ?>"><br><br><?php echo $document["ten_chuyen_nghanh"]; ?></a></td>
            </tr>
            <?php
            if ($i == 3) {
                     break;
                     }
                    $i++;
          }
        }
        ?>
      
      </tbody>
    </table>
    </div>
     </div>
     <footer>
     <p>© Copyright by Kai Trần - Sky Lê</p>
     </footer>
     </div>
</body>
</html>
