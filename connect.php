<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "test";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
// define('DB_HOST', 'localhost');
// define('DB_USER', 'id17202077_kayd');
// define('DB_PASS', '9HfIt5g-jcUxQlMz');
// define('DB_NAME', 'id17202077_users');
?>