<?php include "db.php"; ?>

<?php
if (isset($_POST['user_login'])) {
  $user_username      = $_POST['user_username'];
  $user_password      = $_POST['user_password'];

  $user_username      =  mysqli_real_escape_string($connection,$user_username);
  $user_password      =  mysqli_real_escape_string($connection,$user_password);

  $query = "SELECT * FROM users WHERE user_username = '{$user_username}' ";
  $select_user_query = mysqli_query($connection,$query);
  if (!$select_user_query) {
    die("query failed" . mysqli_error($connection));
  }





}



?>
