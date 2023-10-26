<?php include 'pages/header.php'; ?>
  <!-- container section start -->
  <section id="container" class="">

    <!--header end-->
<?php include 'pages/top_nav.php'; ?>
    <!--sidebar start-->
<?php include 'pages/side_bar.php'; ?>
    <!--sidebar end-->
    <?php 
     if (isset($_GET['user_id'])){
      $user_id = $_GET['user_id'];
      $query = mysqli_query($connection, "SELECT * FROM users WHERE id=$user_id");
     while ($row = mysqli_fetch_assoc($query)){
     $id = $row['id'];
     $username = $row['username'];
     $firstname = $row['firstname'];
     $lastname = $row['lastname'];
     $email = $row['email'];
     $role = $row['role'];
     $num_posts = $row['num_posts'];
     } 
     
     
     if(isset($_POST['upload']) && isset($_FILES['profile_pic'])) {
       $dir = "../assets/images/profile_pics/default/";
       $target = $dir . basename($_FILES['profile_pic']['name']);
       $type = $_FILES['profile_pic']['type'];
       $size = $_FILES['profile_pic']['size'];
       if(empty($_FILES['profile_pic']['name'])) {
          header("Location: profile.php?user_id=$id&message=file_empty");
       }
      elseif ($size > 2000000) {
    header("Location: profile.php?user_id=$id&message=file_too_large");
}
       else{
         move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target);
         mysqli_query($connection, "UPDATE users SET profile_pic='$target' WHERE id=$id");
         header("Location: profile.php?user_id=$id&message=profile_updated");
       }
     }
     }
    ?>
 
    <!--main content start-->
    <style>
       .debug {
        position: relative;
        z-index: 999999;
        background: white;
        padding: 20px;
       }
    </style>

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?php echo $user_obj->getUserName(); ?></h4>
                  <div class="follow-ava">
                    <img src="<?php echo $user_obj->getProfilePic(); ?>" alt="">
                  </div>
                  <form method="POST" action="" enctype="multipart/form-data">
                    <input type="file" name="profile_pic"/>
                    <input type="submit" name="upload" class="btn btn-primary" value="Upload" />
                  </form>
                  <br /><br />
                  <h6><?php echo $user_obj->getRole(); ?></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  
                  <!-- profile -->
                  <div id="profile" class="tab-pane active">
                    <section class="panel">
                      <div class="bio-graph-heading">
                        Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                      </div>
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>First Name </span>: <?php echo $firstname; ?></p>
                            <p><span>Last Name </span>: <?php echo $lastname; ?></p>
                            <p><span>Email </span>: <?php echo $email; ?></p>
                            <p><span>Role </span>: <?php echo $role; ?></p>
                            <p><span>Number of Posts </span>: <?php echo $num_posts; ?></p>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <?php 
                    $username = $user_obj->getUserName();
                    if ($user === $username) :
                    ?>
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form" method="post" action="includes/function.php">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                              <input type="text" name="u_firstname" class="form-control" id="f-name" placeholder=" " value="<?php echo $firstname; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                              <input type="text" name="u_lastname" class="form-control" id="l-name" placeholder=" " value="<?php echo $lastname; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" name="u_email" class="form-control" id="email" placeholder=" " value="<?php echo $email; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                              <input type="password" name="u_password" class="form-control" id="email" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <input type="hidden" name="user_id" value="<?php echo $user_obj->getID();?>" class="btn btn-primary" />
                              <input type="submit" name="update_data" value="Save" class="btn btn-primary" />
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  <?php endif;?>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
