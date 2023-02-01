<?php
//session_start();
require 'db.php';
$id = $_GET['id'];


$about = "SELECT*FROM about WHERE id=$id";
$about_res = mysqli_query($db_connection,$about);
$after_assoc_about = mysqli_fetch_assoc($about_res);




if($after_assoc_about['status']==1){
    $update = "UPDATE about SET status=0 WHERE id=$id";
    mysqli_query($db_connection,$update);
    header('location:dashboard_about.php');
}else{

    $update = "UPDATE about SET status=0";
    mysqli_query($db_connection,$update);
    header('location:dashboard_about.php');

    $update2 = "UPDATE about SET status=1 WHERE id=$id";
    mysqli_query($db_connection,$update2);
    header('location:dashboard_about.php');


 }
?>