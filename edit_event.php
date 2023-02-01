<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

//grab category
$sel_cat = "SELECT*FROM category ORDER BY title";
$sc = mysqli_query($db_connection, $sel_cat);

//grab id to edit
$id = $_GET['id'];
$dd = "SELECT * FROM event_posts WHERE id=$id";
$dd_user = mysqli_query($db_connection, $dd);
$d = mysqli_fetch_assoc($dd_user);
?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>



      <?php
        if (isset($_SESSION['extension'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['extension'] ?></p>
            </div>

        <?php } ?>
        <?php
        if (isset($_SESSION['img_error'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['img_error'] ?></p>
            </div>

        <?php } ?>


        <form action="edit_event_post.php" method="POST">

            <input name="id" type="hidden" value="<?= $d['id'] ?>">

            <input name="title" type="text" value="<?= $d['title'] ?>">

            <textarea name="description" rows="10"><?= $d['description'] ?></textarea>


            <select name="category">
                <?php foreach ($sc as $key => $cat) { ?>
                    <option value="<?= $cat['id'] ?>">
                        <?= $cat['title'] ?>
                    </option>
                <?php } ?>
            </select>


            <!-- <div class="form__control inline">
                <input type="checkbox" name="is_featured" value="1" checked>
                <label for="is_featured">Featured</label>
            </div> -->

            <button type="submit" class="btn">Edit event</button>

        </form>

        <!-- form 2 -->
        <form action="edit_event_thumb_post.php" method="POST" enctype="multipart/form-data">

            <input name="id" type="hidden" value="<?= $d['id'] ?>">
            <div class="form__control">
                <label for="thumbnail">Edit thumbnail</label>
                <input type="file" name="thumbnail">
            </div>
            <button type="submit" class="btn">Edit thumbnail</button>

        </form>





    </div>
</section>


<!-- /////////////////////////////////// -->
<?php require 'footer_one.php'; ?>
<!-- <?php
//unset($_SESSION['success']);
unset($_SESSION['img_error']);
unset($_SESSION['extension']);


?> -->