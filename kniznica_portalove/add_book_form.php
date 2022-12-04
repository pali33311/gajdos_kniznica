<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];
?>
<style>body {background-color: #92a8d1;}</style>
<form action="add_book.php" method="post">
    Name:<br>
    <input type="text" name="name"/><br>
    Image:<br>
    <input type="text" name="image"/><br>
    Rating:<br>
    <input type="text" name="rating"/><br>
    About:<br>
    <textarea name="about" style="width: 600px; height: 300px;"></textarea><br>
    <input type="hidden" name="id" value="<?php echo $bookDetails[0]['id']; ?>">
    <input type="submit" name="submit" value="Update">
</form>