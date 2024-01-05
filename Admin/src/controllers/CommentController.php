<?php
session_start();
require '../classes/Comment.php';
$class = new Comment();

$action = isset($_GET['action']) ? $_GET['action'] : '' ;
$id = isset($_GET['id']) ? $_GET['id'] : '' ;

if (isset($_POST['add_comment'])) {
    
    $comment = $_POST['comment'];
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $site = $_POST['user_site'];
    $notice = $_POST['notice_id'];
    $comment_status = "Pendente";

        $addComment = $class->addComment($notice, $name, $email, $site, $comment, $comment_status);

}