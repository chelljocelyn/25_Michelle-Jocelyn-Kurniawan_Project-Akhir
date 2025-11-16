<?php
include 'koneksi.php';

$ID=$_POST['ID'];
$Full_Name=$_POST['Full_Name'];
$Phone_Number=$_POST['Phone_Number'];
$Book_Title=$_POST['Book_Title'];
$Book_Genre=$_POST['Book_Genre'];
$Borrow_Date=$_POST['Borrow_Date'];
$Return_Date=$_POST['Return_Date'];

mysqli_query($koneksi,"UPDATE datas SET Full_Name='$Full_Name', Phone_Number='$Phone_Number', Book_Title='$Book_Title', Book_Genre='$Book_Genre', Borrow_Date='$Borrow_Date', Return_Date='$Return_Date' where ID='$ID'");

header("location:tabel.php");