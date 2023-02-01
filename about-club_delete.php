<?php
session_start();
require 'db.php';
$id = $_GET['id'];


$delete = "DELETE FROM club WHERE id=$id";
mysqli_query($db_connection,$delete);
$_SESSION['delete'] = 'club info deleted successfully';
header('location:about-club_dashboard.php');


?>