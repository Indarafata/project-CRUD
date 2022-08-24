<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siswa";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
    die("Koneksi Gagal : " . mysqli_connect_error());
else
    //echo "Koneksi Berhasil<br/>";
?>