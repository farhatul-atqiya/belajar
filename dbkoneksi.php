<?php
//konfigurasi database
$host = "localhost";
$dbname = "ecommerce";
$username = "root";
$password = "";

//buat koneksi PDO
//Menggunakan tru catch

try {
   // buat objek koneksi PDO yang di dalamnya ada parameter host dll
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Set atribut mengatur mode kesalahan

    //echo "<h1>database berhasil terhubung</h1>";

} catch (PDOException $e) {
        echo "database tidak terhubung : " .$e->getMessage();
}
?>