<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas akhir pekan 6</title>
  </head>
  <body>

    <?php

    $d = 14;
    $r = $d/2;
    //rumus Luas lingkaran: phi*r*r
    //rumus Keliling lingkaran: 2*phi*r
    function luasLingkaran($nilai){
      return pi() * pow($nilai, 2);
    };

    function kelilingLingkaran($nilai){
      return 2 * pi() * $nilai;
    };

   ?>


    <h3>Soal Nomor 6</h3>
    <p>Sebuah roda sepeda yang berbentuk lingkaran memiliki
      diameter sebesar 14 cm. Maka luas dan keliling roda
      tersebut adalah?</p>

    <br><br>
    <h3>Jawaban</h3>

    <p><b>Luasnya adalah : <?php echo luasLingkaran($r); ?> </b></p>
    <p><b>Kelilingnya adalah : <?php echo kelilingLingkaran($r); ?> </b></p>


  </body>
</html>
