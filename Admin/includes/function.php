<?php 
//This pass connection and sessionstart()
include '../../config/config.php';
//Function that update user data
if (isset($_POST['update_data'])) {
	function updateUser() {
		global $connection;
		$u_user_id = $_POST['user_id'];
		$u_firstname = $_POST['u_firstname'];
	    $u_lastname = $_POST['u_lastname'];
		$u_email = $_POST['u_email'];
		$u_password = md5($_POST['u_password']);
	    $u_username = $u_firstname . " " . $u_lastname;
        $sql = mysqli_query($connection, "UPDATE users SET username='$u_username', firstname='$u_firstname', lastname='$u_lastname', email='$u_email', password='$u_password' WHERE id='$u_user_id'");
        $_SESSION['admin_user'] = $u_username;
        header("Location: ../profile.php?user_id=$u_user_id");
	}
}
updateUser();




