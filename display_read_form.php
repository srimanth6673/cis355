<?php
# connect
$pdo = new PDO( 
    "mysql:host=".'localhost'.";"."dbname=".'id12253477_sraminen355wi20', 
    'id12253477_sraminen355wi20', 
    'Chinni_2000.'
);

# put the information for the chosen record into variable $results 
$id = $_GET['id'];
$sql = "SELECT * FROM messages WHERE id=" . $id;
$query=$pdo->prepare($sql);
$query->execute();
$result = $query->fetch();
?>
<h1>Read/view existing message</h1>
<form method='post' action='display_list.php'>
    message: <input name='msg' type='text' value='<?php echo $result['message']; ?>' disabled><br />
    <input type="submit" value="Submit">
</form>