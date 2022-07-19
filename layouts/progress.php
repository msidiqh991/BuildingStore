<?php 
    $nama = $_POST['nama'];
    $tanggal = date("d-m-y");
    $material = $_POST['material'];
    $merk = $_POST['merk'];
    $stock = $_POST['stock'];
    $alamat = $_POST['alamat'];

    $fp = fopen("list-pesanan.txt", "a+");
    fputs($fp, "$nama|$tanggal|$material|$custom|$merk|$stock|$alamat\n");
    fclose($fp);
    header("location:daftar-pesanan.php");
?>