<?php
include"koneksi.php" ;
$foto = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
move_uploaded_file($file_tmp,  'file/' .$foto);
?>
