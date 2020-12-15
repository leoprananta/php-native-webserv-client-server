<?php
    include_once('../koneksi.php');

    $kabupaten = addslashes(htmlentities($_POST['kabupaten']));

    $getdata = mysqli_query($koneksi,"SELECT * FROM tb_stok WHERE kabupaten = '$kabupaten'");
    $rows = mysqli_num_rows($getdata);

    $delete = "DELETE FROM tb_stok WHERE kabupaten = '$kabupaten'";
    $deleteproses = mysqli_query($koneksi, $delete);

    $response = array();
    if($rows > 0){
        if ($deleteproses) {
            $response['code'] = 1;
            $response['message'] = "Berhasil";
            header('Location: http://localhost:8080/darah/client/');
            // echo "<a href='../client/index.php'>Kembali ke home</a>";
        }else{
            $response['code'] = 0;
            $response['message'] = "Gagal";
        }
    }else{
        $response['code'] = 0;
        $response['message'] = "Gagal, data tidak ditemukan";
    }
    echo json_encode($response);
?>