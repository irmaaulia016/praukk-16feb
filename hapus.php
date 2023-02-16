<?php
include("koneksi.php");
$id=$_GET['id_user'];

mysqli_query($koneksi,"DELETE FROM tb_user where id_user='$id'");
mysqli_query($koneksi,"DELETE FROM tb_bahan where id_bahan='$id'");

    header("Location:tampil.php?status=sukses");

?>

