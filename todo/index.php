<?php
include 'db.connexion.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/styles.css">

<body>
    <div class="rectangle">
        <h3 class="titre">TO DO LIST</h3>
        <form action="data.php" method="get">
            <input id="todo-data" type="text" name="todo-data" />
            <input id="action" type="hidden" name="action" value="add" />
        </form>
        <div class="rect-todo">
            <?php
            $req = mysqli_query($conn, 'SELECT * FROM todolist;');

            while ($row = mysqli_fetch_object($req)) {

                echo '<a class="todo" href="data.php?action=delete&id=' . $row->id . '">' . $row->todo . '</a>   ';
                echo '<a class="edit" href="edit.php?id=' . $row->id . '">edit</a><br>';
            }

            ?></div>
    </div>
</body>

</html>