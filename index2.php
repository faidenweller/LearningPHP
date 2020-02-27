<?php

    //iki şekilde gönderme şekli var;
    // include : dosya cagirdiginda yoksa bile  sadece uyarı veriyor ama sistem çalismaya devam ediyor
    // require : dosya cagrildiginda yoksa fatal_error verir sitem çalışmaz

    //include 'test.php';     //include'un başına @ koydugumuzda hatayı gizleyebiliyoruz
    //require 'test.php';
    //include_once = dosyayı sadece 1 kere cagırabilirsin

    //include 'a.php';
    //require 'a.php';
    //include ('a.php');
    //require ('a.php');
    //include_once 'a.php';
    //include_once 'a.php';


    //echo 'deneme';
    $title = 'Faruk Demir';

    require 'header.php';

    echo $test;
?>

    content

<?php

    require 'footer.php';

?>
