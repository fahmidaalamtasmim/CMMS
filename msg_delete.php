<?php
session_start();
require 'db.php';
$id = $_GET['id'];


$delete = "DELETE FROM msg WHERE id=$id";
mysqli_query($db_connection,$delete);
$_SESSION['delete'] = 'message deleted successfully';
header('location:dashboard_messages.php');


?>