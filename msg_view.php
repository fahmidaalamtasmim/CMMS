<?php
//require 'header_two.php';


require 'header_one.php';
require 'db.php';


$m = $_GET['id'];
//to change back color of the table
$update = "UPDATE msg SET status=1 WHERE id=$m";
$up_res = mysqli_query($db_connection, $update);

//to show msg on table
$se = "SELECT * FROM msg WHERE id=$m";
$see_res = mysqli_query($db_connection, $se);
$assoc = mysqli_fetch_assoc($see_res);


?>


  <!-- ========================= start of post ======================================== -->
<section class="singlepost" style="margin-top: 10rem;">
    <div class="container singlepost__container">
        <div class="post__author">
            <div class="post__author-info">
               <strong><?=$assoc['msg']?></strong>
            </div>
        </div>
    </div>
</section>
  <!-- =========================End of post ======================================== -->











