<?php include "includes/admin_header.php" ?>

<?php
  if (isset($_SESSION['user_username'])) {
     $username = $_SESSION['user_username'];

     $query ="SELECT * FROM users WHERE user_username = '{$username}' ";
     $select_user_profile_query = mysqli_query($connection,$query);

     while ($row = mysqli_fetch_assoc($select_user_profile_query)) {
       $user_id             = $row['user_id'];
       $user_username       = $row['user_username'];
       $user_password       = $row['user_password'];
       $user_firstname      = $row['user_firstname'];
       $user_lastname       = $row['user_lastname'];
       $user_email          = $row['user_email'];
       $user_image          = $row['user_image'];
       $user_role           = $row['user_role'];
       $user_date           = $row['user_date'];
     }
  }
?>

<?php
if (isset($_POST['edit_profile'])) {
  $user_firstname       = $_POST['user_firstname'];
  $user_lastname        = $_POST['user_lastname'];
  $user_role            = $_POST['user_role'];

  $user_image           = $_FILES['user_image']['name'];
  $user_image_temp      = $_FILES['user_image']['tmp_name'];


  $user_username         = $_POST['user_username'];
  $user_email            = $_POST['user_email'];
  $user_password         = $_POST['user_password'];
  $user_date            = date('d-m-y');

  move_uploaded_file($user_image_temp, "../images/$user_image" );

  $query = "UPDATE users SET ";
  $query .="user_firstname  = '{$user_firstname}', ";
  $query .="user_lastname = '{$user_lastname}', ";
  $query .="user_role = '{$user_role}', ";
  $query .="user_image = '{$user_image}', ";
  $query .="user_username   = '{$user_username}', ";
  $query .="user_email= '{$user_email}', ";
  $query .="user_password  = '{$user_password}', ";
  $query .="user_date  = now() ";
  $query .= "WHERE user_username = '{$username}' ";

$update_profile = mysqli_query($connection,$query);

confirmQuery($update_profile);

echo "<p class='bg-success'>User Updated</p>";



}





?>



    <div id="wrapper">

        <!-- Navigation -->
      <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">
                          Welcome To Admin Control Page
                          <small><?php echo $_SESSION['user_username']; ?></small>
                      </h1>



                      <form action="" method="post" enctype="multipart/form-data">

                           <div class="form-group">
                              <label for="title">First Name</label>
                               <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
                           </div>
                           <div class="form-group">
                              <label for="title">Last Name</label>
                               <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
                           </div>


                           <div class="form-group">
                             <label for="user_role">User Role</label><br>
                            <select class="" name="user_role">
                              <option value="subscriber"><?php echo $user_role ?></option>

                              <?php
                              if ($user_role =='admin') {
                                echo "<option value='subscriber'>subscriber</option>";
                              }else {
                                echo "<option value='admin'>admin</option>";
                             }
                             ?>

                            </select>
                           </div>


                             <div class="form-group">
                              <label for="title">Username</label>
                               <input type="text" value="<?php echo $user_username; ?>" class="form-control" name="user_username">
                             </div>
                             <div class="form-group">
                              <label for="title">Email</label>
                               <input type="email"  value="<?php echo $user_email; ?>"class="form-control" name="user_email">
                             </div>
                             <div class="form-group">
                              <label for="title">Password</label>
                               <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
                             </div>

                         <div class="form-group">
                              <label for="user_image">User Image</label>
                               <input type="file" value="<?php echo $user_image; ?>"  name="user_image">
                           </div>



                            <div class="form-group">
                               <input class="btn btn-primary" type="submit" name="edit_profile" value="Update Profile">
                           </div>
                      </form>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/admin_footer.php" ?>
