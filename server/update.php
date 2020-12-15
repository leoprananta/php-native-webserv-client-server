<?php
    require_once('../koneksi.php');

    $kabupaten = addslashes(htmlentities($_POST['kabupaten']));
    $ap = addslashes(htmlentities($_POST['ap']));
    $an = addslashes(htmlentities($_POST['an']));
    $bp = addslashes(htmlentities($_POST['bp']));
    $bn = addslashes(htmlentities($_POST['bn']));
    $op = addslashes(htmlentities($_POST['op']));
    $onn = addslashes(htmlentities($_POST['onn']));
    $abp = addslashes(htmlentities($_POST['abp']));
    $abn = addslashes(htmlentities($_POST['abn']));

    $getdata = mysqli_query($koneksi, "SELECT * FROM tb_stok WHERE kabupaten='$kabupaten'");
    $rows = mysqli_num_rows($getdata);

    $update = "UPDATE tb_stok SET kabupaten='$kabupaten', ap='$ap', an='$an', bp='$bp', bn='$bn', op='$op', onn='$onn', abp='$abp', abn='$abn' WHERE kabupaten='$kabupaten'";
    $updateproses = mysqli_query($koneksi,$update);

    $response = array();

    if($rows > 0){
        if($updateproses){
            $response['code'] = 1;
            $response['message'] = "Berhasil";
            header('Location: http://localhost:8080/darah/client/');
        }else{
            $response['code'] = 0;
            $response['message'] = "Gagal";
        }
    }else{
        $response['code'] = 0;
        $response['message'] = "Gagal, tidak ada data yg dipilih";
    }
    echo json_encode($response);
?>