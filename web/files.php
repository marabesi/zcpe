<?php
print_r($_FILES);
?>

<form method="POST" action="" enctype="multipart/form-data">
    Arquivo 1
    <input type="file[]" name="arquivo"/>
<input type="file[]" name="arquivo"/>
<input type="file[]" name="arquivo"/>

    <input type="submit" value="Enviar"/>
</form>
