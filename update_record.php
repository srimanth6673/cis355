<?php
# connect
$pdo = new PDO( 
    "mysql:host=".'localhost'.";"."dbname=".'id12253477_sraminen355wi20', 
    'id12253477_sraminen355wi20', 
    'pass'
);

$o = $_POST['id'];
$n = $_POST['msg'];
$sql = "UPDATE messages SET message = '$n' WHERE '$o' ";
$pdo->query($sql);
echo "<p>Your info has been updated</p><br>";
echo "<a href='display_list.php'>Back to list</a>";
