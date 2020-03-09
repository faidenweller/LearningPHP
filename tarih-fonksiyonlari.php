<?php
/*
 * Unix Zaman
 * 1 Ocak 1970'ten itibaren geçen saniye sayısına denilen sayısal veri tipidir(time)
 */
# date() date fonksiyonu 2 tane parametre alır.bir tanesi biçim yani string diğeri ise zaman damgası yani timestamp
# time()  tarihi bulmamıza yararlar (1970ten bu zamana kadar olan saniyelerin toplamını verir)
# getdate() zaman dalgası var

#yıl-ay-gün /saat:dakika:saniye-öğledenönce ve sonra

//echo date('Y-m-d / H:i:s-A');

//$tarih = getdate();
//print_r($tarih);

$time = time() - (60 * 60 * 24); //1 gün önceki tarihi almak istersek
echo date('Y-m-d / H:i:s', $time);
?>