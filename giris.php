<?php

require 'ayarlar.php';

if (isset($_POST['submit'])) {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    if (!$kullanici_adi || !$sifre) {
        $hata = 'Lütfen kullanıcı adı yada şifrenizi girin.';
    } elseif ($kullanici_adi != $uye['kullanici_adi']) {
        $hata = 'Kullanıcı adınız hatalı';
    } elseif ($sifre != $uye ['sifre']) {
        $hata = 'Şifreniz hatalı';
    } else {

        $_SESSION['zaman'] = time() + 10 ; //kullanıcı 20 saniye işlem yapmazsa oturum kapanır.
        $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];
        header("Location: http://localhost:63342/htdocs/bolum-10/admin.php");
    }
}


?>

<?php if (isset($hata)): ?>
<div style="border: 1px solid red">
    <?= $hata;
    endif ?>
</div>


<form action="" method="post">

    Kullanıcı Adı: <br>
    <input type="text" name="kullanici_adi">
    <hr>
    Şifre: <br>
    <input type="password" name="sifre"> <br>
    <input type="hidden" name="submit" value="1">

    <button type="submit">Giriş Yap</button>

</form>