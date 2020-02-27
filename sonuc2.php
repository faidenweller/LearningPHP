<?php

function multiUpload($dosyalar)
{

    $sonuc = [];

    // hataları kontrol et

    foreach ($dosyalar['error'] as $index => $error) {
        if ($error != 0) {
            echo 'Dosya yüklenirken bir hata oluştu ' . $dosyalar['name'][$index];
            die();
        }
    }


    $gecerli_dosya_uzantilari = [
        'image/jpeg'
    ];

    foreach ($dosyalar['type'] as $index => $type) {
        if (!in_array($type, $gecerli_dosya_uzantilari)) {
            echo 'Desteklenmeyen dosya biçimi ' . $dosyalar['type'][$index];
            die();
        }
    }


    $maxBoyut = (1024 * 1024);

    foreach ($dosyalar['size'] as $index => $size) {
        if ($size > $maxBoyut) {
            echo 'Dosya beklenenden fazla büyük boyutta#' . $dosyalar['name'][$size];
            die();
        }
    }


    foreach ($dosyalar['tmp_name'] as $index => $tmp) {
        $dosyaAdi = $dosyalar['name'][$index];
        $yukle = move_uploaded_file($tmp, 'upload/' . $dosyaAdi);
        if (!$yukle) {
            echo 'Dosya yüklenemedi. #' . $dosyaAdi;
        }

        $sonuc[] = $dosyaAdi;
    }

    return $sonuc;

}

$sonuc = multiUpload($_FILES['dosya']);

var_dump($sonuc);exit;