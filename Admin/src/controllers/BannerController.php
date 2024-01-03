<?php
session_start();
require '../classes/Banner.php';
$class = new Banner();

$action = isset($_GET['action']) ? $_GET['action'] : '' ;
$id = isset($_GET['id']) ? $_GET['id'] : '' ;

if (isset($_POST['add_banner'])) {

    $banner_img = $_FILES['file-input'];
    $banner_link = $_POST['banner_link'];

    $created_at = date('d/m/Y');

    $uploadImageToFolder = $class->uploadImagetoFolder($banner_img);

    if ($uploadImageToFolder[0] === true) {

        $insert = $class->addNewBanner($uploadImageToFolder[1], $banner_link, $created_at);
    }
}

if (isset($_POST['alter_banner'])) {

    $banner_img = $_FILES['file-input'];
    $banner_link = $_POST['banner_link'];
    $banner_id = $_POST['id'];

        if ($banner_img['name'] == "") {

            $insert = $class->UpdateBannerWhitoutImage($banner_id, $banner_link);

        }else{

            $uploadImageToFolder = $class->uploadImagetoFolder($banner_img);

            if ($uploadImageToFolder[0] === true) {
        
                $insert = $class->UpdateBanner($banner_id, $uploadImageToFolder[1], $banner_link);
            }
        }


}

if ($action == 'delete') {

    $delete = $class->DeleteBanner($id);
}