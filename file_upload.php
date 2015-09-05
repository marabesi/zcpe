<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
}

?>
<!DOCTYPE html>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file"/>
            <input type="submit" value="ok"/>
        </form>
    </body>
</html>

