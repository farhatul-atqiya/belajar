<?php
include_once ('dbkoneksi.php');

include_once ('models/Pelanggan.php');
include_once ('models/Jenis_produk.php');
include_once ('models/Produk.php');

include_once ('navbar.php');


//logic untuk menangkap request dari halaman lain
//
$hal = $_REQUEST ['hal'];
//jika ada request dari url browser berupa tulisan HAL
//maka arahkan ke halaman yang di request atau sesuai request
if(!empty($hal)){
    include_once $hal. '.php';
}else{
//jika tidak ada request HAL di url browser arahkan ke home.php
    include_once 'home.php';
}

include_once ('footer.php');
?>