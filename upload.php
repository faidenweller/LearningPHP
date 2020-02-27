<?php

// mime_content_type()

//echo mime_content_type('sonuc2.php');


?>
<?php for ($i = 0; $i <= 4; $i++): ?>

<form action="sonuc2.php " method="post" enctype="multipart/form-data">

    Dosya Seçin: <br>

    <input type="file" name="dosya[]" multiple> <br>



        <button type="submit">Yükle</button>



</form>

<?php endfor; ?>