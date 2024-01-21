<?php
    include "koneksi.php" ;
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'] ;
    $nama_tanaman = $_POST['nama_tanaman'] ;
    move_uploaded_file($file_tmp, 'file/'.$foto) ;
    $query = "INSERT INTO fitur SET
                                        nama_tanaman = '$nama_tanaman',
                                        foto = '$foto'
    ";
    mysqli_query($koneksi, $query)
    or die("SQL Error" .mysqli_error());
    header('location:index.php');                           