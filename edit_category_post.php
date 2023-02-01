<?php
require 'db.php';
$title = $_POST['title'];
$description = $_POST['description'];
$id = $_POST['id'];

if(empty($title)){
    $update = "UPDATE category SET description='$description' WHERE id=$id ";
    mysqli_query($db_connection, $update);
    header('location:dashboard_category.php');
}else if(empty($description)){
    $update = "UPDATE category SET title='$title' WHERE id=$id ";
    mysqli_query($db_connection, $update);
    header('location:dashboard_category.php');
}
else{
    $update = "UPDATE category SET title='$title',description='$description' WHERE id=$id ";
    mysqli_query($db_connection, $update);
    header('location:dashboard_category.php');
}

?>