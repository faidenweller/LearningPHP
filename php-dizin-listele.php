<?php

/*
    scandir() - dizini taramak olarak kullanılır
    glob() -
 */

   // $dosyalar = scandir('.');
    //print_r($dosyalar);


    //$dosyalar = glob('*', GLOB_ONLYDIR);
    //$dosyalar = glob('*.php');
    //$dosyalar = glob('*.{php,txt}', GLOB_BRACE);
    //print_r($dosyalar);

    function dosya_listele($dizin_adi){
        $dosyalar= scandir($dizin_adi);
        echo '<ul>';
            foreach ($dosyalar as $dosya){
                if (!in_array($dosya, ['.','..'])){
                    echo '<li>'. $dosya;
                    if (is_dir ($dizin_adi . '/' . $dosya)){
                        dosya_listele($dizin_adi . '/' . $dosya);
                    }
                    echo '</li>';
                }

            }
        echo '</ul>';
    }

    //dosya_listele('.');

    function listele($dizin_adi){

    echo '<ul>';
    $dosyalar = glob($dizin_adi);
        foreach ($dosyalar as $dosya) {

            echo '<li>' . $dosya;
            if(is_dir($dosya)){
                listele($dosya . '/*');
            }
            echo '</li>';

    }
    echo '</ul>';
    }


    //listele('*');

    print_r(glob('bolum-1/*'));
    ?>

