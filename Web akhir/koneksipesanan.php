<?php
$host="localhost";
$user_db="bobi";
$pass_db="1";
$db="nini";



$koneksi=mysqli_connect ($host,$user_db,$pass_db) or die (mysqli_error());
mysqli_select_db ($koneksi,$db) or die (mysqli_error());
?>