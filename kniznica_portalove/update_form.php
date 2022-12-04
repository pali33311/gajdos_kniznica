<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$bookDetails = $db->getBookDetails($_GET['id']);
?>
<style>body {background-color: #92a8d1;}</style>


<form action="update.php" method="post">
    Name:<br>
    <input type="text" name="name" value="<?php echo $bookDetails[0]['name']; ?>" /><br>
    Image:<br>
    <input type="text" name="image" value="<?php echo $bookDetails[0]['image']; ?>" /><br>
    Rating:<br>
    <input type="text" name="rating" value="<?php echo $bookDetails[0]['rating']; ?>" /><br>
    About:<br>
    <textarea name="about" style="width: 600px; height: 300px;"><?php echo $bookDetails[0]['about']; ?></textarea><br>
    <input type="hidden" name="id" value="<?php echo $bookDetails[0]['id']; ?>">
    <input type="submit" name="submit" value="Update">
</form>