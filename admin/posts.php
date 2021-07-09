<?php include "includes/admin_header.php" ?>

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
                          <small>Author</small>
                      </h1>


                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>title</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>Comments</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php

                          $query ="SELECT * FROM posts";
                          $select_posts = mysqli_query($connection , $query);
                              while ($row = mysqli_fetch_assoc($select_posts)) {
                                $post_id = $row['cat_id'];
                                $post_author = $row['cat_title'];
                                $post_title = $row['cat_id'];
                                $post_date = $row['cat_id'];
                                $post_category_id = $row['cat_title'];
                                $post_status = $row['cat_id'];
                                $post_image = $row['cat_title'];
                                $post_tags = $row['cat_id'];
                                $post_comment= $row['cat_title'];
                              }






                          ?>
                            <td>1</td>
                            <td>Abed Bashir</td>
                            <td>Bash Company</td>
                            <td>25/01/2018</td>
                            <td>Company</td>
                            <td>Status</td>
                            <td>Image</td>
                            <td>bashi,bashco</td>
                            <td>4</td>
                        </tbody>
                      </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/admin_footer.php" ?>
