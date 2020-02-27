<?php


session_start(); // session degerlerini başlatır

//$_SESSION['kullanici_adi'] = 'Faruk';
//$_SESSION['parola'] = 'Faruk';

unset($_SESSION['parola']); //değerleri tek tek kaldırır
print_r($_SESSION);

//echo $_SESSION['kullanici_adi'];

//session_destroy(); // session değerlerinin hepsini ortadan kaldırır

?>