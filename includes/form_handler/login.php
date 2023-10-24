<?php
session_start();
$mysqli = new mysqli("79.98.104.6","miagodco_toncho","SclGGtN1AY","miagodco_customnews") or die(mysqli_connect_error($mysqli));

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	
	$sql = mysqli_query($mysqli, "SELECT * FROM users where email='$email'");
	$row = mysqli_fetch_array($sql);
    $db_email = $row['email'];
    $db_password = $row['password'];
    $db_username = $row['username'];
    $rehashedPwd = md5($pwd);

   
   if ($db_email === $email && $db_password === $rehashedPwd) {
          $_SESSION['admin_user'] = $db_username;
           header("Location: ../../Admin");
   }
    else {
    	$_SESSION['email'] = $email;
    	header("Location: ../../nw-admin.php?message=wrong_entries");
    }

}
