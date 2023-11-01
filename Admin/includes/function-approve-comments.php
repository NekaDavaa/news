<?php
include '../../config/config.php';
function approvecomment(){
	global $connection;
	if(isset($_GET['a_com_id'])){
		echo $id = $_GET['a_com_id'];
		$sql = mysqli_query($connection, "UPDATE comments SET status='approved' WHERE id=$id");
		if($sql){
			header("Location: ../comments.php");
		}else{
			die(mysqli_error($connection));
		}
	}
}


approvecomment();

function unapprovecomment(){
	global $connection;
	if(isset($_GET['u_com_id'])){
		$id = $_GET['u_com_id'];
		$sql = mysqli_query($connection, "UPDATE comments SET status='unapproved' WHERE id=$id");
		if($sql){
			header("Location: ../comments.php");
		}else{
			die(mysqli_error($connection));
		}
	}
}


unapprovecomment();