<?php

//inisiasi variable koneksi

 define('DB_SERVER','localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSOWRD','');
 define('DB_NAME','heaventour');


//proses koneksi ke database

$koneksi = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSOWRD, DB_NAME);

//cek koneksi
// echo "============================= \n <br>"; 
if ($koneksi === false) {
    die("ERROR : tidak bisa konek". mysqli_connect_error());
} else {
    // echo "Koneksi Berhasil";
}


?>