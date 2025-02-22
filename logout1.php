<?php
// Include the database connection file
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Parse form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['review'];
    $ratings = $_POST['ratings'];

    // Check if any of the form fields are empty
    if (empty($name) || empty($email) || empty($review) || empty($ratings)) 
    {
        // Prepare alert message for the user
        $alertMessage = "Please fill out all fields.";
        // Pass the alert message to JavaScript to display it
        echo "<script>
                    alert('$alertMessage');
                    window.location.href = 'logout.php'; // Redirect to logout page
      </script>";
    }
    else 
    {
        // Construct the SQL query to insert user data into the database
        $sql = "INSERT INTO logout (name, email, review, ratings) VALUES ('$name', '$email', '$review', '$ratings')";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) 
        {
            // Success, prepare JavaScript code to redirect to logout page
            $redirectMessage = "Review submitted successfully.";
            echo "<script>
                    alert('$redirectMessage');
                    window.location.href = 'login.php'; // Redirect to logout page
                  </script>";
            // Stop further execution of PHP code
            exit();
        }
        else 
        {
            // Error in SQL query, display error message
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>
