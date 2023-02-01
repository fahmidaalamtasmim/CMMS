<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Text</h2>
        <?php
        if (isset($_SESSION['error'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['error'] ?></p>
            </div>

        <?php } ?>
       
        <form action="add_text_post.php" method="POST">
           
           <div class="form__control">
            <input type="text" name="text" placeholder="Text">
           </div>
           
            <button type="submit" class="btn">Add text</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->


<?php
unset($_SESSION['error']);

?>