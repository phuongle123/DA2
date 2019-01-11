<!--Dữ liệu ajax CV cập nhật-->

<table class="table table-hover">
      <tbody id="content"> 
<?php
$connect = mysqli_connect("localhost", "root", "", "doan_2") or die("không thể kết nối được");
    mysqli_query($connect,'SET NAMES UTF8');

      $query = "SELECT * from thong_tin_cv, chuyen_nghanh  where chuyen_nghanh.ma_chuyen_nghanh = thong_tin_cv.ma_chuyen_nghanh ";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result)>0){
      while ($row =mysqli_fetch_assoc($result)){
          $hinh_anh = $row['hinh_anh'];
         $ho_ten =$row['ho_ten'];
        $ten_chuyen_nghanh=$row['ten_chuyen_nghanh'];
      echo "<tr>";
        echo "<td></td>";
        echo "<td><a href='../ThongtinCV.php?id=$row[id]'><img width='100px' height='100px' src='../{$hinh_anh}'' alt='Hình ảnh' align='middle' class='rounded-circle'></a></td>";
        echo "<td><a href='../ThongtinCV.php?id=$row[id]'><br><br>$ho_ten</a></td>";
        echo "<td><a href='../ThongtinCV.php?id=$row[id]'><br><br>$ten_chuyen_nghanh</a></td>";
      }
    }
?>
 </tbody>
    </table>