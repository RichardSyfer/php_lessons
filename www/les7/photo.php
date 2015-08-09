<?php
require_once __DIR__ . '/func_lib.php';
?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <base href="//phplessons.local/les7/">
            <title>Document</title>
        </head>
        <body>
        <?php

        if(!empty($_GET['img'])):
            $fileName = $_GET['img'];
            $imgFilesInDB = getImgFileNameFromDB();
            if(in_array($fileName, $imgFilesInDB)):
                incImgViewsInDB($fileName); //increment counter image views
        ?>
                <p><img src="images/<?php echo $fileName ?>"></p>
            <?php endif; endif; ?>
        </body>
        </html>



