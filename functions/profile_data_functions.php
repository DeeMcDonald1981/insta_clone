<?php
 include('db_connect.php');

 function queryFunction($dbc, $q){
  if(isset($_SESSION['user_id'])){
    $query = mysqli_query($dbc,"select * from users where user_id={$_SESSION['user_id']}");
    while($row = mysqli_fetch_assoc($query)){
      echo "{$row["$q"]}";
    }
 }
}

  function userName($dbc){
    queryFunction($dbc,'username');
  }

  function profilePicture($dbc){
    queryFunction($dbc,'profile_picture');
  }
  
  function profileName($dbc){
    queryFunction($dbc,'profile_name');
  }
  function userBio($dbc){
    queryFunction($dbc, 'bio');
  }

?>