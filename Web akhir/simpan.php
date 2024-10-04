<?php
include("koneksi.php");
$username=$_POST['username'];
$message = $_POST['message'];
$date = $_POST['date'];
$sql="insert into comment(username,message,date) values ('$username','$message','$date')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location:comments.php');
?>