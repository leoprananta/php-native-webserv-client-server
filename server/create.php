<?php
    include_once('../koneksi.php');

    $kabupaten = addslashes(htmlentities($_POST['kabupaten']));
    $ap = addslashes(htmlentities($_POST['ap']));
    $an = addslashes(htmlentities($_POST['an']));
    $bp = addslashes(htmlentities($_POST['bp']));
    $bn = addslashes(htmlentities($_POST['bn']));
    $op = addslashes(htmlentities($_POST['op']));
    $onn = addslashes(htmlentities($_POST['onn']));
    $abp = addslashes(htmlentities($_POST['abp']));
    $abn = addslashes(htmlentities($_POST['abn']));

    $query = "INSERT INTO tb_stok(kabupaten, ap, an, bp, bn, op, onn, abp, abn) VALUES ('$kabupaten', '$ap', '$an', '$bp', '$bn', '$op', '$onn', '$abp', '$abn')";

    $insert = mysqli_query($koneksi, $query);
    $response = array();
    if($insert){
        $response['code'] =1;
        $response['message'] = "Berhasil";
        header('Location: http://localhost:8080/darah/client/');
    }else{
        $response['code'] =0;
        $response['message'] = "Gagal";
    }
    echo json_encode($response);
?>