<?php
    function http_request($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    $data = http_request("http://localhost:8080/darah/server/read.php");
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
					<h4>Stok Darah PMI</h4>
				</div>
				<div class="col-md-2">
					<a href="create.php" class="btn btn-primary">Tambah Data</a>
				</div>
			</div>
			<div class="row mt-3 justify-content-center">
				<div class="col-md-12">
					<table id="tabel1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th style="width:2%">No.</th>
								<th style="width:20%">Kabupaten</th>
								<th style="width:5%">A+</th>
								<th style="width:5%">A-</th>
								<th style="width:5%">B+</th>
								<th style="width:5%">B-</th>
								<th style="width:5%">O+</th>
								<th style="width:5%">0-</th>
								<th style="width:5%">AB+</th>
								<th style="width:5%">AB-</th>
								<th style="width:25%">Update Tanggal</th>
								<th style="width:10%">Edit</th>
								<th style="width:10%">Hapus</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no=1;
							foreach ($data as $data) { ?>
                            <tr>
								<td>
                                    <?= $no++ ?>.
                                </td>
                                <td>
                                    <?= $data["kabupaten"] ?>
                                </td>
                                <td>
                                    <?= $data["ap"] ?>
                                </td>
                                <td>
                                    <?= $data["an"] ?>
								</td>
								<td>
                                    <?= $data["bp"] ?>
                                </td>
                                <td>
                                    <?= $data["bn"] ?>
								</td>
								<td>
                                    <?= $data["op"] ?>
                                </td>
                                <td>
                                    <?= $data["onn"] ?>
								</td>
								<td>
                                    <?= $data["abp"] ?>
                                </td>
                                <td>
                                    <?= $data["abn"] ?>
								</td>
								<td>
                                    <?= $data["update"] ?>
                                </td>
                                <td>
									<a href="../client/edit.php?kabupaten=<?= $data['kabupaten'] ?>" class="btn btn-success btn-sm">Edit</a> 
								</td>
								<td>
									<form action="../server/delete.php" method="POST" id="form">
										<input type="hidden" id="kabupaten" name="kabupaten" value="<?= $data["kabupaten"] ?>">
										<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
									</form> 
								</td>
                            </tr>
                            <?php } ?>
						</tbody>
					</table>
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