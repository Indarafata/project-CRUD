<!DOCTYPE html>
<html>
	<head>
		<style>
			body{
			background: linear-gradient(to left, #3E6294 , #a9abdc); 
			}
			.content-header{
			font-family: 'Oleo Script', 'cursive';
			color:#fcc500;
			font-size: 45px;
			}

			.section-content{
			text-align: center; 

			}
			#contact{

			font-family: 'Teko', sans-serif;
			padding-top: 60px;
			width: 100%;
			width: 100vw;
			height: 550px;
			color : #fff;    
			}
			.contact-section{
			padding-top: 40px;
			}
			.contact-section .col-md-6{
			width: 50%;
			}

			.form-line{
			border-right: 1px solid #B29999;
			}

			.form-group{
			margin-top: 10px;
			}

			label{
			font-size: 1.3em;
			line-height: 1em;
			font-weight: normal;
			}
			.form-control{
			font-size: 1.3em;
			color: #080808;
			}
			textarea.form-control {
			height: 135px;
			/* margin-top: px;*/
			}

			.submit{
			font-size: 1.1em;
			width: 150px;
			background-color: transparent;
			color: #fff;
			}
		</style>
	</head>
    <body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
		<section id="contact">
			<div class="section-content">
				<h1 class="section-header">FORM DATA DIRI</h1>
				<h1 class="section-header">MAHASISWA</h1>
			</div>
			<div class="contact-section">
				<div class="container">
				<form action = "insert_db.php" method = "POST">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">NRP</label>
					    	<input type="text" class="form-control" name="NRP" placeholder=" Masukan NRP">
				  		</div>
                          <div class="form-group">
			  				<label for="exampleInputUsername">Nama</label>
					    	<input type="text" class="form-control" name="Nama" placeholder=" Masukan nama">
				  		</div>
                        <div class="form-group">
			  				<label for="exampleInputUsername">Jurusan</label>
					    	<input type="text" class="form-control" name="Jurusan" placeholder=" Masukan jurusan">
				  		</div>
				  		<div class="form-group">
			  				<label for="exampleInputUsername">Jenjang Pendidikan</label>
					    	<input type="text" class="form-control" name="Jenjang_pendidikan" placeholder=" Masukan jenjang pendidikan">
				  		</div>
					  	<div class="form-group">
					    	<label for="telephone">Tahun Angkatan</label>
					    	<input type="number" class="form-control" name="Tahun_angkatan" placeholder=" Masukan tahun angkatan">
			  			</div>
                        <div class="form-group">
					        <label for="exampleInputEmail">Kelas</label>
					    	<input type="text" class="form-control" name="Kelas" placeholder=" Masukan kelas">
					  	</div>
                        <div class="form-group">
					    	<label for="exampleInputEmail">Agama</label>
					    	<input type="text" class="form-control" name="Agama" placeholder=" Masukan agama">
					  	</div>	
                        <div class="form-group">
					    	<label for="exampleInputEmail">Umur</label>
					    	<input type="text" class="form-control" name="Umur" placeholder=" Masukan umur">
					  	</div>	
                        <div class="form-group">
					    	<label for="exampleInputEmail">Jenis Kelamin</label>
					    	<input type="text" class="form-control" name="Jenis_kelamin" placeholder=" Masukan jenis kelamin">
					  	</div>	
                        <div class="form-group">
					    	<label for="exampleInputEmail">Alamat</label>
					    	<input type="text" class="form-control" name="Alamat" placeholder=" Masukan alamat">
					  	</div>	
						  <div>
                          <input type = "submit" class="btn btn-default submit" value = "submit">
			  			</div>
					</form>
				</div>
			</div>
		</section>
    </body>
</html>
