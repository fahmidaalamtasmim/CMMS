<?php
//session_start();
require 'db.php';
$id = $_GET['id'];


$text = "SELECT*FROM text WHERE id=$id";
$text_res = mysqli_query($db_connection,$text);
$after_assoc_text = mysqli_fetch_assoc($text_res);




if($after_assoc_text['status']==1){
    $update = "UPDATE text SET status=0 WHERE id=$id";
    mysqli_query($db_connection,$update);
    header('location:dashboard_text.php');
}else{

    $update = "UPDATE text SET status=0";
    mysqli_query($db_connection,$update);
    header('location:dashboard_text.php');

    $update2 = "UPDATE text SET status=1 WHERE id=$id";
    mysqli_query($db_connection,$update2);
   // header('location:dashboard_text.php');

   
    header('location:dashboard_text.php');


    //  $count = "SELECT COUNT(text)FROM text WHERE status=1";
    //  $c = mysqli_query($db_connection, $count);
    //  if($count>1){
    //     $update = "UPDATE text SET status=0 WHERE id=$id";
    //     mysqli_query($db_connection,$update);
    // // $_SESSION['c'] = "Can keep only one active";
    //  header('location:dashboard_text.php');
 }










    
    // $update = "UPDATE text SET status=0 WHERE id=$id";
    // mysqli_query($db_connection,$update);

    // $update2 = "UPDATE text SET status=1 WHERE id=$id";
    // mysqli_query($db_connection,$update2);
    // header('location:dashboard_text.php');



//}





?>