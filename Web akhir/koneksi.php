<?php
$host="localhost";
$user_db="Muffyns";
$pass_db="1";
$db="aut";



$koneksi=mysqli_connect ($host,$user_db,$pass_db) or die (mysqli_error());
mysqli_select_db ($koneksi,$db) or die (mysqli_error());
?>