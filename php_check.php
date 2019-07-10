<?php
$con=mysqli_connect("localhost","root","apmsetup","homepage");
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO members (id, password, passwordA) VALUES ('$_POST[userid]','$_POST[userpw]', '$_POST[userpw_a]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "회원가입이 완료되었습니다 다시 로그인하세요";
mysqli_close($con);
?> 