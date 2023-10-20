<?php
$mysqli = new mysqli("79.98.104.6","miagodco_toncho","SclGGtN1AY","miagodco_customnews") or die(mysqli_connect_error($mysqli));
$error = [];
echo "<pre>";
print_r($error);
echo "</pre>";

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