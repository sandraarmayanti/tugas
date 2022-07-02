<?php
include 'koneksilogin.php';

$usernamebaru = $_POST['usernamebaru'];
$passwordbaru = $_POST ['passwordbaru'];

$sql = "INSERT INTO users (username, pass) VALUES ('$usernamebaru', '$passwordbaru')";
$baca = mysqli_query($db, $sql);

if ($baca) {
    echo "<script>
    alert('Sign Up Berhasil');
    window.location='login.html';
    </script>
    ";
}
else{
    echo "<script>
    alert('Sign Up Gagal');
    window.location='daftar.html';
    </script>
    ";
}

?>