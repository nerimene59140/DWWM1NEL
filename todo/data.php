<?php
include 'db.connexion.php';

if ($_GET['action'] == 'delete') {

    // Supprimer une tâche de la base de données
    $id = $_GET['id'];
    $req_text = 'DELETE FROM todolist WHERE id=' . $id . ';';
    $req = mysqli_query($conn, $req_text);
} else if ($_GET['action'] == 'add') {

    // Insérer une tâche dans la base de données
    $val = $_GET['todo-data'];
    $req_text = 'INSERT INTO todolist (todo) VALUES ("' . $val . '");';
    $req = mysqli_query($conn, $req_text);
} else if ($_GET['action'] == 'update') {

    // Modifier une tâche dans la base de données 
    $id = $_GET['id'];
    $up = $_GET['edit'];
    $req_text = "UPDATE todolist SET todo ='$up' WHERE id='$id';";
    $req = mysqli_query($conn, $req_text);
}


// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

header('Location: index.php');
