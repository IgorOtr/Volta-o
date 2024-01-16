<?php
session_start();

class User {

    public function Login($email, $password)
    {
        require '../db/connect.php';

       $sql = "SELECT * FROM users WHERE user_email = :email AND user_password = :pass";
       $auth_user = $conn->prepare($sql);
       $auth_user->bindValue(':email',$email);
       $auth_user->bindValue(':pass',$password);
       $auth_user->execute();

       $auth_result = $auth_user->fetch(PDO::FETCH_ASSOC);

       $rowCount = $auth_user->rowCount();

       if ($rowCount > 0) {

        if (isset($_SESSION['error-login'])) {
          
              unset($_SESSION['error-login']);
        }
            
        $_SESSION["nome"] = $auth_result["user_name"];
        $_SESSION["email"] = $auth_result["user_email"];

        return header('location: '.SITE_URL.'Admin');

       } else {

        echo "lalala";
        die();

        $_SESSION['error-login'] = '<div class="alert alert-danger" role="alert">
        Email e/ou senha inválidos.
        </div>';

        header('location: '.SITE_URL.'Admin/login.php');
        
       }
    }
}