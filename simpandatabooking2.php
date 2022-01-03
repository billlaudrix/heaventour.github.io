<?php

require_once('config.php');

//tangkap inputan user

// $cust_name = $_POST['nama'];
// $cust_gender = $_POST['gender'];
// $cust_age = $_POST['age'];
// $cust_contact = $_POST['telepon'];
// $cust_email = $_POST['email'];
$jumlah_orang = $_POST['jumlahorang'];
$paket_tour = $_POST['paket'];
$tanggal_berangkat = $_POST['tanggalberangkat'];

$id_cust = $_POST['id_cust'];

//siapkan query

// $query  = "INSERT INTO costumer (cust_name, cust_gender, cust_age, cust_contact, cust_email) VALUES ('$cust_name','$cust_gender','$cust_age', '$cust_contact','$cust_email')";
$query2 = "INSERT INTO ticket ( jumlah_orang, paket_tour, tanggal_berangkat, id_cust) VALUES ('$jumlah_orang','$paket_tour','$tanggal_berangkat', '$id_cust')";

//jalankan query

// if($query = mysqli_query($koneksi,$query)){
//     // header('index.php');
//     header('Location: /heaventour/database/bookticket.php?status=success_tambah');
    
// }else {
//     // header("gagal");
//     header('Location: /heaventour/index.php?status=fail_tambah');
//     echo("Error description: " . $query -> error);
// }

if($query2 = mysqli_query($koneksi,$query2)){
    // header('index.php');
    header('Location: /heaventour/database/bookreport.php?status=success_book');
    
}else {
    // header("gagal");
    header('Location: /heaventour/database/index.php?status=fail_book');
    echo("Error description: " . $query -> error);
}

  

?>