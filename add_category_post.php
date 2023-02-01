<?php
session_start();
require 'db.php';


$title = $_POST['title'];
$description = $_POST['description'];



    $insert = "INSERT INTO category(title,description)VALUES('$title','$description')";
    mysqli_query($db_connection,$insert);
    $_SESSION['success'] = 'Category added!!';
    header('location:add_category.php');



?>