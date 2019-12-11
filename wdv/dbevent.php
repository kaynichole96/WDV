<?php
$servername = "10.123.0.85:3307";
$username = "katelynn96";
$password = "Axlrose";

try {
    $conn = new PDO("mysql:host=$servername;dbname=AppDatabase", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>
