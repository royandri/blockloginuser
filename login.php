<?php
session_start();
include_once 'config/dao.php';
$user = new Dao();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $login = $user->check_login($_POST['username'], $_POST['password']);
    if ($login)
    {
        // Login Success
        header("location:home.php");
    }
    else
    {
        // Login Failed
        echo "password salah";
    }
}
