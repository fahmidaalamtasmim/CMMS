<?php
session_start();

require 'db.php';

$logo = $_FILES['logo'];
$after_explode = explode('.',$logo['name']);
$extension = end($after_explode);
$allowed_extension = array('png','jpg','gif','PNG','JPG','webp');
$lname = $logo['name'];

if(in_array($extension,$allowed_extension)){
    if($logo['size']<=1000000){
        $insert = "INSERT INTO logo (logo)VALUES('$lname')";
        mysqli_query($db_connection,$insert);
        $last_id = mysqli_insert_id($db_connection);
        
        //file naming
        $file_name = $last_id.'.'.$extension;
        $new_location ='./uploads/logo/'.$file_name;
        move_uploaded_file($logo['tmp_name'],$new_location);
        $update = "UPDATE logo SET logo='$file_name' WHERE id=$last_id";
        mysqli_query($db_connection,$update);
        header('location:dashboard_logo.php'); 

    }else{
        $_SESSION['error']='File size exceed';
        header('location:dashboard_logo.php'); 
    }

}else{
    $_SESSION['error']='Invalid Extension';
    header('location:dashboard_logo.php');
}

?>