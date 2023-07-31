
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'insta_clone');

if(!$dbc) {
  die();
  exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['mail-1']) && !empty($_POST['mail-1']) && isset($_POST['pass-1']) && !empty($_POST['pass-1'])) {
    $mail_1 = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['mail-1'])));
    $pass_1 = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['pass-1'])));

    // use prepared statements to avoid SQL injection
    $stmt = $dbc->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param('s', $mail_1);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // verify password
    if($user && password_verify($pass_1, $user['pass'])) {
      // start session and set session variables
      session_start();
      $_SESSION['user_id'] = $user['user_id'];
      $_SESSION['username'] = $user['username'];
      echo json_encode(['status' => 'success']);
    } else {
      echo json_encode(['status' => 'error', 'message' => 'Username or password is incorrect']);
      echo "<h3>We have a problem</h3>";
    }
  }
}
?>
