<?php
echo "<h1>Indexed Array</h1>";
$buah = ["apel", "jeruk", "mangga"];
echo $buah[0] . "<br>";
echo $buah[1] . "<br>";
echo $buah[2] . "<br>";


echo "<h1>Associative Array</h1>";
$mahasiswa = [
    "nama"    => "vandi",
    "nim"     => "14523082",
    "jurusan" => "T2"
];
echo $mahasiswa['nama'] . "<br>";
echo $mahasiswa['nim'] . "<br>";
echo $mahasiswa['jurusan'] . "<br>";

echo "<h1>Multidimensional Array</h1>";
$daftarMahasiswa = [
    ["budi", 123122, "TI"],
    ["sisi", 124221, "MI"]
];
echo $daftarMahasiswa[0][0] . "<br>"; // budi
echo $daftarMahasiswa[1][2] . "<br>"; // SI


echo "<h2>Looped Indexed Array</h2>";
for ($i = 0; $i < count($buah); $i++) {
    echo $buah[$i] . "<br>";
}


echo "<h2>Looped Associative Array</h2>";
foreach ($mahasiswa as $key => $value) {
    echo "$key: $value <br>";
}
?>
