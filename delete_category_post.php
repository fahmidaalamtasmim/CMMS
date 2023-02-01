<?php
session_start();
require 'db.php';
$id = $_GET['id'];
//////////////////////////////////
$update = "UPDATE event_posts SET category_id=7 WHERE category_id=$id";
$up_res =mysqli_query($db_connection,$update);
///////////////////////////////
$delete = "DELETE FROM category WHERE id=$id";
mysqli_query($db_connection,$delete);
$_SESSION['delete'] = 'Category deleted successfully';
header('location:dashboard_category.php');


?>