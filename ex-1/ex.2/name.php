<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $name=$_GET['name'];
            echo'Добро пожаловать на наш веб-сайт, '.htmlspecialchars($name,ENT_QUOTES,'UTF-8').'!';
        ?>
    </body>
</html>