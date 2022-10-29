<?php

include_once('./koneksi.php');

// isset untuk set input submit 
if(isset($_POST['simpan_data'])) {

    // variabel update dari form method post
    $id = $_POST['abc'];
    $nama = $_POST['def'];
    
    //query update
    $query = mysqli_query($connection, "update data_siswa set nama_siswa='".$nama."' where id=".$id); 

    if ($query) { //jika berhasil update
        echo "update berhasil............!";
    }else{ //jika gagal update
        echo "update gagal brouw..... !";
    } 

    // ini untuk kembali kehalaman awal
    echo "<script> window.location.href = './'; </script>";
}
?>