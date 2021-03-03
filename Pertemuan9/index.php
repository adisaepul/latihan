<?php
//koneksi database
$koneksi = mysqli_connect("localhost", "root","", "phpdasar");
//ambil data dari tabel mahasiswa
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

if (!$result) {
    echo mysqli_error();
}
$hasil = mysqli_fetch_row($result);
var_dump($hasil);
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
        <tr>
            <td>1</td>
            <td>
                <a href=#>Ubah</a> | 
                <a href="">Hapus</a>
            </td>
        </tr>
    </table>
</body>
</html>