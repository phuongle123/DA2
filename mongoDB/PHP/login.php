
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .container
  {
    margin: 150px auto;
  }
  #box
  {
    width: 100%;
    max-width: 500px;
    border: 1px solid #ccc;
    border-radius:10px;
    margin: 0px auto;
    padding: 20px 20px;
    box-sizing: border-box;
    height: 250px;  
  }
</style>
</head>
<body>
      <div class="container">
        
					<h2><center><b>Đăng nhập</b></center></h2>
          <br/>
          <div id="box">
  					<form method="POST" method="POST" action="xuly.php">
    					<div class="form-group">
      						<label><b>Email:</b></label>
      						<input type="text" class="form-control" id="email" placeholder="Nhập email" name="email">
    					</div>
   					  <div class="form-group">
      						<label><b>Mật khẩu:</b></label>
      						<input type="password" class="form-control" id="pass" placeholder="Nhập mật khẩu" name="pass">
    					</div>
              <div class="form-group">
    					<center><input type="submit" id="login" name="login" value="Login" class="btn btn-primary"></input></center>
              </div>
            
  					</form>
            <br/>
		</div>
	</div>
</body>
</html>
