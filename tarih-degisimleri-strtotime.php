<?php

# strtotime //ifadeden zamana çevirme // bir time formatı alabilir. istersek ikinci bir time formatı da verebiliriz

//$tarih ='2020-09-03 16:49:50';
//$unix= strtotime($tarih);
//echo date('Y-m-d H:i:s', $unix);

//echo strtotime($tarih); //bugünün toplam saniyesini verdi
//echo strtotime('now'). '<br>'; // time() degişkeni ile aynıdır
//echo time();


//$unix = strtotime('+5 day', time()); //bulunduğumuz tarihten 5 gün sonrasını aldık
//echo date('Y-m-d H:i:s', $unix);

//$unix2 = time() - (60 * 60 * 24 * 2); //2 gün önceki tarih
//$unix = strtotime('next Friday'); //önümüzdeki cuma gününün fonksiyonu
echo date('Y-m-d', $unix);





?>