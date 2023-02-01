<?php
//session_start();
require 'db.php';
$id = $_GET['id'];


$logo = "SELECT*FROM logo WHERE id=$id";
$logo_res = mysqli_query($db_connection,$logo);
$after_assoc_logo = mysqli_fetch_assoc($logo_res);




if($after_assoc_logo['status']==1){
    $update = "UPDATE logo SET status=0 WHERE id=$id";
    mysqli_query($db_connection,$update);
    header('location:dashboard_logo.php');
}else{

    $update = "UPDATE logo SET status=0";
    mysqli_query($db_connection,$update);

    $update2 = "UPDATE logo SET status=1 WHERE id=$id";
    mysqli_query($db_connection,$update2);
    header('location:dashboard_logo.php');



}





?>