<?php 

include_once('./koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Test Data Siswa</h1>
    <div class="form">
        <form action="simpan_data.php" method="post">
            <div class="row_nama">
                <input type="text" name="nama" id="nama" placeholder="masukkan nama disini !!" />            
            </div>
            <div class="row_submit">
                <input type="submit" value="save" name="simpan_data">
            </div>
        </form>
    </div>
    <div>
        <h2>data siswa</h2>
        <table>
            <thead>
                <tr>
                    <td>No</td>     
                    <td>Nama Siswa</td>  
                    <td>Aksi</td>            
                </tr>
            </thead>
            <tbody>
                <?php 
                    // menampilkan data dengan foreach
                    $variable = mysqli_query($connection, "select * from data_siswa"); 
                    foreach ($variable as $key => $value) {?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $value['nama_siswa']; ?></td>
                        <td>    
                            <a href="edit.php?id=<?php echo $value['id']; ?>">edit</a>&nbsp;&nbsp;&nbsp;||
                            <a href="hapus.php?id=<?php echo $value['id']; ?>">hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>