<?php

// $_POST : postla gönderilen tüm formları depolar
//strip_tags(): bütün html etiketlerini kaldırır.
//htmlspecialchars(): html kodlarını kaldırmaz fakat zararsız hale getirir.
//trim(): boşlukları kaldırır.


    //echo $_POST['ad'];


   /* if ($_POST['hakkimda'] == ''){
        echo 'lütfen hakkınızda bir şeyler yazın.';
    }else {
       print_r($_POST);
    }
   */
   //echo htmlspecialchars($_POST['hakkimda']);

function formFiltrele($post){
    return is_array($post) ? array_map('formFiltrele', $post) : htmlspecialchars(trim($post));
}
$_POST = array_map('formFiltrele',$_POST);

print_r($_POST);


?>