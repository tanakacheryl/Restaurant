<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "bistro";

//make connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

//check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>