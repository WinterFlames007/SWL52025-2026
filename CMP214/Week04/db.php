<?php
$servername = "localhost";
$username = "swl5db";
$password = "8uekc55p2vlvPN";
$dbname = "MishaDB";
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>