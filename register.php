<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Here you can perform validation and database storage
    // For simplicity, we're just displaying the registered data.
    
    echo "Registration Successful!<br>";
    echo "Username: $username<br>";
    echo "Email: $email<br>";
}
?>
