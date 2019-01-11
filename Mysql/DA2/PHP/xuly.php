<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "doan_2") or die("không thể kết nối được");
if(isset($_POST["email"]) && isset($_POST["pass"]))
{
	$email = mysqli_real_escape_string($connect,$_POST["email"]);
	$pass = md5(mysqli_real_escape_string($connect,$_POST["pass"]));
	$sql ="SELECT * FROM thong_tin_cv WHERE email ='$email' AND pass = '$pass'";
	$result = mysqli_query($connect,$sql);
	$num_row = mysqli_num_rows($result);
	if($num_row > 0)
	{
		$data = mysqli_fetch_array($result);
		$_SESSION["email"]=$data["email"];
		echo $data["email"];
	}
} else {
	echo "asdas";
}
?>