<?php
# connect
$pdo = new PDO( 
    "mysql:host=".'localhost'.";"."dbname=".'id12253477_sraminen355wi20', 
    'id12253477_sraminen355wi20', 
    'pass.'
);


$n = $_POST['msg'];
$sql = "INSERT INTO messages (message) VALUES ('$n')";
$pdo->query($sql);
echo "<p>Your info has been added</p><br>";
echo "<a href='display_list.php'>Back to list</a>";
