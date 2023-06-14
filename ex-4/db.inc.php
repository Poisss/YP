<?php
try{
    $pdo=new PDO('mysql:host=localhost;port=3307;dbname=int_joke','jokesuser','123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch(PDOException $e){
    $error='Невозможно подключиться к серверу баз данных:';
    include 'error.html.php';
    exit();
}
?>