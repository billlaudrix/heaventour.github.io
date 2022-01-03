<?php 

require_once('config.php');

$id_cust = $_GET['id_cust'];

$hapus = "DELETE FROM costumer WHERE id_cust={$id_cust}";
echo $hapus;
$koneksi->query($hapus);









$hapus = "DELETE FROM ticket WHERE id_cust={$id_cust}";
echo $hapus;
$koneksi->query($hapus);


header('Location: /heaventour/database/index.php?status=success_delete');


?>