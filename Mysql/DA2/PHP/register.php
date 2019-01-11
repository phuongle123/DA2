<?php

$connect = mysqli_connect("localhost", "root", "", "doan_2") or die("không thể kết nối được");

$ho_ten   = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : "";
$ngay_sinh   = isset($_POST['ngay_sinh']) ? $_POST['ngay_sinh'] : "";
$dia_chi   = isset($_POST['dia_chi']) ? $_POST['dia_chi'] : "";
$phone   = isset($_POST['phone']) ? $_POST['phone'] : "";
$email   = isset($_POST['email']) ? $_POST['email'] : "";
$pass   = isset($_POST['pass']) ? $_POST['pass'] : "";
$gioi_thieu   = isset($_POST['gioi_thieu']) ? $_POST['gioi_thieu'] : "";
$muc_tieu   = isset($_POST['muc_tieu']) ? $_POST['muc_tieu'] : '';
$kinh_nghiem   = isset($_POST['kinh_nghiem']) ? $_POST['kinh_nghiem'] : "";


$data = mysqli_query($connect,"select * from thong_tin_cv WHERE email=".$email);
$result = mysqli_num_rows($data);

if($result!=0)
    echo 1;
else {
    mysqli_query($connect,"insert into thong_tin_cv(email,pass,ho_ten,ngay_sinh,phone,dia_chi,gioi_thieu,muc_tieu,kinh_nghiem)
        values('$email','$pass',N'$ho_ten','$ngay_sinh','$phone',N'$dia_chi',N'gioi_thieu',N'muc_tieu',N'kinh_nghiem')");
    echo 2;
}



?>
