<?php 
ob_start();
session_start();
date_default_timezone_set("Europe/Sofia");
$connection = new mysqli("79.98.104.6","miagodco_toncho","SclGGtN1AY","miagodco_customnews") or die(mysqli_connect_error($connection));