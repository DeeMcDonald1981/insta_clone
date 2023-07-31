<?php
   $logged = true;
   $user = false;
   include('inc/header.php');
   include('inc/top_bar.php')
   ?>


<section id="profile">
  <div class="container">
    
    <img src="img/pretty_girl1.jpg" class="profile-picture" alt="Profile picture">
    
    <div class="main-stats">
      
      <div class="ghost">
        <div class="username">
          <?php
             if(!empty($_GET['user'])){
              echo $_GET['user'];
             }
          ?>
        </div>
        <?php
           if($user){
            ?><!-- end php -->
              <div class="edit"><div class="btn-edit">Edit Profile</div></div>
              
              <a href="login.php">
                <div class="logout"><i class="fa-solid fa-right-from-bracket fa-xl" style="color: #ccc"></i></div>
              </a>
            <!--start php --><?php
           }else{
            ?><!-- end php -->
                  <div class="follow"><button class="btn-follow">Follow</button></div>
            <!--start php --><?php
           }
        ?>
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
        <div class="name">Ignoratio Elenchi</div>
        <div class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut excepturi officiis assumenda, veritatis dolor molestias odio quam voluptatum, eum a tenetur nemo eos fugit alias!</div>
        
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
   include('inc/footer.php')
?>