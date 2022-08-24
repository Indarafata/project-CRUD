<?php
include 'koneksi_db.php';

$id = $_POST['ID'];
$NRP = $_POST['NRP'];
$Nama = $_POST['Nama'];
$Umur = $_POST['Umur'];
$Agama = $_POST['Agama'];
$Jenis_kelamin = $_POST['Jenis_kelamin'];
$Alamat = $_POST['Alamat'];
$Jurusan = $_POST['Jurusan'];
$Jenjang = $_POST['Jenjang_pendidikan'];
$Angkatan = $_POST['Tahun_angkatan'];
$Kelas = $_POST['Kelas'];

$sql = "UPDATE siswa_db SET NRP = '$NRP', Nama = '$Nama', Umur = '$Umur', Agama = '$Agama', Jenis_kelamin = '$Jenis_kelamin', Alamat = '$Alamat', Jurusan = '$Jurusan', Jenjang_pendidikan = '$Jenjang', Tahun_angkatan = '$Angkatan', Kelas = '$Kelas' WHERE ID=" .$id;
mysqli_query($conn, $sql);

mysqli_close($conn);

header("location: siswa_show.php");
?>