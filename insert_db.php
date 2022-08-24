<?php
include 'koneksi_db.php';

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


$sql = "INSERT INTO siswa_db(NRP, Nama, Umur, Agama, Jenis_kelamin, Alamat, Jurusan, Jenjang_pendidikan, Tahun_angkatan, Kelas) VALUES('$NRP', '$Nama', '$Umur', '$Agama', '$Jenis_kelamin', '$Alamat', '$Jurusan', '$Jenjang', '$Angkatan', '$Kelas')";

if(mysqli_query($conn, $sql)){
    echo "<a href='siswa_show.php'>Lihat</a>";
    echo "Data berhasil ditambahkan";
}
else
    echo "Data gagal masuk";

mysqli_close($conn);
header("location: siswa_show.php");
?>