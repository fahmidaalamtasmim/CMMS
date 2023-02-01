<?php
//session_start();
require 'db.php';
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$is_featured = $_POST['is_featured'];

if(empty($title)){
    $update = "UPDATE event_posts SET description='$description',category_id='$category',is_featured='$is_featured' WHERE id=$id ";
    mysqli_query($db_connection, $update);
    header('location:dashboard_events.php');
}else if(empty($description)){
    "UPDATE event_posts SET title='$title',category_id='$category',is_featured='$is_featured' WHERE id=$id ";
    mysqli_query($db_connection, $update);
    header('location:dashboard_events.php');
}else{
    $update="UPDATE event_posts SET title='$title',
    description='$description',
    category_id='$category',
    is_featured='$is_featured'
    WHERE id=$id ";

    mysqli_query($db_connection, $update);
    header('location:dashboard_events.php'); 
}


?>