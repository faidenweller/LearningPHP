<?php

// dosya nasıl oluşturulur?
// touch() fonksiyonu ile oluşturulur
// time() oluşturulan dosyanın düzenlenme tarihini bu parametre ile değiştirebiliriz.


    //touch('test.txt');
    //touch('test2.txt', time() - 84000);  //84bin saniye önce oluşturuldu dedik

/*
    Kipler;
    r - okumak için aç
    r+ - okumak ve yazmak için aç
    w - yazmak için aç ( dosya yok ise oluşturulur varsa üstüne yazar)
    w+ - okumak ve yazmak için aç
    a - yazmak için aç ( dosyanın sonuna ekleme yapmak için açar)
    a+ - okumak ve yazmak için aç




  fopen() - dosyayı açmamızı sağlar
  fclose() - dosyayı kapatmamızı sağlar
  fwrite() - dosyaya bir şeyler yazmamızı sağlar
  fread() - tüm içeriği tek seferde okur
  fgets() - dosyayı satır satır okur
  feof() - dosyanın sonuna gelinip gelinilmediğini döndürür
  filesize() - dosya karakter sayısını gösterir.
  unlink() - dosyayı siler.
  file_get_content()
    file_put_content()

 */
    $icerik ='bu da 2. örnektir' . rand(0,1000) . "\n";
    $dosya = fopen('test.txt', 'a+');

        //fwrite($dosya, $icerik);
   // echo    filesize('test.txt');
     //echo   fread($dosya, filesize('test.txt'));
    //echo fgets($dosya) . '<br>';
    //echo fgets($dosya) . '<br>';
    //echo fgets($dosya) . '<br>';
    //echo fgets($dosya) . '<br>';
    //echo fgets($dosya) . '<br>';
    //echo fgets($dosya) . '<br>';
    //echo fgets($dosya) . '<br>';

    //echo feof($dosya);

//while(!feof($dosya)){
  //      echo fgets($dosya) . '<br>';
   // }
    //$degerler = file('test.txt');
    //print_r($degerler);
    //$icerik = file_get_contents('test.txt');
    //echo $icerik;
        fclose($dosya);
    //unlink('test2.txt');

?>