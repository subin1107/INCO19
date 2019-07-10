<?php
session_start(); 
$con=mysqli_connect("localhost","root","apmsetup","homepage");

$id = $_POST['user_id']; 
$pw = $_POST['user_pw']; 
   
$query = "select * from members";
$result = mysqli_query($con, $query); 
$row = mysqli_fetch_array($result);

if($id==$row['id'] && $pw==$row['password']){
   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];
   echo "<script>location.href='member.php';</script>";
}else{
   echo "<script>window.alert('invalid username or password');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
   echo "<script>location.href='login.php';</script>";
}
?>