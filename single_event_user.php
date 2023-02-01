<?php
//require 'header_two.php';


    require 'header_two.php'; 
require 'db.php';
require 'login_check.php';

$ccc = $_GET['id'];
//$ccc = $_SESSION['ccc'];
// echo $ccc;
// die();

$se = "SELECT * FROM event_posts WHERE event_posts.id=$ccc";
$see_res = mysqli_query($db_connection, $se);
$assoc = mysqli_fetch_assoc($see_res);


?>


  <!-- ========================= start of post ======================================== -->
<section class="singlepost">
    <div class="container singlepost__container">

  <!-- query to fetch the category title -->
  <?php
                    $cat = $assoc['category_id'];
                    $c = "SELECT title FROM category WHERE category.id=$cat";
                    $cc = mysqli_query($db_connection, $c);
                    $ca = mysqli_fetch_assoc($cc);
                    ?>
    <!-- query to fetch the category title -->
        <h2><?=$ca['title']?></h2>
        

        <div class="post__author">
              <!-- query to fetch the admin name -->
              <?php
                        $admin = $assoc['admin_id'];
                        $admin_query = "SELECT name,photo FROM users WHERE users.id=$admin";
                        $admin_res = mysqli_query($db_connection, $admin_query);
                        $aaa = mysqli_fetch_assoc($admin_res);
                        ?>
                        <!-- query to fetch the admin name -->
            <div class="post__author-avater">
            <img width="40px" height="40px" src="./uploads/profile_pic/<?=$aaa['photo']?>" alt="">
            </div>
            <div class="post__author-info">
                <h5>BY: <?= $aaa['name'] ?></h5>
                <small><?= $assoc['date_time'] ?></small>
            </div>
        </div>
        <div class="singlepost__thumbnail">
        <img src="./uploads/thumb/<?= $assoc['thumbnail'] ?>" alt="">
        </div>
        <P>
        <?= $assoc['description'] ?>
        </P>
        

    </div>
</section>
  <!-- =========================End of post ======================================== -->

  <!-- < ?php require 'footer_one.php';?> -->










