<?php
$servername = "localhost";
$username   = "saujanae_rumahkitauser";
$password   = "[mxgM+Fc_5?1";
$dbname     = "saujanae_rumahkita";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>