<!DOCTYPE html>
<html>
	<head>
		<title>Aplikasi</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-dark bg-danger mb-5">
			<span class="navbar-brand mb-0 ml-5 h1">Aplikasi Data Darah</span>
		</nav>
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-10">
					<h4>Tambah Data</h4>
				</div>
				<div class="col-md-2">
					<a href="index.php" class="btn btn-primary">Kembali</a>
				</div>
			</div>
			<div class="row mt-3 mb-5 justify-content-center">
				<div class="col-md-12 ">
                    <form action="../server/create.php" method="POST" id="form">
                        <div class="form-group">
                            <label for="">Kabupaten/Kota</label>
                            <input type="text" class="form-control col-md-6" id="kabupaten" name="kabupaten" placeholder="Masukkan nama Kabupaten/Kota">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah A+</label>
                            <input type="number" class="form-control col-md-3" id="ap" name="ap" placeholder="Masukkan jumlah stok darah A+">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah A-</label>
                            <input type="number" class="form-control col-md-3" id="an" name="an" placeholder="Masukkan jumlah stok darah A-">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah B+</label>
                            <input type="number" class="form-control col-md-3" id="bp" name="bp" placeholder="Masukkan jumlah stok darah B+">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah B-</label>
                            <input type="number" class="form-control col-md-3" id="bn" name="bn" placeholder="Masukkan jumlah stok darah B-">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah O+</label>
                            <input type="number" class="form-control col-md-3" id="op" name="op" placeholder="Masukkan jumlah stok darah O+">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah O-</label>
                            <input type="number" class="form-control col-md-3" id="onn" name="onn" placeholder="Masukkan jumlah stok darah O-">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah AB+</label>
                            <input type="number" class="form-control col-md-3" id="abp" name="abp" placeholder="Masukkan jumlah stok darah AB+">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah AB-</label>
                            <input type="number" class="form-control col-md-3" id="abn" name="abn" placeholder="Masukkan jumlah stok darah AB-">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
				</div>
			</div>
			
		</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="datatables/jquery.dataTables.min.js"></script>
		<script src="datatables/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#tabel1').DataTable()
			})
		</script>
	</body>
</html>