<?php
//session_start();
require 'db.php';
$id = $_GET['id'];


$text = "SELECT*FROM social WHERE id=$id";
$text_res = mysqli_query($db_connection,$text);
$after_assoc_text = mysqli_fetch_assoc($text_res);




if($after_assoc_text['status']==1){
    $update = "UPDATE social SET status=0 WHERE id=$id";
    mysqli_query($db_connection,$update);
    header('location:dashboard_social.php');
}else{

    $update = "UPDATE social SET status=1 WHERE id=$id";
    mysqli_query($db_connection,$update);
    header('location:dashboard_social.php');

    $update2 = "UPDATE social SET status=1 WHERE id=$id";
    mysqli_query($db_connection,$update2);
   // header('location:dashboard_text.php');

   
    header('location:dashboard_social.php');


 }








?>