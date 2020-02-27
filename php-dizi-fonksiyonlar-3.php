<?php
/*
 array_values(): dizideki değerleri başka diziye aktarır
 array_push(): dizinin sonuna yeni eleman ekler
 array_unshift(): dizinin başına yeni eleman ekler
 array_keys(): dizinin anahtarlarını listeler
current(): dizinin ilk elemanını verir
end(): dizinin son elemanını verir
next(): dizide sonraki elemanı bulmak için
prev(): dizide önceki elemanı bulmak için
extract(): anahtarları bir değişken gibi kullanmaya yarar
asort(): dizideki değerlere göre sıralama yapar (küçükten büyüğe doğru)
arsort(): dizideki değerlere göre sıralama yapar (büyükten küçüğe doğru)
ksort(): dizideki anahtarlara göre küçükten büyüğe doğru sıralama yapar
krsort():dizideki anahtarlara göre büyükten küçüğe doğru sıralama yapar
 */

    $arr = [
        'ad' => 'faruk',
        'soyad' => 'demir'
    ];

    $arr = ['faruk', 'demir', 'faruk', 'demir', 'bjk'];
    $arr2 = array_unique($arr);
   // print_r(array_values($arr2));

    $arr= ['faruk', 'demir'];
    array_push($arr, 'bjk', 'deniz seni seviyorum');
    $arr[] = '1903';
   // print_r ($arr);
    array_unshift($arr,'atiba');
    //print_r($arr);
    $arr2 = [
        'site' => 'udemy'
    ];
    $arr = array_merge($arr2, $arr);

    //print_r ($arr);

    $arr = [
        'ad' => 'faruk',
        'soyad' => 'demir',
        'a' => [
            'b' => [
                'c' => [
                    'd' => 'f'
                ]
            ]
        ]
    ];

// array_keys tek başına iç içe gömülmüş dizileri gösteremez bu yüzden recursive fonksiyon olusturmalıyız

    $keys = array_keys($arr);
    function _array_keys ($arr)
    {
        static $keys = [];
        foreach ($arr as $key => $val){
            array_push($keys, $key);
            if (is_array($val)){
                _array_keys($val);
            }
        }
        return $keys;
    }

    $keys = _array_keys($arr);
    //print_r ($keys);
 /*   $arr = ['faruk', 'demir', 'bjk', 'udemy', 'deniz'];
    echo current($arr). '<br>';
    echo next ($arr) . '<br>';
    echo next ($arr) . '<br>';
    echo prev ($arr) . '<br>';
    reset ($arr);
    echo next ($arr) . '<br>';
    //echo end($arr);
*/
  $arr = [
      'ad' => 'faruk',
      'soyad' => 'demir'
  ];
    extract($arr);

   // echo $soyad;

    $arr = [3,5,1,8,2];
    //print_r ($arr);
    asort($arr);
    //print_r($arr);
    arsort($arr);
    //print_r ($arr);

    $arr = [
        'c' => 'değer 3',
        'a' => 'değer 1',
        'b' => 'değer 2',
    ];
    print_r ($arr);
    ksort($arr);
    print_r ($arr);
    krsort($arr);
    print_r ($arr);



?>