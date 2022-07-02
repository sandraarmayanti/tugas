<?php

include('koneksilogin.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM rating WHERE id='$id'";
$baca = mysqli_query($db, $query);

if($baca) {
    header("location: lihatdatanilai.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>