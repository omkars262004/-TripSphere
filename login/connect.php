
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";
$pass = "root";
$db = "login";

try {
    // First, create the database if it doesn't exist
    $temp_conn = new mysqli($host, $user, $pass);
    if ($temp_conn->connect_error) {
        throw new Exception("Connection failed: " . $temp_conn->connect_error);
    }
    
    // Create database if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS $db";
    if ($temp_conn->query($sql) === FALSE) {
        throw new Exception("Error creating database: " . $temp_conn->error);
    }
    $temp_conn->close();
    
    // Now connect to the database
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    // Optional: Set charset to ensure proper encoding
    $conn->set_charset("utf8mb4");
    
} catch (Exception $e) {
    // Log the error (in a production environment)
    error_log($e->getMessage());
    
    // Display user-friendly message
    die("Unable to connect to the database. Please contact administrator.");
}
    



/*$host = "localhost";
$user = "root";
$pass = "your_password";
$db = "login";

echo "<br>connect.php start";

//try {
    // Create a temporary connection to check if the database exists
    $temp_conn = new mysqli($host, $user, $pass, $db) OR die("Connection error : ".$temp_conn->connect_error);;
    
    // Check for connection error
    if ($temp_conn->connect_error) {
        die("Connection error : ".$temp_conn->connect_error);
        //throw new Exception("Connection failed: " . $temp_conn->connect_error);
    }
    
    // Create database if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS `$db`"; // Use backticks for database name
    if ($temp_conn->query($sql) === FALSE) {
        die("Error creating database : ".$temp_conn->connect_error);
        //throw new Exception("Error creating database: " . $temp_conn->error);
    }
    $temp_conn->close();
    
    // Now connect to the database
    $conn = new mysqli($host, $user, $pass, $db);
    
    // Check for connection error
    if ($conn->connect_error) {

        die("Connection error : ".$conn->connect_error);
        //throw new Exception("Connection failed: " . $conn->connect_error);
        // echo"hello";
  //  }
    
    // Optional: Set charset to ensure proper encoding
    $conn->set_charset("utf8mb4");

} 
/*
catch (Exception $e) {
    // Log the error (in a production environment)
    error_log($e->getMessage());
    
    // Display user-friendly message
    die("Unable to connect to the database. Please contact administrator.");
} 


echo "<br>connect.php end"; */


?>