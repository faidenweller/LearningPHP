<?php

date_default_timezone_set('Europe/Istanbul');
$tarih= new DateTime('+4 day');

//echo $tarih->format('Y-m-d H:i:s');

//echo $tarih->getTimestamp(time()); //tarihi unix olarak alıyoruz

$tarih1 = new DateTime('2020-03-08');
$tarih2 = new DateTime();

$fark = $tarih1->diff($tarih2);

$tarih = $fark->format('%y yıl  %m ay  %d gun  %h saat  %i dakika %s saniye '); //arasında ne kadar zaman farkı oldugunu detaylı sekilde gösterir

$tarih= str_replace(
    ['0 yıl', ' 0 ay', ' 0 gün', ' 0 saat', ' 0 dakika'], // aradan geçen zamanlarda 0 olanları kaldırır.
    '',
$tarih);

echo $tarih;