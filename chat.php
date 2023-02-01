<?php
session_start();
require 'db.php';
require 'login_check.php';
//$id = $_GET['id'];
$id = $_SESSION['id'];



//chat
$chat = "SELECT*FROM chat ";
$chat_res = mysqli_query($db_connection,$chat);
//$chat_assoc = mysqli_fetch_assoc($chat_res);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./style4.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
</head>
<body>



<div class="c" id="scroller">



<?php foreach($chat_res as $chat){?>
<div class="container" id="anchor" style="padding-top: 2rem; margin: 0;">

  <?php 
  //user
  $uid = $chat['admin_id'];
  $user = "SELECT*FROM users WHERE id=$uid";
  $user_res = mysqli_query($db_connection,$user);
  $user_assoc = mysqli_fetch_assoc($user_res);
  ?>

  <img style="width: 60px; height: 60px;" src="./uploads/profile_pic/<?=$user_assoc['photo']?>" alt="">
  <small><?=$user_assoc['name']?></small>
  <p><strong style="font-size: 30px;"><?=$chat['chat']?></strong></p>
  <span class="time-right"><?=$chat['date']?></span>

</div>
<?php }?>
<!-- ============================== -->

<!-- ============================== -->
</div>
<!-- ================ -->





<!-- ===================== -->



<div class="cf">
<h1 class="open-button"><a href="dashboard_user.php">Dashboard</a></h1>
<!-- <h1 class="open-button" onclick="openForm()">Chat</h1> -->
<!-- <div style="display: none;" class="chat-popup" id="myForm"> -->
<div style="display: block;" class="chat-popup" id="myForm">

  <form action="chat_post.php" method="POST" class="form-container">
    <h1>Chat</h1>
    <input type="hidden" name="id" value="<?=$id?>">
    <label for="chat"><b>Message</b></label>
    <textarea  placeholder="Type message.." name="chat" required></textarea>

    <button type="submit" class="btn">Send</button>
    <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
  </form>

  <form action="uploadFile.php"  style="margin-top: 3rem;"method="POST" enctype="multipart/form-data" class="form-container">
    <h1>Upload file</h1>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="file" name="file">

    <button type="submit" name="submit" class="btn">Send</button>
    <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
  </form>
  <?php 
            if(isset($_SESSION['error'])){
            ?>

            <strong style="color:#ff3636; font-size: large;"><?=$_SESSION['error']?></strong>

            <?php }unset($_SESSION['error']); ?>
</div>

</div>
<!-- ////////////////////////////// -->

<!-- 
==================================== -->
<div class="f" id="sc">
<?php
// This will return all files in that folder
$files = scandir("uploads/file");
// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)
for ($a = 2; $a < count($files); $a++)
{?>

<!-- ========================================= -->
    <p>
        <!-- Displaying file name !-->
    
        <?php echo $files[$a]; ?>
 
        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        
        <a style="color: yellow; font-size: 30px;" href="uploads/file/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>"><br>
            Download
        </a>
      
        
    </p>
    <?php
}?>
</div>
<!-- ==================================== --> 
<!-- ===================== -->



<script>

//   function openForm() {
//   document.getElementById("myForm").style.display = "block";
// }

// function closeForm() {
//   document.getElementById("myForm").style.display = "none";
// }


var messageBody = document.querySelector('#scroller');
messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
</script>
<script>
  var element = document.getElementById("sc");
element.scrollTop = element.scrollHeight;
</script>
</body>
</html>