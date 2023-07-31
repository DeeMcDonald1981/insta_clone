<?php

    $dbc = mysqli_connect('localhost', 'root', '', 'insta_clone');
    
    if(!$dbc) {
      die();
      exit();
    }

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['lname']) && !empty($_POST['mail']) && !empty($_POST['pass'])) {
    $uname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['uname'])));
    $fname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['fname'])));
    $lname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['lname'])));
    $mail = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['mail'])));
    $pass = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['pass'])));
    $profile_name = "$fname $lname";
    echo "<h3>$uname</h3>";
    // hash password
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // use prepared statements to avoid SQL injection
    $stmt = $dbc->prepare("INSERT INTO users (username, profile_name, email, pass) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $uname, $profile_name, $mail, $hashed_pass);
    $stmt->execute();

    if($stmt->affected_rows == 1) {
      echo "1";
    } else {
      echo "<h3>0- This is an error from affected_rows </h3>";
    }
  } else {
    echo "<h3>0 - This is an error from request_method = post </h3>";

  }
}else{
  
}
?>