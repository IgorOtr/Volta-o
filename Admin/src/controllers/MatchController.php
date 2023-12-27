<?php
session_start();
require '../classes/Match.php';
$class = new Matches();

if (isset($_POST['add_next_match'])) {
        
    $adversary = $_POST['adversary_name'];
    $match_date = $_POST['match_date'];
    $match_date = explode('T', $match_date);
    $match_time = $match_date[1];

    $date = explode('-', $match_date[0]);

    $date = $date[2].'/'.$date[1].'/'.$date[0];

    $match_local = $_POST['match_local'];
    $created_at = date('d/m/Y h:i:s');
    $adversary_img = $_FILES['adversary_img'];

    $uploadImageToFolder = $class->uploadImagetoFolder($adversary_img);

        if ($uploadImageToFolder[0] === true) {
                    
            $insert = $class->addNextMatch($adversary, $uploadImageToFolder[1], $date, $match_time, $match_local, $created_at);
        }
}

if (isset($_POST['add_last_match'])) {
        
    $adversary = $_POST['adversary_name'];
    $score_vr = $_POST['score_vr'];
    $score_adversary = $_POST['score_adversary'];

    $match_date = $_POST['match_date'];
    $match_date = explode('T', $match_date);

    $match_time = $match_date[1];

    $date = explode('-', $match_date[0]);
    $date = $date[2].'/'.$date[1].'/'.$date[0];

    $match_local = $_POST['match_local'];
    $created_at = date('d/m/Y');
    $adversary_img = $_FILES['adversary_img'];

    $uploadImageToFolder = $class->uploadImagetoFolder($adversary_img);

        if ($uploadImageToFolder[0] === true) {
                    
            $insert = $class->addLastMatch($adversary, $score_vr, $score_adversary, $uploadImageToFolder[1], $date, $match_time, $match_local, $created_at);
        }
}