<?php
require 'header_one.php';
//session_start();
require 'login_check.php';
require 'db.php';
$cid = $_GET['id'];
$selectcat = "SELECT * FROM category WHERE id=$cid";
$selectcat_cat = mysqli_query($db_connection,$selectcat);
$after_assoc_single_cat = mysqli_fetch_assoc($selectcat_cat);

?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit User</h2>
        
        <form action="edit_category_post.php" method="POST">
           
            <input type="hidden" name="id" value="<?=$after_assoc_single_cat['id']?>">
            <input type="text" name="title" value="<?=$after_assoc_single_cat['title']?>">
            <input type="text" name="description" value="<?=$after_assoc_single_cat['description']?>">
           
            <button type="submit" class="btn">Update user</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->
<?php require 'footer_one.php'?>