<?php
//session_start();
require 'header_one.php';
require 'login_check.php';
require 'db.php';

?>

<!-- ////////////////////// FOrm ////////////////////////////////// -->



<section class="form__section">
    <div class="container form__section-container">
        <h2>Add club info</h2>
        <?php
        if (isset($_SESSION['error'])) {
        ?>
            <div class="alert__message error">
                <p><?= $_SESSION['error'] ?></p>
            </div>

        <?php } ?>
       
        <form action="about-club_post.php" method="POST">
           
           <div class="form__control">
           <textarea name="club" cols="10" rows="10"></textarea>
           </div>
           
            <button type="submit" class="btn">Add club</button>
            
        </form>
    </div>
</section>


<!-- /////////////////////////////////// -->

<?php
unset($_SESSION['error']);

?>