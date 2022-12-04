<?php
include_once "db_connect.php";
$db = $GLOBALS["db"];

$mailItems = $db->getAllMails();
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

<a href="admin.php">Back</a><br>

<h1>Mails</h1>

<ul>
    <?php
        foreach ($mailItems as $mailItem) {
    ?>
        <table>
            <tr>
                <td><div class="atributes">Name</div></td>
                <td><?php echo $mailItem['name']; ?></td>
            </tr>
            <tr>
                <td><div class="atributes">Email</div></td>
                <td><?php echo $mailItem['email']; ?></td>
            </tr>
            <tr>
                <td><div class="atributes">Message</div></td>
                <td><?php echo $mailItem['message']; ?></td>
            </tr>
            <tr>
            <td><div class="atributes">Data</div></td>
            <td><?php echo $mailItem['date']; ?></td>
            </tr>
        </table>
        <a href="delete_mail.php?id=<?php echo $mailItem['id']; ?>">Delete</a>
        <br><br>
    <?php
        }
    ?>
</ul>