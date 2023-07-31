<?php
$logged = isset($_SESSION['user_id']);
require_once('functions/profile_data_functions.php');

?>

<section id="top-bar">
  <div class="container">
    <div class="sec-left">
      <span>PIX SPIN</span>
      <img alt="" src="img/pic_spin.png">
    </div>
    <?php if($logged): ?>
      <div class="sec-center">
        <form action="" class="" method="">
          <input placeholder="Search" type="search">
        </form>
      </div>
      <div class="sec-right">
        <a href="feed.php">
          <div class="font-1">
            <i class="fa-2xl fa-solid fa-compass" style="color:#ccc"></i>
          </div>
        </a>
        <a href="likes.php">
          <div class="font-2">
            <i class="fa-2xl fa-heart fa-light" style="color:red"></i>
          </div>
        </a>
        <a href="home_page.php">
          <div class="font-3">
            <div class="profile">
              <?php if(profilePicture($dbc)): ?>
              <img alt="" src="<?php profilePicture($dbc) ?>">
              <?php else: ?>
               <img src="img/place_holder.jpg" alt="">   
              <?php endif; ?>
            </div>
          </div>
        </a>
      </div>
    <?php else: ?>
      <div class="sec-right">
        <a href="#">
          <div class="login log-btn">
            <i class="fa-2xl fa-solid fa-right-from-bracket"></i> Login
          </div>
        </a>
        <a href="#">
          <div class="login reg-btn">
            <i class="fa-2xl fa-solid fa-sharp fa-user-plus"></i> Register
          </div>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
