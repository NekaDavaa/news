<?php include_once 'config/config.php'; ?>
<?php include 'class/User.php'; ?>
<?php include 'Admin/includes/function-like.php'; ?>
<?php 
$user = "user";
if (isset($_SESSION['admin_user']) ) {
    $user = $_SESSION['admin_user']; 
}
?>
<?php include 'class/Category.php'; 
$cat_obj = new Category($connection, $user);
?>
<?php include 'class/Post.php'; 
$post_obj = new Post($connection, $user);
?>
<?php include 'class/Comment.php'; 
$comment_obj = new Comment($connection);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The News Paper - News &amp; Lifestyle Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
	<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
                                <?php
                                      if (isset($_SESSION['subscriber'])){
                                        $sub = $_SESSION['subscriber'];
                                       echo '<div class="login d-flex">'.
                                         '<a>Welcome ' . $sub . '</a>'.
                                         '<a href="logout.php?logout">Logout</a>'.
                                         '</div>';
                                      }
                                      elseif (isset($_SESSION['admin_user'])){
                                       echo '<div class="login d-flex">
                                    <a href="admin">Back to Admin</a>
                                </div>';
                                      
                                      }

                                      else {
                                        echo '<div class="login d-flex">
                                    <a href="slogin.php">Login</a>
                                    <a href="sregister.php">Register</a>
                                </div>';
                                      }
                                ?>
                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="search.php" method="get">
                                        <input type="text" name="s" class="form-control" placeholder="  Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>