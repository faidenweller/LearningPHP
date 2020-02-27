<?php

// range ( 2 değer giriyorsunuz mesela başlangıç ve limit değerleri gibi)



    // memory_get_usage ()
    // number_format() = küsüratlı sayıları kısaltmaya yarar

  function byteToMB ($byte)
  {

      return number_format($byte / 1048576, 2);
  }

  $sayilar = range (0,100000);

 // echo byteToMB (memory_get_usage())  .  "MB bellek kullanıldı" ;

function say ($baslangic, $limit) {


      for ($i = $baslangic; $i <= $limit; $i++ ){
      yield $i;
  }

  }

  $sayilar = say (0, 100000);
    foreach ($sayilar as $sayi)
        echo $sayi . '<br>'
    //echo byteToMB (memory_get_usage()) . "MB bellek kullanıldı";



?>