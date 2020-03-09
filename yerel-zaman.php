<?php
#date_default_timezone_get() bu fonksiyon ile timezone nerenin zaman diliminde görebiliyoruz.
date_default_timezone_set('Europe/Istanbul');
setlocale(LC_TIME, 'tr_TR');

$tarih = strftime('%d %B %Y, %A - %T', strtotime('-2 day'));

echo $tarih;

?>
