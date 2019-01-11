<?php
session_start();
 $m = new MongoClient();
   $db = $m->do_an_2;
   $collection = $db->thong_tin_cv;

        /////////////////////
  if(isset($_POST['luu'])){
        
        $ho_ten         = $_POST['ho_ten'];
        $phone    = $_POST['phone'];
        $ngay_sinh   = $_POST['ngay_sinh'];
        $ten_chuyen_nghanh     = $_POST['ten_chuyen_nghanh'];
        $gioi_thieu       = $_POST['gioi_thieu'];
        $muc_tieu      = $_POST['muc_tieu'];
        $dia_chi      = $_POST['dia_chi'];
        $kinh_nghiem      = $_POST['kinh_nghiem'];
        $quoc_tich      = $_POST['quoc_tich'];
        ///////////////////

        $check_email = array('ho_ten' => $ho_ten);
        $find_email = $collection->find($check_email);
        $count = $find_email->count();
        if($count==1)
        {
            foreach ($find_email as $document) {
                $collection->update(array("email"=>$document['email']),
                        array('$set'=>array( "ho_ten"=>$ho_ten,"phone"=>$phone, "ngay_sinh"=>$ngay_sinh, "ten_chuyen_nghanh"=>$ten_chuyen_nghanh, "gioi_thieu"=>$gioi_thieu, "muc_tieu"=>$muc_tieu, "dia_chi"=>$dia_chi, "kinh_nghiem"=>$kinh_nghiem, "quoc_tich"=>$quoc_tich)));
            }
        
        
        header("Refresh: 0;url=../hien_thi_thong_tin.php?email=".$_SESSION['email']."");
    }
    else{
        echo "false";
    }
   
}
?>
