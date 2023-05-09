<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';

//step 1 tangkap inputan inputan user dari form
$_nama = $_POST ['nama'];//1
$_harga_beli = $_POST ['harga_beli'];//2
$_stok = $_POST ['stok'];//3
$_jenis = $_POST ['jenis_produk_id'];//4

//step 2 simpan data yang di tangkap ke dalam array
$data = [
    $_nama, 
    $_harga_beli,
    $_harga_jual = 1.2 * $_harga_beli,
    $_stok,
    $_jenis,
];
// step 3 eksekusi data array melalui tombol tambah,ubah, hapus
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data); # code...
        break;

    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data); # code...
        break;

    case 'hapus':
        unset($data);
        //panggil fungsi hapus data yang disertai tangkapan dari hidden field idx untuk klausa where id 
        $model->hapus($_POST['idx']); # code...
        break;

    default:
        header('Location:index.php?hal=produk');# code...
        break;
}
//step 4 arahkan ke halaman produk
//jika proses simpan ubah hapus telah selesai
header('Location:index.php?hal=produk');

?>