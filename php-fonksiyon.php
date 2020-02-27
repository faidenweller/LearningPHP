<?php


/*
    fonksiyonlarda büyük küçük harf duyarlı değildir.

kullanımı: function test () {
}
*\
 *
 */

    function topla($sayi1, $sayi2){
        return ($sayi1 + $sayi2);
    }

    $toplama = topla (2,3);
    //echo $toplama;

    $ad = 'Faruk';

    /* Global ve $GLOBALS ile dışardaki $ad parametresini içeri yazabiliriz

    *\
     *
     */

    function adsoyad($soyad){
        global $ad;
        return $ad . ' ' . $soyad;
    }

    //echo adsoyad('Demir');

    $yazi = 'faruk demir faruk demir';

   // echo substr($yazi,0,10). '..';

    function kisalt($str, $limit = 5)
    {
        $karakterSayisi = strlen($str);

        if ($karakterSayisi > $limit){
            $str =  substr($str, 0, $limit) . '..';
        }
        return $str;
       }
       echo kisalt($yazi, 5);
?>