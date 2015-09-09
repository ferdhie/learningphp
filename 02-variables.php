<!DOCTYPE html>
<html>
    <head>
        <title>02. variables</title>
        <meta charset="utf-8">
    </head>
    <body>
        Variabel dalam PHP, variabel berguna untuk menyimpan data
        sementara ke dalam memory dimana kita dapat memprosesnya
        sesuai dengan kebutuhan, misal:
        
        <?php
            //program kalkulator sederhana
            $a = 10;
            $b = 20;
            $jumlah = $a + $b;
            echo $jumlah;
        ?>
        
        <hr>
        Variabel dapat berisi angka, atau karakter, atau yang lain.
        
        <?php
            //program gabung-gabung kalimat
            $baris1 = "Balonku ada lima";
            $baris2 = "Rupa-rupa warnanya";
            $baris3 = "Hijau, kuning, kelabu, ";
            $baris4 = "Merah muda dan biru";
            
            //menggabungkan string menggunakan operator .
            //utk angka, pakai +
            $lirik =  $baris1 . "<br>" . $baris2 . "<br>" . $baris3 . "<br>" . $baris4;
            echo $lirik;
        ?>
        
        <hr>
    
    
    </body>
</html>