<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS II PEMOGRAMAN WEB</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>TUGAS II</h1>

    <h5>Putra Prasetyo</h5>
    <h5>1912013</h5>
    <h5>TIB-2A</h5>

    <form action="" method="POST">
        <fieldset>
        <legend>Luas dan Volume Tabung</legend>
        <p>
            <label>Jari-jari</label><br>
            <input type="text" name="jari" placeholder="jari-jari" />
        </p>
        <p>
            <label>Tinggi</label><br>
            <input type="text" name="tinggi" placeholder="tinggi" />
        </p>
        <p>
            <button type="submit" name="submit"> Hitung </button>
            <button type="reset">reset</button>
        </p>
        </fieldset>
    </form>

    <?php 
        $jari = isset($_REQUEST['jari']) ? ($_REQUEST['jari']) : null;
        $tinggi = isset($_REQUEST['tinggi']) ? ($_REQUEST['tinggi']) : null;
    ?>

    <div class="hasil">
        
        <p>Jari : <?php echo($jari) ?></p>
        <p>Tinggi : <?php echo($tinggi) ?></p>

        <?php  
            $volume = 3.14 * $jari *$jari * $tinggi;
            $luas = 2 * 3.14 * $jari * ($jari + $tinggi);
        ?>
        <h4>Hasil</h4>
        <p>Volume : <?= $volume; ?></p>
        <p>luas : <?= $luas; ?></p>
    </div>

    <?php
        include "koneksi.php";
        $queryinsert = "INSERT INTO tabung SET jari='$jari', tinggi='$tinggi', luas='$luas',volume='$volume'";
        if (mysqli_query($koneksi, $queryinsert)) {
           
        } 
    ?>
    <div class="table">
        <table style="width:50%">
            <tr>
                <th>Jari-jari</th>
                <th>Tinggi</th>
                <th>Luas</th>
                <th>Volume</th>
                <th>Action</th>
            </tr>
            <?php 
            $no = 1;
            $read = mysqli_query($koneksi,"select * from tabung");
            while($data = mysqli_fetch_array($read)){
                echo "<tr>";    
                    echo "<td>".$data['jari']."</td>";   
                    echo "<td>".$data['tinggi']."</td>";    
                    echo "<td>".$data['luas']."</td>";    
                    echo "<td>".$data['volume']."</td>";     
                    echo "<td><a href='edit.php?id=".$data['id']."' class='btn-edit'>Edit</a>   
                            <a href='delete.php?id=".$data['id']."' class='btn-delete'>Delete</a>
                            </td>";   
                echo "</tr>";

            }
            ?>
        </table> 
    </div>
</body>
</html>