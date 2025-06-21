<?php
$role  = "Admin" ;

switch ($role) {
    case "admin":
        echo "Akses penuh ke sistem" ;
        break ;
    case "dosen" :
        echo "Akses data mahasiswa" ;
        break ;
    case "mahasiswa" :
        echo "Akses pengisian KRS" ;
        break ;
    default:
    echo "Role tidak ditemukan" ;
}

?>
<br>
<a href="index.html">menu awal</a>

 