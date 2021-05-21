<?php

        include("koneksi.php");

        $id = $_POST['id'];
        $volume = $_POST['volume'];
        $luas = $_POST['luas'];
        $jari = $_POST['jari'];
        $tinggi = $_POST['tinggi'];

        mysqli_query($koneksi,"UPDATE tabung SET volume='$volume', luas='$luas', jari='$jari', tinggi='$tinggi' WHERE id='$id'");
    
        header("location:1912013.php");
    ?>