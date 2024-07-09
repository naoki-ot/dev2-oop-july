<?php
// require 'Users.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $user = new User();
//     if ($user->login($username, $password)) {
//         header('Location: dashboard.php');
//     } else {
//         echo "login error";
//     }
// }

include "../classes/Users.php";

$user = new User;

$user->login($_POST);

?>

