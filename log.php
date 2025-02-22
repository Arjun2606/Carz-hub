<?php
// Include the database connection file
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Parse form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM login WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // Email already exists, prepare alert message
        $alertMessage = "Email already registered";
        // Pass the alert message to JavaScript to display it
        echo "<script>
                alert('$alertMessage');
                window.location.href = 'login.php'; // Redirect back to the registration page
              </script>";
        // Stop further execution of PHP code
        exit();
    } else {
        // Email doesn't exist, proceed with inserting the new record
        // Construct the SQL query to insert user data into the database
        $sql = "INSERT INTO login (name, email, password) VALUES ('$name', '$email', '$password')";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            // Success, prepare JavaScript code to redirect to login page
            $redirectMessage = "Registration successful.";
            echo "<script>
                    alert('$redirectMessage');
                    window.location.href = 'home.php'; // Redirect to login page
                  </script>";
            // Stop further execution of PHP code
            exit();
        } else {
            // Error in SQL query, display error message
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>
