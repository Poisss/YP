<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Все шутки, которые есть в базе данных:</p>
        <?php foreach($jokes as $joke):?>
            <blockquote>
                <p>
                    <?php
                    echo htmlspecialchars($joke,ENT_QUOTES, 'UTF-8');
                    ?>
                </p>
            </blockquote>
        <?php endforeach; ?>    
    </body>
</html>