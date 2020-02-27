<?php
// arama kısmında $_POST kullanılmaz $_GET kullanılır
function formFiltrele($post){
    return is_array($post) ? array_map('formFiltrele', $post) : htmlspecialchars(trim($post));
}
$_GET = array_map('formFiltrele',$_GET);

function get ($name){
    if(isset($_GET[$name]))
        return $_GET[$name];
}



?>

<form action="" method="get">

    Arama:
<input type="text" value="<?php echo get ('kelime'); ?>" name="kelime">

</form>