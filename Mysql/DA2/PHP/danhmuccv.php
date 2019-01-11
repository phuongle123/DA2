<!doctype html>
<?php
		$connect = mysqli_connect("localhost", "root", "", "doan_2") or die("không thể kết nối được");
		mysqli_query($connect,'SET NAMES UTF8');
    $id_dmuc=$_GET["dm"];
	?>
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
          		<a href="formsCV.php">Đăng Ký</a> | 
          		<a href="login.">Đăng Nhập</a>
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
      $query = "SELECT * from chuyen_nghanh ";
    $result = mysqli_query($connect,$query);
      while ($row =mysqli_fetch_assoc($result)){
            echo "<li><a id='danhmucv' ct='$row[id_dmuc]'>$row[ten_chuyen_nghanh]</a>";
            echo '</li>';
          }
          // href='danhmuccv.php?dm='
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
    	
      </div>
     </div>
     <footer>
     <p>© Copyright by Kai Trần - Sky Lê</p>
     </footer>
     </div>
  
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
  $(document).ready(function(){
    $.get('../xuly/danhmuc.php',{} function(data){
      $('CVcapnhat').html(data);
    })

  })
</script>
</html>
