<?php

function check_login_user(){
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(!isset($_SESSION['password']))
    {
        if(!isset($_SESSION['password']))
        {
            header('Location:login.php');
            exit;
        }
    }
    
}

?>