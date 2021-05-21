<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tabung WHERE id='$id'");

header("location:1912013.php");
 
?>