<?php
// menjalankan session
session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];


$host="localhost";
$user_db="Muffyns";
$pass_db="1";
$db="aut";



$koneksi=mysqli_connect ($host,$user_db,$pass_db) or die (mysqli_error());
mysqli_select_db ($koneksi,$db) or die (mysqli_error());
 
// mencari password terenkripsi berdasarkan username
$query = "SELECT * FROM registerlogin WHERE username = '$username'";
$hasil = mysqli_query($koneksi,$query) or die (mysqli_error());
$data  = mysqli_fetch_array($hasil);
 
$pengacak  = "NDJS3289JSKS190JISJI";
 
// cek kesesuaian password terenkripsi dari form login
// dengan password terenkripsi dari database
if (md5($pengacak.md5($password).$pengacak) == $data['password'])
{

    $_SESSION['username'] = $username;
    header('location:WEBakhir.html');
     
}

else echo "<h2>Login Gagal</h2>";
 
?>