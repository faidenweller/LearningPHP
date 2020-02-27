<?php

// bu işlemde istersek sadece string, istersek diğer parametreleri gönderebiliriz.

// declare = katı kurallar koymak için kullanılır (declare (strict_types = 1)


    declare (strict_types = 1);

    function topla(int $sayi1, int $sayi2){

        return $sayi1 + $sayi2;
    }


    echo topla (3,9);




?>