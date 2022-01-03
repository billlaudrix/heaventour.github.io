<?php

require_once('config.php');

$id_cust = $_POST['id_cust'];
$cust_name = $_POST['nama'];
$cust_gender = $_POST['gender'];
$cust_age = $_POST['age'];
$cust_contact = $_POST['telepon'];
$cust_email = $_POST['email'];
$kode_cust = $_POST['kode_cust'];

//siapkan query

$query  = "UPDATE costumer SET cust_name = '$cust_name', cust_gender = '$cust_gender', cust_age = '$cust_age', cust_contact = '$cust_contact', cust_email = '$cust_email' WHERE id_cust ='$id_cust' ";

// $query2 = "SELECT costumer.id_cust, costumer.cust_name, costumer.cust_gender, costumer.cust_age, costumer.cust_contact, costumer.cust_email, ticket.jumlah_orang, ticket.paket_tour, ticket.tanggal_berangkat FROM costumer JOIN ticket ON ticket.id_cust=costumer.kode_cust ORDER BY costumer.id_cust DESC; " ;

// $data2  = mysqli_query($koneksi,$query);

// $row2 = mysqli_fetch_assoc($data2);
// $kode_cust = $_GET['id_cust'];

echo $kode_cust;
//jalankan query
// &kode_cust='. $kode_cust
if($query = mysqli_query($koneksi,$query)){
    // header('index.php');
    // print_r($kode_cust);
    header('Location:/heaventour/database/editbook2.php?status=success_edit&kode_cust='.$kode_cust);
    
}else {
    // header("gagal");

    echo"gagal ";
}

?>