<!DOCTYPE html>
<html lang="en">
    <body>
        <head>
            <style>
                body{
                    overflow-y: hidden;
                    overflow-x: hidden;
                    background: linear-gradient(to left, #3E6294 , #a9abdc); 
                }
                .section-content{
                text-align: center; 
			    }
                .section-header{
                    font-family: 'Teko', sans-serif;
			        color : #fff;  
			    }
                thead{
                    text-align: center;
                }
                #data{
                    text-align: left;
                }
                th{
                    
                    border-left: 1px solid;
                    border-bottom: 1px solid;
                }
                td{
                    border-left: 1px solid;
                    border-right: 1px solid;
                    border-bottom: 1px solid;
                }
                #foto{
                    border-top: 1px solid;
                }
                thead th {
                    border-right: 1px solid;
                }
                img{
                    width: 50%;
                    height: 240px;
                }
                #card {
                    background: #fbfbfb;
                    border-radius: 8px;
                    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
                    margin: 6rem auto 8.1rem auto;
                    height: 550px;
                    width: 500px;
                }
                #card-content {
                    padding: 12px 44px;
                }
            </style>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
            beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
            BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="an
            onymous">
            <title>Tugas pw</title>
        </head>
        <div class="section-content">
				<h1 class="section-header">DETAIL DATA DIRI</h1>
				<h1 class="section-header">MAHASISWA</h1>
			</div>
        <?php
            include 'koneksi_db.php';
            $sql = "SELECT * FROM siswa_db";
            $result = mysqli_query($conn, $sql);
        ?>

        <?php 
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    if($row['ID'] == $_GET['ID']){
                        break;
                    }
                }
            }
            else
                echo "0 result";
            mysqli_close($conn);
        ?>
        <div id="card">
            <div id="card-content">
                <div class="container">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="box-view">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2" id="foto">FOTO PROFIL</th>
                                    </tr>
                                </thead>
                                <thead>
                                    <th colspan="2" style="text-align: center;"><img src="foto.jpeg" alt="" class="img-fluid rounded"></th>
                                </thead>
                                <thead>
                                    <tr>
                                        <th colspan="2">DATA DIRI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th id="data">NRP</th>
                                        <td><?php echo $row['NRP'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Nama</th>
                                        <td><?php echo $row['Nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Jurusan</th>
                                        <td><?php echo $row['Jurusan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Jejang Pendidikan</th>
                                        <td><?php echo $row['Jenjang_pendidikan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Tahun Angkatan</th>
                                        <td><?php echo $row['Tahun_angkatan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Kelas</th>
                                        <td><?php echo $row['Kelas'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Umur</th>
                                        <td><?php echo $row['Umur'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Jenis Kelamin</th>
                                        <td><?php echo $row['Jenis_kelamin'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Agama</th>
                                        <td><?php echo $row['Agama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th id="data">Alamat</th>
                                        <td><?php echo $row['Alamat'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/poppe
        r.min.js" integrity="sha384-
        KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="an
        onymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
        beta2/dist/js/bootstrap.min.js" integrity="sha384-
        nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="an
        onymous"></script>
    </body>
</html>