<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php htmlout($pageTitle);?></title>
        <style>
            textarea{
                display: block;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <h1><?php htmlout($pageTitle);?></h1>
        <form action="?<?php htmlout($action);?>" method="post">
            <div>
                <label for="joketext">Введите сюда свою шутку:</label>
                <textarea name="joketext" id="joketext" cols="40" rows="3">
                    <?php htmlout($text);?>
                </textarea>
            </div>
            <div>
                <label for="author">
                    Автор:
                </label>
                <select name="author" id="author">
                    <option value="">
                        Выбрать
                    </option>
                    <?php foreach($authors as $author):?>
                        <option value="<?php htmlout($author['id'])?>" 
                        <?php 
                            if($author['id']==$authorid){
                                echo 'selected';
                            }    
                        ?>
                        >
                            <?php htmlout($author['name']);?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>
            <fieldset>
                <legend>
                    Категория:
                </legend>
                <?php foreach($categories as $category):?>
                    <div>
                        <label for="category<?php htmlout($category['id']);?>">
                            <input type="checkbox" name="categories[]"
                            id="category<?php htmlout($category['id']);?>"
                            value="<?php htmlout($category['id']);?>" 
                            <?php if($category['selected']){echo 'checked';}?>>
                            <?php htmlout($category['name']);?>
                        </label>
                    </div>
                <?php endforeach;?>
            </fieldset>
            <div>
                <input type="submit" name="action" value="<?php htmlout($button);?>">
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
            </div>
        </form>
        <p>
            <a href="?">Вернуться</a>
        </p>
    </body>
</html>