<?php
/*
 strlen(): bir ifadenin toplam karakter sayısını verir
strstr(): bir ifade içerisinde değer aramamıza yarıyor
strpos(): bulunan ifadedeki değerin kaçıncı sırada oldugunu gösterir (faruk isminde k harfini arıyosak bunu bize 4 olarak verir)
ucwords(): her kelimenin bas harfini büyütür
ucfirst(): sadece ilk kelimenin baş harfini büyütür
strtolower(): büyük harfle yazılanları küçültür
strtoupper(): küçük yazılanları büyültür
trim(): boşlukları siler
ltrim: soldaki boşlukları temizler
rtrim(): sağdaki boşlukları temizler
substr(): karakterleri bölmemize yarar
str_replace(): ifadenin içerisinde bir şey değiştirmemize yarar
str_repeat(): bir karakteri tekrar etmemizi sağlar
 */

    $str = 'faruk demir';
    //echo strlen($str);
    //echo strlen('faruk demir');
    //echo strstr('faruk demir', 'k');
    //echo strpos('faruk demir', 'k');
    //echo ucwords ($str);
    //echo ucfirst($str);
    //echo strtoupper($str);
    //echo strtolower($str);
    //echo substr ($str,3,5);    //(3. karakterden sonra toplam 5 karakter göster dedim
    //echo substr ($str, 0,-2); // -2: sondan 2 harfi silerek gösterir.

    $str2= " \t\tfarukdemir \t \t ";
    //echo $str2;
    //echo trim($str2);
    //echo ltrim($str2);
    //echo rtrim ($str2);
    $str3 = '-faruk-demir-';
    //echo trim($str,'-');
    $str4 = 'faruk demir, deniz demir';
    //echo str_replace('demir', 'hamzaoglu',$str4);
    //echo str_replace(["faruk","deniz"],["bjk","atiba"],$str4);
    //echo str_repeat("*", 9);

    for ($i = 1; $i <= 10; $i++){
        $repeatCount = ($i <= 5 ? $i : (10-$i));
        echo str_repeat('*', $repeatCount). "<br>";
    }


?>