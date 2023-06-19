<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            if($visits>1){
                echo "Номер данного посещения: $visits.";
            }
            else{
                echo 'Добро пожаловать на мой веб-сайт! Клините здесь, чтобы узнать больше!';
            }
        ?>
    </body>
</html>