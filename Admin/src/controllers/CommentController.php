<?php
session_start();
require '../classes/Comment.php';
$class = new Comment();

$action = isset($_GET['action']) ? $_GET['action'] : '' ;
$id = isset($_GET['id']) ? $_GET['id'] : '' ;
$status_set = isset($_GET['sset']) ? $_GET['sset'] : '' ;

if (isset($_POST['add_comment'])) {
    
    $comment = $_POST['comment'];
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $site = $_POST['user_site'];
    $notice = $_POST['notice_id'];
    $comment_status = "Pendente";

        $addComment = $class->AddComment($notice, $name, $email, $site, $comment, $comment_status);

}

if ($action == 'change-status') {
    
    $update = $class->UpdateCommentStatus($id, $status_set);
}   