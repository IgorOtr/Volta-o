<?php

require '../classes/User.php';

if (isset($_POST['login'])) {

    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $password = md5($password.'voltaco');

    $class = new User();
    $login = $class->Login($email, $password);
}