<?php
session_start();
require 'db.php';
$id = $_POST['id'];
$thumbnail = $_FILES['thumbnail'];
$after_explode = explode('.', $thumbnail['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'gif', 'webp', 'PNG', 'JPG');
//$file = $thumbnail['name'];

if (in_array($extension, $allowed_extension)) {
    if ($thumbnail['size'] <= 3000000) {

        
         //delete previous img ends
        $img = "SELECT*FROM event_posts WHERE id =$id";
        $img_res = mysqli_query($db_connection, $img);
        $img_assoc = mysqli_fetch_assoc($img_res);
        $delete_from = 'E:\xmpppp\htdocs\dbms\uploads\thumb/' . $img_assoc['thumbnail'];
        unlink($delete_from);


        $file_name = $id . '.' . $extension;
        //echo $file_name;
       // die();
        $new_location = 'E:\xmpppp\htdocs\dbms\uploads\thumb/'.$file_name;
        move_uploaded_file($thumbnail['tmp_name'], $new_location);
        $update = "UPDATE event_posts SET thumbnail='$file_name' WHERE id=$id";
        mysqli_query($db_connection, $update);
        header('location:dashboard_events.php');
    } else {
        $_SESSION['img_error'] = 'File size exceed';
        header('location:dashboard_events.php');
    }
} else {
    $_SESSION['extension'] = 'Invalid extension';
    header('location:dashboard_events.php');
}



?>