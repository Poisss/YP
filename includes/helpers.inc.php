<?php 
function html($text){
    return htmlspecialchars($text,ENT_QUOTES,'UTF-8');
}
function htmlout($text){
    echo html($text);
}
function markdown2html($text){
    $text=html($text);
    $text=preg_replace('/__(.+?)__/s','<strong>$l</strong>',$text);
    $text=preg_replace('/\*\*(.+?)\*\*/s','<strong>$l</strong>',$text);
    $text=preg_replace('/_([^_]+)_/','<em>$l</em>',$text);
    $text=preg_replace('/\*([^\*]+)\*/','<em>$l</em>',$text);
    return $text;
}
function markdownhtml($text){
    echo markdown2html($text);
}
?>