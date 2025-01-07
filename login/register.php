<?php

/*include 'connect.php';

if(isset($_POST['Register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From users where email='$email'";
    $result = mysqli_query($conn, $checkEmail);

    if($result->num_rows>0)
    {
        echo "Email already exists";
    }
    else
    {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email','$password')";

        if($conn->query($sql)==TRUE)
        {
            header("Location: login.php");
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

}

if(isset($_POST['Login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows>0)
    {
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: home.php");
        exit();
    }
    else
    {
        echo "Invalid email or password";

    }
} 
    

    
   /* // Start session at the beginning
    session_start();

    // Include database connection
    include 'connect.php';

    echo "<br>registration.php start";

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    
    
    // Function to sanitize input data
    function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // Function to validate email
    function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    // Function to validate password strength
    function validatePassword($password) {
        return strlen($password) >= 8 && 
               preg_match('/[A-Z]/', $password) && 
               preg_match('/[a-z]/', $password) && 
               preg_match('/[0-9]/', $password);
    }
    
    // Registration Handler
    if (isset($_POST['Register'])) {
        try {
            // Sanitize inputs
            $username = sanitizeInput($_POST['username']);
            $email = sanitizeInput($_POST['email']);
            $password = $_POST['password'];
    
            // Validate inputs
            $errors = [];
    
            if (empty($username)) {
                $errors[] = "Username is required";
            } elseif (strlen($username) < 3) {
                $errors[] = "Username must be at least 3 characters";
            }
    
            if (empty($email)) {
                $errors[] = "Email is required";
            } elseif (!validateEmail($email)) {
                $errors[] = "Invalid email format";
            }
    
            if (empty($password)) {
                $errors[] = "Password is required";
            } elseif (!validatePassword($password)) {
                $errors[] = "Password must be at least 8 characters and contain uppercase, lowercase, and numbers";
            }
    
            if (empty($errors)) {
                // Check if email exists using prepared statement
                $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
    
                if ($result->num_rows > 0) {
                    throw new Exception("Email already exists");
                }
    
                // Hash password using modern method
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
                // Insert new user using prepared statement
                $stmt = $conn->prepare("INSERT INTO users (username, email, password, created_at) VALUES (?, ?, ?, NOW())");
                $stmt->bind_param("sss", $username, $email, $passwordHash);
    
                if ($stmt->execute()) {
                    $_SESSION['registration_success'] = true;
                    header("Location: login.php");
                    exit();
                } else {
                    throw new Exception("Registration failed");
                }
            } else {
                throw new Exception(implode("<br>", $errors));
            }
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    
    // Login Handler
    if (isset($_POST['Login'])) {
        try {
            // Sanitize inputs
            $email = sanitizeInput($_POST['email']);
            $password = $_POST['password'];
    
            // Validate inputs
            if (empty($email) || empty($password)) {
                throw new Exception("Email and password are required");
            }
    
            if (!validateEmail($email)) {
                throw new Exception("Invalid email format");
            }
    
            // Get user using prepared statement
            $stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();
    
                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Set session variables
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['last_activity'] = time();
    
                    // Log successful login
                    $stmt = $conn->prepare("INSERT INTO login_logs (user_id, ip_address) VALUES (?, ?)");
                    $stmt->bind_param("is", $user['id'], $_SERVER['REMOTE_ADDR']);
                    $stmt->execute();
    
                    // Redirect to home
                    header("Location: home.php");
                    exit();
                } else {
                    throw new Exception("Invalid email or password");
                }
            } else {
                throw new Exception("Invalid email or password");
            }
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    
    // Close database connection
    $conn->close();

    echo "<br>registration.php end"; */
    

// new 

/*include 'connect.php';

// Registration Handler
if(isset($_POST['Register'])) {
    // Sanitize inputs
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = $_POST['password'];
    
    // Use PASSWORD_HASH instead of MD5
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Check if email exists using prepared statement
    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();
    
    if($result->num_rows > 0) {
        echo "Email already exists";
    } else {
        // Insert new user using prepared statement
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);
        
        if($stmt->execute()) {
            header("Location: login.php");
            exit(); // Always exit after redirect
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $checkEmail->close();
}

// Login Handler
if(isset($_POST['Login'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = $_POST['password'];
    
    // Debug Point 1
    echo "Attempting login for email: " . $email . "<br>";
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Debug Point 2
    echo "Found " . $result->num_rows . " matching users<br>";
    
    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Debug Point 3
        echo "Stored hash: " . $user['password'] . "<br>";
        
        if(password_verify($password, $user['password'])) {
            // Debug Point 4
            echo "Password verified successfully<br>";
            
            session_start();
            $_SESSION['email'] = $user['email'];
            
            // Debug Point 5
            echo "Session started, email stored: " . $_SESSION['email'] . "<br>";
            
            header("Location: home.php");
            exit();
        } else {
            echo "Password verification failed<br>";
            echo "Invalid email or password";
        }
    } else {
        echo "No user found with this email<br>";
        echo "Invalid email or password";
    }
    $stmt->close();
}*/


// new 2


include 'connect.php';

// Registration Handler
if(isset($_POST['Register'])) {
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    
    // Check if email exists
    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();
    
    if($result->num_rows > 0) {
        echo "Email already exists";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        
        if($stmt->execute()) {
            echo "execute";
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $checkEmail->close();
}

// Login Handler
/*if(isset($_POST['Login'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    
    // Direct password comparison
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['email'] = $user['email'];
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid email or password";
    }
    $stmt->close();


}*/


if (isset($_POST['Login'])) 
{   
    session_start();
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = trim($_POST['password']);
    
    $stmt = $conn->prepare("SELECT email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        //changing password_verify($password, $user['password']) to $password === $user['password']
        if ($password === $user['password'])
        {
           
            $_SESSION['email'] = $user['email'];
            header("Location: ../test.php");
            exit();
        } 
        else 
        {
            echo "Invalid email or password.";
            echo "$email $password";
        }
    }
    
    $stmt->close();
}



?>

