<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$dbHost = "localhost";
$dbName = "Journal_Impacting_Science";
$dbUser = "root";
$dbPassword = "";
try {
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Echo "Successfully connected with myDB database";  
} catch (Exception $e) {
        echo "Connection failed" . $e->getMessage();
}
if ($conn) {
        // echo"connection ok";
} else {
        echo "not ok";
}
?>