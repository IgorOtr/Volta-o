<?php
session_start();
require '../classes/Elenco.php';
$class = new Elenco();

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