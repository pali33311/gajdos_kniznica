<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update = $db->updateBook($_POST['id'], $_POST['name'], $_POST['image'], $_POST['about'], $_POST['rating']);

    if($update) {
        header("Location: admin.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: admin.php");
}