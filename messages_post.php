<?php
session_start();
require 'db.php';

date_DEFAULT_timezone_set('Asia/Dhaka');

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$date = date("Y-m-d h:i:s");
$t = "INSERT INTO msg(name,email,msg,date_time)VALUES('$name','$email','$msg','$date')";
mysqli_query($db_connection, $t);
$_SESSION['msg'] = "Message sent!!";

header('location:index.php#msg');


?>