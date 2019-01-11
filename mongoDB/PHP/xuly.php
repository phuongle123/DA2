<?php
session_start();

    // connect to mongodb
    $m = new MongoClient();
   // Connect project database
    $db = $m->do_an_2;
   // Connect collection
    $collection = $db->thong_tin_cv;
    // include('../Model/Connect_taikhoan.php');
    // include('../Model/Connect.php');
    //Lấy dữ liệu nhập vào
    if(isset($_POST["login"])){
        $email = strtolower($_POST['email']);
        $pass = addslashes($_POST['pass']);         
        // mã hóa pasword
        //$password = md5($password);
         
        // Truy xuất từ csdl mongodb
        $email_ip = array( '$and' => array( array('email' => $email),array('pass' => $pass)));
        $info_user = $collection->find($email_ip);
        $count = $info_user->count();
            if( $count == 1 ) {
                 echo '
                    <script language="javascript">
                        alert("Đăng nhập thành công")
                    </script>';
                header("Refresh:0; url=index.php");
                $_SESSION['email']=$email;
            }
            else{
                echo '
                    <script language="javascript">
                        alert("sai email hoặc mật khẩu")
                    </script>';
                header("Refresh:0; url=login.php");
            } 
    }

    
?>