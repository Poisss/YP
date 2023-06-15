<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            textarea{
                display: block;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <form action="?" method="post">
            <div>
                <label for="joketext">Введите сюда свою шутку:</label>
                <textarea name="joketext" id="joketext" cols="40" rows="3"></textarea>
            </div>
            <div>
                <input type="submit" value="Добавить">
            </div>
        </form>
        <p>
            <a href="?">Вернуться</a>
        </p>
    </body>
</html>