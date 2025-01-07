<?php

/*session_destroy();
header("location: home.php");
*/

// Start the session if not already started
/*if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

try {
    // Clear all session variables
    $_SESSION = array();

    // Destroy the session cookie
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }

    // Destroy the session
    session_destroy();

    // Clear any other cookies set by the application
    foreach ($_COOKIE as $cookieName => $cookieValue) {
        setcookie($cookieName, '', time() - 3600, '/');
    }

    // Optional: Log the logout event in database
    require_once 'connect.php'; // Using the connection from previous code
    
    if (isset($conn) && $conn instanceof mysqli) {
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
        $logout_time = date('Y-m-d H:i:s');
        $ip_address = $_SERVER['REMOTE_ADDR'];
        
        $stmt = $conn->prepare("INSERT INTO logout_logs (user_id, logout_time, ip_address) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $user_id, $logout_time, $ip_address);
        $stmt->execute();
        $stmt->close();
        
        $conn->close();
    }

    // Prevent caching of sensitive pages
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    // Redirect to home page
    header("Location: home.php");
    exit(); // Ensure script stops here

} catch (Exception $e) {
    error_log("Logout error: " . $e->getMessage());
    header("Location: error.php");
    exit();
}

?> */