<!DOCTYPE html>
<html>
    <body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

        <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <head>
            <style>
                *{
                    box-sizing: border-box;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                }
                body{
                    font-family: Helvetica;
                    -webkit-font-smoothing: antialiased;
                    background: linear-gradient(to left, #3E6294 , #a9abdc); 
                }
                .section-content{
                text-align: center; 
			    }
                .section-header{
                    font-family: 'Teko', sans-serif;
			        color : #fff;  
			    }
                h2{
                    text-align: center;
                    font-size: 18px;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    color: white;
                    padding: 30px 0;
                }

                /* Table Styles */

                .table-wrapper{
                    margin: 10px 70px 70px;
                }

                .fl-table {
                    border-radius: 5px;
                    font-size: 12px;
                    font-weight: normal;
                    border: none;
                    border-collapse: collapse;
                    width: 100%;
                    max-width: 100%;
                    white-space: nowrap;
                    background-color: white;
                }

                .fl-table td, .fl-table th {
                    text-align: center;
                    padding: 8px;
                }

                .fl-table td {
                    border-right: 1px solid #f8f8f8;
                    font-size: 12px;
                }

                .fl-table thead th {
                    color: #ffffff;
                    background: #4FC3A1;
                }


                .fl-table thead th:nth-child(odd) {
                    color: #ffffff;
                    background: #324960;
                }

                .fl-table tr:nth-child(even) {
                    background: #F8F8F8;
                }

                /* Responsive */

                @media (max-width: 767px) {
                    .fl-table {
                        display: block;
                        width: 100%;
                    }
                    .table-wrapper:before{
                        content: "Scroll horizontally >";
                        display: block;
                        text-align: right;
                        font-size: 11px;
                        color: white;
                        padding: 0 0 10px;
                    }
                    .fl-table thead, .fl-table tbody, .fl-table thead th {
                        display: block;
                    }
                    .fl-table thead th:last-child{
                        border-bottom: none;
                    }
                    .fl-table thead {
                        float: left;
                    }
                    .fl-table tbody {
                        width: auto;
                        position: relative;
                        overflow-x: auto;
                    }
                    .fl-table td, .fl-table th {
                        padding: 20px .625em .625em .625em;
                        height: 60px;
                        vertical-align: middle;
                        box-sizing: border-box;
                        overflow-x: hidden;
                        overflow-y: auto;
                        width: 120px;
                        font-size: 13px;
                        text-overflow: ellipsis;
                    }
                    .fl-table thead th {
                        text-align: left;
                        border-bottom: 1px solid #f7f7f9;
                    }
                    .fl-table tbody tr {
                        display: table-cell;
                    }
                    .fl-table tbody tr:nth-child(odd) {
                        background: none;
                    }
                    .fl-table tr:nth-child(even) {
                        background: transparent;
                    }
                    .fl-table tr td:nth-child(odd) {
                        background: #F8F8F8;
                        border-right: 1px solid #E6E4E4;
                    }
                    .fl-table tr td:nth-child(even) {
                        border-right: 1px solid #E6E4E4;
                    }
                    .fl-table tbody td {
                        display: block;
                        text-align: center;
                    }
                    .tambah{
                        margin: 10px 70px 70px;
                    }
                }

            </style>
        </head>
        <div class="section-content">
				<h1 class="section-header">TABEL DATA DIRI</h1>
				<h1 class="section-header">MAHASISWA</h1>
		</div>
        <?php
            include 'koneksi_db.php';
            $sql = "SELECT * FROM siswa_db";
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="table-wrapper">
        <table border="1" class="fl-table">
            <tr id="firstrow">
                <th>NRP</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Jenjang Pendidikan</th>
                <th>Tahun Angkatan</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
            <?php 
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td> <a href='siswa_detail.php?ID=$row[ID]' style='color: black; text-decoration:none'>" . $row['NRP'] . " </a> </td>";
                    echo "<td> <a href='siswa_detail.php?ID=$row[ID]' style='color: black; text-decoration:none'> " . $row['Nama'] . " </a> </td>";
                    echo "<td> <a href='siswa_detail.php?ID=$row[ID]' style='color: black; text-decoration:none'> " . $row['Jurusan'] . " </a> </td>";
                    echo "<td> <a href='siswa_detail.php?ID=$row[ID]' style='color: black; text-decoration:none'> " . $row['Jenjang_pendidikan'] . " </a> </td>";
                    echo "<td> <a href='siswa_detail.php?ID=$row[ID]' style='color: black; text-decoration:none'> " . $row['Tahun_angkatan'] . " </a> </td>";
                    echo "<td> <a href='siswa_detail.php?ID=$row[ID]' style='color: black; text-decoration:none'> " . $row['Kelas'] . " </a> </td>";
                    echo "<td> <a href='siswa_update.php?ID=$row[ID]' style='color: black; text-decoration:none'>Edit Data</a> | <a href='siswa_delete.php?ID=$row[ID]' style='color: black; text-decoration:none'>Hapus Data</a> </td>";
                    echo "</tr>";
                }
            }
            else
                echo "0 result";
            mysqli_close($conn);
            ?>
        </table>
        <br>
            <div class = "tambah">
            <form action = "siswa_form-db.php">
            <input type = "submit" class="btn btn-default submit" value = "Tambah Data">
            </div>
        </div>
    </body>
</html>
