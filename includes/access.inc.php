<?php
function userIsLoggedIn(){
    if(isset($_POST['action']) and $_POST['action']=='login'){
        if(!isset($_POST['email']) or $_POST['email']=='' 
        or !isset($_POST['password']) or $_POST['password']==''){
            $GLOBALS['loginError']='Пожалуйста, заполните оба поля';
            return FALSE;
        }
        $password=md5($_POST['password'].'int_joke');
        if(databaseContainsAuthor($_POST['email'],$password)){
            session_start();
            $_SESSION['loggedIn']=true;
            $_SESSION['email']=$_POST['email'];
            $_SESSION['password']=$password;
            return true;
        }
        else{
            session_start();
            unset ($_SESSION['loggedIn']);
            unset ($_SESSION['email']);
            unset ($_SESSION['password']);
            $GLOBALS['loginError']='Указан неверный адрес электронной почты или пароль.';
            return false;
        }
    }
    if(isset())
}

?>