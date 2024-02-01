<?php

if (!$_SESSION['voltaco_email']) {

    session_destroy();

    unset($_SESSION['voltaco_nome']);

    unset($_SESSION['voltaco_email']);

    session_unset();

    header('location: http://localhost/Voltaco/Admin/login.php');
}