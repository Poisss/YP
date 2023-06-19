<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Достпуп запрещен</title>
    </head>
    <body>
        <h1>
            Доступ запрещен
        </h1>
        <p>
            <?php htmlout($error);?>
        </p>
    </body>
</html>