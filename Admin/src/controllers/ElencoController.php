<?php
session_start();
require '../classes/Elenco.php';
$class = new Elenco();

$action = isset($_GET['action']) ? $_GET['action'] : '' ;
$id = isset($_GET['id']) ? $_GET['id'] : '' ;

if (isset($_POST['add_member'])) {

    $player_image = $_FILES['file-input'];
    $player_name = $_POST['player_name'];
    $player_type = $_POST['player_type'];

    $position = $class->formatPosition($player_type);

        if ($position) {

            $updateImageToFolder = $class->uploadImagetoFolder($player_image);

                if ($updateImageToFolder[0] == true) {

                    $insert = $class->addNewMember($player_name, $updateImageToFolder[1], $position, $player_type);
                }

        }
}

if (isset($_POST['edit_member'])) {

    $id = $_POST['id'];
    $name = $_POST['player_name'];
    $type = $_POST['player_type'];
    $position = $class->formatPosition($type);

    $updated_at = date('d/m/Y');

    $img = $_FILES['file-input'];

    if ($img['name'] == "") {

        $updateWhithoutImage = $class->UpdatePlayerWithoutImage($id, $name, $position, $type, $updated_at);

    }else {

        $updateImageToFolder = $class->uploadImagetoFolder($img);

            if ($updateImageToFolder[0] == true) {

                $updateWhithImage = $class->UpdatePlayerWithImage($id, $name, $updateImageToFolder[1], $position, $type, $updated_at);
            }

        
    }
}

if ($action === 'delete') {

    $delete = $class->DeleteMember($id);
}   