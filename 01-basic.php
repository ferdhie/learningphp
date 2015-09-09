<!DOCTYPE html>
<html>
    <head>
        <title>01. Basic - Apa Itu PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        PHP adalah bahasa scripting yang dijalankan di webserver.
        
        <?php
            /*
            Ini adalah komentar program, berguna untuk memberikan penjelasan
            dalam program
            */
            //ini adalah komentar program, hanya 1 baris saja
            # ini juga komentar program, perl style
        
            //anda tidak akan melihat ini di browser karena dijalankan di webserver
            //browser hanya akan melihat isi tulisan saja
            echo "Tulisan ini dihasilkan dari PHP, dan bersifat dinamis. ";
            echo "Tanggal hari ini adalah: ";
            echo date("d-m-Y");
            
            
        ?>
    
    
    </body>
</html>