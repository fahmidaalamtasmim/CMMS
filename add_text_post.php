<?php
//session_start();

require 'db.php';

$text = $_POST['text'];
$t = "INSERT INTO text(text)VALUES('$text')";
mysqli_query($db_connection, $t);

header('location:dashboard_text.php');


?>