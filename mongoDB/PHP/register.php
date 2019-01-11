<?php
 $m = new MongoClient();
   $db = $m->do_an_2;
   $collection = $db->thong_tin_cv;

if (isset($_POST['register'])) 
{
     
        $email       = $_POST['email'];
        $pass        = $_POST['pass'];
        $ho_ten         = $_POST['ho_ten'];
        $phone    = $_POST['phone'];
        $ngay_sinh   = $_POST['ngay_sinh'];
        $ten_chuyen_nghanh     = $_POST['ten_chuyen_nghanh'];
        $gioi_thieu       = $_POST['gioi_thieu'];
        $muc_tieu      = $_POST['muc_tieu'];
        $dia_chi      = $_POST['dia_chi'];
        $kinh_nghiem      = $_POST['kinh_nghiem'];
        $quoc_tich      = $_POST['quoc_tich'];
        $hinh_anh=$_POST['hinh_anh'];

     if ( !$email || !$ho_ten ||!$pass)
        {
            echo '
                    <script language="javascript">
                        alert("vui lòng nhập đầy đủ thông tin")
                    </script>';
                header("Refresh:0; url=formsCV.php");
        }
   
 else
  {
     $data = array("email" => $email, "pass" => $pass,"ho_ten" => $ho_ten, "phone"=>$phone, "ngay_sinh"=>$ngay_sinh, "ten_chuyen_nghanh"=>$ten_chuyen_nghanh, "gioi_thieu"=>$gioi_thieu, "muc_tieu"=>$muc_tieu, "dia_chi"=>$dia_chi, "kinh_nghiem"=>$kinh_nghiem, "quoc_tich"=>$quoc_tich ,"hinh_anh"=>$hinh_anh );
            $collection->insert($data);
            echo '
                    <script language="javascript">
                        alert("Đăng ký ứng viên thành công")
                    </script>';
            header("Refresh:0; url=home.php");
        }
            }

?>
