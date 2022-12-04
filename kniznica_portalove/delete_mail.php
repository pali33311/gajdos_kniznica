<?php
include_once "db_connect.php";

if(isset($_GET['id'])) {
    $db = $GLOBALS['db'];
    $delete = $db->deleteMail($_GET['id']);

    if($delete) {
        header("Location: mails.php");
    } else {
        echo "FATAL ERROR!!!!!";
    }
} else {
    header("Location: mails.php");
}
