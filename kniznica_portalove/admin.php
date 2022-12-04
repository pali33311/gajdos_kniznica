<?php
include_once "db_connect.php";
$db = $GLOBALS["db"];

$bookItems = $db->getAllBooks();
?>

<style>
    table, td {
        border: solid black;
    }

    .atributes {
        font-weight: bold;
    }
    body {background-color: #92a8d1;}
</style>
<body>
<a href="index.php">Back to website</a><br>
<a href="mails.php">Mails</a><br>

<h1>Books</h1>
<div class="patterns pt1"></div>
<a href="add_book_form.php">Add</a>

<ul>
    <?php
        foreach ($bookItems as $bookItem) {
    ?>
        <table>
            <tr>
                <td><div class="atributes">Name</div></td>
                <td><?php echo $bookItem['name']; ?></td>
            </tr>
            <tr>
                <td><div class="atributes">Views</div></td>
                <td><?php echo $bookItem['views']; ?></td>
            </tr>
            <tr>
                <td><div class="atributes">Rating</div></td>
                <td><?php echo $bookItem['rating']; ?></td>
            </tr>
            <tr>
                <td><div class="atributes">About</div></td>
                <td><?php echo $bookItem['about']; ?></td>
            </tr>
        </table>
        <a href="delete_book.php?id=<?php echo $bookItem['id']; ?>">Delete</a>, <a href="update_form.php?id=<?php echo $bookItem['id']; ?>">Update</a>
        <br><br>
    <?php
        }
    ?>
</ul>
</body>