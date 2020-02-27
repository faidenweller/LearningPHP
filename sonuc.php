 <?php

 // dosya yüklediğimizde bunu $_FILES degiskeniyle görebiliyoruz


 /**
  * @param $dosya
  * @param int $boyutLimit
  * @param null $dosya_uzantilari
  * @return array
  */
 function yukle($dosya, $boyutLimit = 1, $dosya_uzantilari = null)
 {

        $sonuc = [];

     if ($dosya['error'] == 4){
         $sonuc['hata'] = 'Lütfen bir dosya seçin.';
     } else{

         if (is_uploaded_file($dosya['tmp_name'])){

             $uzanti = explode('.', $dosya['tmp_name']);
             $uzanti = $uzanti[1];

             $gecerli_dosya_uzantilari = $dosya_uzantilari ? $dosya_uzantilari : [
                 'image/jpeg',
                 'image/png',
                 'image/gif'

             ];

             $gecerli_dosya_boyutu = (1024 * 1014) * $boyutLimit ; //maksimum 1 megabytlelık dosya olmalı

             $dosya_uzantisi = $dosya['type'];


             if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)){

                 if ($gecerli_dosya_boyutu >= $dosya['size']){

                     $ad = uniqid();

                     $yukle = move_uploaded_file($dosya['tmp_name'], 'bolum-11/upload' . $ad . '.' . $uzanti);

                     if ($yukle){

                        // echo '<h3>Dosyanız başarıyla yüklendi!</h3>';
                         //echo '<img src="bolum-11/upload' . $ad . '.' . $uzanti . '">';
                        $sonuc['dosya'] = 'bolum-11/upload' .$ad . '.' . $uzanti;
                     } else {

                         $sonuc['hata'] =  'Bir sorun oluştu ve dosyanız yüklenemedi.';
                     }

                 }else {
                     $sonuc['hata'] =  'Yükleyeceğiniz dosya en fazla 1 MB olmalı';
                 }

             }else{
                 $sonuc['hata'] =  'dosya sadece jpeg, png ya da gif formatında olabilir';
             }


         }else {
             $sonuc['hata'] =  'dosya yüklenirken bir hata oluştu.';
         }
     }

    return $sonuc;
 }

 $sonuc = yukle($_FILES['dosya']);

 if (isset($sonuc['hata'])){
     echo $sonuc ['hata'];
 }else {
     echo '<a href="' . $sonuc['dosya'].'">Dosyayı Görmek için Tıklayın! </a>';
 }

 ?>




