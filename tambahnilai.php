<?php
include 'koneksilogin.php';

$namapengguna = $_POST['namapenilai'];
$namahotel = $_POST['namahotel'];
$lokasihotel = $_POST['lokasihotel'];
$kriteria = $_POST['kriteria'];
$nilai = $_POST['penilaian'];
$ulasan = $_POST['ulasan'];


$sql = " INSERT INTO rating (namapengguna, namahotel, lokasihotel, kriteria, nilai, ulasan) VALUES ( '$namapengguna', '$namahotel', '$lokasihotel', '$kriteria', '$nilai', '$ulasan')";
$baca = mysqli_query($db, $sql);

if ($baca) {
    echo "<script>
    alert('Penilaian Berhasil');
    window.location='tambahnilai.html';
    </script>
    ";
}
else{
    echo "<script>
    alert('Penilaian Gagal');
    window.location='tambahnilai.html';
    </script>
    ";
}

?>