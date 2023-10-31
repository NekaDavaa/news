<?php

class User {
	private $conn;
	private $user;

	public function __construct($conn, $user) {
		$this->conn = $conn; 
		$sql = mysqli_query($conn, "select * from users where username='$user'");
		return $this->user = mysqli_fetch_array($sql);
	}

	public function getUserName() {
		$username = $this->user['username'];
		return $username;
	}

	public function getProfilePic() { 
      $profile_pic = $this->user['profile_pic'];
      return $profile_pic;
	}

	public function getRole() { 
      $profile_role = $this->user['role'];
      return $profile_role;
	}

	public function getID() { 
      $profile_id = $this->user['id'];
      return $profile_id;
	}

	public function getNumPosts(){
 		$username = $this->user['username'];
 		$sql = mysqli_query($this->conn, "SELECT * FROM news WHERE added_by='$username'");
 		$num_posts = mysqli_num_rows($sql);
 		return $num_posts;
 	 	}
}
