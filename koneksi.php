<?php
$koneksi = mysqli_connect ("localhost","root","","keuangan");
if (mysqli_connect_error()){
    echo "koneksi database gagal : ". mysqli_connect_error();
}else{
    echo "hore bisa konek";
}

?>