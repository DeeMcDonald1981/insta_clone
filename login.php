<?php
   include('inc/header.php');
   include('inc/top_bar.php');
   require('functions/user_login_function.php');
   require('functions/user_register_function.php');
?>

<section id="login-page">
  <div class="page-bg"></div>
  <div class="container">
    <div class="login-left">
      <h2>
        LIKE. LOVE. SHARE
      </h2>
      <h3>TOGETHER</h3>
    </div><!-- login-left -->

    <div class="login-right form-register">
        <h3>CREATE YOUR ACCOUNT</h3>
        <form action="edit.php" method="post" id="form-1" class="login-form">
          <label for="">User Name</label>
          <input type="text" name="uname" id="uname">
          <label for="">First Name</label>
          <input type="text" name="fname" id="fname">
          <label for="">Last Name</label>
          <input type="text" name="lname" id="lname">
          <label for="">Email Address</label>
          <input type="email" name="mail" id="mail">
          <label for="">password</label>
          <input type="password" name="pass" id="pass">
          <input type="submit" name="submit" class="submit-reg-btn" value="Register">
        </form>
      
    </div><!-- login-right -->

    <div class="login-right form-login">
        <h3>LOGIN</h3>
        <form action="" method="post" id="form-2" class="login-form">
          <label for="">Email Address</label>
          <input type="email" name="mail-1" id="mail-log">
          <label for="">password</label>
          <input type="password" name="pass-1" id="pass-log">
          <input type="submit" name="submit" class="submit-log-btn" value="Login">
        </form>
    </div><!-- login-right -->
  </div><!-- container -->
</section>

<?php
   include('inc/footer.php');
?>