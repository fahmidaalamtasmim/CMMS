<?php
require 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$user_type = $_POST['user_type'];
$id = $_POST['id'];

if(empty($email)){
    $update = "UPDATE users SET name='$name',phone='$phone' WHERE id=$id ";
    mysqli_query($db_connection, $update);
    header('location:dashboard_user.php');
}else if(empty($name)){
    $update = "UPDATE users SET name='$name',email='$email',phone='$phone' WHERE id=$id ";
    mysqli_query($db_connection, $update);
    header('location:dashboard_user.php');
}
else{
    $update = "UPDATE users SET name='$name',email='$email',phone='$phone',user_type='$user_type' WHERE id=$id ";
    mysqli_query($db_connection, $update);
    header('location:dashboard_user.php');
}

?>