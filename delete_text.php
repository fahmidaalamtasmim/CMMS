<?php
session_start();
require 'db.php';
$id = $_GET['id'];


$delete = "DELETE FROM text WHERE id=$id";
mysqli_query($db_connection,$delete);
$_SESSION['delete'] = 'text deleted successfully';
header('location:dashboard_text.php');


?>