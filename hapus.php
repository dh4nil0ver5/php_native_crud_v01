<?php

include_once('./koneksi.php');

//ambil data dari element anchor untuk variabel id
$id = $_GET['id'];

//  query hapus
$hapus = mysqli_query($connection, "delete data_siswa where id=".$id);

// 
if ($hapus) { //kode hapus berhasil
    echo "hapus berhasil";
}else { // kode hapus gagal
    echo "hapus gagal !";
} 