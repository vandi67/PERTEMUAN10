<?php
echo "<h1>kodingan menggunakan function</h1>" ;
function salam () {
    echo "hallo selamat makan jono" ;
}
salam();
echo "<br>" ;
salam();

echo "<br><h1>function menggunakan parameter</h1>" ;
function salam1($name) {
    echo "Selamat datang $name di rumah makan cahuy <br>" ;
}
salam1("jono") ;
echo "<br>" ; 


function jumlah ($a, $b) {
    return $a + $b ;
}

$Hasil = jumlah(5,5) ;
echo "Hasil penjumlahan $Hasil <br>" ;

echo "<br><h1>function parameter default</h1>" ;
function salam2($name = "user") {
    echo "Selamat datang $name di rumah makan cahuy <br>" ;
}
salam2("jono") ; 