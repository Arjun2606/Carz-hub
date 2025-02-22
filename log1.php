<?php
// Database connection
include 'config.php'; // Assuming you have a file named config.php for database connection

session_start();

// Check if the login form is submitted
if (isset($_POST['login'])) {
    // Retrieve user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query to check if the email and password match
    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if (!$result) {
        // Query execution failed
        echo "Query execution failed: " . $conn->error;
    } else {
        // Check if a matching record is found
        if ($result->num_rows == 1) {
            // Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            // JavaScript alert message
            echo "<script>alert('Login successful!');</script>";
            // Redirect to home.php
            echo "<script>window.location.href = 'home.php';</script>";
            exit(); // Ensure that no further code is executed after the redirect
        } else {
            // If no matching record is found, display an error message
            echo "<script>alert('Invalid email or password. Please try again!');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }
    }

    // Close the database connection
    $conn->close();
}
?>
