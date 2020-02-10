<?php
# connect
$pdo = new PDO( 
    "mysql:host=".'localhost'.";"."dbname=".'id12253477_sraminen355wi20', 
    'id12253477_sraminen355wi20', 
    'Chinni_2000.'
);

$o = $_POST['id'];
$sql = "DELETE FROM messages WHERE '$o' ";
$pdo->query($sql);
echo "<p>Your info has been deleted</p><br>";
echo "<a href='display_list.php'>Back to list</a>";