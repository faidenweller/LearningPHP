<?php

/*
    foreach( Array as KEY => Value){
}

*/

    $sayilar = [1,2,3,4,5,6,7,8,9,10];

    foreach($sayilar as $sayi){
        echo $sayi . '<br>';
    }

    $uyeDetay = [
        'isim' => 'Faruk',
        'soyisim' => 'Demir',
        'yas' => 24
    ];

    foreach ($uyeDetay as $key => $value){
        echo $key . ':' . $value . '<br>';

    }




?>