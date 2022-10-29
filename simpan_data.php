<?php  

include_once('./koneksi.php');

if(isset($_POST['simpan_data'])){
    $nama =  $_POST['nama'];
//  
    $query = mysqli_query($connection, "insert into data_siswa (nama_siswa) values ('".$nama."')");
    if($query){
        echo "data sudah disimpan, SILAHKAN CHECK !!!!";
    }else{
        echo "DATA TIDAK BISA DISIMPAN !!!!";
    }
}

