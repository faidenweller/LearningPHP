<?php

/*
 array_map() : her elemanı alıp değiştirerek geri döndürür (1'i alıp 2yle çarptıktan sonra ekrana yazmak gibi)
array_filter () : arrayleri boş olan değerleri kaldıran değişken
array_merge() : iki diziyi birleştirmek için kullanılan değişken.
array_rand(yani random) () : değerlerin içinden rastgele değerleri seçmemizi sağlayan değişken
array_reverse() : bir fonksiyonu ters yazmak için kullanılır
array_search() :dizide değer aramak için kullanılır değer varsa anahtarını döndürüyor. (iç içe dizilerde işe yaramaz fonksiyon yaratmak gerekir)
in_array() : hemen hemen array_searh ile aynıdır
array_shift(): dizinin ilk elemanını seçip diziden çıkarır
array_pop(): dizinin son elemanını seçip diziden çıkarır
array_slice(): dizinin belli bir aralığını seçmek için kullanılır.
array_sum(): dizinin değerlerinin toplamını bulmak için kullanılır.
array_product(): dizinin değerlerinin çarpımını bulmak için kullanılır
array_unique(): dizide tekrarlanan değerleri siler.
 */

    function filtrele ($val){
        return $val * 2;
    }

    $arr = [1,2,3,4,5];
    $arr2 = array_map ('filtrele', $arr);

    //print_r ($arr2);
    $arr = ['faruk', '', 'demir', ''];
   // print_r ($arr);
    $arr = array_filter($arr);
    //print_r($arr);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

   $arr = array_merge ($arr1, $arr2);
   //print_r ($arr);

    $arr = [
        'ad' => 'faruk',
        'demir' => 'demir',
        'yas' => 25
    ];

    $random = array_rand($arr,2);
    $values = array_map (function($key) use($arr) {
        return $arr [$key];
},$random);
    //print_r ($values);

    $arr = [1,2,3,4,5];
    //print_r ($arr);
    $arr = array_reverse($arr);
    //print_r ($arr);

    $arr = [
        'ad' => 'faruk',
        'soyad' => 'demir',
        'a' => [
            'b' => [
                'c' => 'd'

            ]
        ]
    ];

    $test = array_search('d', $arr);

    function _array_search ($cur_val, $arr)
    {
        foreach ($arr as $key => $val){
            if($val == $cur_val){
                return true;
            }
            if (is_array($val)){
                return _array_search($cur_val,$val);
            }
        }
        return false;
    }

    $test = _array_search('faruk', $arr);
    //echo $test;

  /*  $arr = [1,2,3,4,5];

    if(in_array('4',$arr)){
        echo '4 değeri var';
    } else {
        echo 'yok';
    }
  */

  //$arr = [1,2,3,4,5];
  //$ilk_eleman = array_shift($arr);
    $son_eleman = array_pop($arr);
    print_r($arr);
    //echo $son_eleman;
  //print_r($arr);
  //echo $ilk_eleman;

   // $arr = [1,2,3,4,5];
    //ilk 2 eleman hariç diğerlerini göstermek istiyorum
    //$arr2 = array_slice($arr,2);
   // print_r($arr2);

    //$arr = [1,2,3,4,5];

    //$toplam= array_sum($arr);

    //echo $toplam;

    //$carpim= array_product($arr);
    //echo $carpim;

$arr = ['faruk', 'demir', 'faruk', 'demir', 'bjk'];
$arr2 = array_unique($arr);
print_r($arr2);
?>
