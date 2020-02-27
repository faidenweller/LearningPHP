<?php

/*
            for(){ DEĞER; KOŞUL; DEĞERi ARTIR/AZALT
}
*/

    for($i = 1; $i <= 10; $i++){
        echo $i . '<br>';
    }

    for($i = 10; $i > 0; $i--){
        echo $i . '<br>';
    }

    $arr = [
        'faruk',
        'demir',
        'bjk',
        'fiko istifa'
    ];

    for($i = 0; $i <=(count($arr) - 1); $i++){

        echo $arr[$i] . '<br>';
}

    for($i = (count($arr)-1); $i >= 0; $i--){
        echo $arr[$i] . '<br>';
    }
?>