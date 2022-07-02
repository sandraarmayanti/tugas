<?php
include 'koneksilogin.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where username='$username' and pass='$password'";
$baca = mysqli_query($db, $sql);
$chek = mysqli_num_rows($baca);
if($chek>0) {
    echo "<script>
    alert('Login Berhasil');
    window.location='index.html';
    </script>";
}
else {
    echo "<script>
    alert('Login Gagal');
    window.location='login.html';
    </script>";
}

?>

