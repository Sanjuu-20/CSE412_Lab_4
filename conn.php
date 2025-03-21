<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userdb";

$conn = new mysqli($servername, $username, $password, $database);
if($conn -> connect_error){
    die("Connect Failed : " . $conn -> connect_error);
}
?>