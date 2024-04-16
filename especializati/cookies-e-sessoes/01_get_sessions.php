<?php

session_start();

if (!isset($_SESSION['auth'])) {
    header('Location:01_set_sessions.php');
}
echo 'Painel Admin';
//$_SESSION['idade'] = 24;
//$_SESSION['email'] = 'teste@hotmail.com';
//
//
//echo $_SESSION['name']['firstname'];
//echo $_SESSION['name']['lastname'];
//
//var_dump($_SESSION);
//include('01_set_sessions.php');
//
//echo $name;