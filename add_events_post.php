<?php
session_start();
require 'login_check.php';
require 'db.php';
//need user id   $_SESSION['id'] foreign key
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$admin_id = $_SESSION['id'];
// echo $category;
// die();
$is_featured = $_POST['is_featured'];


$insert1 = "INSERT INTO event_posts(title,description,category_id,admin_id,is_featured)VALUES('$title','$description','$category','$admin_id','$is_featured')";
//echo $insert1;
//die();

mysqli_query($db_connection,$insert1);
//die();

$_SESSION['success'] = 'Event added!!';
header('location:add_events.php');
$thumbnail = $_FILES['thumbnail'];
$after_explode = explode('.', $thumbnail['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'gif', 'webp', 'PNG', 'JPG');
//$file = $thumbnail['name'];



if (in_array($extension, $allowed_extension)) {
    if ($thumbnail['size'] <= 3000000) {
       // $insert = "INSERT INTO event_posts(thumbnail)VALUES('$file')";
       // mysqli_query($db_connection, $insert);
        $id = mysqli_insert_id($db_connection);
        $file_name = $id . '.' . $extension;
        $new_location = './uploads/thumb/'.$file_name;
        move_uploaded_file($thumbnail['tmp_name'], $new_location);
        $update = "UPDATE event_posts SET thumbnail='$file_name' WHERE id=$id";
        mysqli_query($db_connection, $update);
        header('location:add_events.php');
    } else {
        $_SESSION['img_error'] = 'File size exceed';
        header('location:add_events.php');
    }
} else {
    $_SESSION['extension'] = 'Invalid extension';
    header('location:add_events.php');
}



?>
