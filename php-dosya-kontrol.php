<?php

    //file_exist() ile kontrol edilir

    if (file_exists('test.txt')){
        echo 'test.txt dosyası mevcut';
    }

    if (file_exists('test')){
        echo 'test klasörü mevcut';
        rmdir('test');
}


?>