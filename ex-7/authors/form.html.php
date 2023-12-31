<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php htmlout($pageTitle); ?></title>
    </head>
    <body>
        <h1>
            <?php htmlout($pageTitle); ?>
        </h1>
        <form action="?<?php htmlout($action); ?>" method="post">
            <div>
                <label for="name">
                    Имя: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <input type="text" name="name" id="name" value="<?php htmlout($name); ?>">
                </label>
            </div>
            <div>
                <label for="email">
                    Электронная почта: <input type="text" name="email" id="name" value="<?php htmlout($email); ?>">
                </label>
            </div>
            <div>
                <input type="hidden" name="id" value="<?php htmlout($id); ?>">
                <input type="submit" name="action" value="<?php htmlout($button); ?>">
            </div>
        </form>
        <p>
            <a href="?">Вернуться</a>
        </p>
    </body>
</html>