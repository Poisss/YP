<?php 
$text='PHP рулит!';
if(preg_match('/PHP/',$text)){
    $error='$text содержит строку &ldquo; PHP &ldquo;.';
}
else{
    $error='$test не содержит строку &ldquo; PHP &ldquo;.';
}
include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
?>