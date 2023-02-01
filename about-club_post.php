<?php
//session_start();

require 'db.php';

$club = $_POST['club'];
$t = "INSERT INTO club(club)VALUES('$club')";
mysqli_query($db_connection, $t);

header('location:about-club_dashboard.php');


?>