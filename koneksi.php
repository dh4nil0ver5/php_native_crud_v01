<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "crud_data_siswa";

$connection = mysqli_connect($host, $username, $password, $database);

if($connection){ //terhubung
    // echo "database terhubung !";
}else{ //terputus / tidak ada database yang dimasukkan (dibuat)
    // echo "database tidak terhubung !";
}
