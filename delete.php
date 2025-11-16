<?php
include 'koneksi.php';

$ID=$_GET['ID'];

mysqli_query($koneksi, "DELETE from datas where ID='$ID'");

header("location:tabel.php");

?>