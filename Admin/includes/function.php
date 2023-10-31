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


?>

<?php

function clean($data){
	global $connection;
	$data = htmlspecialchars($data);
	$data = stripslashes($data);
	$data = trim($data);
	$data = mysqli_real_escape_string($connection, $data);
	return $data;
}

function addUsers(){
	global $connection;
	if(isset($_POST['register'])){
		//Do this
		$fname = clean($_POST['fname']);
		$lname = clean($_POST['lname']);
		$email = clean($_POST['email']);
		$pwd = $_POST['pwd'];
		$role = $_POST['role']; 

		if(empty($fname) && empty($lname)){
			header("Location: ../addusers.php?message=fields_are_required");
		}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../addusers.php?message=email_is_invalid");
		} elseif(empty($email)){
			header("Location: ../addusers.php?message=fields_are_required");
		} elseif(empty($pwd)){
			header("Location: ../addusers.php?message=fields_are_required");
		} elseif (strlen($pwd) < 6) {
			header("Location: ../addusers.php?message=password_is_short");
		} else{
			$hashPwd = md5($pwd);
			$ProfilePic = '../assets/images/profile_pics/default/head_1.png';
			$username = $fname . ' ' .$lname;
			$query = mysqli_query($connection, "INSERT INTO users VALUES('','$username','$fname','$lname','$email','$hashPwd','$ProfilePic','$role','0')");
			if($query){
				header("Location: ../addusers.php");
			} else{
				die("Failed " . mysqli_error($connection));
			}
		}
	}else{
		header("Location: ../addusers.php");
	}
}

addUsers();





