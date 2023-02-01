<?php
session_start();
require 'db.php';
$id = $_GET['id'];


$delete = "DELETE FROM about WHERE id=$id";
mysqli_query($db_connection,$delete);
$_SESSION['delete'] = 'about deleted successfully';
header('location:dashboard_about.php');


?>