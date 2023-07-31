<?php
   require('inc/header.php');
   require('inc/top_bar.php');
   ?>

<section id="feed">
  <div class="container">
    <div class="feed-intro">
    <a href="profile.php?user=peanut_butter_beauty_1912">
          <div class="image"><img src="img/pretty_girl1.jpg" alt=""></div>
        </a>
        <div class="intro-box">

          <a href="profile.php?user=peanut_butter_beauty_1912">
            <div class="name">peanut_butter_beauty_1912</div>
          </a>
          <div class="follow"><button class="btn-follow">Follow</button></div>
        </div>
    </div><!-- feed-inro -->
    <div class="feed-preview">
    <section id="posts-1">
      <div class="container">
          <img src="img/fish.jpg" class="post" alt="Post 1">
          <img src="img/pizza.jpg" class="post" alt="Post 2">
          <img src="img/rice.jpg" class="post" alt="Post 3">
        
        </div><!-- container -->
      </section><!-- posts -->
    </div>
  </div><!-- container -->
</section>

<?php
   include('inc/footer.php')
?>