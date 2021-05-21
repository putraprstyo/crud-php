<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from tabung where id='$id'");

    while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>			
                <td>volume</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="volume" value="<?php echo $d['volume']; ?>">
                </td>
            </tr>
        <tr>
            <td>Luas</td>
            <td><input type="text" name="luas" value="<?php echo $d['luas']; ?>"></td>
            </tr>
        <tr>
            <td>Jari</td>
            <td><input type="text" name="jari" value="<?php echo $d['jari']; ?>"></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td><input type="text" name="tinggi" value="<?php echo $d['tinggi']; ?>"></td>
        </tr>
        <button class="btn-update" type="submit" name="submit"> Update </button>		
        </table>
    </form>
        <?php 
	}
	?>
    
</body>
</html>