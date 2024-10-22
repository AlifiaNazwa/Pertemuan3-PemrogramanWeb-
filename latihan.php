<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$siswa = array("nama"=> "Alifia Nazwa", "umur" => "19", "kota" => "Binjai", "agama" => "Islam", "Jurusan" => "Sistem Informasi");


?> 

    <h3>Biodata Mahasiswa</h3>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>umur</th>
            <th>Kota</th>
            <th>agama</th>
            <th>Jurusan</th>
        </tr>
        <tr>
<td><?= $siswa["nama"]; ?></td> 
<td><?= $siswa["umur"]; ?></td> 
<td><?= $siswa["kota"]; ?></td> 
<td><?= $siswa["agama"]; ?></td> 
<td><?= $siswa["Jurusan"]; ?></td> 
</tr>
    </table>


</body>
</html>