<?php
$fullname  = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password1 = $_POST['pass1'];
$password2 = $_POST['pass2'];
$gender = $_POST['gender'];
$gender = $_POST['gender'];
$gender = $_POST['gender'];

 
// cek kesamaan password
if ($password1 == $password2)
{
    
$host="localhost";
$user_db="Muffyns";
$pass_db="1";
$db="aut";



$koneksi=mysqli_connect ($host,$user_db,$pass_db) or die (mysqli_error());
mysqli_select_db ($koneksi,$db) or die (mysqli_error());
     
    // perlu dibuat sebarang pengacak
    $pengacak  = "NDJS3289JSKS190JISJI";
     
    // mengenkripsi password dengan md5() dan pengacak
    $password1 = md5($pengacak . md5($password1) . $pengacak);
     
    // menyimpan username dan password terenkripsi ke database
    $query = "INSERT INTO registerlogin VALUES('$fullname','$username','$email','$phonenumber','$password1','$gender')";
    $hasil = mysqli_query($koneksi,$query) or die (mysqli_error());
     
    // menampilkan status pendaftaran
    if ($hasil) header ('location:Login.html');
    else echo "Username sudah ada yang memiliki";
 
}
else echo "Password yang dimasukkan tidak sama";
 
?>