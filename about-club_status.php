<?php
//session_start();
require 'db.php';
$id = $_GET['id'];


$club = "SELECT*FROM club WHERE id=$id";
$club_res = mysqli_query($db_connection,$club);
$after_assoc_club = mysqli_fetch_assoc($club_res);




if($after_assoc_club['status']==1){
    $update = "UPDATE club SET status=0 WHERE id=$id";
    mysqli_query($db_connection,$update);
    header('location:about-club_dashboard.php');
}else{

    $update = "UPDATE club SET status=0";
    mysqli_query($db_connection,$update);
    header('location:about-club_dashboard.php');

    $update2 = "UPDATE club SET status=1 WHERE id=$id";
    mysqli_query($db_connection,$update2);
    header('location:about-club_dashboard.php');


 }
?>