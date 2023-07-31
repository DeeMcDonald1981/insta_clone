<?php
   require('inc/header.php');
   require('inc/top_bar.php');
   require_once('functions/profile_data_functions.php');
   if(!isset($_SESSION['user_id'])){
     header('location:login.php');
     exit();
   }
   ?>


<section id="profile">
  <div class="container">
    <?php if(profilePicture($dbc)): ?>
    <img src="<?php profilePicture($dbc) ?>" class="profile-picture" alt="Profile picture">
    <?php else: ?>
      <img src="img/place_holder.jpg" class="profile-picture" alt="Profile picture">
    <?php endif; ?>
    
    <div class="main-stats">
      
      <div class="ghost">
        <div class="username"><?php userName($dbc) ?></div>
        <a href="edit.php">
          <div class="edit"><div class="btn-edit">Edit Profile</div></div>
        </a>
        <a href="logout.php">
          <div class="logout"><i class="fa-solid fa-right-from-bracket fa-xl" style="color: #ccc"></i></div>
          
        </a>
      </div><!-- stat -->

      <div class="stats">

        <div class="stat">
          <div class="stat-number">4</div>
          <div class="stat-label">Posts</div>
        </div><!-- stat -->

        <div class="stat">
          <div class="stat-number">26</div>
          <div class="stat-label">Followers</div>
        </div><!-- stat -->

        <div class="stat">
          <div class="stat-number">206</div>
          <div class="stat-label">Following</div>
        </div><!-- stat -->
        
      </div><!-- stats -->

      <div class="profile-name">
        <div class="name"><?php profileName($dbc) ?></div>
        <?php if(userBio($dbc)): ?>
        <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut excepturi officiis assumenda, veritatis dolor molestias odio quam voluptatum, eum a tenetur nemo eos fugit alias!</div>
        <?php else: ?>
          <div class="desc"><p>No details Yet</p></div>
        <?php endif; ?>
        
      </div><!-- profile-name -->

    </div><!-- main-stats -->


  </div><!-- contianer -->
</section><!-- profile -->


<?php
   for($i = 0; $i < 15; $i++ ){
    ?><!-- end php -->
      <section id="posts-1">
        <div class="container">
            <img src="img/fish.jpg" class="post" alt="Post 1">
            <img src="img/pizza.jpg" class="post" alt="Post 2">
            <img src="img/rice.jpg" class="post" alt="Post 3">
          
          </div><!-- container -->
        </section><!-- posts -->
      
    <!--start php --><?php
   }
?>

<?php
   require('inc/footer.php')
?>

