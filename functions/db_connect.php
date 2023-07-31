<?php
    $dbc = mysqli_connect('localhost', 'root', '', 'insta_clone');
    
    if(!$dbc) {
      die();
      exit();
    }
?>