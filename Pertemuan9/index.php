<?php
require 'functions.php';
$mahasiswa = query($koneksi, "SELECT * FROM mahasiswa");
//koneksi database
// $koneksi = mysqli_connect("localhost", "root","", "phpdasar");
//ambil data dari tabel mahasiswa
//  
// if (!$result) {
//     echo mysqli_error();
// }
// $hasil = mysqli_fetch_row($result);
// var_dump($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr >
            <th>No.</th>
            <th>Aksi</th>
            <th>gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row )  : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="#">Ubah</a> | 
                <a href="#">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"];?>" alt="" srcset=""></td>
            <td><?= $row["nrp"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["jurusan"]?></td>
        </tr>
        <?php $i++;?>
        <?php var_dump($i);?>
        <?php endforeach; ?>
    </table>
</body>
</html>