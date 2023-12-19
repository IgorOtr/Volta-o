<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require '../classes/Notice.php';

$class = new Notice();

if (isset($_POST['add_notice'])) {
    
    $img = $_FILES['notice_image'];
    $title = $_POST['notice_title'];
    $content = $_POST['notice_content'];
    $category = $_POST['notice_category'];
    $status = 'Ativo';
    $created_at = date('d/m/Y h:m:s');
    $updated_at = null;

    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';

    $uploadImageToFolder = $class->uploadImagetoFolder($img);

        if ($uploadImageToFolder[0] === true) {
            
            $insertNotice = $class->insertNotice($title, $content, $uploadImageToFolder[1], $category, $status, $created_at, $updated_at);
        }
}