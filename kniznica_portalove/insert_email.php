<?php
include_once "db_connect.php";
$db = $GLOBALS["db"];

$insert = $db->insertEmail($_POST['name'], $_POST['email'], $_POST['message']);

if ($insert) {
    header("Location: contact.php");
} else {
    echo "FATAL ERROR!!!!!";
}
