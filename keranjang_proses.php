<?php
session_start();

if(!isset($_SESSION['keranjang'])){
    $_SESSION['keranjang'] = array();
}


$keranjang_baru = [
    'id_produk' => $_GET['kode'],
    'nama' => $_GET['nama'],
    'harga' => $_GET['harga'],
    'jumlah' => 1,
];
$_SESSION['keranjang'][] = $keranjang_baru;
header('location:keranjang.php');
exit();
?>