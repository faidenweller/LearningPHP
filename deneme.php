<?php


function topla ($sayi1, $sayi2){

    return $sayi1 + $sayi2;

}


    //echo topla (4,5);

    function adsoyad($soyad){

    global $ad;
    return $ad . '' . $soyad;
    }

    //echo adsoyad('Demir')
    $yazi= ('faruk demir faruk demir');
    echo substr($yazi,0,11);

?>