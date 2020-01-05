<?php
require_once 'core/loginhandler.php';
session_start();

function isLogged()
{
    return isset($_SESSION['loggedUser']);
}

function logoutUser()
{
    unset($_SESSION['loggedUser']);
}
