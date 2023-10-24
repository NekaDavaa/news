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
}
