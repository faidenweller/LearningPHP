<?php
    // Session ve Cookie'lerde Depolama Nasıl Yapılır?;

    session_start();

  /*  $_SESSION['uye'] = [
        'kullanici adi' => 'faruk',
        'sifre' => '123'
    ];
    print_r($_SESSION);
  */

    //setcookie('uye[id]',1, time() + 86400);
    //setcookie('uye[kullanici_adi]','faruk', time() + 86400);
    //setcookie('uye[sifre]','123', time() + 86400);

    print_r($_COOKIE);

?>