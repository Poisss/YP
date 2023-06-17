<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/magicquotes.inc.php';
if(isset($_GET['add'])){
    $pageTitle='Новая категория';
    $action='addform';
    $name='';
    $id='';
    $button='Добавить категорию';
    include 'form.html.php';
    exit();
}
if(isset($_POST['action']) and $_POST['action']=='Добавить категорию'){
    include $_SERVER['DOCUMENT_ROOT'].'/includes/db.inc.php';
    try{
        $sql='INSERT INTO category SET 
        name=:name';
        $s=$pdo->prepare($sql);
        $s->bindValue(':name',$_POST['name']);
        $s->execute();
    }
    catch(PDOException $e){
        $error='Ошибка при добавлении категории: '.$e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
        exit();
    }
    header('Location: .');
    exit();
}
if(isset($_POST['action']) and $_POST['action']=='Редактировать'){
    include $_SERVER['DOCUMENT_ROOT'].'/includes/db.inc.php';
    try{
        $sql='SELECT id, name FROM category WHERE id= :id';
            $s=$pdo->prepare($sql);
            $s->bindValue(':id',$_POST['id']);
            $s->execute();
    }
    catch(PDOException $e){
        $error='Ошибка при извлечении категори: '.$e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
        exit();
    }
    $row=$s->fetch();
    $pageTitle='Редактировать категорию';
    $action='editform';
    $name=$row['name'];
    $id=$row['id'];
    $button='Обновить категорию';
    include 'form.html.php';
    exit();
}
if(isset($_POST['action']) and $_POST['action']=='Обновить категорию'){
    include $_SERVER['DOCUMENT_ROOT'].'/includes/db.inc.php';
    try{
            $sql='UPDATE category SET
            name = :name
            WHERE id = :id';
            $s=$pdo->prepare($sql);
            $s->bindValue(':id',$_POST['id']);
            $s->bindValue(':name',$_POST['name']);
            $s->execute();
    }
    catch(PDOException $e){
        $error='Ошибка при обновлении записи категории: '.$e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
        exit();
    }
    header('Location: .');
    exit();
}
if(isset($_POST['action']) and $_POST['action']=='Удалить'){
    include $_SERVER['DOCUMENT_ROOT'].'/includes/db.inc.php'; 
    
    try{
        $sql='DELETE FROM jokecategory WHERE categoryid= :id';
        $s=$pdo->prepare($sql);  
        $s->bindValue(':id',$_POST['id']);
        $s->execute();  
    }
    catch(PDOException $e){
        $error='Ошибка при удалении шуток из категории: '.$e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
        exit();
    }
    
    try{
        $sql='DELETE FROM category WHERE id= :id';
            $s=$pdo->prepare($sql);
            $s->bindValue(':id',$_POST['id']);
            $s->execute();
    }
    catch(PDOException $e){
        $error='Ошибка при удалении категории: '.$e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
        exit();
    }
    header('Location: .');
    exit();
}
include $_SERVER['DOCUMENT_ROOT'].'/includes/db.inc.php';
try{
    $result=$pdo->query('SELECT id, name from category');
}
catch(PDOException $e){
    $error='Ошибка при извлечении категории из базы данных';
    include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
    exit();
}
foreach($result as $row){
    $categorys[]=array('id' => $row['id'],'name' => $row['name']);
}
include 'categories.html.php';
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.html.php';
?>