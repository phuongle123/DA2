<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chuyên nghành</title>
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
          		<a href="formsCV.php">Đăng Ký</a> | 
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
    <div class="CV">
      <p><i class="fa fa-address-card-o" style="font-size:24px"></i>CV</p>
    </div>
    

    <div class="CVcapnhat">
      

    	<table class="table table-hover">
  		<tbody>
        
      <?php

          $mongo = new Mongo();
              $db = $mongo->do_an_2;
              $collection = $db->thong_tin_cv;
              $id = $_GET["id"];
              $condition = array("ten_chuyen_nghanh" => $id);
              if($collection->count($condition)>0){
              $data = $collection->find($condition)->sort(array('_id' => -1));
              $i =1;
              foreach ($data as $document) {
              ?>
        <tr>
              <td><a href="../ThongtinCV.php?id=<?php echo $document["_id"]; ?>"><?php echo '<img  src="../'.$document['hinh_anh'].'"  align="middle" class="rounded-circle" width="100px" height="100px"' ?></a></td>
              <td><a href="../ThongtinCV.php?id=<?php echo $document["_id"]; ?>"><br><br><?php echo $document['ho_ten']; ?></a></td>
              <td><a href="../ThongtinCV.php?id=<?php echo $document["_id"]; ?>"><br><br><?php echo $document['ten_chuyen_nghanh']; ?></a></td>
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
