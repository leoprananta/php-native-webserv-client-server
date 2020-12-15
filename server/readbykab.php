<?php
    include_once('../koneksi.php');
    $kabupaten = $_GET['kabupaten'];
    $array_data = array();
    $query = "SELECT * FROM tb_stok WHERE kabupaten='$kabupaten'";
    $result = mysqli_query($koneksi, $query);
    while($row = mysqli_fetch_assoc($result))
    {
      $array_data[]=$row;
    }
    
    echo json_encode($array_data);
?>