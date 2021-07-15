
<?php

if (isset($_POST['create_user'])) {
  $user_firstname       = $_POST['user_firstname'];
  $user_lastname        = $_POST['user_lastname'];
  $user_role            = $_POST['user_role'];

  $post_image           = $_FILES['user_image']['name'];
  $post_image_temp      = $_FILES['user_image']['tmp_name'];


  $user_username         = $_POST['user_username'];
  $user_email            = $_POST['user_email'];
  $user_password         = $_POST['user_password'];
  $post_date            = date('d-m-y');

  move_uploaded_file($post_image_temp, "../images/$post_image" );

  $query = "INSERT INTO users(user_firstname, user_lastname, user_role , user_image , user_username,user_email,user_password, user_date) ";

  $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$post_image}','{$user_username}','{$user_email}','{$user_password}',now() ) ";

  $create_user_query = mysqli_query($connection, $query);

  confirmQuery($create_user_query);

  $the_post_id = mysqli_insert_id($connection);

  echo "<p class='bg-success'>User Created</p>";


}






 ?>
 <form action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
         <label for="title">First Name</label>
          <input type="text" class="form-control" name="user_firstname">
      </div>
      <div class="form-group">
         <label for="title">Last Name</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>


      <div class="form-group">
        <label for="user_role">User Role</label><br>
       <select class="" name="user_role">
         <option value="subscriber">Select Options</option>
         <option value="admin">Admin</option>
         <option value="subscriber">Subscriber</option>
       </select>
      </div>


        <div class="form-group">
         <label for="title">Username</label>
          <input type="text" class="form-control" name="user_username">
        </div>
        <div class="form-group">
         <label for="title">Email</label>
          <input type="email" class="form-control" name="user_email">
        </div>
        <div class="form-group">
         <label for="title">Password</label>
          <input type="password" class="form-control" name="user_password">
        </div>

    <div class="form-group">
         <label for="user_image">User Image</label>
          <input type="file"  name="user_image">
      </div>



       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
      </div>


</form>
