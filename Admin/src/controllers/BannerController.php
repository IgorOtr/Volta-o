<?php
session_start();
require '../classes/Banner.php';
$class = new Banner();


if (isset($_POST['add_banner'])) {

    $banner_img = $_FILES['file-input'];
    $banner_link = $_POST['banner_link'];

    $created_at = date('d/m/Y');

    $uploadImageToFolder = $class->uploadImagetoFolder($banner_img);

    if ($uploadImageToFolder[0] === true) {

        $insert = $class->addNewBanner($uploadImageToFolder[1], $banner_link, $created_at);
    }
}