<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>
<body>
        
        <?php
            $beli = 8000;
            $jual = 7500;
            $untung = 300;

            echo ("Harga Beli = Rp. 8000");
            echo "<br>";
            echo ("Harga Jual = Rp. 7500");
            echo "<br>";
            echo ("Keuntungan = Rp. 300");
            echo "<br>";
            echo ("Berapa jumlah kambing yang dibeli ?");
            $hasil = $beli-$jual;
            $hasil2 = $hasil/$untung;
            echo "<br>";
            echo ("Jawaban : "); 
            echo ceil ($hasil2);
            echo (" ekor");
        ?>
</body>
</html>