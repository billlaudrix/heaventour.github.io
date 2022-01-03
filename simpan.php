<?php

require_once('config.php');

//tangkap inputan user

$cust_name = $_POST['nama'];
$cust_gender = $_POST['gender'];
$cust_age = $_POST['age'];
$cust_contact = $_POST['telepon'];
$cust_email = $_POST['email'];


//siapkan query

$query  = "INSERT INTO costumer (cust_name, cust_gender, cust_age, cust_contact, cust_email) VALUES ('$cust_name','$cust_gender','$cust_age', '$cust_contact','$cust_email')";

//jalankan query

if($query = mysqli_query($koneksi,$query)){
    // header('index.php');
    header('Location: /heaventour/database/index.php?status=success_tambah');
    
}else {
    // header("gagal");
    header('Location: /heaventour/index.php?status=fail_tambah');
    echo("Error description: " . $query -> error);
}

  

?>