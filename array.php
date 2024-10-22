<?php
$buah = array("Apel", "Jeruk", "Semangka", "Anggur", "Melon", "Durian");
foreach ($buah as $buahan) {
    echo "$buahan <br>";
    
} 
echo"<hr>";
$siswa = array("nama"=> "Alifia Nazwa", "umur" => "19", "kota" => "Binjai", "agama" => "Islam", "Jurusan" => "Sistem Informasi");

echo $siswa["nama"];
echo "<br>";
echo $siswa["umur"];
echo "<br>";
echo $siswa["kota"];
echo "<br>";
echo $siswa["agama"];
echo "<br>";
echo $siswa["Jurusan"]; 

echo"<hr>";
?>

<?php
$nilai = array(
    array("andi",90,95,88),
    array("Franciska",70,90,89),
    array("Budi",99,93,95)
);
?>

<table border=1>
<tr>
            <th>N0</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
        </tr>
<?php
$no=0;
foreach ($nilai as $key => $value) {
    $no++;
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$value[0]</td>";
    echo "<td>$value[1]</td>";
    echo "<td>$value[2]</td>";
    echo "<td>$value[3]</td>";
    echo "</tr>";
}
?>

</table>