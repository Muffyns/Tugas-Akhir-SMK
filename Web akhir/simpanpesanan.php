<?php
include("konek.php");
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$paymenmethod = $_POST['paymenmethod'];
$password = $_POST['password'];
$gender = $_POST['gender'];
    
    header('location:Thanks.html');

$sql="insert into ulang (fullname, address, email, phonenumber, paymenmethod, password, gender) values ('$fullname','$address','$email','$phonenumber','$paymenmethod','$password','$gender')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('WEBakhir.html');
?>