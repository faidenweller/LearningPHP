<?php

$arr = [

    'ad' => 'faruk',
    'soyad' => 'demir',
    'yas' => 25
];

//print_r ($arr);
//var_dump($arr);
$test = 'faruk,demir,bjk';
$arr = explode(',', $test);

//print_r ($arr);
$string = implode('|', $arr);

//echo $string;
//echo count($arr);

/* if (is_array($arr)){
    echo 'bu bir dizidir';
} else {
    echo 'bu bir dizi değildir';
}
*/

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($arr);
//print_r ($arr);

$keys = ['ad', 'soyad', 'yas'];
$values = ['faruk', 'demir'];


//print_r (array_combine($keys, $values));

$arr = ['faruk', 'demir', 24, 'demir', 24];
$arr2 = array_count_values($arr);

//print_r ($arr2);

$arr = [
    'ad' => 'faruk',
    'soyad' => 'demir',
    'yas' => 25
];

$arr2 = array_flip($arr);

//print_r ($arr2);


/* if (array_key_exists('ad', $arr)){
    echo 'ad anahtarı var';
} else {
    echo 'ad anahtarı yok!';
}
*/
$arr = [
    'ad' => 'faruk',
    'a' => [
        'b' => [
            'c' => [
                'd' => 'e'
            ]
        ]
    ]
];


var_dump($arr);

if ($arr) {

}


function _array_key_exist($cur_key, $arr)
{
    foreach ($arr as $key => $val) {
        if ($cur_key == $key) {
            return true;
        }

        if (is_array($val)) {
            return _array_key_exist($cur_key, $val);
        }
    }
    return false;
}

if (_array_key_exist('c', $arr)) {
    echo 'c anahtarı var';
} else {
    echo 'c anahtarı yok';
}
?>