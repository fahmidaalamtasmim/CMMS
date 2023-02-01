<?php
require 'db.php';
$chat = $_POST['chat'];
$admin_id = $_POST['id'];

//echo $admin_id;
//die();

$insert = "INSERT INTO chat(chat,admin_id)VALUES('$chat',$admin_id)";
mysqli_query($db_connection,$insert);

header('location:chat.php');


?>