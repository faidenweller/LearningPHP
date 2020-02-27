<?php
function formFiltrele($post){
    return is_array($post) ? array_map('formFiltrele', $post) : htmlspecialchars(trim($post));
}
$_POST = array_map('formFiltrele',$_POST);

function post ($name){
    if(isset($_POST[$name]))
        return $_POST[$name];
}

    if (post('submit')){

        print_r($_POST);
    }

?>

<form action="" method="post" enctype="multipart/form-data">


    <!--
    input
    textarea: mesaj kısmının büyüklüğünü ayarlama
    file: dosya, fotoğraf için kullanılır. Eğer bu varsa form'da enctype parametresi açılmalı
    select: en fazla 1 kere seçile
     n
    radio:
    checkbox: birden fazla seçilen seçenek
    multiple select:
    button:
    disabled: bunu kullanırsak kullanıcının sadece görmesini sağlarsınız ama DEĞİŞTİREMEZ.
    readonly:  sadece okuyabilir
    placeholder: kücük şeyşer yazmak için. input ve text areada kullanılır
    selected: optionı seçer
    checked: radio ve checkboxta seçmek için kullanılır
    required: mutlaka doldurulması gereken anlamındadır
    -->

    Ad: <br>
    <input type="text" name="ad">
    <hr>
    Hakkımda: <br>
    <textarea name="hakkimda" cols="50" placeholder="hakkinda bir şeyler yaz" rows="5"><?php echo post('hakkimda')?></textarea>
    <hr>
    Meslek: <br>
    <select name="meslek" >
        <option>-- seç --</option>
        <option <?php echo post ('meslek') == 'web-developer' ? 'selected' : null ?> value="web-developer">Web Developer </option>
        <option <?php echo post ('meslek') == 'front-end-developer' ? 'selected' : null ?> value="front-end-developer">Front-end Developer</option>
        <option <?php echo post ('meslek') == 'back-end-developer' ? 'selected' : null ?> value="back-end-developer">Back-end Developer</option>
    </select>
    <hr>
    Cinsiyet: <br>
    <label>
    <input type="radio" name="cinsiyet" value="erkek">
    erkek
    </label>
    <label>
    <input type="radio" name="cinsiyet" value="kadın">
    kadın
    </label>
    <hr>
    İlgi Alanları: <br>
    <label>
        <input type="checkbox" <?php echo post('ilgi_alani') &&  in_array('php', post( 'ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="php"> PHP
    </label>
    <label>
        <input type="checkbox"<?php echo post('ilgi_alani') &&  in_array('java', post( 'ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="java"> Java
    </label>
    <label>
        <input type="checkbox" <?php echo post('ilgi_alani') &&  in_array('phyton', post( 'ilgi_alani')) ? ' checked' : null ?> name="ilgi_alani[]" value="pyhton"> Phyton
    </label>
    <hr>
    Meslek: <br>
    <select name="meslek2[]" multiple size="4" >
        <option>-- seç --</option>
        <option value="web developer" selected >Web Developer</option>
        <option value="front-end-developer">Front-end Developer</option>
        <option value="back-end-developer">Back-end Developer</option>
    </select>
    <hr>
    Fotoğraf: <br>
    <input type="file"  name="fotograf">
    <hr>
    <input type="hidden" name="submit" value="1 ">
    <button type="submit">Gönder</button>
</form>