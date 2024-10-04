<?php
 
session_start();
 
// mengecek ada tidaknya session untuk username
if (!isset($_SESSION['username']))
{
    echo "<h1>Anda belum login</h1>";
    exit;
}
 
?>