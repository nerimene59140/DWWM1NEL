<?php

include 'db.connexion.php';

$req = mysqli_query($conn, 
'CREATE TABLE todolist (id int primary key NOT NULL AUTO_INCREMENT, todo varchar(191));');

print_r($req);
