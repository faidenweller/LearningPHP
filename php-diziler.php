<?php

     $ad = "faruk";
    $soyad = "demir";
    $meslek = "yazılımcı";
    $yas = 24;
    /* Söz Dizilimleri 2 çeşittir;
        1- Array ()
        2- []
    *\
     *
     */

    $kimlik = array(
        'ad' => "Faruk",
        'soyad' => "Demir",
        'meslek' => "Yazılımcı",
        'yas' => 24

    );
        //print_r ($kimlik);

    $kimlik2 = [
    'ad' => "Faruk",
        'soyad' => "Demir",
        'meslek' => "Yazılımcı",
        'yas' => 24
        ];
    echo $kimlik2 ['meslek'];
    print_r ($kimlik2);


?>