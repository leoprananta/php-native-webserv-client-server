<?php
function http_request($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
    $data = http_request("http://localhost:8080/darah/server/readbykab.php?kabupaten=". $_GET["kabupaten"]);
    $data = json_decode($data, TRUE);
?>

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
                    <h4>Edit Data</h4>
				</div>
				<div class="col-md-2">
					<a href="index.php" class="btn btn-primary">Kembali</a>
				</div>
			</div>
			<div class="row mt-3 mb-5 justify-content-center">
				<div class="col-md-12 ">
                    <form action="../server/update.php" method="POST" id="form">
                        <div class="form-group">
                            <label for="">Kota/Kabupaten</label>
                            <input type="text" class="form-control col-md-6" id="kabupaten" name="kabupaten" value="<?= $data[0]["kabupaten"]?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah A+</label>
                            <input type="number" class="form-control col-md-3" id="ap" name="ap" value="<?= $data[0]["ap"]?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah A-</label>
                            <input type="number" class="form-control col-md-3" id="an" name="an" value="<?= $data[0]["an"]?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah B+</label>
                            <input type="number" class="form-control col-md-3" id="bp" name="bp" value="<?= $data[0]["bp"]?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah B-</label>
                            <input type="number" class="form-control col-md-3" id="bn" name="bn" value="<?= $data[0]["bn"]?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah O+</label>
                            <input type="number" class="form-control col-md-3" id="op" name="op" value="<?= $data[0]["op"]?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah O-</label>
                            <input type="number" class="form-control col-md-3" id="onn" name="onn" value="<?= $data[0]["onn"]?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah AB+</label>
                            <input type="number" class="form-control col-md-3" id="abp" name="abp" value="<?= $data[0]["abp"]?>">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Darah AB-</label>
                            <input type="number" class="form-control col-md-3" id="abn" name="abn" value="<?= $data[0]["abn"]?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Edit Data</button>
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