<?php
session_start();
$mysqli = new mysqli("79.98.104.6","miagodco_toncho","SclGGtN1AY","miagodco_customnews") or die(mysqli_connect_error($mysqli));

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	
}
