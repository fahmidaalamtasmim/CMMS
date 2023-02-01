<?php
session_start();
require 'db.php';
$id = $_GET['id'];

//delete previous img ends
$img = "SELECT*FROM image WHERE id =$id";
$img_res = mysqli_query($db_connection, $img);
$img_assoc = mysqli_fetch_assoc($img_res);
$delete_from = 'E:\xmpppp\htdocs\dbms\uploads\image/' . $img_assoc['image'];
unlink($delete_from);

$delete = "DELETE FROM image WHERE id=$id";
mysqli_query($db_connection,$delete);
$_SESSION['delete'] = 'image deleted successfully';
header('location:dashboard_image.php');


?>