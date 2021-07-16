<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>

<?php
if (isset($_POST['submit'])) {
  $user_firstname    = $_POST['user_firstname'];
  $user_lastname     = $_POST['user_lastname'];
  $user_username     = $_POST['user_username'];
  $user_email        = $_POST['user_email'];
  $user_password     = $_POST['user_password'];

  if (!empty($user_firstname) && !empty($user_lastname) && !empty($user_username) && !empty($user_email) && !empty($user_password)) {
    $user_firstname    = mysqli_real_escape_string($connection , $user_firstname);
    $user_lastname     = mysqli_real_escape_string($connection , $user_lastname);
    $user_username     = mysqli_real_escape_string($connection , $user_username);
    $user_email        = mysqli_real_escape_string($connection , $user_email);
    $user_password     = mysqli_real_escape_string($connection , $user_password);

    $query ="SELECT randSalt FROM users";
    $select_randSalt_query = mysqli_query($connection,$query);

    if (!$select_randSalt_query) {
      die("query failed" . mysqli_error($connection));
    }

  
    $user_password = crypt($user_password, '$2a$07$usesomesillystringforsalt$');

    $query = "INSERT INTO users(user_username , user_password , user_firstname , user_lastname , user_email , user_image , user_date ,  user_role) ";
    $query .="VALUES ('{$user_username}' , '{$user_password}' , '{$user_firstname}' , '{$user_lastname}' , '{$user_email}' ,'' , now() , 'subscriber')";
    $register_user_query = mysqli_query($connection , $query);
      if (!$register_user_query) {
        die("query failed!" . mysqli_error($connection));
      }

      $message = "Registration Submitted";

  }else {
    $message = "Fields Cannt Be Empty";
  }

}else {
  $message = "";
}

?>




    <!-- Navigation -->

    <?php  include "includes/navigation.php"; ?>


    <!-- Page Content -->
    <div class="container">

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                      <h6 class="text-center"><?php echo $message; ?></h6>
                      <div class="form-group">
                          <label for="username" class="sr-only">First Name</label>
                          <input type="text" name="user_firstname" id="user_firstname" class="form-control" placeholder="First Name">
                      </div>
                      <div class="form-group">
                          <label for="username" class="sr-only">Last Name</label>
                          <input type="text" name="user_lastname" id="user_lastname" class="form-control" placeholder="Last Name">
                      </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" name="user_username" id="user_username" class="form-control" placeholder="Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Email">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="user_password" id="key" class="form-control" placeholder="Password">
                        </div>

                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>

                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
