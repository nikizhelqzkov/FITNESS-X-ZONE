<?php

require_once 'boot.php';

$user = new UserController();

if($user->logIn())
{
    header('Location:https://www.w3schools.com/sql/sql_select.asp');
    die();
    

}


$_SESSION['error'] = "not logged in";


