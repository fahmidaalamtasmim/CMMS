<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Logo</h2>
        <?php
        if (isset($_SESSION['error'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['error'] ?></p>
            </div>

        <?php } ?>
       
        <form action="add_logo_post.php" method="POST" enctype="multipart/form-data">
           
           <div class="form__control">
            <label for="logo">Add Logo</label>
            <input type="file" name="logo">
           </div>
           
            <button type="submit" class="btn">Add logo</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->


<?php
unset($_SESSION['error']);

?>