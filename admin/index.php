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
                            <small><?php echo $_SESSION['user_username']; ?></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->





                         <!-- /.row -->

         <div class="row">
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-primary">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-file-text fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">

                               <?php
                               $query ="SELECT * FROM posts";
                               $get_posts_number_query = mysqli_query($connection,$query);
                               $post_counts = mysqli_num_rows($get_posts_number_query);

                               echo "<div class='huge'>{$post_counts}</div>";

                              ?>

                                 <div>Posts</div>
                             </div>
                         </div>
                     </div>
                     <a href="posts.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-green">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-comments fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">

                               <?php
                               $query ="SELECT * FROM comments";
                               $get_comments_number_query = mysqli_query($connection,$query);
                               $comment_counts = mysqli_num_rows($get_comments_number_query);

                               echo "<div class='huge'>{$comment_counts}</div>";

                              ?>
                               <div>Comments</div>
                             </div>
                         </div>
                     </div>
                     <a href="comments.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-yellow">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-user fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">
                               <?php
                               $query ="SELECT * FROM users";
                               $get_users_number_query = mysqli_query($connection,$query);
                               $users_counts = mysqli_num_rows($get_users_number_query);

                               echo "<div class='huge'>{$users_counts}</div>";

                              ?>
                                 <div> Users</div>
                             </div>
                         </div>
                     </div>
                     <a href="users.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="panel panel-red">
                     <div class="panel-heading">
                         <div class="row">
                             <div class="col-xs-3">
                                 <i class="fa fa-list fa-5x"></i>
                             </div>
                             <div class="col-xs-9 text-right">
                               <?php
                               $query ="SELECT * FROM categories";
                               $get_categories_number_query = mysqli_query($connection,$query);
                               $categories_counts = mysqli_num_rows($get_categories_number_query);

                               echo "<div class='huge'>{$categories_counts}</div>";

                              ?>
                              <div>Categories</div>
                             </div>
                         </div>
                     </div>
                     <a href="categories.php">
                         <div class="panel-footer">
                             <span class="pull-left">View Details</span>
                             <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                             <div class="clearfix"></div>
                         </div>
                     </a>
                 </div>
             </div>
         </div>


         <div class="row">
           <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['DATA', 'COUNT'],


          <?php
           $element_text =['Active Posts' , 'Categories' , 'Users' , 'Comments'];
           $element_count =[$post_counts , $categories_counts , $users_counts , $comment_counts];

           for ($i=0 ; $i < 4 ; $i++) {
             echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
           }




          ?>
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

      <div id="columnchart_material" style="width: 'auto'; height: 700px;"></div>

           </div>


]

      <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/admin_footer.php" ?>
