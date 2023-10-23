<?php
$mysqli = new mysqli("79.98.104.6","miagodco_toncho","SclGGtN1AY","miagodco_customnews") or die(mysqli_connect_error($mysqli));
$error = [];


if (isset($_POST['register'])) {
   $first_name = clean($_POST['first_name']);
   $last_name = clean($_POST['last_name']);
   $email = clean($_POST['email']);
   $pwd = $_POST['pwd'];

   if (empty($first_name) && empty($last_name)) {
   echo "asd";
   array_push($error, "first name and last name are required");
   header("Location: ../../nw-admin.php?message=first_and_last_name_are_rquired");
   } 
   elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($error, "Email is invalid");
      header("Location: ../../nw-admin.php?message=email_is_rquired");
   }
   else {
      if (empty($pwd)) {
         array_push($error, "Password is required");
         header("Location: ../../nw-admin.php?message=password_is_rquired");
      }
      elseif (strlen($pwd) <=5) {
            array_push($error, "Password is too short");
         header("Location: ../../nw-admin.php?message=password_is_too_short");
      }
   }
   
}
function clean($data) {
    global $mysqli;
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    $data = trim($data);
    $data = mysqli_real_escape_string($mysqli, $data);
    return $data;
}
?>