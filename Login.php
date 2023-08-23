<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST["login_username"];
    $loginPassword = $_POST["login_password"];

    // Here you would typically validate the username and password against your database.
    // For this example, we'll assume a simple username and password.
    
    $registeredUsername = "exampleuser";
    $registeredPassword = "examplepassword";

    if ($loginUsername === $registeredUsername && $loginPassword === $registeredPassword) {
        // Successful login
        session_start();
        $_SESSION["username"] = $loginUsername;
        echo "Login successful! Welcome, $loginUsername!";
    } else {
        // Invalid credentials
        echo "Login failed. Invalid username or password.";
    }
} else {
    echo "Please submit the login form.";
}
?>
