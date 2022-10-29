<?php

include_once('./koneksi.php');

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data <?php echo $id; ?></title>
</head>
<body>
    <h1>Test Data Siswa</h1>
    <div class="form">
        <form action="update.php" method="post">
            <?php 
            $variable = mysqli_query($connection, "select * from data_siswa where id=".$id); 
            foreach ($variable as $key => $value) { 
            ?>
            <div class="row_nama">
            <!-- element id untuk kolom primary key id-->
                <input type="text" name="id" id="id" value="<?php echo $id; ?>" readonly/>
            <!-- element nama untuk kolom nama_siswa -->
                <input type="text" name="nama" id="nama" placeholder="masukkan nama disini !!" value="<?php echo $value['nama_siswa']; ?>" />            
            </div>
            <?php } ?>
            <div class="row_submit">
            <!-- perintah submit untuk updte -->
                <input type="submit" value="save" name="simpan_data">
            </div>
        </form>
    </div>
</body>
</html>