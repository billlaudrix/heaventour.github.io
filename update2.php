<?php

require_once('config.php');
// $cust_name = $_POST['cust_name'];
// $cust_gender = $_POST['cust_gender'];
// $cust_age = $_POST['age'];
// $cust_contact = $_POST['telepon'];
// $cust_email = $_POST['email'];

// $id_cust = $_POST['id_cust'];
$kode_cust = $_POST['kode_cust'];
$jumlah_orang = $_POST['jumlahorang'];
$paket_tour = $_POST['paket'];
$tanggal_berangkat = $_POST['tanggalberangkat'];

//siapkan query

$query  = "UPDATE ticket SET jumlah_orang = '$jumlah_orang', paket_tour = '$paket_tour', tanggal_berangkat = '$tanggal_berangkat' WHERE id_cust ='$kode_cust' ";



echo $kode_cust;
//jalankan query
// &kode_cust='. $kode_cust
if($query = mysqli_query($koneksi,$query)){
    // header('index.php');
    header('Location: /heaventour/database/bookreport.php?status=success_book');
    
}else {
    // header("gagal");

    echo"gagal ";
}

?>