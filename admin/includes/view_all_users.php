
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Role</th>
                            <th>Joined In</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php

                          $query ="SELECT * FROM users";
                          $select_users = mysqli_query($connection , $query);
                              while ($row = mysqli_fetch_assoc($select_users)) {
                                $user_id = $row['user_id'];
                                $user_username = $row['user_username'];
                                $user_password = $row['user_password'];
                                $user_firstname = $row['user_firstname'];
                                $user_lastname = $row['user_lastname'];
                                $user_email = $row['user_email'];
                                $user_image = $row['user_image'];
                                $user_role = $row['user_role'];
                                $user_date = $row['user_date'];



                                echo "<tr>";
                                echo "<td>$user_id</td>";
                                echo "<td>$user_username</td>";
                                echo "<td>$user_firstname</td>";

                              //   $query ="SELECT * FROM comments WHERE cat_id = $post_category_id";
                              //   $select_categories_id = mysqli_query($connection , $query);
                              //       while ($row = mysqli_fetch_assoc($select_categories_id)) {
                              //         $cat_id = $row['cat_id'];
                              //         $cat_title = $row['cat_title'];
                              //
                              //   echo "<td>{$cat_title}</td>";
                              // }


                                echo "<td>$user_lastname</td>";
                                echo "<td>$user_email</td>";

                                // $query = "SELECT * FROM posts WHERE post_id = $user_post_id";
                                // $select_post_id_query = mysqli_query($connection,$query);
                                // while ($row = mysqli_fetch_assoc($select_post_id_query)) {
                                //   $post_id = $row['post_id'];
                                //   $post_title = $row['post_title'];
                                //
                                //   echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
                                //
                                //
                                // }


                                echo "<td><img class='img-responsive'  src='../images/$user_image' alt ='image' width='100'></td>";
                                echo "<td>$user_role</td>";
                                echo "<td>$user_date</td>";

                                echo "<td><a href ='users.php?change_to_admin={$user_id}'>admin</a></td>";
                                echo "<td><a href ='users.php?change_to_subscriber={$user_id}'>subscriber</a></td>";
                                echo "<td><a href ='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
                                echo "<td><a href ='users.php?delete={$user_id}'>Delete</a></td>";
                                echo "</tr>";

                              }
                              ?>

                        </tbody>
                      </table>


                <?php

                if(isset($_GET['change_to_admin'])){

                    $the_user_id = $_GET['change_to_admin'];

                    $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id   ";
                    $change_admin_query = mysqli_query($connection, $query);
                    header("Location: users.php");


                }


                if(isset($_GET['change_to_subscriber'])){

                    $the_user_id =$_GET['change_to_subscriber'];

                    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id ";
                    $change_subscriber_query = mysqli_query($connection, $query);
                    header("Location: users.php");


                }



                if(isset($_GET['delete'])){

                    $the_users_id = $_GET['delete'];

                    $query = "DELETE FROM users WHERE user_id = {$the_users_id} ";
                    $delete_user_query = mysqli_query($connection, $query);
                    header("Location: users.php");

                }

                 ?>