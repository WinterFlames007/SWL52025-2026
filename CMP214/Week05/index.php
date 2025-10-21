<?php
// session_start ();

// $_SESSION['favColor']= $_GET ["favColor"];

// $_SESSION['num01']= $_GET ["num01"];
// $_SESSION['num02']= $_GET ["num02"];


// echo $_SESSION['num01'];
// echo $_SESSION['num02'];

if (ini_get("session.use_cookies"))
{
    $params =session_get_cookie_params();

    setcookie(session_name(), '', time() -42000,
    $params['path'],
    $params['domain'],
    $params['secure'],
    $params['httponly']);
}
session_destroy();


?>