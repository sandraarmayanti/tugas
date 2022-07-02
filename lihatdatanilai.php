<?php
include 'koneksilogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Find Your Place To Stay Overnight </title>
    <link rel="stylesheet" type="text/css" href="lihatdatanilai.css">
    <link href="Logo HSR.png" rel="shortcut icon">
    


</head>

<body>

<div class="main">

        <header>
        
            <img src="Assets/Logo HSR.png" width="160px" height="130px" style="margin-top: 10px;">
            

            
            <aside class="aside1">
                <section class="menu">
                    <nav>
                        <ul>
                            <li><a href="daftar.html"> Daftar </a></li>
                            <li><a href="tambahnilai.html"> Nilai </a></li>
                            <li><a href="index.html"> Kembali </a></li>
                            <li><a href="login.html"> Logout </a></li>
                        </ul>
                    </nav>
                </section>
            </aside>
        

        </header>

<div class="konten1">

<center>
    <h1> Penilaian Pengguna HomeStay Rating </h1>
    <button> <a href="tambahnilai.html" class="tombol"> <img src="Assets/more.png" width="13px" height="13px"> Tambah Penilaian </a>  </button>
    <br> <br>  
    <table border="1" cellpadding = '10' cellspacing='10'>
        <tr>
            <th> No </th>
            <th> Nama Pengguna </th>
            <th> Nama Hotel </th>
            <th> Lokasi Hotel </th>
            <th> Kriteria yang Dinilai </th>
            <th> Penilaian Pengguna </th>
            <th> Ulasan Pengguna </th>
            <th> Action </th>
        </tr>

<?php
        $mysql = "SELECT * FROM rating";
        $baca = mysqli_query($db, $mysql);
        $no = 1;

        while ($data=mysqli_fetch_array($baca)) {
            $namapengguna = $data['namapengguna'];
            $namahotel = $data['namahotel'];
            $lokasihotel = $data['lokasihotel'];
            $kriteria = $data['kriteria'];
            $nilai = $data['nilai'];
            $ulasan = $data['ulasan'];
        
?>

        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $namapengguna ?></td>
            <td><?php echo $namahotel ?></td>
            <td><?php echo $lokasihotel ?></td>
            <td><?php echo $kriteria ?></td>
            <td><?php echo $nilai ?></td>
            <td><?php echo $ulasan ?></td>
            <td>
            <button> <a href=".html" class="tombol"> <img src="Assets/pencil.png" width="12px" height="12px"> Edit </a>  </button>
            <button> <a href="hapus.php?id=<?php echo $data['id'];?>" class="tombol"> <img src="Assets/delete.png" width="12px" height="12px"> Delete </a>  </button>
        </td>
        </tr>

</div>
        
            
        <?php
        $no++;
        }
        ?>

</table>
</center>

<br> <br>

<footer>
        <aside class="asidefooter1"> 
        <div class="footer1">
    
            <p> <br> 
                Copyright © Est.2020 Ltd. All Rights Reserved. </p>
            
        </div>
        </aside>
    
        <aside class="asidefooter2"> 
            <div class="footer2">
        
                <p> Contact Us! <br>
                    <br>
                    Email : homestayrating@gmail.com <br>
                    <br>
                    Hotline : +021 456 789 </p>
                
            </div>
            </aside>
    
        <aside class="asidefooter3"> 
            <div class="footer3">
            
                <p> HomeStay Rating <br>
                    Website </p>
                    
            </div>
            </aside>      
