<?php
    include 'koneksi_db.php';

    $id = $_GET['ID'];

    $sql = "DELETE FROM siswa_db WHERE ID=" .$id;
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header("location: siswa_show.php");
?>