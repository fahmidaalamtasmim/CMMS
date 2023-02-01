<?php
//require 'header_two.php';
require 'header_two.php';
require 'db.php';
require 'login_check.php';
////////////////////////////////////
//category
$category = "SELECT*FROM category";
$category_res = mysqli_query($db_connection,$category);




//search
if (isset($_GET['search']) && isset($_GET['submit'])) {
    $search = $_GET['search'];
    $s = "SELECT*FROM event_posts WHERE title LIKE '%$search%' ORDER BY date_time";
    $s_res = mysqli_query($db_connection, $s);
   
} else if (!isset($_GET['search']) && !isset($_GET['submit'])) {
    $_SESSION['search'] = 'Search title!!';
}

?>


<!-- search starts -->
<section class="search__bar">
    <form class="container search__bar-container" action="search.php" method="GET">
        <div>
            <i class="uil uil-search"></i>
            <input type="search" name="search" placeholder="search">
        </div>
        <button type="submit" name="submit" class="btn">Go</button>
    </form>
</section>
<!-- search ends -->



<!--== =========================  POST starts  ======================================== -->

<section class="posts">
    <div class="container posts__container">

        <!-- //////////// -->
     

        <!-- ///////////////// -->
        <?php
        if (isset($_SESSION['search'])) { ?>
            <strong style="color:#ff3636; font-size: large; text-align:center; margin-left: 33rem;">
                <h1><?= $_SESSION['search'] ?></h1>
            </strong>
        <?php } else { ?>


            <!-- article 1 starts -->
            <?php foreach ($s_res as $key => $event) { ?>
                <article class="post">
                    <div class="post__thumbnail">
                        <img src="./uploads/thumb/<?= $event['thumbnail'] ?>" alt="">
                    </div>
                    <div class="post__info">
                        <!-- query to fetch the category title -->
                        <?php
                        $cat = $event['category_id'];
                        $c = "SELECT title FROM category WHERE category.id=$cat";
                        $cc = mysqli_query($db_connection, $c);
                        $ca = mysqli_fetch_assoc($cc);
                        ?>
                        <!-- query to fetch the category title -->
                        <a href="category_event_user.php?id=<?= $event['category_id'] ?>" class="category__button"><?= $ca['title'] ?></a>
                        <!-- title -->
                        <h3 class="post__title"><a href="single_event_user.php?id=<?=$event['id']?>"><?= $event['title'] ?></a></h3>
                        <!-- description -->
                        <!-- <p class="post__body">< ?= $event['description'] ?></p> -->
                        <p class="post__body"><?=substr($event['description'],0,30).'...'?></p>
                        <!-- author info -->
                        <div class="post__author">
                            <!-- query to fetch the admin name -->
                            <?php
                            $admin = $event['admin_id'];
                            $admin_query = "SELECT name,photo FROM users WHERE users.id=$admin";
                            $admin_res = mysqli_query($db_connection, $admin_query);
                            $aaa = mysqli_fetch_assoc($admin_res);
                            ?>
                            <!-- query to fetch the admin name -->
                            <div class="post__author-avater">
                                <img width="40px" height="40px" src="./uploads/profile_pic/<?= $aaa['photo'] ?>" alt="">
                            </div>
                            <div class="post__author-info">
                                <h5>BY :<?= $aaa['name'] ?></h5>
                                <small><?= $event['date_time'] ?></small>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- article 1 ends -->
            <?php } ?>
        <?php } ?>



        <!-- inside section there will be multiple articles -->
    </div>
</section>

<!-- //////////////// END OF POSTs /////////////////////////////// -->


<!-- //////////////// CATEGORY SECTION STARTS /////////////////////////////// -->


<section class="category__buttons">

    <div class="container category__buttons-container">
    <?php foreach ($category_res as $cati) { ?>

        <a href="category_event.php?id=<?=$cati['id'] ?>" class="category__button"><?=$cati['title']?></a>
        
        <?php } ?>
    </div>
   
</section>


<!-- ////////////////  CATEGORY SECTION ENDS /////////////////////////////// -->
<!-- < ?php require 'footer_one.php' ?> -->
<?php
unset($_SESSION['search']);
//unset($_SESSION['em']);
?>