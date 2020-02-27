<?php

session_start();

    if (isset($_SESSION['zaman']) && time() > $_SESSION['zaman']){
        session_destroy();
        header('Location:http://localhost:63342/htdocs/bolum-10/oturum_kapandi.php');
    } else{
        $_SESSION['zaman'] = time() + 10;

    }

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_SESSION['kullanici_adi'])){
    include_once 'admin.php';
}
else {
    include_once 'giris.php';
}


?>


</body>
</html>